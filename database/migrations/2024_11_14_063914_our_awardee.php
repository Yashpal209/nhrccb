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
        Schema::create('our_awardee', function (Blueprint $table) {
            $table->id();
            $table->text('awardee_name')->nullable();
            $table->text('award_name')->nullable();
            $table->text('award_category')->nullable();
            $table->text('convention_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
