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
        Schema::create('traductions', function (Blueprint $table) {
            $table->id(); // ✅ PRIMARY KEY automatique
            $table->timestamps();
            $table->string('title',50);
            $table->text('content');
            $table->text('url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('traduction');
    }
};
