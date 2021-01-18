@extends('layouts.master')
@section('page-css')
@endsection
@section('content')
    <section class="form-section pt-4 pb-4">
        <div class="container  request-form">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="row mt-5 justify-content-center">
                <div class="col-md-12 text-center">
                    <h1>Incidents</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="mt-5 col-md-12 text-right">
                    <form action="{{ route('add.incident') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="status" class="text-right col-md-2">Current Status</label>
                            <div class="col-md-10">
                                <select name="status" class="form-control" id="status" required>
                                    <option value="0">Open</option>
                                    <option value="1">Closed</option>
                                    <option value="2">Blocked</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="incident_lead" class="text-right col-md-2">Incident Lead</label>
                            <div class="col-md-10">
                                <input type="text" id="incident_lead" name="incident_lead" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="incident_team" class="text-right col-md-2">Incident Team</label>
                            <div class="col-md-10">
                                <input type="text" id="incident_team" name="incident_team" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date_of_incident" class="text-right col-md-2">Date of Incident</label>
                            <div class="col-md-10">
                                <input type="date" name="date_of_incident" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="time_of_incident" class="text-right col-md-2">Time of Incident</label>
                            <div class="col-md-10">
                                <input type="text" name="time_of_incident" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="impacted_platform" class="text-right col-md-2">Impacted Platform</label>
                            <div class="col-md-10">
                                <input type="text" name="impacted_platform" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="business_impacted" class="text-right col-md-2">Business Impacted</label>
                            <div class="col-md-10">
                                <select name="business_impact" class="form-control" required>
                                    <option value="low">Low</option>
                                    <option value="medium">Medium</option>
                                    <option value="high">High</option>
                                    <option value="critical">Critical</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="who_is_affected" class="text-right col-md-2">Who is affected</label>
                            <div class="col-md-10">
                                <input type="text" name="who_is_affected" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="incident_summary_update" class="text-right col-md-2">Incident Summary Update</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="incident_summary_update" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="incident_impact" class="text-right col-md-2">Incident Impact</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="incident_impact" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="incident_update_detail" class="text-right col-md-2">Incident Update Detail</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="incident_update_detail" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="operations_update" class="text-right col-md-2">Operations Update</label>
                            <div class="col-md-10">
                                <input type="text" name="operations_update" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="comm_or_operations" class="text-right col-md-2">Communication for Operations</label>
                            <div class="col-md-10">
                                <input type="text" name="comm_or_operations" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="next_update" class="text-right col-md-2">Next Update</label>
                            <div class="col-md-10">
                                <input type="text" name="next_update" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fca_major" class="text-right col-md-2">FCA Major incident triage</label>
                             <div class="col-md-10">
                                 <input type="text" name="fca_major" class="form-control" required>
                             </div>
                        </div>
                        <div class="form-group row">
                            <label for="remedial" class="text-right col-md-2">Remedial actions to be taken</label>
                            <div class="col-md-10">
                                <input type="text" name="remedial" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button class="btn btn-primary custom-buttons">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Open Incidents</h3>
                    <table class="table table-bordered table-responsive-lg" id="open_incident_table">
                        <thead>
                        <tr>
                            <td>#</td>
                            <td>Name</td>
                            <td>Status</td>
                            <td>Incident Lead</td>
                            <td>Changes</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($open_incidents as $open_incident)
                            <tr>
                                <td>{{ $open_incident->id }}</td>
                                <td>{{ $open_incident->incident_team }}</td>
                                <td>{{  ($open_incident->status == 0)?"Open":($open_incident->status == 1?"Closed":"Blocked")}}</td>
                                <td>{{ $open_incident->incident_lead }}</td>
                                <td><a href="{{ route('edit.incident',$open_incident->id) }}"><i class="fas fa-edit"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <hr class="text-blue">
                <div class="col-md-12 text-center mt-5">
                    <h3>Closed Incidents</h3>
                    <table class="table table-bordered" id="close_incident_table">
                        <thead>
                        <tr>
                            <td>#</td>
                            <td>Name</td>
                            <td>Status</td>
                            <td>Incident Lead</td>
                            <td>Download PDF</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($close_incidents as $close_incident)
                            <tr>
                                <td>{{ $close_incident->id }}</td>
                                <td>{{ $close_incident->incident_team }}</td>
                                <td>{{   ($close_incident->status == 0)?"Open":($close_incident->status == 1?"Closed":"Blocked")}}</td>
                                <td>{{ $close_incident->incident_lead }}</td>
                                <td><a href="{{ route('download.pdf',$close_incident->pdf) }}"><i class="fa fa-download"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('page-script')
    <script>
        $('#open_incident_table').DataTable()
        $('#close_incident_table').DataTable()
    </script>
@endsection
