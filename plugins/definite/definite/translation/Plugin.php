<?php

namespace Definite\Translation;

use Session;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public static $messages = null;

    public function boot()
    {
        if (static::$messages !== null) {
            return;
        }

        static::$messages = Models\Message::all();
    }

    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function registerMarkupTags()
    {
        return [
            'filters' => [
                'trans' => [$this, 'trans'],
            ],
            'functions' => [
                'lang' => function () {
                    return Session::get('lang', 'id');
                },
                'dd' => function () {
                    dd(func_get_args());
                }
            ],
        ];
    }

    public function trans($key)
    {
        $lang = Session::get('lang', 'id');
        $message = static::$messages->first(function ($message) use ($key) {
            return $message->key === $key;
        });

        if (null === $message) {
            return $key;
        }

        return ('en' === $lang) ? $message->value_en : $message->value_id;
    }
}
