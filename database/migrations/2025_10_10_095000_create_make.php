<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('make', function (Blueprint $table) {
            $table->char('code_1', 2);
            $table->unsignedBigInteger('id'); // ✅ même type que traduction.id
            $table->char('code', 2);

            // ✅ clé primaire composite
            $table->primary(['code_1', 'id']);

            // ✅ clé étrangère vers Langue(code)
            $table->foreign('code_1')
                ->references('code')
                ->on('langue')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            // ✅ clé étrangère vers Traduction(id)
            $table->foreign('id')
                ->references('id')
                ->on('traduction')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('make');
    }
};
