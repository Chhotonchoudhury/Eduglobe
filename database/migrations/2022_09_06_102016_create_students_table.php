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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('country')->nullable(true);
            $table->string('city')->nullable(true);
            $table->bigInteger('country_code');
            $table->bigInteger('phone');
            $table->string('email')->unique();
            $table->string('age')->nullable(true);
            $table->string('photo')->nullable(true);
            $table->bigInteger('course_id')->nullable(true);
            $table->bigInteger('university_id')->nullable(true);
            $table->bigInteger('entry_id')->nullable(true);
            $table->tinyInteger('process_status')->default('0');
            $table->tinyInteger('status_id')->nullable(true);
            $table->tinyInteger('emg_status')->nullable(true);
            $table->tinyInteger('payment_status')->nullable(true);
            $table->tinyInteger('active_status')->default('1');
            $table->tinyInteger('verify')->default('0');
            $table->tinyInteger('verified_by')->nullable(true);
            $table->tinyInteger('refer_to')->nullable(true);
            $table->tinyInteger('archive_status')->default('0');
            
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();

            $table->text('remarks')->nullable(true);
            $table->string('passport_no')->nullable(true);
            $table->text('doc')->nullable(true);
            $table->text('notify')->nullable(true);

            // Add 'dob' (date of birth) field
            $table->date('dob')->nullable(true);
            
            // Add 'address' field
            $table->text('address')->nullable(true);
            
            $table->rememberToken();
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
        Schema::dropIfExists('students');
    }
};
