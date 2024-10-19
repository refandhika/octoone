<?php namespace Definite\Aboutus\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteAboutusLogo extends Migration
{
    public function up()
    {
        Schema::rename('definite_aboutus_logohistory', 'definite_aboutus_logo');
    }
    
    public function down()
    {
        Schema::rename('definite_aboutus_logo', 'definite_aboutus_logohistory');
    }
}
