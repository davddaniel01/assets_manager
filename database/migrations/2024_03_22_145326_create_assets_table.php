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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('cod', 50)->unique();
            $table->string('model', 100)->nullable('false');
            $table->text('especification');
            $table->date('purchase_date')->nullable('false');
            $table->double('price', 6, 2)->nullable('false');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('assets_status_id'); // FK
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
        Schema::dropIfExists('assets');
    }
};
