<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAutointCourseAndUpdateResult extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('course_result', function (Blueprint $table) {
            //
            $table->integer('result_id')->autoIncrement()->first();
            // $table->tinyInteger('status')->nullable()->after('image_herobanner');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
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
        Schema::table('courses', function (Blueprint $table) {
            //
            $table->dropColumn('result_id');
        });
    }
}
