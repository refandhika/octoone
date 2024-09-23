<?php

namespace Definite\Localization\Classes;

use Illuminate\Support\Facades\Cache;

class TranslationObserver
{
    public function saved()
    {
        $this->removeCache();
    }

    public function deleted()
    {
        $this->removeCache();
    }

    protected function removeCache()
    {
        Cache::forget('definite_localization_translations');
    }
}
