<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFINCCSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FINCC', function (Blueprint $table) {
            $table->id();
            $table->string("meeting_date","1000");
            $table->string("meeting","1000");
            $table->string("present","1000");
            $table->string("not_present","1000");
            $table->string("actions","1000");
            $table->string("key_decisions","1000");
            $table->string("link","1000");
            $table->string("notes","1000");
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
        Schema::dropIfExists('FINCC');
    }
}
