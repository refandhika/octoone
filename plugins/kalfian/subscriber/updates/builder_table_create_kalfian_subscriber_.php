<?php namespace Kalfian\Subscriber\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableCreateKalfianSubscriber extends Migration
{
    public function up()
    {
        Schema::create('kalfian_subscriber_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('email');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kalfian_subscriber_');
    }
}
