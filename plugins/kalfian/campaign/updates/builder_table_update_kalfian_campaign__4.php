<?php namespace Kalfian\Campaign\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateKalfianCampaign4 extends Migration
{
    public function up()
    {
        Schema::table('kalfian_campaign_', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('kalfian_campaign_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
