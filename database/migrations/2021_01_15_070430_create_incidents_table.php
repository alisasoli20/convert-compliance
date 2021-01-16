<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidents', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('status');
            $table->string('incident_lead');
            $table->string('incident_team');
            $table->string('date_of_incident');
            $table->string('time_of_incident');
            $table->string('impacted_platform');
            $table->string('business_impact');
            $table->string('who_is_affected');
            $table->text('incident_summary_update');
            $table->text('incident_impact');
            $table->text('incident_update_detail');
            $table->string('operations_update');
            $table->text('comm_or_operations');
            $table->string('next_update');
            $table->string('remedial');
            $table->string('fca_major');
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
        Schema::dropIfExists('incidents');
    }
}
