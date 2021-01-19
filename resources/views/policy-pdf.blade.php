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
            Policy Name
        </td>
        <td>
            {{$data['policy_name']}}
        </td>
    </tr>
    <tr>
        <td>
            Policy Owner
        </td>
        <td>
            {{$data['policy_owner']}}
        </td>
    </tr>
    <tr>
        <td>
            Approved By
        </td>
        <td>
            {{$data['approved_by']}}
        </td>
    </tr>
    <tr>
        <td>
            Approval Date
        </td>
        <td>
            {{$data['approval_date']}}
        </td>
    </tr>
    <tr>
        <td>
            Policy Level
        </td>
        <td>
            {{ $data['policy_level'] }}
        </td>
    </tr>
    <tr>
        <td>
            Distribution List
        </td>
        <td>
            @foreach($data['distribution_list'] as $list){{ $list }}@endforeach
        </td>
    </tr>

</table>
</body>
</html>
