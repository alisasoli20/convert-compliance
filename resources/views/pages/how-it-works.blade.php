@extends('layouts.master')
@section('page-css')
        <style>
            body {
                background-color: white
            }

            div {
                margin-left: 280px;
                margin-top: 100px;
                color:black;
                text-align: center;
                width: 800px;
                font-size: 20px;
                color:white
            }
            div.links{
                position: absolute;
                margin-top: 0px;
                margin-left: 900px;
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



<br><br><br><br><br><br><br><br>
<h1 style="font-size: 30px;">adapts to the way you work </h1>

<div>

    For example, the IT Development meeting will have an identifier when the user posts the meeting minutes to telegram: ITDEVCC It will also have an identifier in the google calendar: IT Dev Meeting: ITDEVCC Covert compliance will pick up the identifier
    through a bot in telegram. While it will use a search function on google to identify the meeting and then extract the meeting attendees to write into a Document. This document will contain the information from Telegram, and any subdocuments contained
    in links, and Calendar. CC will then convert this document into a pdf and date it accordingly. This pdf will then be stored in the relevant folder ready for any audit or retrospective.
</div>

@endsection
