<?php namespace Definite\Gallery\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteGalleryImage extends Migration
{
    public function up()
    {
        Schema::create('definite_gallery_image', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('id_post')->nullable();
            $table->text('picture');
            $table->text('caption');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('definite_gallery_image');
    }
}
