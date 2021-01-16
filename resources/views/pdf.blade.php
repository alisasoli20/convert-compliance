<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
        .logo-div img{
            margin-left: 30px;
            left: 50%;
        }
    </style>
</head>
<body>
<div class="logo-div">
    <img src="{{ asset('images/logo.png') }}">
</div>
<table class="table table-bordered" id="customers">
    <tr>
        <th>Name</th>
        <th>Value</th>
    </tr>
    <tr>
        <td>
            Meeting Date
        </td>
        <td>
            {{$meeting->meeting_date}}
        </td>
    </tr>
    <tr>
        <td>
            Meeting
        </td>
        <td>
            {{$meeting->meeting}}
        </td>
    </tr>
    <tr>
        <td>
            Present
        </td>
        <td>
            {{$meeting->present}}
        </td>
    </tr>
    <tr>
        <td>
            Not Present
        </td>
        <td>
            {{$meeting->not_present}}
        </td>
    </tr>
    <tr>
        <td>
            Actions
        </td>
        <td>
            {{$meeting->actions}}
        </td>
    </tr>
    <tr>
        <td>
            Key Decisions
        </td>
        <td>
            {{$meeting->key_decisions}}
        </td>
    </tr>
    <tr>
        <td>
            Matter Arising
        </td>
        <td>
            {{$meeting->notes}}
        </td>
    </tr>
    <tr>
        <td>
            Links
        </td>
        <td>
            {{$meeting->link}}
        </td>
    </tr>
</table>
</body>
</html>
