<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_portfolios', function (Blueprint $table) {
            $table->integer('profile_id')->autoIncrement();
            $table->integer('user_id');
            // $table->string('user_name')->nullable();
            // $table->string('user_lastname')->nullable();
            $table->string('profile_location')->nullable();
            $table->string('profile_aboutme')->nullable();
            $table->string('profile_age')->nullable();
            $table->string('profile_sex')->nullable();
            $table->string('profile_instinct')->nullable();
            $table->string('profile_province')->nullable();
            $table->string('profile_education')->nullable();
            $table->string('profile_facebook')->nullable();
            $table->integer('profile_phone')->nullable();
            $table->string('profile_email')->nullable();
            $table->string('profile_line')->nullable();

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
        Schema::dropIfExists('profile_portfolios');
    }
}
