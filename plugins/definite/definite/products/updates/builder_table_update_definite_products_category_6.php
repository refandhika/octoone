<?php namespace Definite\Products\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteProductsCategory_6 extends Migration
{
    public function up()
    {
        Schema::table('definite_products_category', function($table)
        {
            $table->text('additional_tags')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('definite_products_category', function($table)
        {
            $table->dropColumn('additional_tags');
        });
    }
}
