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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();

            $table->string('uid')->nullable();

            $table->string('passport_image')->nullable();
            $table->string('holding_selfie_image');
            $table->string('citizenship_front_image');
            $table->string('citizenship_back_image');
            $table->string('signature_image');

            $table->string('thumb_image');
            $table->string('map_image');
            $table->string('dmat_confirmation_image');
            $table->string('pan_image');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
