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
        Schema::create('bservices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->unsigned();
            $table->foreign("user_id")->references("id")->on("users")->onDelete('cascade');
            $table->bigInteger("service_id")->unsigned();
            $table->foreign("service_id")->references("id")->on("bservices")->onDelete('cascade');
            $table->string('date')->nullable();
            $table->string('service_type')->nullable();
            $table->string("location")->nullable();
            $table->string("amount")->nullable();
            $table->string("payment_type")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bservices');
    }
};
