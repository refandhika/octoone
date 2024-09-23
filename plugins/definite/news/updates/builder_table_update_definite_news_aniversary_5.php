<?php namespace Definite\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteNewsAniversary5 extends Migration
{
    public function up()
    {
        Schema::table('definite_news_aniversary', function($table)
        {
            $table->string('short_desc', 900)->nullable();
            $table->dropColumn('nomor_telepon_pengirim');
            $table->dropColumn('nomor_telepon_kandidat');
            $table->dropColumn('alamat_pengirim');
            $table->dropColumn('alamat_kandidat');
            $table->dropColumn('checkbox');
            $table->dropColumn('email_kandidat');
            $table->dropColumn('email_pengirim');
        });
    }
    
    public function down()
    {
        Schema::table('definite_news_aniversary', function($table)
        {
            $table->dropColumn('short_desc');
            $table->string('nomor_telepon_pengirim', 20)->nullable();
            $table->string('nomor_telepon_kandidat', 20)->nullable();
            $table->text('alamat_pengirim')->nullable();
            $table->text('alamat_kandidat')->nullable();
            $table->string('checkbox', 5)->nullable();
            $table->string('email_kandidat', 900)->nullable();
            $table->string('email_pengirim', 900)->nullable();
        });
    }
}
