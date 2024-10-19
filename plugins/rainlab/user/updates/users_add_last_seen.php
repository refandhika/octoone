<?php namespace RainLab\User\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use RainLab\User\Models\User;

class UsersAddLastSeen extends Migration
{
    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->timestamp('last_seen')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function($table)
        {
            $table->dropColumn('last_seen');
        });
    }
}
