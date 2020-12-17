<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCreateCourseFinalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_course_finals', function (Blueprint $table) {
            $table->integer('course_final_id')->autoIncrement();
            $table->integer('user_id');
            $table->string('generation')->nullable();
            $table->string('corse_name')->nullable();
            $table->string('location')->nullable();
            $table->string('month_start')->nullable();
            $table->string('month_end')->nullable();
            $table->string('images_path')->nullable();

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
        Schema::dropIfExists('create_course_finals');
    }
}
