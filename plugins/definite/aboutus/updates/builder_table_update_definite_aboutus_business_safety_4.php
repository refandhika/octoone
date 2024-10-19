<?php namespace Definite\Aboutus\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteAboutusBusinessSafety4 extends Migration
{
    public function up()
    {
        Schema::table('definite_aboutus_business_safety', function($table)
        {
            $table->text('attachment');
        });
    }
    
    public function down()
    {
        Schema::table('definite_aboutus_business_safety', function($table)
        {
            $table->dropColumn('attachment');
        });
    }
}
