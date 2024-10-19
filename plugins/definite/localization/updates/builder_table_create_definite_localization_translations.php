<?php

namespace Definite\Localization\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableCreateDefiniteLocalizationTranslations extends Migration
{
    public function up()
    {
        Schema::defaultStringLength(191);

        Schema::create('definite_localization_translations', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('key');
            $table->text('trans_id')->nullable();
            $table->text('trans_en')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->unique('key', 'dlt_unique_key');
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_localization_translations');
    }
}
