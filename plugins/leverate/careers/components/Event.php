<?php

namespace Leverate\Careers\Components;

use Cms\Classes\ComponentBase;
use Leverate\Careers\Models\Event as CareerEvent;

Class Event extends ComponentBase 
{

    public $events,$events_page,$page_slug;

    public function componentDetails()
    {
        return [
            'name' => 'Event',
            'description' => 'ListEvent',
        ];
    }

    public function onRun()
    {
        $this->events      = $this->loadSubMenu();
        $this->page_slug   = $this->param('slug');
        $this->events_page = $this->getRelated();
    }
    
    public function loadSubMenu()
    {
        return CareerEvent::where('is_enabled', 1)->orderBy('created_at','DESC')->get();
    }

    /**
     * tampilan event terkait
     *
     * @return event
     */
    public function getRelated()
    {
        return CareerEvent::where('is_enabled',1)->where('slug','!=', $this->param('slug'))->orderBy('created_at','DESC')->take(2)->get();
    }

    /**
     * check data event > 4
     *
     * @return event
     */
    public function onCheckVar(){

        $limit         = post('limit');
        $total         = count(CareerEvent::all());
        $event         = CareerEvent::where('is_enabled', 1)
        ->orderBy('created_at','DESC')
        ->skip($limit)
        ->take($total)
        ->get();

        $total         = count($event);

        if (count($event)> 0){
            return response()->json(['status'=>'1']);
        }else{
            return response()->json(['status'=>'2']);
        }
       
    }
    /**
     * tampilkan data event halaman event : 4
     *
     * @return event
     */
    public function onGetVar()
    {
       
        $base_url      = url('/karir/event/');
        $img_resource  = url('/storage/app/media/');

        $total_items   = count(CareerEvent::all());
        $event         = CareerEvent::where('is_enabled', 1)
                        ->orderBy('created_at','DESC')
                        ->skip(4)
                        ->take($total_items)
                        ->get();
        
        return response()->json(array(
            'items'         => $event,
            'total_items'   => $total_items,
            'base_url'      => $base_url,
            'img_resource'  => $img_resource,
        ));
    }

}


