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
        Schema::create('weights', function (Blueprint $table) {
            $table->id();
            $table->date('record_date');      // <--- เพิ่มบรรทัดนี้ (เก็บวันที่)
            $table->decimal('weight', 5, 2);  // <--- เพิ่มบรรทัดนี้ (เก็บน้ำหนัก)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weights');
    }
};
