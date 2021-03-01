<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusPortfolio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('profile_portfolios', function (Blueprint $table) {
            //

            $table->integer('status')->nullable()->after('profile_line');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('profile_portfolios', function (Blueprint $table) {
            //
            $table->dropColumn('status');

        });
    }
}
