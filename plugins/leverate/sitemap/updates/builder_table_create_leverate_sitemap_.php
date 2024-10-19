<?php namespace Leverate\Sitemap\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableCreateLeverateSitemap extends Migration
{
    public function up()
    {
/*        Schema::create('leverate_sitemap_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('slug');
            $table->string('priority');
            $table->string('change_frequency');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });*/
    }
    
    public function down()
    {
        Schema::dropIfExists('leverate_sitemap_');
    }
}
