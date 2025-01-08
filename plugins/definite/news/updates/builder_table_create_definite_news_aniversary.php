<?php namespace Definite\News\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableCreateDefiniteNewsAniversary extends Migration
{
    public function up()
    {
        Schema::create('definite_news_aniversary', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nama_pengirim', 100)->nullable();
            $table->string('nama_kandidat', 100)->nullable();
            $table->string('nomor_telepon_pengirim', 20)->nullable();
            $table->string('nomor_telepon_kandidat', 20)->nullable();
            $table->text('alamat_pengirim')->nullable();
            $table->text('alamat_kandidat')->nullable();
            $table->string('narasi', 100)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('photo')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('definite_news_aniversary');
    }
}
