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
        Schema::create('lawyers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('qualification');
            $table->string('bar_number');
            $table->string('practice_area');
            $table->integer('experience');
            $table->string('email');
            $table->string('phone_number');
            $table->string('address');
            $table->string('password');
            $table->string('profile_photo')->nullable();
            $table->string('id_proof')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lawyers');
    }
};
