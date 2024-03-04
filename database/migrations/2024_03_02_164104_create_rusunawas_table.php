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
        Schema::create('rusunawas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('subname');
            $table->enum('lantai', ['I', 'II', 'III', 'IV', 'V']);
            $table->integer('tipe');
            $table->integer('fare');
            $table->enum('unit', ['day', 'month', 'year']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rusunawas');
        Schema::table('rusunawas', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        
    }
};
