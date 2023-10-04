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
        Schema::create('closing_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('case_number');
            $table->integer('client_id');
            $table->integer('lawyer_id');
            $table->string('reason');
            $table->boolean('request_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('closing_requests');
    }
};
