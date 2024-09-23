<?php namespace Kalfian\Campaign\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKalfianCampaignAlfamart extends Migration
{
    public function up()
    {
        Schema::create('kalfian_campaign_alfamart', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kalfian_campaign_alfamart');
    }
}
