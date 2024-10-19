<?php namespace Mohsin\Txt\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class CreateHumansTable extends Migration
{

    public function up()
    {
        Schema::create('mohsin_txt_humans', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('attribution');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mohsin_txt_humans');
    }

}
