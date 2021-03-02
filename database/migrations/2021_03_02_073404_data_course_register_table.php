<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataCourseRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('data_course_register', function (Blueprint $table) {
            $table->integer('course_register_id')->autoIncrement();
            $table->integer('user_id')->nullable();
            $table->integer('course_id')->nullable();

            $table->string('name', 100)->nullable();
            $table->string('lastname', 100)->nullable();
            $table->string('telphone', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('idcard', 20)->nullable();
            $table->date('birthday', 20)->nullable();

            $table->string('religion', 100)->nullable();
            $table->string('nationality', 100)->nullable();
            $table->string('career', 100)->nullable();
            $table->string('school', 100)->nullable();
            $table->string('branch', 20)->nullable();
            $table->string('qualification', 100)->nullable();
            $table->double('result')->nullable();
            $table->string('dadname', 100)->nullable();
            $table->string('momname', 100)->nullable();

            $table->string('housenumber', 100)->nullable();
            $table->string('swine', 100)->nullable();
            $table->string('alley', 100)->nullable();
            $table->string('road', 100)->nullable();
            $table->string('district', 20)->nullable();
            $table->string('county', 100)->nullable();
            $table->string('province', 100)->nullable();
            $table->string('postalcode', 100)->nullable();

            $table->string('housenumber-present', 100)->nullable();
            $table->string('swine-present', 100)->nullable();
            $table->string('alley-present', 100)->nullable();
            $table->string('road-present', 100)->nullable();
            $table->string('district-present', 20)->nullable();
            $table->string('county-present', 100)->nullable();
            $table->string('province-present', 100)->nullable();
            $table->string('postalcode-present', 100)->nullable();

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
        Schema::drop('data_course_register');
    }
}
