<?php namespace Definite\News\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteNewsAniversary extends Migration
{
    public function up()
    {
        Schema::table('definite_news_aniversary', function($table)
        {
            $table->boolean('checkbox')->nullable();
            $table->boolean('status')->nullable();
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('definite_news_aniversary', function($table)
        {
            $table->dropColumn('checkbox');
            $table->dropColumn('status');
            $table->increments('id')->unsigned()->change();
        });
    }
}
