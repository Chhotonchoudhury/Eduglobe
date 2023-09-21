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
        Schema::create('web_titles', function (Blueprint $table) {
            $table->id();

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

            $table->string('en_title7')->nullable(true);
            $table->string('ar_title7')->nullable(true);

            $table->string('en_title8')->nullable(true);
            $table->string('ar_title8')->nullable(true);

            $table->string('en_title9')->nullable(true);
            $table->string('ar_title9')->nullable(true);

            $table->string('en_title10')->nullable(true);
            $table->string('ar_title10')->nullable(true);

            $table->string('en_title11')->nullable(true);
            $table->string('ar_title11')->nullable(true);

            $table->string('en_title12')->nullable(true);
            $table->string('ar_title12')->nullable(true);

            $table->string('en_title13')->nullable(true);
            $table->string('ar_title13')->nullable(true);

            $table->string('en_title14')->nullable(true);
            $table->string('ar_title14')->nullable(true);

            $table->string('en_title15')->nullable(true);
            $table->string('ar_title15')->nullable(true);

            $table->string('en_title16')->nullable(true);
            $table->string('ar_title16')->nullable(true);

            $table->string('en_title17')->nullable(true);
            $table->string('ar_title17')->nullable(true);

            $table->string('en_title18')->nullable(true);
            $table->string('ar_title18')->nullable(true);

            $table->string('en_title19')->nullable(true);
            $table->string('ar_title19')->nullable(true);

            $table->string('en_title20')->nullable(true);
            $table->string('ar_title20')->nullable(true);

            $table->string('en_title21')->nullable(true);
            $table->string('ar_title21')->nullable(true);

            $table->string('en_title22')->nullable(true);
            $table->string('ar_title22')->nullable(true);

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
        Schema::dropIfExists('web_titles');
    }
};
