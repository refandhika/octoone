<?php
namespace Definite\Activities\Components;

use Cms\Classes\ComponentBase;
use Input;
use DB;
use request; 

use Definite\Activities\Models\Gallery;

class FilterGallery extends ComponentBase
{
    
    public function componentDetails()
    {
        return [
            'name'        => 'Gallery',
            'description' => 'Gallery of Activities',
        ];
    }

    public function onRun()
    {
         $this->gallery = $this->filterGallery();
        /**
         * Executed when this component is rendered on a page or layout.
        */
    }

    protected function filtergallery(){


        $slug = Request::segment(2);
        $query = Gallery::where('slug',$slug)->first();

        return $query;
    }

    public $gallery;

}
