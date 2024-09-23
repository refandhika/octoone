<?php namespace Definite\UserLog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteUserlogHistory extends Migration
{
    public function up()
    {
        Schema::create('definite_userlog_history', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('username', 255);
            $table->text('url');
            $table->string('action');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('definite_userlog_history');
    }
}
