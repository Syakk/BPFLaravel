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
        Schema::create('portofolio_1106', function (Blueprint $table) {
            $table->id();
            $table->string('kategori'); // Contoh: Education, Experience
            $table->string('judul');
            $table->string('tahun')->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
            $table->string('foto')->nullable();
            $table->boolean('show_foto')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portofolio_resumes');
    }
};
