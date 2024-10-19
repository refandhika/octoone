<?php

namespace Definite\Ourpurposes\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteOurpurposesNutritonSeanuts extends Migration
{
    public function up()
    {
        Schema::create('definite_ourpurposes_nutriton_seanuts', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 25);
            $table->text('description');
            $table->text('file_upload');
            $table->text('image');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->timestamp('deleted_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_ourpurposes_nutriton_seanuts');
    }
}
