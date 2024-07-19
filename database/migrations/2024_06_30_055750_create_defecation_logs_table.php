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
        Schema::create('defecation_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->dateTime('date');
            $table->time('time');
            $table->text('note')->nullable();
            $table->enum('type', ['solid', 'loose', 'diarrhea']);
            $table->enum('color', ['brown', 'green', 'yellow', 'black', 'red', 'white']);
            $table->enum('smell', ['normal', 'foul', 'sweet']);
            $table->enum('amount', ['normal', 'small', 'large']);
            $table->enum('consistency', ['normal', 'hard', 'soft']);
            $table->enum('blood', ['yes', 'no']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('defecation_logs');
    }
};
