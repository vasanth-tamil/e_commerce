<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('whishlist', function (Blueprint $table) {
            $table->id();
            
            $table->bigInteger("user_id")->unsigned()->index()->nullable(False);
            $table->foreign("user_id")->references("id")->on("users")->onDelete('cascade');

            $table->bigInteger("product_id")->unsigned()->index()->nullable(False);
            $table->foreign("product_id")->references("id")->on("products")->onDelete('cascade');
            
            $table->timestamp("created_at")->currentTime();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};
