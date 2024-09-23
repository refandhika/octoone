<?php
namespace Definite\Activities\Components;

use Cms\Classes\ComponentBase;
use Input;
use DB;
use Definite\Activities\Models\Category;

class Categories extends ComponentBase
{
    
    public function componentDetails()
    {
        return [
            'name'        => 'Categories',
            'description' => 'Categories of Activities',
        ];
    }

    public function onRun()
    {
         $this->gallery = $this->filterGallery();
        /**
         * Executed when this component is rendered on a page or layout.
        */
    }

    public function published()
    {
        return $this->records = Category::published()->get();
    }

    public function getChild($slug)
    {
        return Category::whereHas('parent', function ($q) use ($slug)
        {
            $q->where('slug', '=', $slug);
        })->get();
    }

    protected function filtergallery(){

        $year = Input::get('year');
        $slug = Input::get('slug');

        $query = Category::all();

        if($slug == "gerakan-nusantara" && $year)
        {
                $data = Category::where('slug',$slug)
                ->pluck('image_gallery');
                
                foreach ($data as $key => $value) {
                    if ($value['dropdown1'] == $year) {
                        $query[] = $value;
                    }
                }
                dd($query);
               return $query;
        }       

        return $query;
    }

    public $gallery;

}
