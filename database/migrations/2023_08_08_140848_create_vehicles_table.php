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
            $table->string("make")->nullable();
            $table->string("model");
            $table->string("thumbnail")->nullable();
            $table->string("year")->nullable();
            $table->string("type")->nullable();
            $table->tinyInteger("status")->default("1");
            $table->string("seating_capacity")->nullable();
            $table->string("rentamout");
            $table->string("image")->nullable();
            $table->string("serial_number")->nullable();
            $table->string("owner_name")->nullable();
            $table->string("owner_phone")->nullable();
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

