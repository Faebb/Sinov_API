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
        Schema::create('enterprises', function (Blueprint $table) {
            $table->bigIncrements('id_enterprise');
            $table->string('name');
            $table->string('address');
            $table->unsignedBigInteger('created_by');

            $table->timestamps();

            //Foreign Keys
            $table->foreign('created_by')->references('id_user')->on('users');

            //Índices
            $table->index('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enterprises');
    }
};
