<?php namespace Definite\Aboutus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteAboutusAward7 extends Migration
{
    public function up()
    {
        Schema::table('definite_aboutus_award', function($table)
        {
            $table->string('title_en')->nullable();
            $table->text('description_en')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('definite_aboutus_award', function($table)
        {
            $table->dropColumn('title_en');
            $table->dropColumn('description_en');
        });
    }
}