<?php namespace Definite\Ramadhan2024\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableCreateDefiniteRamadhan2024Banner extends Migration
{
    public function up()
    {
        Schema::create('definite_ramadhan2024_banner', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('title');
            $table->text('description');
            $table->string('link');
            $table->string('image');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('definite_ramadhan2024_banner');
    }
}
