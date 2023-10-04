<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            
            // address
            $table->string('country');
            $table->string('state');
            $table->string('zip', 12);
            $table->string('city');
            $table->string('address_1');
            $table->string('address_2');

            $table->bigInteger("user_id")->unsigned()->index()->nullable(False);
            $table->foreign("user_id")->references("id")->on("users")->onDelete('cascade');

            $table->boolean('status')->default(True);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
