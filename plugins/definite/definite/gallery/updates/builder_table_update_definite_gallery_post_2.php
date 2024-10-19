<?php namespace Definite\Gallery\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteGalleryPost2 extends Migration
{
    public function up()
    {
        Schema::table('definite_gallery_post', function($table)
        {
            $table->date('published_date');
        });
    }
    
    public function down()
    {
        Schema::table('definite_gallery_post', function($table)
        {
            $table->dropColumn('published_date');
        });
    }
}
