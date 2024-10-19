<?php namespace Definite\Activities\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteActivitiesLikeHistory extends Migration
{
    public function up()
    {
        Schema::table('definite_activities_like_history', function($table)
        {
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('definite_activities_like_history', function($table)
        {
            $table->dropColumn('updated_at');
        });
    }
}
