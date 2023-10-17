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
        Schema::create('campaign_donations', function (Blueprint $table) {
            $table->id();
            // bigInteger: bisa sampai 1000+
            // integer: hanya sampai 10
            $table->bigInteger('campaign_id');
            $table->integer('user_id');
            $table->float('value');
            $table->enum('status', ['pending', 'waiting','succes', 'failed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaign_donations');
    }
};
