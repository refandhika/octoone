<?php namespace Definite\Translation\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteTranslationMessages3 extends Migration
{
    public function up()
    {
        Schema::table('definite_translation_messages', function($table)
        {
            $table->text('value_id')->nullable(false)->unsigned(false)->default(null)->change();
            $table->text('value_en')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('definite_translation_messages', function($table)
        {
            $table->string('value_id', 255)->nullable(false)->unsigned(false)->default(null)->change();
            $table->string('value_en', 255)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
