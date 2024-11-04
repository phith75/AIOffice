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
        Schema::table('tasks', function (Blueprint $table) {
            $table->foreignId('recommendation_id')->nullable()->constrained('recommendations')->onDelete('set null'); // Tham chiếu đến recommendations.id
            $table->foreignId('reminder_id')->nullable()->constrained('reminders')->onDelete('set null'); // Tham chiếu đến reminders.id
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            //
        });
    }
};
