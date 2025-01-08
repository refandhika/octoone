<?php namespace Leverate\Careers\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableDeleteLeverateCareersCareer extends Migration
{
    public function up()
    {
        Schema::dropIfExists('leverate_careers_career');
    }
    
    public function down()
    {
        Schema::create('leverate_careers_career', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('career_name', 255);
        });
    }
}
