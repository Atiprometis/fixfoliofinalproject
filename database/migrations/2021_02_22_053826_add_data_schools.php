<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDataSchools extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('schools', function (Blueprint $table) {
            //

            $table->string('facebook')->nullable()->after('schools_detail');
            $table->string('line')->nullable()->after('schools_detail');
            $table->string('phone')->nullable()->after('schools_detail');
            $table->string('email')->nullable()->after('schools_detail');
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
        Schema::table('schools', function (Blueprint $table) {
            //
            $table->dropColumn('facenook');
            $table->dropColumn('line');
            $table->dropColumn('phone');
            $table->dropColumn('email');
        });
    }
}
