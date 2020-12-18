<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exp_works', function (Blueprint $table) {
            $table->integer('exp_works_id')->autoIncrement();
            $table->integer('user_id');

            $table->string('position')->nullable();
            $table->string('company')->nullable();
            $table->string('county')->nullable();
            $table->string('province')->nullable();
            $table->string('year')->nullable();
            $table->string('month')->nullable();

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
        Schema::dropIfExists('exp_works');
    }
}
