<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGoogleAccessTokenToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('gcalendar_access_token')->nullable();
            $table->text('gcalendar_refresh_token')->nullable();
            $table->text('gcalendar_user_account_info')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('gcalendar_access_token')->nullable();
            $table->dropColumn('gcalendar_refresh_token')->nullable();
            $table->dropColumn('gcalendar_user_account_info')->nullable();
        });
    }
}
