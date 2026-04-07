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
        Schema::create('lutas', function (Blueprint $table) {
            $table->id();
            $table->text('nome_lutador');
            $table->text('nome_oponente');
            $table->text('modalidade');
            $table->text('categoria');
            $table->integer('rounds');
            $table->decimal('bolsa', 10, 2);
            $table->date('data_luta');
            $table->text('local_evento');
            $table->text('resultado_previsto');
            $table->text('sobre_luta');
            $table->text('img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lutas');
    }
};

