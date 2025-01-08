<?php namespace Leverate\Ramadan\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableCreateLeverateRamadanProductsCategory extends Migration
{
    public function up()
    {
        Schema::create('leverate_ramadan_products_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('leverate_ramadan_products_category');
    }
}
