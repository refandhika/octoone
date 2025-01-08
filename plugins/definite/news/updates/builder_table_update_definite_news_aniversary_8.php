<?php namespace Definite\News\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteNewsAniversary8 extends Migration
{
    public function up()
    {
        Schema::table('definite_news_aniversary', function($table)
        {
            $table->string('narasi', 3500)->change();
        });
    }
    
    public function down()
    {
        Schema::table('definite_news_aniversary', function($table)
        {
            $table->string('narasi', 2500)->change();
        });
    }
}
