<?php namespace Definite\Ramadhan2024\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteRamadhan2024Promo extends Migration
{
    public function up()
    {
        Schema::create('definite_ramadhan2024_promo', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('image');
            $table->text('content');
            $table->boolean('highlight');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('definite_ramadhan2024_promo');
    }
}
