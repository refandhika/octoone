<?php namespace BenFreke\MenuManager\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class AddEnabledParametersQueryFields1 extends Migration
{

    public function up()
    {
        Schema::table('benfreke_menumanager_menus', function($table)
        {
            $table->integer('enabled')->default(1);
        });
    }

    public function down()
    {
        Schema::table('benfreke_menumanager_menus', function($table)
        {
            $table->dropColumn('enabled');
        });
    }

}
