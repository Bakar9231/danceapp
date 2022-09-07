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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('profile_id')->constrained();
            $table->string("booking_id")->nullable();
            $table->string("booking_type")->nullable();
            $table->string("booking_tenure")->nullable();
            $table->string("booking_rate")->nullable();
            $table->string("service_charges")->nullable();
            $table->date("date")->nullable();
            $table->string("total_amount")->nullable();
            $table->string("agreement")->nullable();
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
        Schema::dropIfExists('bookings');
    }
};