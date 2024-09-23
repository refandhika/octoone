<?php namespace Kalfian\Campaign\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteKalfianCampaignIndomaretQuiz extends Migration
{
    public function up()
    {
        Schema::dropIfExists('kalfian_campaign_indomaret_quiz');
    }
    
    public function down()
    {
        Schema::create('kalfian_campaign_indomaret_quiz', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->integer('user_id');
            $table->integer('jumlah');
            $table->text('alasan');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
