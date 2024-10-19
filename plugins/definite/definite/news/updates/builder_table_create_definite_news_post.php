<?php

namespace Definite\News\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteNewsPost extends Migration
{
    public function up()
    {
        Schema::create('definite_news_post', function ($table) {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned();
            $table->string('title', 255)->nullable();
            $table->text('slug');
            $table->text('description')->nullable();
            $table->text('featured_image')->nullable();
            $table->text('published_status')->nullable();
            $table->date('published_date')->nullable();
            $table->text('meta_seo_title')->nullable();
            $table->text('meta_seo_descripztion')->nullable();
            $table->text('meta_seo_keyword')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_news_post');
    }
}
