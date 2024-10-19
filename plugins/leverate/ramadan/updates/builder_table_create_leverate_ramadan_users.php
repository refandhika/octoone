<?php namespace Leverate\Ramadan\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableCreateLeverateRamadanUsers extends Migration
{
    public function up()
    {
/*        Schema::create('leverate_ramadan_users', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('no_hp', 12)->nullable();
            $table->string('email', 100)->nullable();
            $table->integer('product_category_id')->unsigned();
            $table->string('gender', 20)->nullable();
            $table->string('kode_kupon', 100)->nullable();
            $table->dateTime('tgl_redeem')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });*/
    }
    
    public function down()
    {
        Schema::dropIfExists('leverate_ramadan_users');
    }
}
