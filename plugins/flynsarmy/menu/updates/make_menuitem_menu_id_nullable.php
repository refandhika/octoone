<?php

namespace Flynsarmy\Menu\Updates;

use DB;
use Illuminate\Database\Migrations\Migration;

class MakeMenuItemMenuIdNullable extends Migration
{
    public function up()
    {
        DB::statement('ALTER TABLE `flynsarmy_menu_menuitems` MODIFY `menu_id` INTEGER UNSIGNED NULL;');
    }

    public function down()
    {
        DB::statement('ALTER TABLE `flynsarmy_menu_menuitems` MODIFY `menu_id` INTEGER UNSIGNED NOT NULL;');
    }
}
