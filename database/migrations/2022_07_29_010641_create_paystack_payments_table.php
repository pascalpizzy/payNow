<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paystack_payments', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id');
            $table->string('user_unique_id');
            $table->string('email');
            $table->string('first_name');
            $table->string('last_name');            
            $table->string('amount');
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('paystack_payments');
    }
};
