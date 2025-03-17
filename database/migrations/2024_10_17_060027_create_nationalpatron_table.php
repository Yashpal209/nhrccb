<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nationalpatron', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('designation')->nullable();
            $table->text('order_no')->nullable();
            $table->text('patron_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nationalpatron');
    }
};
