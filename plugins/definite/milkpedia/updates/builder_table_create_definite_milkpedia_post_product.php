<?php namespace Definite\Milkpedia\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteMilkpediaPostProduct extends Migration
{
    public function up()
    {
        Schema::create('definite_milkpedia_post_product', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('post_id');
            $table->integer('product_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('definite_milkpedia_post_product');
    }
}
