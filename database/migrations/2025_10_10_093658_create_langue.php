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
        Schema::create('langue', function (Blueprint $table) {
            $table->char('code', 2)->primary(); // ou ->unique();
            $table->timestamps();
            $table->char('code',2);
            $table->string('name',50);
            $table->boolean('langue_active')->default(true); // ✅ BOOLEAN avec valeur par défaut
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('langue');
    }
};
