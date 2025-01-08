<?php namespace Definite\Activities\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableCreateDefiniteActivitiesActivityProduct extends Migration
{
    public function up()
    {
        Schema::create('definite_activities_activity_product', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('activity_id');
            $table->integer('product_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('definite_activities_activity_product');
    }
}
