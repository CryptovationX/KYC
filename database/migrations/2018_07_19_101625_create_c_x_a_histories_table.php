<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCXAHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_x_a_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account_id');
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('price')->nullable();
            $table->string('type')->nullable();
            $table->string('amount_usd')->nullable();
            $table->string('token')->nullable();
            $table->string('bonus')->nullable();
            $table->string('total_token')->nullable();
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
        Schema::dropIfExists('c_x_a_histories');
    }
}
