<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string("code",10);

            $table->bigInteger("user_id")->unsigned()->index()->nullable(False);
            $table->foreign("user_id")->references("id")->on("users")->onDelete('cascade');

            $table->bigInteger("address_id")->unsigned()->index()->nullable(False);
            $table->foreign("address_id")->references("id")->on("addresses")->onDelete('cascade');

            $table->bigInteger("vendor_id")->unsigned()->index()->nullable(False);
            $table->foreign("vendor_id")->references("id")->on("vendors")->onDelete('cascade');

            $table->double("total_price")->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
