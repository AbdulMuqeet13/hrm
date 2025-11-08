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
        Schema::create('attendences', function (Blueprint $table) {
            $table->id();
            $table->time('checkin_time');
            $table->time('checkout_time')->nullable();
            $table->date('date');
            $table->enum('status', ['present', 'absent', 'leave']);
            $table->foreignId('staff_id')->constrained('staffs')->onDelete('cascade');
            // $table->unsignedDecimal('total_hours', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendences');
    }
};
