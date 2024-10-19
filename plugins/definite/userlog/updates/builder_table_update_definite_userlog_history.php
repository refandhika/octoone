<?php namespace Definite\UserLog\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteUserlogHistory extends Migration
{
    public function up()
    {
        Schema::table('definite_userlog_history', function($table)
        {
            $table->text('title');
            $table->text('section');
        });
    }
    
    public function down()
    {
        Schema::table('definite_userlog_history', function($table)
        {
            $table->dropColumn('title');
            $table->dropColumn('section');
        });
    }
}
