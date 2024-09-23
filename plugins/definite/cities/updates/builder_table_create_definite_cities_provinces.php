<?php namespace Definite\Cities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteCitiesProvinces extends Migration
{
    public function up()
    {
        Schema::create('definite_cities_provinces', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('province_name');
            $table->string('province_slug');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('definite_cities_provinces');
    }
}
