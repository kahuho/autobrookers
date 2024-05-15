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
        Schema::create('sell_on_behalf_orders', function (Blueprint $table) {
            $table->id();
            $table->string('registration_number');
            $table->string('make');
            $table->string('model');
            $table->integer('mileage');
            $table->year('year_of_manufacture');
            $table->enum('accident_history', ['Yes', 'No']);
            $table->decimal('asking_price', 10, 2);
            $table->string('location');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number');
            $table->string('email');
            $table->string('id_number');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sell_on_behalf_orders');
    }
};
