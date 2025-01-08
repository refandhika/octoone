<?php namespace RainLab\User\Updates;

use Illuminate\Database\Migrations\Migration;
use DbDongle;

class UpdateTimestampsNullable extends Migration
{
    public function up()
    {
        DbDongle::disableStrictMode();

        DbDongle::convertTimestamps('users');
        DbDongle::convertTimestamps('user_groups');
        DbDongle::convertTimestamps('rainlab_user_mail_blockers');
    }

    public function down()
    {
        // ...
    }
}
