<?php namespace Definite\Aboutus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteAboutusBusinessSafety extends Migration
{
    public function up()
    {
        Schema::create('definite_aboutus_business_safety', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 255);
            $table->string('title_en', 255)->nullable();
            $table->text('description');
            $table->text('description_en')->nullable();
            $table->text('attachment');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('definite_aboutus_business_safety');
    }
}
