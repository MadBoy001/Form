<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->string('uid')->nullable();
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('grandfather_name');

            $table->string('marital_status');
            $table->string('spouse_name')->nullable();
            $table->string('father_in_law_name')->nullable();
            $table->string('mother_in_law_name')->nullable();
            $table->string('son_name')->nullable();
            $table->string('daughter_name')->nullable();

            $table->string('is_minor');
            $table->string('guardian_name')->nullable();
            $table->string('guardian_relation')->nullable();
            $table->string('guardian_mobile')->nullable();
            $table->string('guardian_email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('families');
    }
};
