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
        Schema::create('licenses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('version', 50);
            $table->string('vendor', 50);
            $table->text('description', 50);
            $table->date('purchase_date');
            $table->date('expiration_date');
            $table->date('renewal_date');
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
        Schema::dropIfExists('licenses');
    }
};
