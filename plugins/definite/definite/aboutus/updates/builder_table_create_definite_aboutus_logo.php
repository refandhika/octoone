<?php namespace Definite\Aboutus\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableCreateDefiniteAboutusLogo extends Migration
{
    public function up()
    {
        Schema::create('definite_aboutus_logo', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255)->nullable();
            $table->text('file_upload')->nullable();
            $table->date('published_date')->nullable();
            $table->date('created_at')->nullable();
            $table->date('updated_at')->nullable();
            $table->date('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('definite_aboutus_logo');
    }
}
