<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CoreTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('user_id');
            $table->timestamps();
        });
        
        Schema::create('cards', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('topic_id');
            $table->text('front');
            $table->text('back');
            $table->date('review_date');
            $table->integer('review_frequency')->default(1);
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
        Schema::drop('topics');

        Schema::drop('cards');
    }
}
