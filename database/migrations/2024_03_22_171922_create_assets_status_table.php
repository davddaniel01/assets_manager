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
        Schema::create('assets_status', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date_created');
            $table->time('hour_updated');
            $table->date('date_updated');
            $table->time('hour_created');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets_status');
    }
};
