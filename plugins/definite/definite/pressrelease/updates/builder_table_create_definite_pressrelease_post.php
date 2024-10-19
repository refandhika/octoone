<?php

namespace Definite\Pressrelease\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableCreateDefinitePressreleasePost extends Migration
{
    public function up()
    {
        Schema::create('definite_pressrelease_post', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('slug');
            $table->text('description')->nullable();
            $table->text('file_upload')->nullable();
            $table->date('published_date')->nullable();
            $table->text('published_status');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_pressrelease_post');
    }
}
