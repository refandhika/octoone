<?php namespace Definite\Activities\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteActivitiesTop50grabfood extends Migration
{
    public function up()
    {
        Schema::create('definite_activities_top50grabfood', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('resep', 250)->nullable();
            $table->integer('k')->nullable();
            $table->integer('p')->nullable();
            $table->integer('l')->nullable();
            $table->integer('e')->nullable();
            $table->string('kalsium', 150)->nullable();
            $table->string('vitd', 20)->nullable();
            $table->string('vita', 20)->nullable();
            $table->string('gula', 20)->nullable();
            $table->string('betakaroten', 20)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('definite_activities_top50grabfood');
    }
}
