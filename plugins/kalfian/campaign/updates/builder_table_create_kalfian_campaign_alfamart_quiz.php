<?php namespace Kalfian\Campaign\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKalfianCampaignAlfamartQuiz extends Migration
{
    public function up()
    {
        Schema::create('kalfian_campaign_alfamart_quiz', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('user_id');
            $table->string('no_ponta');
            $table->text('alasan');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kalfian_campaign_alfamart_quiz');
    }
}
