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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('userable_type');
            $table->unsignedBigInteger('userable_id');
            $table->string('username');
            $table->string('email')->unique();
            $table->enum('gender',['Male','Female'])->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('nip')->nullable();
            $table->string('nik')->nullable();
            $table->foreignId('bank_id')->nullable();
            $table->string('account_number');
            $table->string('image')->default('default.png');
            $table->timestamps();
            $table->foreign('bank_id')->references('id')->on('banks')->onDelete('cascade')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
