<?php namespace Definite\Ramadhan2024\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteRamadhan2024Whatsappbtn extends Migration
{
    public function up()
    {
        Schema::table('definite_ramadhan2024_whatsappbtn', function($table)
        {
            $table->string('btn_word', 255);
        });
    }
    
    public function down()
    {
        Schema::table('definite_ramadhan2024_whatsappbtn', function($table)
        {
            $table->dropColumn('btn_word');
        });
    }
}
