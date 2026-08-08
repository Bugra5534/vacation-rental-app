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
        Schema::create('vacation_prices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vacation_id');
            $table->timestamps();
            $table->date('start_date');
            $table->date('end_date');
            $table->float('price');
            $table->float('sale_price')->nullable();

            $table->foreign('vacation_id')->references('id')->on('vacations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacation_prices');
    }
};
