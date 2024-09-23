<?php

namespace Definite\Localization;

use Illuminate\Support\Str;
use System\Classes\PluginBase;
use Illuminate\Support\Fluent;
use RainLab\Pages\Classes\Page;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Support\Arrayable;
use RainLab\Translate\Classes\Translator;

class Plugin extends PluginBase
{
    protected static $translations;

    public function boot()
    {
        Models\Translation::observe(Classes\TranslationObserver::class);

        $fromCache = Cache::rememberForever('definite_localization_translations', function () {
            return Schema::hasTable('definite_localization_translations')
                ? Models\Translation::all()->keyBy('key')->toArray()
                : [];
        });

        static::$translations = Collection::make($fromCache);
    }

    public function registerMarkupTags()
    {
        return [
            'filters' => [
                'trans' => function (string $key): string {
                    $model = static::$translations->get($key);
                    $default = Str::title(str_replace('-', ' ', $key));

                    if (null === $model) {
                        return $default;
                    }

                    $model = new Fluent($model);

                    return ('en' == Session::get('lang', 'id'))
                        ? $model->get('trans_en', $default)
                        : $model->get('trans_id', $default);
                },
                'strip_tags' => function (string $string): string {
                    return strip_tags($string);
                },
                'lowercase' => function (string $string): string {
                    return mb_strtolower($string);
                },
                'uppercase' => function (string $string): string {
                    return mb_strtoupper($string);
                },
                'ucfirst' => function (string $string): string {
                    return ucfirst($string);
                }
            ],
            'functions' => [
                'lang' => function (): string {
                    return Session::get('lang', 'id') ?: 'id';
                },
                'collect' => function (array $array): Collection {
                    return Collection::make($array);
                },
                'trans_pick' => function ($model, string $key, string $default = ''): string {
                    
                    if (!$model) {
                        return '';
                    }

                    if ($model instanceof Arrayable && !$model instanceof Page) {
                        $model = $model->toArray();
                    }

                    $model = ($model instanceof Model || $model instanceof Page)
                        ? $model
                        : new Fluent((array) $model);

                    $translator = Translator::instance();
                    $lang = $translator->getLocale();

                    $picked = ('en' === $lang)
                        ? ($model[$key.'_en'] ?: ($model[$key.'_id'] ?: $model[$key]))
                        : ($model[$key.'_id'] ?: $model[$key]);

                    return $picked ?: $default;
                },
            ],
        ];
    }
}
