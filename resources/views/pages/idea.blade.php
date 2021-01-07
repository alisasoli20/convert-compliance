@extends('layouts.master')
@section('page-css')
    <style>
        body {
            background-color: white;
        }

        div {
            margin-left: 280px;
            margin-top: 100px;
            color:black;
            text-align: center;
            width: 800px;
            font-size: 20px;
            color: white;
        }

        h1 {
            margin-top: 100px;
            text-align: center;
        }

        div.links {

            position: top right;


            margin-top: 0px;
            float: right;
            width: 40%;

        }
        a{
            color: white;
            text-decoration: none;
            padding-left: 50px;
            font-size: 16px;
        }

    </style>
@endsection
@section('content')
<br><br>

<h1>Compliance shouldn’t be painful.</h1>

<div>

    Documenting decisions and meetings can be a drain on resource and time. Often key decisions and developments can go undocumented or aren’t saved in the right place. Effectively making them useless for audit purposes and may mean that the business is found
    to fall short of its regulatory obligations. Covert Compliance assimilates itself to the way you work. It will pick up messages in telegram that have an identifier and then extract the information and any file or document attached within the message
    create a copy in PDF format and export that to an IT Development file with each weeks meeting notes, action points and attendees.



</div>
@endsection
