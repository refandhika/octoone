<?php namespace Kalfian\Campaign\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKalfianCampaign extends Migration
{
    public function up()
    {
        Schema::create('kalfian_campaign_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('content');
            $table->string('button');
            $table->string('button_en');
            $table->text('button_url');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kalfian_campaign_');
    }
}
