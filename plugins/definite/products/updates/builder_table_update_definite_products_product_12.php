<?php namespace Definite\Products\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteProductsProduct_12 extends Migration
{
    public function up()
    {
        Schema::table('definite_products_product', function($table)
        {
            $table->text('additional_tags')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('definite_products_product', function($table)
        {
            $table->dropColumn('additional_tags');
        });
    }
}
