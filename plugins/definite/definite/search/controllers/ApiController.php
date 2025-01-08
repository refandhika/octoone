<?php
/**
 * @copyright (C) 2018, PT. DEFINITE MAJI ARSANA
 * @author Nurimansyah Rifwan <iman@definite.co.id>
 */
namespace Definite\Search\Controllers;

use \Response;
use \Request;
use \Db;
use \Illuminate\Pagination\LengthAwarePaginator;
use \Backend\Classes\Controller;
use GuzzleHttp\Client;

// Models
use \Definite\Products\Models\Product;
use \Definite\Milkpedia\Models\Milkpedia;
use \Definite\Milkpedia\Models\Category as MilkpediaCategory;
use \Definite\Activities\Models\Activity;
use \Definite\Activities\Models\Category;
use \Definite\News\Models\News;
use \Definite\Pressrelease\Models\PressRelease;

// static search

//versi get content
use Cms\Classes\Theme;
use Cms\Classes\Layout;
use Cms\Classes\Page;
use \RainLab\Pages\Classes\PageList;
use Sunra\PhpSimple\HtmlDomParser;

//versi dump data
use \Definite\Search\Helpers\ListStaticPages;

// Begin Class
class ApiController extends Controller
{
    /*
    private function searchStaticPages($query){
        $blackList = [
            '/aktivitas-kami/:category-slug/:slug',
            '/aktivitas-kami/promo-alfamart/login',
            '/aktivitas-kami/promo-alfamart/terima-kasih',
            '/aktivitas-kami/promo-alfamart/daftar',
            '/aktivitas-kami/promo-alfamart/main',
            '/aktivitas-kami/:slug/galeri',
            '/aktivitas-kami/:slug',
            '/aktivitas-kami/promo-indomaret/daftar',
            '/aktivitas-kami/promo-indomaret/main',
            '/aktivitas-kami/promo-indomaret/terima-kasih',
            '/aktivitas-kami/promo-indomaret/login',
            '/aktivitas-kami/promo-indomaret/pemenang',
            '/aktivitas-kami/sluurprise'
        ];

        $currentTheme = Theme::getEditTheme();
        $prefix = "/aktivitas-kami";

        $listPages = [];

        //list pages from october cms
        $cmsPages = Page::listInTheme($currentTheme, true);
        foreach ($cmsPages as $page) {
            if (strpos($page->url, $prefix) === 0 && ! in_array($page->url, $blackList) && ! isset($listPages[$page->url])) {
                $listPages[$page->url] = $page;
            }
        }

        //list pages from rainlab pages (content/static-page)
        $rainLabPageList = new PageList($currentTheme);
        $rainlabStaticPages = $rainLabPageList->listPages();
        foreach ($rainlabStaticPages as $page) {            
            if (strpos($page->url, $prefix) === 0 && ! in_array($page->url, $blackList) && ! isset($listPages[$page->url])) {
                $listPages[$page->url] = $page;
            }
        }

        $foundItems = collect();
        
        $client = new Client(['base_uri' => url('/')]);
        foreach ($listPages as $page) {
            $res = $client->request('GET', $page->url);
            if($htmlContent = $res->getBody()){
                $parseContent = HTMLDomParser::str_get_html($htmlContent)->find('#main-section');

                if(count($parseContent)){
                    $content = $parseContent[0];
                    // $content = strip_tags($parseContent[0]);
                    // $content = preg_replace('/\s+/', ' ',$content);

                    if(strpos($page->title, $query) !== false || strpos($content, $query) !== false){

                        $item = new PressRelease;
                        $item->title = $page->title;
                        $item->mainContent = $content;
                        $item->url = $page->url;
                        $item->type = "activity_static";
                        $foundItems->push($item);
                    }
                }
            }
        }

        return $foundItems;
    }
    */

    private function searchStaticPagesV2($query){
        $foundItems = collect();

        foreach (ListStaticPages::$list as $page) {
            if(strpos(strtolower($page['title']), $query) !== false || strpos( strtolower($page[
                'content']), $query) !== false){

                $item = new PressRelease;
                $item->title = $page['title'];
                $item->mainContent = $page['content'];
                $item->url = $page['url'];
                $item->type = "activity_static";
                $foundItems->push($item);
            }
        }

        return $foundItems;
    }

    // Get Friso Data
    public function getFriso()
    {
        // Get Query
        $query = urlencode(Request::input('q'));

        // API Endpoint
        $endpoint = 'https://www.friso.co.id/api/v1/';

        // Set client
        $client = new Client();
        $res = $client->request('GET', $endpoint . 'search', ['query' => ['keyword' => $query]]);

        // Map Data
        $data = json_decode((String) $res->getBody());
        $data = array_map(function($item) use ($query) {

            // Limit Description
            $item->description = str_limit($item->description, 300);

            // Highlight Title and main content
            if ($query && !empty($query))
            {
                $item->title = preg_replace('/('.$query.')/i', '<mark>${1}</mark>', $item->title);
                $item->description = preg_replace('/('.$query.')/i', '<mark>${1}</mark>', $item->description);
            }

            // Return
            return $item;
        }, $data);

        // Return
        return Response::json($data);
    }

    // Get Ibu dan Balita Data
    public function getIDB()
    {
        // Get Query
        $query = urlencode(Request::input('q'));

        // API Endpoint
        $endpoint = 'https://www.ibudanbalita.com/api/v1/';

        // Set client
        $client = new Client();
        $res = $client->request('GET', $endpoint . 'search', ['query' => ['q' => $query]]);

        // Map Data
        $data = json_decode((String) $res->getBody());
        $data->results = array_map(function($item) use ($query) {
            // Highlight Title and main content
            if ($query && !empty($query))
            {
                $query = filter_var($query, FILTER_SANITIZE_STRING);
                $title = @preg_replace('/('.$query.')/i', '<mark>${1}</mark>', $item->title);
                $description = @preg_replace('/('.$query.')/i', '<mark>${1}</mark>', $item->description);

                // Check if title and description has a value
                if ($title && $description)
                {
                    $item->title = $title;
                    $item->description = $description;
                }
            }

            // Return
            return $item;
        }, $data->results);

        // Return
        return Response::json($data);
    }

    // Get all Data
    public function getAll()
    {
        // Get Query
        $query = urlencode(Request::input('q'));
        if (empty(trim($query))) $query = 'NOTAVAILABLE';
        $page = Request::input('page', 1);
        $type = Request::input('type', 'all');

        $query = urldecode($query);

        // Get Product
        $products = Product::select(Db::raw('id, title, slug, content as mainContent, "product" as type'))
            ->where('published', TRUE)
            ->where('title', 'like', '%'. $query .'%')
            ->orWhere('content', 'like', '%'. $query .'%');

        // Get Milkpedia
        $milkpedias = Milkpedia::select(Db::raw('id, title, slug, excerpt as mainContent, "milkpedia" as type'))
            ->where('published', TRUE)
            ->where('title', 'like', '%'. $query .'%')
            ->orWhere('content', 'like', '%'. $query .'%');

        // Get Activity
        $activities = Activity::select(Db::raw('id, title, slug, description as mainContent, "activity" as type'))
            ->where('published', TRUE)
            ->where('title', 'like', '%'. $query .'%')
            ->orWhere('description', 'like', '%'. $query .'%');

        // Get News
        $news = News::select(Db::raw('id, title, slug, description as mainContent, "news" as type'))
            ->where('title', 'like', '%'. $query .'%')
            ->orWhere('description', 'like', '%'. $query .'%');

        // Get Press Release
        $press = PressRelease::select(Db::raw('id, title, slug, description as mainContent, "press" as type'))
            ->where('published_status', 'Yes')
            ->where('title', 'like', '%'. $query .'%')
            ->orWhere('description', 'like', '%'. $query .'%');

        // Union
        $unions = $press
            ->union($products)
            ->union($milkpedias)
            ->union($activities)
            ->union($news)
            ->get();

        $unions = $this->searchStaticPagesV2($query)->merge($unions);

        // Map
        $unions = $unions->map(function($item) use ($query) {

            // Strip Tags
            $item->mainContent = strip_tags($item->mainContent);

            // Highlight Title and main content
            if ($query && !empty($query))
            {
                $item->title = preg_replace('/('.$query.')/i', '<mark>${1}</mark>', $item->title);
                $item->mainContent = preg_replace('/('.$query.')/i', '<mark>${1}</mark>', $item->mainContent);
            }

            // Limit
            $item->title = str_limit($item->title, 100);
            $item->mainContent = str_limit($item->mainContent, 300);

            // echo $item->title." ==> ".$item->type.'<br>';

            // Url
            switch ($item->type)
            {
                case 'press':
                    $item->url = '/perusahaan-kami/siaran-pers/' . $item->slug;
                break;
                case 'product':
                    // Category
                    $relation = Db::table('definite_products_products_categories')->where('product_id', $item->id)->first();
                    $category = $relation ? MilkpediaCategory::find($relation->category_id) : NULL;

                    // URL
                    $item->url = $category ? '/produk/' . $category->slug . '/' . $item->slug : '#';
                break;
                case 'milkpedia':
                    // Category
                    $relation = Db::table('definite_milkpedia_posts_categories')->where('milkpedia_id', $item->id)->first();
                    $category = $relation ? MilkpediaCategory::find($relation->category_id) : NULL;

                    // URL
                    $item->url = $category ? '/milkpedia/' . $category->slug . '/' . $item->slug : '#';
                break;
                case 'news':
                    $item->url = '/perusahaan-kami/berita/' . $item->slug;
                break;
                case 'activity':
                    // Get Category ID
                    $relation = Db::table('definite_activities_categories_activities')->where('activity_id', $item->id)->first();
                    $category = Category::find($relation->category_id); 

                    // URL
                    $item->url = $category ? '/aktivitas-kami/'. $category->slug .'/' . $item->slug : '#';
                break;
                case 'activity_static':
                    $item->type = 'activity';
                break;
            }

            // Return
            return $item;

        });

        // Filter for non empty title
        $unions = $unions->filter(function($item) {
            return (!empty($item->title) && !empty($item->mainContent));
        });

        // Filter Type
        $unions = $unions->filter(function($item) use ($type) {
            // Switch type
            switch ($type)
            {
                case 'produk': return $item->type == 'product'; break;
                case 'milkpedia': return $item->type == 'milkpedia'; break;
                case 'aktifitas': return $item->type == 'activity'; break;
                case 'berita': return $item->type == 'news'; break;
                case 'press': return $item->type == 'press'; break;
                default: return true;
            }
        });

        // Pagination
        $slice = $unions->slice(10 * ($page - 1), 10);
        $result = new LengthAwarePaginator($slice, count($unions), 10);
        $result->setPath('/api/v1/search');
        if ($query) $result->appends(['q' => $query]);
        
        // Return
        return Response::json($result);
    }

}