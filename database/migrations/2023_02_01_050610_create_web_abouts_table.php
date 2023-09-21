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
        Schema::create('web_abouts', function (Blueprint $table) {
            $table->id();
            $table->string('en_title')->nullable(true);
            $table->string('ar_title')->nullable(true);
            $table->string('en_about')->nullable(true);
            $table->string('ar_about')->nullable(true);
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
        Schema::dropIfExists('web_abouts');
    }
};
