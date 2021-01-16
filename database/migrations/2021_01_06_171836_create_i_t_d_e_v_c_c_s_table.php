<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateITDEVCCSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ITDEVCC', function (Blueprint $table) {
            $table->id();
            $table->string("meeting_date","1000");
            $table->string("meeting","1000");
            $table->string('slug');
            $table->string("present","1000");
            $table->string("not_present","1000");
            $table->string("actions","1000");
            $table->string("key_decisions","1000");
            $table->string("link","1000");
            $table->string("notes","1000");
            $table->timestamp('submitted_at')->nullable();
            $table->timestamp('submit_for_review')->nullable();
            $table->tinyInteger('discarded')->default(0);
            $table->text('pdf')->nullable();
            $table->bigInteger('user_id');
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
        Schema::dropIfExists('ITDEVCC');
    }
}
