<?php

namespace Definite\Ourpurposes\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableCreateDefiniteOurpurposesLocalDdp extends Migration
{
    public function up()
    {
        Schema::create('definite_ourpurposes_local_ddp', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 255)->nullable();
            $table->text('description')->nullable();
            $table->text('file_upload')->nullable();
            $table->text('image')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_ourpurposes_local_ddp');
    }
}
