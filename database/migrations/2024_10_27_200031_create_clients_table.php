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
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id_client');
            $table->unsignedBigInteger('id_enterprise');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->boolean('status');
            $table->timestamps();

            //Foreign Keys
            $table->foreign('id_enterprise')->references('id_enterprise')->on('enterprises')->onDelete('cascade');

            //Índices
            $table->index('name');
            $table->index('email');
            $table->index('phone');
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
