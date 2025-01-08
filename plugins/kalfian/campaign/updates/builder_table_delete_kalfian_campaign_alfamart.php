<?php namespace Kalfian\Campaign\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

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
