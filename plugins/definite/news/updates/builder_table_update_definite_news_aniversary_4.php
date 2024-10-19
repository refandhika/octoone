<?php namespace Definite\News\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteNewsAniversary4 extends Migration
{
    public function up()
    {
        Schema::table('definite_news_aniversary', function($table)
        {
            $table->string('email_kandidat', 900)->nullable();
            $table->string('email_pengirim', 900)->nullable();
            $table->string('narasi', 1500)->change();
        });
    }
    
    public function down()
    {
        Schema::table('definite_news_aniversary', function($table)
        {
            $table->dropColumn('email_kandidat');
            $table->dropColumn('email_pengirim');
            $table->string('narasi', 500)->change();
        });
    }
}
