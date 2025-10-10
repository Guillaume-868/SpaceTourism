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
        Schema::create('planets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name_fr',7);
            $table->string('name_en',7);
            $table->text('description_fr');
            $table->text('description_en');
            $table->integer('distance_fr');
            $table->integer('distance_en');
            $table->smallInteger('duration_fr');
            $table->smallInteger('duration_en');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planets');
    }
};
