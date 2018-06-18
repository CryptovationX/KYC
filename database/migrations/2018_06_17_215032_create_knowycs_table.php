<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKnowycsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knowycs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account_id')->unique();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('sex');
            $table->date('birthday');
            $table->string('nationality');
            $table->string('residence');
            $table->string('us_citizen');
            $table->string('id_number');
            $table->string('pic_passport');
            $table->string('pic_portrait');
            $table->string('status')->default('unconfirmed');
            $table->string('users')->nullable();
            $table->string('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('knowycs');
    }
}
