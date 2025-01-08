<?php

use OFFLINE\SiteSearch\Classes\Providers\ResultsProvider;

class ProdukSearchProvider extends ResultsProvider
{
    public function search()
    {
        // Get your matching models
        $matching = \Definite\Products\Models\Product::where('title', 'like', "%{$this->query}%")
                                           ->orWhere('content', 'like', "%{$this->query}%")
                                           ->orWhere('slug', 'like', "%{$this->query}%")
                                           ->get();
        // Create a new Result for every match
        foreach ($matching as $match) {
            if (!$match->deleted_at) {
                $result = $this->newResult();
                $result->relevance = 1;
                $result->title = $match->title;
                $result->text = $match->content;
                $result->url = '/produk/'.$match->categories[0]->slug.'/'.$match->slug;
                $result->thumb = $match->image;
                $result->model = $match;
                // Add the results to the results collection
                $this->addResult($result);
            }
        }

        return $this;
    }

    public function displayName()
    {
        return 'Produk';
    }

    public function identifier()
    {
        // return 'VendorName.PluginName';
    }
}

class MilkpediaSearchProvider extends ResultsProvider
{
    public function search()
    {
        // Get your matching models
        $matching = \Definite\Milkpedia\Models\Milkpedia::where('title', 'like', "%{$this->query}%")
                                           ->orWhere('content', 'like', "%{$this->query}%")
                                            ->orWhere('slug', 'like', "%{$this->query}%")
                                           ->get();

        foreach ($matching as $match) {
            if (!$match->deleted_at) {
                $result = $this->newResult();
                $result->relevance = 1;
                $result->title = $match->title;
                $result->text = $match->content;
                $result->url = '/milkpedia/'.$match->categories[0]->slug.'/'.$match->slug;
                $result->thumb = $match->image;
                $result->model = $match;

                $this->addResult($result);
            }
        }

        return $this;
    }

    public function displayName()
    {
        return 'Milkpedia';
    }

    public function identifier()
    {
        // return 'VendorName.PluginName';
    }
}

class AktifitasSearchProvider extends ResultsProvider
{
    public function search()
    {
        // Get your matching models
        $matching = \Definite\Activities\Models\Activity::where('title', 'like', "%{$this->query}%")
                                           ->orWhere('description', 'like', "%{$this->query}%")
                                           ->orWhere('slug', 'like', "%{$this->query}%")
                                           ->get();
        if (count($matching) > 0) {
            // Create a new Result for every match
            foreach ($matching as $match) {
                if (!$match->deleted_at) {
                    $slug = $matching[0]->categories[0]->slug;
                    $result = $this->newResult();
                    $result->relevance = 1;
                    $result->title = $match->title;
                    $result->text = $match->description;
                    $result->url = '/aktifitas-kami/'.$slug.'/'.$match->slug;
                    $result->thumb = $match->image;
                    $result->model = $match;
                    // Add the results to the results collection
                    $this->addResult($result);
                }
            }
        }

        return $this;
    }

    public function displayName()
    {
        return 'Aktifitas';
    }

    public function identifier()
    {
        // return 'VendorName.PluginName';
    }
}

class BeritaSearchProvider extends ResultsProvider
{
    public function search()
    {
        // Get your matching models
        $matching = \Definite\News\Models\News::where('title', 'like', "%{$this->query}%")
                                           ->orWhere('description', 'like', "%{$this->query}%")
                                            ->orWhere('slug', 'like', "%{$this->query}%")
                                           ->get();
        // Create a new Result for every match
        foreach ($matching as $match) {
            $result = $this->newResult();
            $result->relevance = 1;
            $result->title = $match->title;
            $result->text = $match->description;
            $result->url = '/perusahaan-kami/berita/'.$match->slug;
            $result->thumb = $match->image;
            $result->model = $match;
            // Add the results to the results collection
            $this->addResult($result);
        }

        return $this;
    }

    public function displayName()
    {
        return 'Berita';
    }

    public function identifier()
    {
        // return 'VendorName.PluginName';
    }
}

class SiaranSearchProvider extends ResultsProvider
{
    public function search()
    {
        // Get your matching models
        $matching = \Definite\Pressrelease\Models\PressRelease::where('title', 'like', "%{$this->query}%")
                                            ->orWhere('slug', 'like', "%{$this->query}%")
                                           ->get();
        // Create a new Result for every match
        foreach ($matching as $match) {
            if (!$match->deleted_at) {
                $result = $this->newResult();
                $result->relevance = 1;
                $result->title = $match->title;
                // $result->text      = $match->content;
                $result->url = '/perusahaan-kami/siaran-pers/'.$match->slug;
                $result->thumb = $match->image;
                $result->model = $match;
                // Add the results to the results collection
                $this->addResult($result);
            }
        }

        return $this;
    }

    public function displayName()
    {
        return 'Siaran Pers';
    }

    public function identifier()
    {
        // return 'VendorName.PluginName';
    }
}

class TentangSearchProvider extends ResultsProvider
{
    public function search()
    {
        // Get your matching models
        $matching = Definite\Aboutus\Models\History::where('title', 'like', "%{$this->query}%")
                                           // ->orWhere('content', 'like', "%{$this->query}%")
                                           ->get();
        // Create a new Result for every match
        foreach ($matching as $match) {
            if (!$match->deleted_at) {
                $result = $this->newResult();
                $result->relevance = 1;
                $result->title = $match->title;
                // $result->text      = $match->content;
                $result->url = $match->url;
                $result->thumb = $match->image;
                $result->model = $match;
                // Add the results to the results collection
                $this->addResult($result);
            }
        }

        return $this;
    }

    public function displayName()
    {
        return 'Tentang Kami';
    }

    public function identifier()
    {
        // return 'VendorName.PluginName';
    }
}
