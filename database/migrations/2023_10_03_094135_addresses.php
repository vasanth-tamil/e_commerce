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
            $table->string('address');
            $table->string('phone');
            $table->string('zip_code', 10);

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
