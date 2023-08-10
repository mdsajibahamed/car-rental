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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("detail_id")->unsigned();
            $table->foreign("detail_id")->references("id")->on("details");
            $table->bigInteger("vehicle_id")->unsigned();
            $table->foreign("vehicle_id")->references("id")->on("vehicles");
            $table->string("location_from")->nullable();
            $table->string("location_to")->nullable();
            $table->string("pickup_date")->nullable();
            $table->string("return_date")->nullable();
            $table->string("total_days")->nullable();
            $table->tinyInteger("status")->nullable();
            $table->string("total_amount");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};