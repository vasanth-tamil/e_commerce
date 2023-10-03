<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('avatar');
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('otp')->nullable();

            // address
            $table->string('country');
            $table->string('state');
            $table->string('zip', 10);
            $table->string('city');
            $table->string('address_1');
            $table->string('address_2');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};