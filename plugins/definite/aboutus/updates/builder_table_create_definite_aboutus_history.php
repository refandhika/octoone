<?php

namespace Definite\Aboutus\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableCreateDefiniteAboutusHistory extends Migration
{
    public function up()
    {
        Schema::create('definite_aboutus_history', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('file_upload')->nullable();
            $table->date('published_date')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_aboutus_history');
    }
}
