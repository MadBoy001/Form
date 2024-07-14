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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password')->nullable();

            $table->string('client_mobile');
            $table->string('client_alt_mobile')->nullable();
            $table->string('client_gender');

            $table->date('client_dob_ad');
            $table->date('client_dob_bs');
            $table->string('client_nationality');

            $table->string('client_ctzn_num');
            $table->string('client_ctzn_district');
            $table->date('client_ctn_bs');
            $table->date('client_ctn_ad');
            
            $table->string('client_nid')->nullable();
            $table->string('client_pan')->nullable();
            $table->string('boid')->nullable();

            $table->enum('role', ['admin', 'user'])->default('user');
            $table->enum('status', ['active', 'inactive'])->default('inactive');


            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
