@extends('layouts.master')
@section('page-css')
@endsection

@section('content')
    <section class="form-section pt-5" style="height: 100vh">
        <div class="container request-form">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 style="font-size: 30px;">adapts to the way you work </h1>
                    <p>
                        For example, the IT Development meeting will have an identifier when the user posts the meeting minutes to telegram: ITDEVCC It will also have an identifier in the google calendar: IT Dev Meeting: ITDEVCC Covert compliance will pick up the identifier
                        through a bot in telegram. While it will use a search function on google to identify the meeting and then extract the meeting attendees to write into a Document. This document will contain the information from Telegram, and any subdocuments contained
                        in links, and Calendar. CC will then convert this document into a pdf and date it accordingly. This pdf will then be stored in the relevant folder ready for any audit or retrospective.
                    </p>
                </div>
            </div>
        </div>

    </section>
@endsection
