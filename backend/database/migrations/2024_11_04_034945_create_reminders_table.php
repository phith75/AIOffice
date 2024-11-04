<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('reminders', function (Blueprint $table) {
            $table->id(); // ID duy nhất của nhắc nhở
            $table->foreignId('task_id')->constrained()->onDelete('cascade'); // Tham chiếu đến tasks.id
            $table->dateTime('reminder_time'); // Thời gian nhắc nhở
            $table->enum('status', ['pending', 'sent', 'dismissed']); // Trạng thái của nhắc nhở
            $table->timestamps(); // Thời gian tạo và cập nhật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reminders');
    }
};
