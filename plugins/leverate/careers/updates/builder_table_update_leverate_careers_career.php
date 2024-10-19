<?php namespace Leverate\Careers\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateLeverateCareersCareer extends Migration
{
    public function up()
    {
        Schema::table('leverate_careers_career', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('leverate_careers_career', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
