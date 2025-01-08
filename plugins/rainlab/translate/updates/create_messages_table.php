<?php namespace RainLab\Translate\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{

    public function up()
    {
        Schema::create('rainlab_translate_messages', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('code')->index()->nullable();
            $table->mediumText('message_data')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rainlab_translate_messages');
    }

}
