<?php namespace RainLab\User\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class UsersRenameLoginToUsername extends Migration
{

    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->renameColumn('login', 'username');
        });
    }

    public function down()
    {
        Schema::table('users', function($table)
        {
            $table->renameColumn('username', 'login');
        });
    }

}
