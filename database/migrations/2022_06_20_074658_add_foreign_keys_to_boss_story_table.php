<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBossStoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('boss_story', function (Blueprint $table) {
            $table->foreign(['question_id'], 'question_id')->references(['id'])->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('boss_story', function (Blueprint $table) {
            $table->dropForeign('question_id');
        });
    }
}
