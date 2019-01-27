<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('price');
            $table->string('skill_image');
            $table->string('image_two')->nullable();
            $table->string('image_three')->nullable();
            $table->integer('quest_points');
            $table->string('title');
            $table->string('information');
            $table->integer('attack');
            $table->integer('defence');
            $table->integer('strength');
            $table->integer('constitution');
            $table->integer('cooking');
            $table->integer('construction');
            $table->integer('farming');
            $table->integer('crafting');
            $table->integer('firemaking');
            $table->integer('fishing');
            $table->integer('fletching');
            $table->integer('herblore');
            $table->integer('hunter');
            $table->integer('magic');
            $table->integer('mining');
            $table->integer('prayer');
            $table->integer('ranged');
            $table->integer('runecrafting');
            $table->integer('slayer');
            $table->integer('smithing');
            $table->integer('agility');
            $table->integer('thieving');
            $table->integer('woodcutting');
            $table->integer('total_level');
            $table->integer('combat_level');
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
        Schema::dropIfExists('accounts');
    }
}
