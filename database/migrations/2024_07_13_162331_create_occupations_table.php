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
        Schema::create('occupations', function (Blueprint $table) {
            $table->id();
            
            $table->string('uid')->nullable();

            $table->string('occupation');
            $table->string('business_type');
            $table->string('organization_name');
            $table->string('organization_address');
            $table->string('designation');
            $table->string('employee_id');
            $table->string('income_range');
            $table->string('other_involvement');
            $table->string('other_organisation')->nullable();
            $table->string('other_designation')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('occupations');
    }
};
