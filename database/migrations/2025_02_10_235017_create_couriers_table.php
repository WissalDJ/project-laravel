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
    Schema::create('couriers', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('partner_id');
        $table->string('name');
        $table->string('prenom');
        $table->string('tel');
        $table->string('email')->unique();
        $table->integer('annee_experience');
        $table->timestamps();

        $table->foreign('partner_id')->references('id')->on('partners')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('couriers');
    }
};
