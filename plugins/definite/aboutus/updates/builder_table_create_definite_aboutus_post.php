<?php

namespace Definite\Aboutus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteAboutusPost extends Migration
{
    public function up()
    {
        Schema::create('definite_aboutus_post', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 255)->nullable();
            $table->text('description')->nullable();
            $table->text('friesland')->nullable();
            $table->text('flag')->nullable();
            $table->text('meta_seo_title')->nullable();
            $table->text('meta_seo_description')->nullable();
            $table->text('meta_seo_keyword')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_aboutus_post');
    }
}
