<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("booking_id")->unsigned()->nullable();
            $table->foreign("booking_id")->references("id")->on("bookings")->onDelete('cascade');
            // $table->bigInteger("service_id")->unsigned()->nullable();
            // $table->foreign("service_id")->references("id")->on("services")->onDelete('cascade');
            $table->string("payment_date");
            $table->string("payment_type");
            $table->string("trxid")->nullable();
            $table->string("amount")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
