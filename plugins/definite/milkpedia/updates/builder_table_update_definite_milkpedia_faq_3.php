<?php namespace Definite\Milkpedia\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteMilkpediaFaq3 extends Migration
{
    public function up()
    {
        Schema::table('definite_milkpedia_faq', function($table)
        {
            $table->text('meta_description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('definite_milkpedia_faq', function($table)
        {
            $table->dropColumn('meta_description');
        });
    }
}
