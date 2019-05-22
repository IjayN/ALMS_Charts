<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('employee_no')->unique();
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->string('pushToken')->nullable();
            $table->string('nat_id')->unique();
            $table->string('NSSF');
            $table->string('NHIF');
            $table->string('phone_no');
            $table->string('reset_code')->nullable();
            $table->string('KRA_Pin');
            $table->string('avatar')->default('avatar.png');
            $table->boolean('active')->default(false);
            $table->integer('department_id')->unsigned()->nullable();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->string('status')->default('active');
            $table->string('category');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
