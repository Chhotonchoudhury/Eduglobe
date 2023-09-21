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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ar_name');
            $table->string('course_degree');
            $table->bigInteger('category_id');
            $table->string('course');
            $table->string('ar_course')->nullable(true);
            $table->string('course_period');
            $table->string('ar_course_period')->nullable(true);
            $table->string('fess');
            $table->string('photo');
            $table->string('related_image');
            $table->text('detail');
            $table->text('ar_detail')->nullable(true);
            $table->date('starting_date');
            $table->date('starting_date2');
            $table->bigInteger('university_id');
            $table->bigInteger('entry_id');
            $table->longText('requirements')->nullable(true);
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
        Schema::dropIfExists('courses');
    }
};
