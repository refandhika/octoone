<?php namespace Kalfian\ExtendsUser\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

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
