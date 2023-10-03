<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('company_name');
            $table->string('owner_name');
            $table->string('phone_1')->unique();
            $table->string('phone_2')->unique();
            
            // address
            $table->string('country');
            $table->string('state');
            $table->string('zip', 10);
            $table->string('city');
            $table->string('address_1');
            $table->string('address_2');

            // social links
            $table->string('website');
            $table->string('facebook');
            $table->string('instagram');

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
