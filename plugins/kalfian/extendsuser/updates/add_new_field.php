<?php namespace Kalfian\ExtendsUser\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddNewField extends Migration
{
    public function up()
    {
        Schema::table('users', function($table)
        {
           $table->string('jk')->nullable();
           $table->string('tgl_lahir')->nullable();
           $table->string('telp')->nullable();
           $table->string('prof')->nullable();
           $table->string('kota')->nullable();
           $table->string('alamat')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('users', function($table)
        {
          $table->dropColumn([
              'jk',
              'tgl_lahir',
              'telp',
              'prof',
              'kota',
              'alamat'
          ]);
        });
    }
}
