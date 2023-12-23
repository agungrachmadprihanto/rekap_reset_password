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
        Schema::create('update_cbs', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('perihal');
            $table->string('name_file');
            $table->string('alasan')->nullable();
            $table->string('hasil')->nullable();
            $table->string('user');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('update_cbs');
    }
};
