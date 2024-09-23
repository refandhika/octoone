<?php namespace Definite\Milkpedia\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteMilkpediaPost7 extends Migration
{
    public function up()
    {
        Schema::table('definite_milkpedia_post', function($table)
        {
            $table->integer('products_id');
        });
    }
    
    public function down()
    {
        Schema::table('definite_milkpedia_post', function($table)
        {
            $table->dropColumn('products_id');
        });
    }
}
