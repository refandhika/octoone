<?php namespace Mohsin\Txt\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class CreateRobotsTable extends Migration
{

    public function up()
    {
        Schema::create('mohsin_txt_robots', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('agent');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mohsin_txt_robots');
    }

}
