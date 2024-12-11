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
        Schema::create('skin_type_result', function (Blueprint $table) {
            $table->id();
            $table->integer('skin_type');
            $table->integer('test_result');
            $table->unsignedBigInteger('user_id'); // Ensure the data type matches the `users` table's ID
            $table->foreign('user_id')->references('user_id')->on('tb_user')->onDelete('cascade'); // Add foreign key constraint
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skin_type_result');
    }
};
