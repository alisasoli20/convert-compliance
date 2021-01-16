<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolicyPrivaciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policy_privacies', function (Blueprint $table) {
            $table->id();
            $table->string('policy_name');
            $table->string('policy_owner');
            $table->string('approved_by');
            $table->string('approval_date');
            $table->string('review_date');
            $table->string('policy_level');
            $table->string('distribution_list');
            $table->string('status');
            $table->string('pdf');
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
        Schema::dropIfExists('policy_privacies');
    }
}
