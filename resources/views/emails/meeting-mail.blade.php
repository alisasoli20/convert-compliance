<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meeting Mail</title>
</head>
<body>
<h1>Meeting has been Submitted For Review</h1>
<h3>Date: {{ $meeting['meeting_date'] }}</h3>
<h3>Department: {{ $meeting['meeting'] }}</h3>
<h3>Presents: {{ $meeting['present'] }}</h3>
<h3>Not Present: {{ $meeting['not_present'] }}</h3>
<h3>Actions: {{ $meeting['actions'] }}</h3>
<h3>Key Decisions: {{ $meeting['key_decisions'] }}</h3>
<h3>Not Present: {{ $meeting['not_present'] }}</h3>
<h3>Google Drive Links: {{ $meeting['link'] }}</h3>
<h3>Notes: {{ $meeting['notes'] }}</h3>
<h3>You can edit the meeting details if you have permission: </h3>
<a href="{{ route('save.changes',[$meeting['id'],$meeting['meeting']]) }}">Go to meeting</a>
</body>
</html>
