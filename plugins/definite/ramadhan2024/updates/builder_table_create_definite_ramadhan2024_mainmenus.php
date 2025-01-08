<?php namespace Definite\Ramadhan2024\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableCreateDefiniteRamadhan2024Mainmenus extends Migration
{
    public function up()
    {
        Schema::create('definite_ramadhan2024_mainmenus', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 255);
            $table->string('image', 255);
            $table->string('button_word', 255);
            $table->string('link', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('definite_ramadhan2024_mainmenus');
    }
}
