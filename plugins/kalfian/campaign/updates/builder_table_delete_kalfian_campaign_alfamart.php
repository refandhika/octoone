<?php namespace Kalfian\Campaign\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteKalfianCampaignAlfamart extends Migration
{
    public function up()
    {
        Schema::dropIfExists('kalfian_campaign_alfamart');
    }
    
    public function down()
    {
        Schema::create('kalfian_campaign_alfamart', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
}
