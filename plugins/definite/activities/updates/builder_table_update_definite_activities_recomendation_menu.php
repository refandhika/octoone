<?php namespace Definite\Activities\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteActivitiesRecomendationMenu extends Migration
{
    public function up()
    {
        Schema::table('definite_activities_recomendation_menu', function($table)
        {
            $table->text('tier_1');
            $table->text('tier_2');
            $table->text('tier_3');
            $table->text('tier_4');
            $table->text('tier_5');
        });
    }
    
    public function down()
    {
        Schema::table('definite_activities_recomendation_menu', function($table)
        {
            $table->dropColumn('tier_1');
            $table->dropColumn('tier_2');
            $table->dropColumn('tier_3');
            $table->dropColumn('tier_4');
            $table->dropColumn('tier_5');
        });
    }
}
