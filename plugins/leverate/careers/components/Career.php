<?php

namespace Leverate\Careers\Components;

use Cms\Classes\ComponentBase;
use Leverate\Careers\Models\Career as CareerSubMenu;

Class Career extends ComponentBase 
{

    public $submenus, $meta_description, $meta_keywords;

    public function componentDetails()
    {
        return [
            'name' => 'Career',
            'description' => 'ListSubMenuCareer',
        ];
    }

    public function onRun()
    {
        $this->submenus  = $this->loadSubMenu();
        $this->meta_description = "Berkarirlah bersama PT Frisian Flag Indonesia. Jika Anda memerlukan informasi karir di PT Fririsan Flag Indonesia halaman ini menyediakan informasi tersebut untuk Anda";
        $this->meta_keywords    = "pt frisian flag indonesia, pt frisian flag, karir frisian flag indonesia";
      
    }

    public function loadSubMenu()
    {
        return CareerSubMenu::where('is_enabled', 1)->get();
    }

}


