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
        Schema::create('latestnews', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->string('love'); // Assuming 'love' is an integer, adjust if it's another data type
            $table->string('comment'); // Assuming 'comment' is an integer, adjust if it's another data type
            $table->date('date');
            $table->string('boxtitle');
            $table->text('boxdescription');
            $table->string('button');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('latestnews');
    }
};
