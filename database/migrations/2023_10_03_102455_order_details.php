<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->string("code", 50);

            $table->bigInteger("product_id")->unsigned()->index()->nullable(False);
            $table->foreign("product_id")->references("id")->on("products")->onDelete('cascade');

            $table->bigInteger("order_id")->unsigned()->index()->nullable(False);
            $table->foreign("order_id")->references("id")->on("orders")->onDelete('cascade');
            
            $table->integer("qty")->default(0);
            $table->double("total_price")->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
