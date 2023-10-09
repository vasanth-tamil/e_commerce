<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('code', 50);
            $table->string('name', 100);
            $table->string('description');
            $table->string('image')->nullable();
            $table->integer('stocks')->default(0);
            $table->double('price')->default(0.0);

            $table->bigInteger("category_id")->unsigned()->index()->nullable(False);
            $table->foreign("category_id")->references("id")->on("categories")->onDelete('cascade');

            $table->bigInteger("sub_category_id")->unsigned()->index()->nullable(False);
            $table->foreign("sub_category_id")->references("id")->on("sub_categories")->onDelete('cascade');

            $table->boolean('status')->default(True);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
