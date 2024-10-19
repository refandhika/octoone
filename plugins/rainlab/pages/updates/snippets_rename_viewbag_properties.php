<?php

namespace RainLab\User\Updates;

use File;
use Illuminate\Database\Migrations\Migration;
use Cms\Classes\Theme;
use Cms\Classes\Partial;

class SnippetsRenameViewbagProperties extends Migration
{
    public function up()
    {
        $themes = Theme::all();
        foreach ($themes as $theme) {
            $partials = Partial::inTheme($theme)->all();
            foreach ($partials as $partial) {
                try {
                    $path = $partial->getFilePath();
                    $contents = File::get($path);
                    if (false === strpos($contents, 'staticPageSnippetCode')) {
                        continue;
                    }
                    $contents = str_replace('staticPageSnippetName', 'snippetName', $contents);
                    $contents = str_replace('staticPageSnippetCode', 'snippetCode', $contents);
                    $contents = str_replace('staticPageSnippetProperties', 'snippetProperties', $contents);
                    File::put($path, $contents);
                } catch (\Exception $ex) {
                    continue;
                }
            }
        }
    }

    public function down()
    {
    }
}
