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
        Schema::create('zone_team', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('designation')->nullable();
            $table->text('wing_name')->nullable();
            $table->text('zone_name')->nullable();
            $table->text('image')->nullable();
            $table->text('date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zone_team');
    }
};
