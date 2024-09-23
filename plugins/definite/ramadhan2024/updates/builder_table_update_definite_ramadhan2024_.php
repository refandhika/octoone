<?php namespace Definite\Ramadhan2024\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteRamadhan2024 extends Migration
{
    public function up()
    {
        Schema::table('definite_ramadhan2024_', function($table)
        {
            $table->text('title');
            $table->text('description');
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('definite_ramadhan2024_', function($table)
        {
            $table->dropColumn('title');
            $table->dropColumn('description');
            $table->increments('id')->unsigned()->change();
        });
    }
}
