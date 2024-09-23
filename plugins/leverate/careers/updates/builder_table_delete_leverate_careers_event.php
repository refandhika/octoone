<?php namespace Leverate\Careers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteLeverateCareersEvent extends Migration
{
    public function up()
    {
        Schema::dropIfExists('leverate_careers_event');
    }
    
    public function down()
    {
        Schema::create('leverate_careers_event', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->string('description', 255);
            $table->date('start_date');
            $table->date('end_date');
            $table->string('location', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
