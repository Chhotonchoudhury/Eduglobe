<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('status');
            $table->text('description')->nullable(); // Adding 'description' column with nullable
            $table->boolean('reminder')->nullable(); // Adding 'reminder' column with nullable
            $table->date('reminder_date')->nullable(); // Adding 'reminder_date' column with nullable
            $table->time('reminder_time')->nullable(); // Adding 'reminder_time' column with nullable
            $table->bigInteger('student_id');
            $table->bigInteger('assign_to')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
};
