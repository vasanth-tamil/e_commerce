<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('image')->nullabe();
            $table->boolean('status')->default(True);
            $table->timestamp('created_at')->currentTime();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
