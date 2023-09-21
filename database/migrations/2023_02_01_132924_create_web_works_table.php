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
        Schema::create('web_works', function (Blueprint $table) {
            $table->id();
            $table->string('en_description')->nullable(true);
            $table->string('ar_description')->nullable(true);

            $table->string('en_title1')->nullable(true);
            $table->string('ar_title1')->nullable(true);

            $table->string('en_title2')->nullable(true);
            $table->string('ar_title2')->nullable(true);

            $table->string('en_title3')->nullable(true);
            $table->string('ar_title3')->nullable(true);

            $table->string('en_title4')->nullable(true);
            $table->string('ar_title4')->nullable(true);

            $table->string('en_title5')->nullable(true);
            $table->string('ar_title5')->nullable(true);

            $table->string('en_title6')->nullable(true);
            $table->string('ar_title6')->nullable(true);

            $table->string('banner');
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
        Schema::dropIfExists('web_works');
    }
};
