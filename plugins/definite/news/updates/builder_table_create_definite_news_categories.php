<?php

namespace Definite\News\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteNewsCategories extends Migration
{
    public function up()
    {
        Schema::create('definite_news_categories', function ($table) {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned();
            $table->string('title', 255)->nullable();
            $table->text('slug');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_news_categories');
    }
}
