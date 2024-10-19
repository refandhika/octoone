<?php

namespace Definite\Aboutus\Updates;

use October\Rain\Database\Updates\Migration;
use Illuminate\Support\Facades\Schema;

class BuilderTableDeleteDefiniteAboutus extends Migration
{
    public function up()
    {
        Schema::dropIfExists('definite_aboutus_');
    }

    public function down()
    {
        Schema::create('definite_aboutus_', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 255)->nullable();
            $table->text('slug');
            $table->text('description')->nullable();
            $table->text('publish_status')->nullable();
            $table->text('frisianland');
            $table->text('year_frisian_flag');
            $table->text('meta_seo_title')->nullable();
            $table->text('meta_seo_description')->nullable();
            $table->text('meta_seo_keyword')->nullable();
            $table->text('frisian_flag')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
}
