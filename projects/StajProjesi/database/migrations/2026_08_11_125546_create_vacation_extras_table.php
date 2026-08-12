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
        Schema::create('vacation_extras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vacation_id');
            $table->unsignedBigInteger('extra_id');
            $table->timestamps();


            $table->foreign('vacation_id')->references('id')->on('vacations')->onDelete('cascade');
            $table->foreign('extra_id')->references('id')->on('extras')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacation_extras');
    }
};
