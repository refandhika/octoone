<?php namespace BenFreke\MenuManager\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class AddLinkTargetField extends Migration
{

    public function up()
    {
        Schema::table('benfreke_menumanager_menus', function($table)
        {
            $table->string('link_target')->default('_self');
        });
    }

    public function down()
    {
        Schema::table('benfreke_menumanager_menus', function($table)
        {
            $table->dropColumn(array('link_target'));
        });
    }

}
