<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Process Mail</title>
</head>
<body>
<h1>Process has been received</h1>
<h3>Process Owner: {{ $process['process_owner'] }}</h3>
<h3>Approved By: {{ $process['approved_by'] }}</h3>
<h3>Approval Date: {{ $process['approval_date'] }}</h3>
<h3>Review Date: {{ $process['review_date'] }}</h3>
<h3>Process Level: {{ $process['process_level'] }}</h3>
<h3>Download Process: <a href="{{ route('download.pdf',$process['pdf']) }}">Download Process PDF</a></h3>
</body>
</html>
