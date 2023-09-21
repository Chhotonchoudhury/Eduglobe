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
        Schema::create('file_pdfs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('course_id');
            $table->text('details')->nullable(true);
            $table->string('file')->nullable(true);
            $table->tinyInteger('process_status')->default('0');
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
        Schema::dropIfExists('file_pdfs');
    }
};
