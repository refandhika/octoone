<?php namespace Definite\Ramadhan2024\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteRamadhan2024Article extends Migration
{
    public function up()
    {
        Schema::create('definite_ramadhan2024_article', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('article_slug', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('definite_ramadhan2024_article');
    }
}
