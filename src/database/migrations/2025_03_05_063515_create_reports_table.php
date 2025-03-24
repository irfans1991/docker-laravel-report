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
        Schema::create('reports', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('name');
            $table->string('title');
            $table->string('no_document');
            $table->string('deskripsi')->nullable();
            $table->string('status')->nullable();
            $table->string('department');
            $table->string('uri');
            $table->date('date_report');
            $table->string('checked_by')->nullable();
            $table->date('date_checked')->nullable();
            $table->string('verified_by')->nullable();
            $table->date('date_verified')->nullable();
            $table->string('deleted_by')->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
