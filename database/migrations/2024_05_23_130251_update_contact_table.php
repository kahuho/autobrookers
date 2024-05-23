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
        Schema::table('contacts', function (Blueprint $table) {

            if (!Schema::hasColumn('contacts', 'name')) {
                $table->string('name');
            }
            if (!Schema::hasColumn('contacts', 'email')) {
                $table->string('email');
            }
            if (!Schema::hasColumn('contacts', 'subject')) {
                $table->string('subject');
            }
            if (!Schema::hasColumn('contacts', 'message')) {
                $table->string('message');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            //
        });
    }
};
