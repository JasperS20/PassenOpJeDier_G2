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
        Schema::create('care_requests', function (Blueprint $table) {
            $table->id();
            $table->integer('care_taker_id');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');;
            $table->foreignId('advertisement_id')->constrained()->onDelete('cascade');
            $table->string('user_name');
            $table->string('care_taker_name');
            $table->string('advertisement_name_animal');
            $table->string('advertisement_animal');
            $table->string('advertisement_price');
            $table->date('advertisement_date_start');
            $table->date('advertisement_date_end');
            $table->boolean('is_accepted')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('care_requests');
    }
};
