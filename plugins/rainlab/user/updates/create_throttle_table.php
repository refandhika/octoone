<?php namespace RainLab\User\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class CreateThrottleTable extends Migration
{

    public function up()
    {
        Schema::create('user_throttle', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->string('ip_address')->nullable()->index();
            $table->integer('attempts')->default(0);
            $table->timestamp('last_attempt_at')->nullable();
            $table->boolean('is_suspended')->default(0);
            $table->timestamp('suspended_at')->nullable();
            $table->boolean('is_banned')->default(0);
            $table->timestamp('banned_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_throttle');
    }

}
