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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_report_id');
            $table->foreign('type_report_id')->references('id')->on('type_reports');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('adrress')->nullable();
            $table->string('name')->nullable();
            $table->string('whatsapp')->nullable();
            $table->enum('estatus',['1','0'])->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
