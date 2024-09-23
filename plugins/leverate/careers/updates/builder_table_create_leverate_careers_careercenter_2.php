<?php namespace Leverate\Careers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLeverateCareersCareercenter2 extends Migration
{
    public function up()
    {
        Schema::create('leverate_careers_careercenter', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->integer('category_id')->unsigned();
            $table->string('location');
            $table->date('expired_date');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('leverate_careers_careercenter');
    }
}
