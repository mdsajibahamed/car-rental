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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("location_id")->unsigned();
            $table->foreign("location_id")->references("id")->on("locations");
            $table->string("make")->nullable();
            $table->string("model");
            $table->string("year")->nullable();
            $table->string("type")->nullable();
            $table->tinyInteger("status")->default("1");
            $table->string("seating_capacity")->nullable();
            $table->string("price")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
