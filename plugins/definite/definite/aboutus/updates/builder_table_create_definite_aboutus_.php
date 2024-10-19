<?php

namespace Definite\Aboutus\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteAboutus extends Migration
{
    public function up()
    {
        Schema::create('definite_aboutus_', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 255)->nullable();
            $table->text('description');
            $table->date('meta_seo_date');
            $table->text('meta_seo_priview');
            $table->text('meta_seo_description');
            $table->text('meta_seo_keyword');
            $table->text('friesland_campina');
            $table->text('95_year_frisian');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_aboutus_');
    }
}
