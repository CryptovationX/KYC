<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCXAAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_x_a_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account_id')->unique()->fillable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('sex')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('nationality')->nullable();
            $table->string('residence')->nullable();
            $table->string('id_number')->nullable();
            $table->string('email')->nullable();
            $table->string('ethwallet')->nullable()->unique();
            $table->string('tel')->nullable();
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
        Schema::dropIfExists('c_x_a_accounts');
    }
}
