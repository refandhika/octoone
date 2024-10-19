<?php namespace Definite\Cities\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteCitiesCities extends Migration
{
    public function up()
    {
        Schema::create('definite_cities_cities', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('province_id');
            $table->string('city_name');
            $table->string('city_slug');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('definite_cities_cities');
    }
}
