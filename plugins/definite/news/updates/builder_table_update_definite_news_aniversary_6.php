<?php namespace Definite\News\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteNewsAniversary6 extends Migration
{
    public function up()
    {
        Schema::table('definite_news_aniversary', function($table)
        {
            $table->string('pilar', 100)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('definite_news_aniversary', function($table)
        {
            $table->dropColumn('pilar');
        });
    }
}
