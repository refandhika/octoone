<?php

namespace RainLab\Location\Updates;

use Illuminate\Support\Facades\Schema;
use RainLab\Location\Models\Country;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCountryPinnedFlag extends Migration
{
    public function up()
    {
        Schema::table('rainlab_location_countries', function (Blueprint $table) {
            $table->boolean('is_pinned')->default(false);
        });

        Country::whereIn('code', ['AU', 'CA', 'GB', 'US'])->update(['is_pinned' => 1]);
    }

    public function down()
    {
        Schema::table('rainlab_location_countries', function (Blueprint $table) {
            $table->dropColumn('is_pinned');
        });
    }
}
