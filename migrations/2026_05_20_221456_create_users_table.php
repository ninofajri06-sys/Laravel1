<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Membuat kolom ID otomatis
            $table->string('name'); // Kolom nama pembaca/pengguna
            $table->string('email')->unique(); // Kolom email (tidak boleh kembar)
            $table->string('password'); // Kolom password
            $table->timestamps(); // Kolom waktu kapan data dibuat
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
