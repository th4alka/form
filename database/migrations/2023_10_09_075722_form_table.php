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
        //
        Schema::create('contact', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('name_last', 255);
            $table->char('name_first', 255);
            $table->char('company', 255);
            $table->char('email', 255);
            $table->char('tel', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('contact');
    }
};
