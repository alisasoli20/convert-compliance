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
        .logo-div {
            left: 50%;
            align-items: center;
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
            Current Status
        </td>
        <td>
            {{ ($data['status'] == 0)?"Opened":(($data['status'] == 1)?"Closed":"Blocked") }}
        </td>
    </tr>
    <tr>
        <td>
            Incident Team
        </td>
        <td>
            {{ $data['incident_team'] }}
        </td>
    </tr>
    <tr>
         <td>
            Incident Lead
        </td>
        <td>
            {{ $data['incident_lead'] }}
        </td>
    </tr>
    <tr>
        <td>
            Date of Incident
        </td>
        <td>
            {{ $data['date_of_incident'] }}
        </td>
    </tr>
    <tr>
        <td>
            Time of Incident
        </td>
        <td>
            {{ $data['time_of_incident'] }}
        </td>
    </tr>
    <tr>
        <td>
            Impacted Platform
        </td>
        <td>
            {{ $data['impacted_platform'] }}
        </td>
    </tr><tr>
        <td>
            Business Impact
        </td>
        <td>
            {{ $data['business_impact'] }}
        </td>
    </tr>
    <tr>
        <td>
            Who is affected
        </td>
        <td>
            {{ $data['who_is_affected'] }}
        </td>
    </tr>
    <tr>
        <td>
            Incident Summary Update
        </td>
        <td>
            {{ $data['incident_summary_update'] }}
        </td>
    </tr>
    <tr>
        <td>
            Incident Impact
        </td>
        <td>
            {{ $data['incident_impact'] }}
        </td>
    </tr>
    <tr>
        <td>
            Incident Update Detail
        </td>
        <td>
            {{ $data['incident_update_detail'] }}
        </td>
    </tr>
    <tr>
        <td>
            Operations Update
        </td>
        <td>
            {{ $data['operations_update'] }}
        </td>
    </tr>
    <tr>
        <td>
            Communication and Operations
        </td>
        <td>
            {{ $data['comm_or_operations'] }}
        </td>
    </tr>
    <tr>
        <td>
            Next Update
        </td>
        <td>
            {{ $data['next_update'] }}
        </td>
    </tr>
    <tr>
        <td>
            Remedial
        </td>
        <td>
            {{ $data['remedial'] }}
        </td>
    </tr>
    <tr>
        <td>
            FCA Major
        </td>
        <td>
            {{ $data['fca_major'] }}
        </td>
    </tr>
    <tr>
        <td>
            Last Updated By
        </td>
        <td>
            {{ auth()->user()->name }}
        </td>
    </tr>
    <tr>
        <td>
            Last Updated At
        </td>
        <td>
            {{ \Carbon\Carbon::now()->diffForHumans() }}
        </td>
    </tr>
    {{--<tr>
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
    </tr>--}}
</table>
</body>
</html>
