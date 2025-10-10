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
        Schema::create('crew', function (Blueprint $table) {
            $table->id();  // ✅ PRIMARY KEY automatique
            $table->timestamps();
            $table->varchar('fonction_fr',50);
            $table->varchar('fonction_en',50);
            $table->text('description_fr');
            $table->text('description_en');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crew');
    }
};
