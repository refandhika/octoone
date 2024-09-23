<?php namespace Definite\Activities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteActivitiesDetailsbahan extends Migration
{
    public function up()
    {
        Schema::create('definite_activities_detailsbahan', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('resep', 255)->nullable();
            $table->integer('k')->nullable();
            $table->integer('p')->nullable();
            $table->integer('l')->nullable();
            $table->integer('e')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('definite_activities_detailsbahan');
    }
}
