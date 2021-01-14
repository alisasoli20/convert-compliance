<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Incident Page</title>
</head>
<body>
<div class="container-fluid">
    <h1>Incidents</h1>
    <div class="row">
        <div class="mt-5 col-md-12 text-center">
            <form action="">
                <div class="form-group row">
                    <label for="status" class="col-md-6 col-form-label">Current Status</label>
                    <div class="col-md-6">
                        <select name="status" class="form-control" id="status">
                            <option value="0">Open</option>
                            <option value="1">Closed</option>
                            <option value="2">Blocked</option>
                        </select>
                    </div>

                </div>
                <div class="form-group">
                    <label for="incident_lead">Incident Lead</label>
                    <input type="text" id="incident_lead" name="incident_lead" class="form-control">
                </div>
                <div class="form-group">
                    <label for="incident_team">Incident Team</label>
                    <input type="text" id="incident_team" name="incident_team" class="form-control">
                </div>
                <div class="form-group">
                    <label for="date_of_incident">Date of Incident</label>
                    <input type="date" name="date_of_incident" class="form-control">
                </div>
                <div class="form-group">
                    <label for="time_of_incident">Time of Incident</label>
                    <input type="text" name="time_of_incident" class="form-control">
                </div>
                <div class="form-group">
                    <label for="impacted_platform">Impacted Platform</label>
                    <input type="text" name="impacted_platform" class="form-control">
                </div>
                <div class="form-group">
                    <label for="business_platform">Business Platform</label>
                    <input type="text" name="business_platform" class="form-control">
                </div>
                <div class="form-group">
                    <label for="who_is_affected">Who is affected</label>
                    <input type="text" name="who_is_affected" class="form-control">
                </div>
                <div class="form-group">
                    <label for="incident_summary_update">Incident Summary Update</label>
                    <input type="text" name="incident_summary_update" class="form-control">
                </div>
                <div class="form-group">
                    <label for="incident_impact">Incident Impact</label>
                    <input type="text" name="incident_impact" class="form-control">
                </div>
                <div class="form-group">
                    <label for="incident_update_detail">Incident Update Detail</label>
                    <input type="text" name="incident_update_detail" class="form-control">
                </div>
                <div class="form-group">
                    <label for="operations_update">Operations Update</label>
                    <input type="text" name="operations_update" class="form-control">
                </div>
                <div class="form-group">
                    <label for="comm_or_operations">Communication for Operations</label>
                    <input type="text" name="comm_or_operations" class="form-control">
                </div>
                <div class="form-group">
                    <label for="next_update">Next Update</label>
                    <input type="text" name="next_update" class="form-control">
                </div>
                <div class="form-group">
                    <label for="remedial">Remedial actions to be taken</label>
                    <input type="text" name="remedial" class="form-control">
                </div>
                <div class="form-group">
                    <label for="fca_major">FCA Major incident triage</label>
                    <input type="text" name="fca_major" class="form-control">
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
