<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('image');

            $table->bigInteger("category_id")->unsigned()->index()->nullable(False);
            $table->foreign("category_id")->references("id")->on("categories")->onDelete('cascade');

            $table->boolean('status')->default(True);
            $table->timestamp('created_at')->currentTime();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sub_categories');
    }
};
