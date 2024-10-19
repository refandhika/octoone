<?php namespace Kalfian\Campaign\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKalfianCampaignQuizStruk extends Migration
{
    public function up()
    {
        Schema::create('kalfian_campaign_quiz_struk', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('quiz_id');
            $table->text('file_name');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kalfian_campaign_quiz_struk');
    }
}
