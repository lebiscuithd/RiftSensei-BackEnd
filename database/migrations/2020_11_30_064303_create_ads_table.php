<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('user_id');
            $table->date('coaching_date')->nullable();
            $table->string('description');
            $table->boolean('pending')->default(false);
            $table->boolean('finished')->default(false);
            $table->tinyInteger('ad_rating', 0, 5)->nullable();
            $table->tinyInteger('duration');
            $table->tinyInteger('hourly_rate');
            $table->timestamps();
            $table->boolean('rated')->default(false);
            $table->tinyInteger('student_id')->nullable();
            $table->tinyInteger('student_rank')->nullable();
            $table->string('comments')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}