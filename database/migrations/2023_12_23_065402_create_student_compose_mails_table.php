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
        Schema::create('student_compose_mails', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('student_id'); // Reference to the students table
            $table->string('recipient_email');
            $table->text('cc')->nullable();
            $table->string('subject');
            $table->text('body');
            $table->json('attachments')->nullable(); // JSON column for storing attachments
            $table->bigInteger('entry_id');
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
        Schema::dropIfExists('student_compose_mails');
    }
};
