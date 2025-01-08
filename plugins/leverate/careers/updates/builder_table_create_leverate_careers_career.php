<?php namespace Leverate\Careers\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableCreateLeverateCareersCareer extends Migration
{
    public function up()
    {
        Schema::create('leverate_careers_career', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('career_name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('leverate_careers_career');
    }
}
