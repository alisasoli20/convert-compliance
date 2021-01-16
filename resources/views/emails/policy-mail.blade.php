<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Policy Mail</title>
</head>
<body>
<h1>Policy has been received</h1>
<h3>Policy Owner: {{ $policies['policy_owner'] }}</h3>
<h3>Approved By: {{ $policies['approved_by'] }}</h3>
<h3>Approval Date: {{ $policies['approval_date'] }}</h3>
<h3>Review Date: {{ $policies['review_date'] }}</h3>
<h3>Policy Level: {{ $policies['review_date'] }}</h3>
<h3>Download Policy: <a href="{{ route('download.pdf',$policies['pdf']) }}">Download Policy PDF</a></h3>
</body>
</html>
