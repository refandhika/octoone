<?php namespace Kalfian\Campaign\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKalfianCampaignIndomaretQuiz extends Migration
{
    public function up()
    {
        Schema::create('kalfian_campaign_indomaret_quiz', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->integer('user_id');
            $table->integer('jumlah');
            $table->text('alasan');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kalfian_campaign_indomaret_quiz');
    }
}
