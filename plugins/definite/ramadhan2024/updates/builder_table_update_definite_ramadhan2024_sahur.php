<?php namespace Definite\Ramadhan2024\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteRamadhan2024Sahur extends Migration
{
    public function up()
    {
        Schema::table('definite_ramadhan2024_sahur', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('definite_ramadhan2024_sahur', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
