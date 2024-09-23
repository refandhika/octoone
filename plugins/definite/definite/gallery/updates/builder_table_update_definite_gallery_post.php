<?php namespace Definite\Gallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteGalleryPost extends Migration
{
    public function up()
    {
        Schema::table('definite_gallery_post', function($table)
        {
            $table->text('picture');
        });
    }
    
    public function down()
    {
        Schema::table('definite_gallery_post', function($table)
        {
            $table->dropColumn('picture');
        });
    }
}
