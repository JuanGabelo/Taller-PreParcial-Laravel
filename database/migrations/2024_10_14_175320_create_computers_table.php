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
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->string('computer_name');
            $table->timestamp('computer_date');
            $table->string('computer_max_capacity');
            $table->string('computer_brand');
            $table->string('computer_description')->nullable();
            $table->string('computer_color')->nullable();
            $table->boolean('computer_is_active');
            $table->integer('computer_price');
            $table->string('computer_size');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computers');
    }
};
