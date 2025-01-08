<?php namespace Mohsin\Txt\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class CreateInformationTable extends Migration
{

    public function up()
    {
        Schema::create('mohsin_txt_information', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('human_id')->default(0);
            $table->integer('position')->default(0);
            $table->string('field');
            $table->string('value');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mohsin_txt_information');
    }

}
