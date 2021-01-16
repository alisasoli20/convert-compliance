<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
    <div class="row">

        <div class="mt-5 col-md-12 text-center">
            <h3>To upload a new policy please complete the steps below:</h3>
            <form method="POST" action="" enctype="multipart/form-data">
                @csrf
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="label col-md-6">View Uploaded PDF</label>
                            <div class="col-md-6">
                                <a href="{{ asset('pdf/'.$process->pdf) }}" target="_blank">View Process PDF</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="label col-md-6">Process Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="process_name" value="{{ $process->process_name }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="label col-md-6">Upload Document</label>
                            <div class="col-md-6">
                                <input type="file" name="pdf">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="label col-md-6">Process Owner</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="process_owner" value="{{ $process->process_owner }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="label col-md-6">Approved By</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="approved_by" value="{{ $process->approved_by }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="label col-md-6">Approval Date</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="approval_date" value="{{ $process->approval_date }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="label col-md-6">Review Date</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="review_date" value="{{ $process->review_date }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="label col-md-6">Process Level</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="process_level" value="{{ $process->process_level }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="label col-md-6">Process Status</label>
                            <div class="col-md-6">
                                <select class="form-control" name="status">
                                    <option value="pending" {{  ($process->status == "pending")?"selected":"" }}>Pending</option>
                                    <option value="approved" {{  ($process->status == "approved")?"selected":"" }}>Approved</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="label col-md-12">Distribution List:</label>
                            @foreach($users as $user)
                                <div class="col-md-12 text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{ $user->email }}" name="distribution_list[]" id="defaultCheck1" {{ ($user->email == $process->distribution_list)?"checked":'' }}>
                                        <label class="form-check-label" for="defaultCheck1">
                                            {{ $user->name }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="form-group row mt-5">
                            <div class="col-md-12">
                                <button class="btn btn-primary">Update Process</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
