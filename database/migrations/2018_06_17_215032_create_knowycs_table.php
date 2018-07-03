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
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('sex')->nullable();
            $table->date('birthday')->nullable();
            $table->string('nationality')->nullable();
            $table->string('residence')->nullable();
            $table->string('us_citizen')->nullable();
            $table->string('id_number')->nullable();
            $table->string('email')->nullable();
            $table->string('telegram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('address')->nullable();
            $table->string('pic_passport')->nullable();
            $table->string('pic_portrait')->nullable();
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
