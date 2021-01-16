<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Incident Mail</title>
</head>
<body>
<h1>Incident has been registered Successfully</h1>
<h3>Status: {{ ($incident['status'] == 0)?"Open":($incident['status'] == 1?"Closed":"Blocked") }}</h3>
<h3>Incident Lead: @foreach($incident['incident_lead'] as $incident_lead ){{ $incident_lead."," }} @endforeach </h3>
<h3>Incident Team: {{ $incident['incident_team'] }}</h3>
<h3>Date of Incident: {{ $incident['date_of_incident'] }}</h3>
<h3>Time of Incident: {{ $incident['time_of_incident'] }}</h3>
<h3>Impacted Platform: {{ $incident['impacted_platform'] }}</h3>
<h3>Business Impacted: {{ $incident['business_impact'] }}</h3>
<h3>Who is affected: {{ $incident['who_is_affected'] }}</h3>
<h3>Incident Summary Update: {{ $incident['incident_summary_update'] }}</h3>
<h3>Incident Impact: {{ $incident['incident_impact'] }}</h3>
<h3>Incident Update Detail: {{ $incident['incident_update_detail'] }}</h3>
<h3>Operations Update : {{ $incident['operations_update'] }}</h3>
<h3>Communication for Operations : {{ $incident['comm_or_operations'] }}</h3>
<h3>Next Update : {{ $incident['next_update'] }}</h3>
<h3>Remedial Actions to be taken : {{ $incident['remedial'] }}</h3>
<h3>FCA Major incident triage : {{ $incident['fca_major'] }}</h3>
</body>
</html>
