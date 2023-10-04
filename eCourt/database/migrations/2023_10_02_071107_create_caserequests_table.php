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
        Schema::create('caserequests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('client_id');
            $table->date('filling_date');
            $table->string('petitioner_name');
            $table->string('case_type');
            $table->string('lawyer_name');
            $table->string('case_description');
            $table->string('respondent_name');
            $table->string('respondent_address');
            $table->string('respondent_phonenumber');
            $table->string('case_document')->nullable();
            $table->boolean('request_status')->nullable();
            $table->boolean('active_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caserequests');
    }
};
