<?php namespace Definite\Gallery\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteGalleryPost3 extends Migration
{
    public function up()
    {
        Schema::table('definite_gallery_post', function($table)
        {
            $table->renameColumn('picture', 'caption');
        });
    }
    
    public function down()
    {
        Schema::table('definite_gallery_post', function($table)
        {
            $table->renameColumn('caption', 'picture');
        });
    }
}
