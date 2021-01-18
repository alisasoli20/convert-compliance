@extends('layouts.master')
@section('content')
    <section class="form-section pt-5">
        <div class="container request-form">
                <div class="row mt-5 justify-content-center">
                    <div class="col-md-12 text-center">
                        <h1>Incidents</h1>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="mt-5 col-md-12 text-center">
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="status" class="text-right col-md-2">Current Status</label>
                                <div class="col-md-10">
                                    <select name="status" class="form-control" id="status" required>
                                        <option value="0" {{ ($incident->status == 0)?"selected":"" }}>Open</option>
                                        <option value="1" {{ ($incident->status == 1)?"selected":"" }}>Closed</option>
                                        <option value="2" {{ ($incident->status == 2)?"selected":"" }}>Blocked</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="incident_lead" class="text-right col-md-2">Incident Lead</label>
                                <div class="col-md-10">
                                    <input type="text" id="incident_lead" name="incident_lead" class="form-control" value="{{ $incident->incident_lead }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="incident_team" class="text-right col-md-2">Incident Team</label>
                                <div class="col-md-10">
                                    <input type="text" id="incident_team" name="incident_team" class="form-control" value="{{ $incident->incident_team }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="date_of_incident" class="text-right col-md-2">Date of Incident</label>
                                <div class="col-md-10">
                                    <input type="date" name="date_of_incident" class="form-control" value="{{ $incident->date_of_incident }}"  required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="time_of_incident" class="text-right col-md-2">Time of Incident</label>
                                <div class="col-md-10">

                                    <input type="text" name="time_of_incident" class="form-control" value="{{ $incident->time_of_incident }}"  required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="impacted_platform" class="col-md-2 text-right">Impacted Platform</label>
                                <div class="col-md-10">
                                    <input type="text" name="impacted_platform" class="form-control" value="{{ $incident->impacted_platform }}"  required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="business_impacted" class="text-right col-md-2">Business Impacted</label>
                                <div class="col-md-10">
                                    <select name="business_impact" class="form-control" required>
                                        <option value="low"  {{ ($incident->business_impact == "low")?"selected":"" }}>Low</option>
                                        <option value="medium" {{ ($incident->business_impact == "medium")?"selected":"" }}>Medium</option>
                                        <option value="high" {{ ($incident->business_impact == "high")?"selected":"" }}>High</option>
                                        <option value="critical" {{ ($incident->business_impact == "critical")?"selected":"" }}>Critical</option>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="who_is_affected" class="text-right col-md-2">Who is affected</label>
                                <div class="col-md-10">
                                    <input type="text" name="who_is_affected" class="form-control" value="{{ $incident->who_is_affected }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="incident_summary_update" class="text-right col-md-2">Incident Summary Update</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="incident_summary_update" required>{{ $incident->incident_summary_update }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="incident_impact" class="text-right col-md-2">Incident Impact</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="incident_impact" required>{{ $incident->incident_impact }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="incident_update_detail" class="text-right col-md-2">Incident Update Detail</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="incident_update_detail" required>{{ $incident->incident_update_detail }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="operations_update" class="text-right col-md-2">Operations Update</label>
                                <div class="col-md-10">
                                    <input type="text" name="operations_update" class="form-control" value="{{ $incident->operations_update }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="comm_or_operations" class="text-right col-md-2">Communication for Operations</label>
                                <div class="col-md-10">
                                    <input type="text" name="comm_or_operations" class="form-control" value="{{ $incident->comm_or_operations }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="next_update" class="text-right col-md-2">Next Update</label>
                                <div class="col-md-10">
                                    <input type="text" name="next_update" class="form-control" value="{{ $incident->next_update }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="remedial" class="text-right col-md-2">Remedial actions to be taken</label>
                                <div class="col-md-10">
                                    <input type="text" name="remedial" class="form-control" value="{{ $incident->remedial }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fca_major" class="text-right col-md-2">FCA Major incident triage</label>
                                <div class="col-md-10">
                                    <input type="text" name="fca_major" class="form-control" value="{{ $incident->fca_major }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary custom-buttons"><i class="fas fa-save mr-2"></i>Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
@endsection
