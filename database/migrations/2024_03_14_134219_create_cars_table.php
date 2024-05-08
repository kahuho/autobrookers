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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('make');
            $table->string('model');
            $table->integer('year');
            $table->boolean('availability');
            $table->integer('mileage');
            $table->decimal('price', 10, 2);
            $table->text('description');
            $table->string('drive');
            $table->integer('horse_power');
            $table->string('transmission');
            $table->string('torque');
            $table->string('fuel_type');
            $table->string('engine_size');
            $table->string('accident_history');
            $table->json('images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
