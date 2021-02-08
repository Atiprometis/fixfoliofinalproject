<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Adminrole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('adminrole', function (Blueprint $table) {
            $table->integer('admin_id')->autoIncrement();
            $table->integer('admin_user_id')->nullable();
            $table->string('admin_user_name')->nullable();
            $table->string('status')->nullable();
            $table->integer('number_status')->nullable();
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
        Schema::drop('adminrole');

    }
}
