<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_lists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('matricnum');
            $table->string('strength');
            $table->float('cgpa');
            $table->string('faculty');
            $table->string('status')->nullable();
            $table->integer('votes_count');
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
        Schema::dropIfExists('candidate_lists');
    }
}
