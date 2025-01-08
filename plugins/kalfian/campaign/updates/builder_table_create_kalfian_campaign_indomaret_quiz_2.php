<?php namespace Kalfian\Campaign\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableCreateKalfianCampaignIndomaretQuiz2 extends Migration
{
    public function up()
    {
        Schema::create('kalfian_campaign_indomaret_quiz', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('jumlah');
            $table->text('alasan');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kalfian_campaign_indomaret_quiz');
    }
}
