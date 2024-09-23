<?php namespace Kalfian\ExtendsUser\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddNewFieldSource extends Migration
{
    public function up()
    {
        Schema::table('users', function($table)
        {
           $table->string('source')->nullable();
        });
    } 
    
    public function down()
    {
        $table->dropDown([
            'source'
        ]);
    }
}
