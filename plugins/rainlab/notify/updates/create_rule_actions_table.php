<?php namespace RainLab\Notify\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRuleActionsTable extends Migration
{
    public function up()
    {
        Schema::create('rainlab_notify_rule_actions', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('class_name')->nullable();
            $table->mediumText('config_data')->nullable();
            $table->integer('rule_host_id')->unsigned()->nullable()->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rainlab_notify_rule_actions');
    }
}
