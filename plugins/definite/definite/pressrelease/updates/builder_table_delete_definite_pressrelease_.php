<?php

namespace Definite\Pressrelease\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteDefinitePressrelease extends Migration
{
    public function up()
    {
        Schema::dropIfExists('definite_pressrelease_');
    }

    public function down()
    {
        Schema::create('definite_pressrelease_', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255)->nullable();
            $table->text('slug');
            $table->text('description')->nullable();
            $table->text('featured_image')->nullable();
            $table->text('publish_status')->nullable();
            $table->text('meta_seo_title')->nullable();
            $table->text('meta_seo_description')->nullable();
            $table->text('meta_seo_keyword')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
}
