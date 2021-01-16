<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <title>Privacy Policy</title>
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
    <div class="row">
        <div class="mt-5 col-md-12 text-center">
            <h1>Process</h1>
            <a href="{{ route('add.process') }}" class="float-right btn btn-primary mb-5">Upload New Process</a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name of Process</th>
                    <th scope="col">Level</th>
                    <th scope="col">Owner</th>
                    <th scope="col">Approval Date</th>
                    <th scope="col">Review Date</th>
                </tr>
                </thead>
                <tbody>
                @if(isset($approved_processes))
                    @foreach($approved_processes as $approved_process)
                        <tr>
                            <td>{{ $approved_process->id }}</td>
                            <td>{{ $approved_process->process_name }}</td>
                            <td>{{ $approved_process->process_level }}</td>
                            <td>{{ $approved_process->process_owner }}</td>
                            <td>{{ $approved_process->approval_date }}</td>
                            <td>{{ $approved_process->review_date }}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name of Process</th>
                    <th scope="col">Level</th>
                    <th scope="col">Action required by(list date below)</th>

                </tr>
                </thead>
                <tbody>
                @if(isset($pending_processes))
                    @foreach($pending_processes as $pending_process)
                        <tr>
                            <td>{{ $pending_process->id }}</td>
                            <td>{{ $pending_process->process_name }}</td>
                            <td>{{ $pending_process->process_level }}</td>
                            <td><a href="{{ route('edit.process',$pending_process->id) }}"><i class="fas fa-edit"></i></a></td>
                        </tr>
                    @endforeach
                @endif
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
