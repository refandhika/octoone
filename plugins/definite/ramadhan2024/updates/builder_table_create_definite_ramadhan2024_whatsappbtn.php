<?php namespace Definite\Ramadhan2024\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteRamadhan2024Whatsappbtn extends Migration
{
    public function up()
    {
        Schema::create('definite_ramadhan2024_whatsappbtn', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 255);
            $table->string('icon', 255);
            $table->string('link', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('definite_ramadhan2024_whatsappbtn');
    }
}
