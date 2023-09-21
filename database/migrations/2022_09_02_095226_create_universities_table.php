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
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ar_name')->nullable();
            $table->string('campus_name');
            $table->string('email');
            $table->string('Unumber');
            $table->string('logo');
            $table->bigInteger('ex_number');
            $table->string('ex_email');
            $table->text('address');
            $table->text('remarks')->nullable();
            $table->text('ar_address')->nullable();
            $table->text('ar_remarks')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('universities');
    }
};
