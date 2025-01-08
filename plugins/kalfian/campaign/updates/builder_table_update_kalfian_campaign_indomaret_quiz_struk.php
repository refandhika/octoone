<?php namespace Kalfian\Campaign\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateKalfianCampaignIndomaretQuizStruk extends Migration
{
    public function up()
    {
        Schema::rename('kalfian_campaign_quiz_struk', 'kalfian_campaign_indomaret_quiz_struk');
        Schema::table('kalfian_campaign_indomaret_quiz_struk', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::rename('kalfian_campaign_indomaret_quiz_struk', 'kalfian_campaign_quiz_struk');
        Schema::table('kalfian_campaign_quiz_struk', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
