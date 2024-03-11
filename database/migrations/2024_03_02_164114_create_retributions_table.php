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
        Schema::create('retributions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rusunawa_id')->reference('id')->on('rusunawas');
            $table->foreignId('uploader_id')->reference('id')->on('uploaders');
            $table->enum('uploader_type', ['admin', 'guest']);
            $table->date('payment_of');
            $table->string('nominal');
            $table->text('file');
            $table->string('status')->default('Unverified');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retributions');
        Schema::table('rusunawas', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
