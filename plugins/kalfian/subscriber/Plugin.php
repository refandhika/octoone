<?php namespace Kalfian\Subscriber;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Kalfian\Subscriber\Components\SubscriberForm' => 'subscriberform',
    	];
    }

    public function registerSettings()
    {
    }
}
