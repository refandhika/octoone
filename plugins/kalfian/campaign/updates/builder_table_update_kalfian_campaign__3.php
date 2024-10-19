<?php namespace Kalfian\Campaign\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

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
