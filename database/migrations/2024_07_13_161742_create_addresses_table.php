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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();

            $table->string('uid');

            $table->string('client_country');
            $table->string('client_province');
            $table->string('client_district');
            $table->string('client_municipality');
            $table->string('client_ward');
            $table->string('client_tole');
            $table->string('client_landline')->nullable();

            $table->enum('current_address_different', ['yes', 'no']);

            $table->string('current_country');
            $table->string('current_province');
            $table->string('current_district');
            $table->string('current_municipality');
            $table->string('current_ward');
            $table->string('current_tole');
            $table->string('current_landline')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
