<?php namespace Definite\News\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteNewsAniversary2 extends Migration
{
    public function up()
    {
        Schema::table('definite_news_aniversary', function($table)
        {
            $table->string('checkbox', 5)->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('definite_news_aniversary', function($table)
        {
            $table->boolean('checkbox')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
