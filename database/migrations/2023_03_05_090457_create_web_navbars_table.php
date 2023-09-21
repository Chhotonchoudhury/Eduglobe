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
        Schema::create('web_navbars', function (Blueprint $table) {
            $table->id();
            $table->string('en_link1')->nullable(true);
            $table->string('ar_link1')->nullable(true);

            $table->string('en_link2')->nullable(true);
            $table->string('ar_link2')->nullable(true);

            $table->string('en_link3')->nullable(true);
            $table->string('ar_link3')->nullable(true);

            $table->string('en_link4')->nullable(true);
            $table->string('ar_link4')->nullable(true);

            $table->string('en_link5')->nullable(true);
            $table->string('ar_link5')->nullable(true);

            $table->string('en_link6')->nullable(true);
            $table->string('ar_link6')->nullable(true);

            $table->string('en_link7')->nullable(true);
            $table->string('ar_link7')->nullable(true);

            $table->string('en_link8')->nullable(true);
            $table->string('ar_link8')->nullable(true);

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
        Schema::dropIfExists('web_navbars');
    }
};
