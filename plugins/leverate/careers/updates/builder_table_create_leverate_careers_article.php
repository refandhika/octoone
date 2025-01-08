<?php namespace Leverate\Careers\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableCreateLeverateCareersArticle extends Migration
{
    public function up()
    {
        Schema::create('leverate_careers_article', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('leverate_careers_article');
    }
}
