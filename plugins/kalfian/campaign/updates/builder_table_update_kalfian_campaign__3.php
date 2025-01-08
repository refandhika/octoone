<?php namespace Kalfian\Campaign\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateKalfianCampaign3 extends Migration
{
    public function up()
    {
        Schema::table('kalfian_campaign_', function($table)
        {
            $table->text('content_en');
            $table->text('title_en');
        });
    }
    
    public function down()
    {
        Schema::table('kalfian_campaign_', function($table)
        {
            $table->dropColumn('content_en');
            $table->dropColumn('title_en');
        });
    }
}
