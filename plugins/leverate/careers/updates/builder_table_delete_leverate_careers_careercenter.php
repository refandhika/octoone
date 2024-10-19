<?php namespace Leverate\Careers\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableDeleteLeverateCareersCareercenter extends Migration
{
    public function up()
    {
        Schema::dropIfExists('leverate_careers_careercenter');
    }
    
    public function down()
    {
        Schema::create('leverate_careers_careercenter', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->integer('category_id')->unsigned();
            $table->string('location', 255);
            $table->date('expired_date')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
