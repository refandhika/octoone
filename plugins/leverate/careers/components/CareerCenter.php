<?php

namespace Leverate\Careers\Components;

use Cms\Classes\ComponentBase;
use Leverate\Careers\Models\CareerCenter as CareersCenter;
use Input;

Class CareerCenter extends ComponentBase 
{

    public $careers,$search;

    public function componentDetails()
    {
        return [
            'name' => 'CareerCenter',
            'description' => 'ListCareerCenter',
        ];
    }

    public function onRun()
    {
        $this->careers  = $this->loadSubMenu();
        $this->search   = $this->Search();
    }

    public function loadSubMenu()
    {
        return CareersCenter::where('is_enabled', 1)->orderBy('created_at','DESC')->get();
    }

    /**
     * get var career center 
     */
    
    public function onGetVar()
    {
        $keywords = post('keywords');
        $category = post('category');
        
        if($keywords && $category ==1){
            $items = CareersCenter::with(['category','regencies'])
            ->whereHas('regencies', function ($query) use ($keywords) {
                return $query->where('name', 'like', '%' . $keywords . '%')
                             ->Orwhere('title', 'like', '%' . $keywords . '%');})
            ->where('is_enabled', 1)
            ->orderBy('created_at','DESC')
            ->get();
        }elseif($category == 1){
            $items = CareersCenter::with(['category','regencies'])->where('is_enabled', 1)
            ->orderBy('created_at','DESC')
            ->get();
        }elseif($keywords){
            $items = CareersCenter::with(['category','regencies'])
            ->whereHas('regencies', function ($query) use ($keywords) {
                return $query->where('name', 'like', '%' . $keywords . '%')
                            ->Orwhere('title', 'like', '%' . $keywords . '%');})
            ->where('is_enabled', 1)
            ->Where('category_id', $category)
            ->orderBy('created_at','DESC')
            ->get();
        }else{
            $items = CareersCenter::with(['category','regencies'])
            ->where('is_enabled', 1)
            ->Where('category_id', $category)
            ->orderBy('created_at','DESC')
            ->get();
        }
     
        return response()->json(['items'=>$items]);

    }
     public function search()
    {
        $keywords = get('keywords');
        $category = get('category');
        
        if(empty($keywords) && empty($category))
        {
            return 'case-1';
        }

        if($keywords && $category ==1){
            $items = CareersCenter::with(['category','regencies'])
            ->whereHas('regencies', function ($query) use ($keywords) {
                return $query->where('name', 'like', '%' . $keywords . '%')
                             ->Orwhere('title', 'like', '%' . $keywords . '%');})
            ->where('is_enabled', 1)
            ->orderBy('created_at','DESC')
            ->get();
        }elseif($category == 1){
            $items = CareersCenter::with(['category','regencies'])->where('is_enabled', 1)
            ->orderBy('created_at','DESC')
            ->get();
        }elseif($keywords){
            $items = CareersCenter::with(['category','regencies'])
            ->whereHas('regencies', function ($query) use ($keywords) {
                return $query->where('name', 'like', '%' . $keywords . '%')
                            ->Orwhere('title', 'like', '%' . $keywords . '%');})
            ->where('is_enabled', 1)
            ->Where('category_id', $category)
            ->orderBy('created_at','DESC')
            ->get();
        }else{
            $items = CareersCenter::with(['category','regencies'])
            ->where('is_enabled', 1)
            ->Where('category_id', $category)
            ->orderBy('created_at','DESC')
            ->get();
        }

        $items = collect($items)->map(function ($name) {
                $name->regencies->name = strtolower($name->regencies->name);
                return $name;
            });

       if( count($items) == 0 ){
            return 'case-2';
       }else{
            return $items;
       }
    }

}


