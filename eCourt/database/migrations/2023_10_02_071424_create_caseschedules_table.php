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
        Schema::create('caseschedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('case_id');
            $table->foreign('case_id')->references("id")->on("cases");
            $table->string('judge');
            $table->date('hearing_date');
            $table->time('hearing_time');
            $table->date('reschedule_hearing_date')->nullable();
            $table->time('reschedule_hearing_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caseschedules');
    }
};
