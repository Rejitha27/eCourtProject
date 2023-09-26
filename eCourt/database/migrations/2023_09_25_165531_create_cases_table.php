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
        Schema::create('cases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->string('case_type');
            $table->string('case_number')->nullable();
            $table->date('filing_date');
            $table->string('client_name');
            $table->string('lawyer_name');
            $table->string('case_description');
            $table->boolean('case_status');
            $table->string('case_respondent_name');
            $table->string('case_respondent_address');
            $table->string('case_respondent_phonenumber');
            $table->string('case_document')->nullable();
            $table->date('closing_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cases');
    }
};
