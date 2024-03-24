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
        Schema::create('assets_licences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asset_id');
            $table->unsignedBigInteger('licences_id');
            $table->date('date_created');
            $table->time('hour_updated');
            $table->date('date_updated');
            $table->time('hour_created');
            $table->timestamps();

//            161949
//            172022

            $table->foreign('asset_id')->references('id')->on('assets');
            $table->foreign('licences_id')->references('id')->on('licenses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets_licences');
    }
};
