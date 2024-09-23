<?php

namespace Definite\Aboutus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteAboutusAward extends Migration
{
    public function up()
    {
        Schema::create('definite_aboutus_award', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('file_upload')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_aboutus_award');
    }
}
