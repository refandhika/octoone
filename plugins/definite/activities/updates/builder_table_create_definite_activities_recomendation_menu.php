<?php namespace Definite\Activities\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableCreateDefiniteActivitiesRecomendationMenu extends Migration
{
    public function up()
    {
        Schema::create('definite_activities_recomendation_menu', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('periode_1')->nullable();
            $table->string('periode_2')->nullable();
            $table->string('periode_3')->nullable();
            $table->string('periode_4')->nullable();
            $table->string('periode_5')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('definite_activities_recomendation_menu');
    }
}
