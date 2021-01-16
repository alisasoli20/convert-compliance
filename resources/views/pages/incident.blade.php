<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <title>Incident Page</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('home') }}">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('page','incident') }}">Incidents</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('page','privacy-policy') }}">Privacy Policy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('page','process') }}">Process</a>
            </li>
        </ul>

    </div>
</nav>
<div class="container-fluid">
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
        <div class="mt-5 col-auto text-center">
            <form action="{{ route('add.incident') }}" method="POST">
                @csrf
            <table class="table table-bordered  table-responsive" >
                <tbody>
                <tr>
                    <td><label for="status" class="text-right ">Current Status</label></td>
                    <td>
                        <select name="status" class="form-control" id="status" required>
                            <option value="0">Open</option>
                            <option value="1">Closed</option>
                            <option value="2">Blocked</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="incident_lead">Incident Lead</label></td>
                    <td><input type="text" id="incident_lead" name="incident_lead" class="form-control" required></td>
                </tr>
                <tr>
                    <td><label for="incident_team">Incident Team</label></td>
                    <td><input type="text" id="incident_team" name="incident_team" class="form-control" required></td>
                </tr>
                <tr>
                    <td><label for="date_of_incident">Date of Incident</label></td>
                    <td><input type="date" name="date_of_incident" class="form-control" required></td>
                </tr>
                <tr>
                    <td><label for="time_of_incident">Time of Incident</label></td>
                    <td><input type="text" name="time_of_incident" class="form-control" required></td>
                </tr>
                <tr>
                    <td><label for="impacted_platform">Impacted Platform</label></td>
                    <td><input type="text" name="impacted_platform" class="form-control" required></td>
                </tr>
                <tr>
                    <td><label for="business_impacted">Business Impacted</label></td>
                    <td>
                        <select name="business_impact" class="form-control" required>
                            <option value="low">Low</option>
                            <option value="medium">Medium</option>
                            <option value="high">High</option>
                            <option value="critical">Critical</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="who_is_affected">Who is affected</label></td>
                    <td><input type="text" name="who_is_affected" class="form-control" required></td>
                </tr>
                <tr>
                    <td><label for="incident_summary_update">Incident Summary Update</label></td>
                    <td><textarea class="form-control" name="incident_summary_update" required></textarea></td>
                </tr>
                <tr>
                    <td><label for="incident_impact">Incident Impact</label></td>
                    <td><textarea class="form-control" name="incident_impact" required></textarea></td>
                </tr>
                <tr>
                    <td><label for="incident_update_detail">Incident Update Detail</label></td>
                    <td><textarea class="form-control" name="incident_update_detail" required></textarea></td>
                </tr>
                <tr>
                    <td><label for="operations_update">Operations Update</label></td>
                    <td><input type="text" name="operations_update" class="form-control" required></td>
                </tr>
                <tr>
                    <td><label for="comm_or_operations">Communication for Operations</label></td>
                    <td><input type="text" name="comm_or_operations" class="form-control" required></td>
                </tr>
                <tr>
                    <td><label for="next_update">Next Update</label></td>
                    <td><input type="text" name="next_update" class="form-control" required></td>
                </tr>
                <tr>
                    <td><label for="remedial">Remedial actions to be taken</label></td>
                    <td><input type="text" name="remedial" class="form-control" required></td>
                </tr>
                <tr>
                    <td><label for="fca_major">FCA Major incident triage</label></td>
                    <td><input type="text" name="fca_major" class="form-control" required></td>
                </tr>
                <tr>
                    <td colspan="2"><button class="btn btn-primary">Submit</button></td>
                </tr>
                </tbody>
            </table>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 text-center">
            <h1>Open Incident</h1>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td>Name</td>
                    <td>Status</td>
                    <td>Incident Lead</td>
                    <td>Changes</td>
                </tr>
                </thead>
                <tbody>
                    @foreach($open_incidents as $open_incident)
                    <tr>
                        <td>{{ $open_incident->incident_team }}</td>
                        <td>{{  ($open_incident->status == 0)?"Open":($open_incident->status == 1?"Closed":"Blocked")}}</td>
                        <td>{{ $open_incident->incident_lead }}</td>
                        <td><a href="{{ route('edit.incident',$open_incident->id) }}"><i class="fas fa-edit"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-6 text-center">
            <h1>Closed Incident</h1>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td>Name</td>
                    <td>Status</td>
                    <td>Incident Lead</td>
                </tr>
                </thead>
                <tbody>
                @foreach($close_incidents as $close_incident)
                    <tr>
                        <td>{{ $close_incident->incident_team }}</td>
                        <td>{{   ($close_incident->status == 0)?"Open":($close_incident->status == 1?"Closed":"Blocked")}}</td>
                        <td>{{ $close_incident->incident_lead }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js" integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw==" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
