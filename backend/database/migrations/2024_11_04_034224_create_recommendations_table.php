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
        Schema::create('recommendations', function (Blueprint $table) {
            $table->id(); // Tạo cột id
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Tham chiếu đến users.id
            $table->foreignId('task_id')->nullable()->constrained()->onDelete('set null'); // Tham chiếu đến tasks.id (nullable)
            $table->text('recommendation'); // Nội dung của đề xuất
            $table->string('action'); // Hành động được đề xuất
            $table->enum('status', ['pending', 'accepted', 'rejected']); // Trạng thái của đề xuất
            $table->timestamps(); // Thời gian tạo và cập nhật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recommendations');
    }
};
