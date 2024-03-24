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
        Schema::create('assets_localizations', function (Blueprint $table) {
            $table->id();
            $table->string('localization', 100);
            $table->string('asset_owner', 50);
            $table->string('assigned_to', 30);
            $table->unsignedBigInteger('asset_id');
            $table->date('date_created');
            $table->time('hour_updated');
            $table->date('date_updated');
            $table->time('hour_created');
            $table->timestamps();

            $table->foreign('asset_id')->references('id')->on('assets');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets_localizations');
    }
};
