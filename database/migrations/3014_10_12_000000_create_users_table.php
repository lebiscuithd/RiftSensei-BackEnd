<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('avatar')->default('http://ddragon.leagueoflegends.com/cdn/10.25.1/img/champion/Volibear.png');
            $table->text('description')->nullable();
            $table->text('pedagogy')->nullable();
            $table->string('twitter_link')->nullable();;
            $table->string('discord_link')->nullable();;
            $table->string('opgg_link')->nullable();;
            $table->integer('hours')->default(0);
            $table->tinyInteger('rank_id')->default(1);
            $table->boolean('verified_coach')->default(false);
            $table->boolean('admin')->default(false);
            $table->integer('wallet')->default(100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
