<?php

namespace Definite\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteDefiniteNews extends Migration
{
    public function up()
    {
        Schema::dropIfExists('definite_news_');
    }

    public function down()
    {
        Schema::create('definite_news_', function ($table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id')->unsigned();
            $table->text('title');
            $table->text('content');
            $table->timestamp('created_at')->default('0000-00-00 00:00:00');
            $table->timestamp('updated_at')->default('0000-00-00 00:00:00');
        });
    }
}
