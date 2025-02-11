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
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('courier_id');
        $table->unsignedBigInteger('partner_id');
        $table->unsignedBigInteger('product_id');
        $table->integer('quantity');
        $table->string('status');
        $table->timestamps();

        $table->foreign('courier_id')->references('id')->on('couriers')->onDelete('cascade');
        $table->foreign('partner_id')->references('id')->on('partners')->onDelete('cascade');
        $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
