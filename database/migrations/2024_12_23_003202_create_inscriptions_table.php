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
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phone');
            $table->string('email');
            $table->string('secteur');
            $table->string('type');
            $table->string('specialite');
            $table->string('ville');
            $table->string('attendance_status')->nullable();

            $table->string('departure_date');
            $table->string('arrival_date');
            $table->string('other_laboratoire')->nullable();
            $table->string('other_specialite')->nullable();
            $table->string('payment_method')->nullable();
            $table->enum('status', ['pending', 'accepted', 'refused'])->default('pending')->change();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }
};
