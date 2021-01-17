{{--
@extends('layouts.master')
@section('page-css')

    <style>

        div.links{
            float: right;
        }
        a{
            padding: 0 30px;
            color: white;
        }

        div.form-group1{
            margin-left: 100px;
        }

        div.form-group2{
            position: absolute;
            margin-left: 400px;
            margin-top: -500px;

        }

        div.form-group3{
            position: absolute;
            margin-left: 1000px;
            margin-top: -500px;

        }

        #submit{
            color: white;
            background-color:rgb(194, 130, 133);
            font-size: xx-large;
            margin:80px 0px;
            padding: 50px 100px;
            border-radius: 50px;
        }
        .discard-btn{
            color: white;
            background-color:red;
            font-size: xx-large;
            maring-top: 50px;
            padding: 50px 100px;
            border-radius: 50px;
            text-decoration: none;
        }
        p#warning{

            position: absolute;
            margin-left: -30px;
            width: 400px;

        }
        .add-message{
            float: right;
            color: white;
            background-color:blueviolet;
            font-size: large;
            margin-bottom: 30px;
            margin-right: 50px;
            border-radius: 50px;
            text-decoration: none;
        }
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 80%;
            border-radius: 5px;
            margin: 0 auto;
        }

        #customers td, #customers th {
            border: 1px solid #ffffff;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #6677a5;}

        #customers tr:hover {background-color: #2f6dbf;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #68448e;
            color: white;
        }
        .approved_data{
            margin-top: 200px;
            align-items: center;
            text-align: center;
        }
        .save-changes-btn{
            float: right;
            color: white;
            background-color:blueviolet;
            font-size: large;
            margin-bottom: 30px;
            margin-right: 50px;
            border-radius: 50px;
            text-decoration: none;
        }
    </style>
@endsection
@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if(session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <br>

    <br><br><br><br><br>

    <h2>{{ $title }}</h2>
    <a href="{{ route('add.message',$title)}}" class="add-message">Add Message</a>
    <a href="" class="save-changes-btn">Save Changes</a>
    <p>Please fill in the form below following every executive level decision:</p>

    <br> <br>
    <form method="POST" action="{{ ($data!=null)?(($data->submit_for_review == null)?route('submit.for.review',$data->id):route('submit.message',$data->id)):"#" }}">
        @csrf
        <div class="form-group1">
            <input name="slug" value="{{ $title }}" hidden>
            <input name="meeting" value="{{ ($data!=null)?$data->meeting:"" }}" hidden>
            <div>
                <label for="formGroupExampleInput">Meeting Date:</label>
                <br>
                <input type="text" name="meeting_date" class="form-control" id="formGroupExampleInput" placeholder="Insert date (dd/mm/yy)" value="{{ ($data!=null)?$data->meeting_date:'' }}">
                <br><br>

            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Present:</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox1" value="MR" {{ ($data!=null)?(in_array('Mykhailo Rogalskiy',$data->present)?"checked":""):"" }}>
                    <label class="form-check-label" for="inlineCheckbox1">Mykhailo Rogalskiy</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox2" value="RE" {{ ($data!=null)?(in_array('Rob Escott',$data->present)?"checked":""):"" }}>
                    <label class="form-check-label" for="inlineCheckbox2">Rob Escott</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox3" value="SH" {{ ($data!=null)?(in_array('Simon Harris',$data->present)?"checked":""):"" }}>
                    <label class="form-check-label" for="inlineCheckbox3">Simon Harris</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox4" value="CH" {{ ($data!=null)?(in_array('Colin Hollingsbee',$data->present)?"checked":""):"" }}>
                    <label class="form-check-label" for="inlineCheckbox1">Colin Hollingsbee</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox5" value="AM" {{ ($data!=null)?(in_array('Anna Maxim',$data->present)?"checked":""):"" }}>
                    <label class="form-check-label" for="inlineCheckbox2">Anna Maxim</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox6" value="SA" {{ ($data!=null)?(in_array('Scott Andrews',$data->present)?"checked":""):"" }}>
                    <label class="form-check-label" for="inlineCheckbox3">Scott Andrews</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox7" value="SW" {{ ($data!=null)?(in_array('Stephen Weeks',$data->present)?"checked":""):"" }}>
                    <label class="form-check-label" for="inlineCheckbox2">Stephen Weeks</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox8" value="AMM" {{ ($data!=null)?(in_array('Amanda Morgan',$data->present)?"checked":""):"" }}>
                    <label class="form-check-label" for="inlineCheckbox1">Amanda Morgan</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox9" value="JS" {{ ($data!=null)?(in_array('Josh Stedman',$data->present)?"checked":""):"" }}>
                    <label class="form-check-label" for="inlineCheckbox2">Josh Stedman</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox10" value="SA" {{ ($data!=null)?(in_array('Kendra Orandi',$data->present)?"checked":""):"" }}>
                    <label class="form-check-label" for="inlineCheckbox3">Kendra Orandi</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox11" value="option11" {{ ($data!=null)?(in_array('Max Pugach',$data->present)?"checked":""):"" }}>
                    <label class="form-check-label" for="inlineCheckbox1">Max Pugach</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox12" value="option12" {{ ($data!=null)?(in_array('Alex Dubilet',$data->present)?"checked":""):"" }}>
                    <label class="form-check-label" for="inlineCheckbox2">Alex Dubilet</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox13" value="MK" {{ ($data!=null)?(in_array('Maryna Koreshnykova',$data->present)?"checked":""):"" }}>
                    <label class="form-check-label" for="inlineCheckbox3">Maryna Koreshnykova</label>
                </div>
                <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="List other attendees"> -->
                <textarea name="" id="" cols="25" rows="2" placeholder="list other attendees"></textarea>



                <br><br>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Not Present:</label>
                </div>
                <!-- <input type="textarea" class="form-control" id="formGroupExampleInput2" placeholder="List not present"> -->
                <textarea name="not_present" id="" cols="25" rows="2" name placeholder="list not present">@if($data != null) @foreach($data->not_present as $not_present){{ $not_present }}@endforeach @endif</textarea>


            </div>
        </div>

        <div class="form-group2">


            <div>
                <label for="formGroupExampleInput">Actions:</label>
                <br>
                <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="List actions"> -->
                <textarea name="actions" id="" cols="60" rows="10" placeholder="List actions">@if($data !=null) @foreach($data->actions as $action){{ $action }}&#13;&#10;@endforeach @endif</textarea>
            </div>




            <div>
                <label for="formGroupExampleInput2">Key Decisons:</label>
                <br>
                <textarea name="key_decisions" id="" cols="60" rows="10" placeholder="List key decisions">@if($data!= null) @foreach($data->key_decisions as $key_decision){{ $key_decision }}&#13;&#10;@endforeach @endif</textarea>


            </div>

            <div>

                <label for="formGroupExampleInput2">Matters arrising:</label>
                <br>
                <textarea name="notes" id="" cols="60" rows="10" placeholder="List matters arising">@if($data != null) @foreach($data->notes as $note){{ $note }}&#13;&#10;@endforeach @endif</textarea>



            </div>





        </div>

        <div class="form-group3">
            <div>

                <label for="formGroupExampleInput">Links to supporting documents:</label>
                <br>
                @if($data != null)
                @foreach($data->link as $link)
                    <input name="link[]" type="text" class="form-control" id="formGroupExampleInput" placeholder="Insert link" size="40" value="{{ $link }}">
                    <br>
                @endforeach
                @endif

            </div>

            <br><br><br>

            <p id="warning"> Please ensure all details on this form are correct before pressing submit. You will not be able to make changes beyond this point.</p>
            <br>
            <br>
            <br>
            <br>

            <input type="submit" name="" id="submit" value="{{ ($data!=null)?(($data->submit_for_review != null)?"Submit":"Submit for Review"):"Submit for Review" }}" {{ ($data !=null)?(($data->submit_for_review != null)?(($data->submit_for_review >= 1)?"enabled":"disabled"):""):"disabled" }}>
            <a href="{{ ($data!=null)?route('discard.message',[$data->id,$data->meeting]):"" }}" class="discard-btn">Discard Message</a>
        </div>


    </form>
    <div class="approved_data">
        <table id="customers">
            <tr>
                <th>ID</th>
                <th>Meeting Date</th>
                <th>Meeting</th>
                <th>Submit For Review On</th>
                <th>Submitted At</th>
                <th>Submitted By</th>
                <th>Status</th>
            </tr>
            @foreach($approved_data as $approved)
            <tr>
                <td>{{ $approved->id }}</td>
                <td>{{ $approved->meeting_date }}</td>
                <td>{{ $approved->meeting }}</td>
                <td>{{ \Carbon\Carbon::parse($approved->submit_for_review)->diffForHumans() }}</td>
                <td>{{ \Carbon\Carbon::parse($approved->submitted_at)->diffForHumans() }}</td>
                <td>{{ $approved->user->name }}</td>
                <td>{{ "Submitted" }}</td>
            </tr>
            @endforeach
        </table>
    </div>
    <br>
@endsection
--}}
@extends('layouts.master')
@section('page-css')
@endsection
@section('content')
<section class="form-section pt-4 pb-4">
    <div class="container request-form">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @if($data == null)
        <div class="alert alert-info">
            No Messages available for now
        </div>
        @endif
        <div class="row mt-2">
            <div class="col text-center">
                <h1>{{ $title }}</h1>
            </div>
        </div>
            <form method="POST" action="{{ ($data!=null)?(($data->submit_for_review == null)?route('submit.for.review',$data->id):route('submit.message',$data->id)):"#" }}">
            @csrf
                <input type="text" value="{{ ($data!=null)?$data->meeting:"" }}" name="meeting" hidden>
                <div class="row">
                    <div class="col">
                        <div class="form-group row">
                            <div class="col">
                                <label class="" for="exampleFormControlInput1">Meeting</label>
                                <input type="text" name="slug" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{ ($data!=null)?$data->meeting:"" }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="exampleFormControlSelect1">Meeting Date</label>
                                <input type="date" name="meeting_date" class="form-control" id="formGroupExampleInput" placeholder="Insert date (dd/mm/yy)" value="{{ ($data!=null)?$data->meeting_date:'' }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label for="formGroupExampleInput">Actions:</label>
                                <textarea name="actions" id="" rows="5" class="form-control"  placeholder="List actions">@if($data !=null) @foreach($data->actions as $action){{ $action }}&#13;&#10;@endforeach @endif</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="formGroupExampleInput2">Key Decisons:</label>
                                <textarea name="key_decisions" id="" class="form-control" rows="5" placeholder="List key decisions">@if($data!= null) @foreach($data->key_decisions as $key_decision){{ $key_decision }}&#13;&#10;@endforeach @endif</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label class="col-form-label" for="formGroupExampleInput2">Matters arrising:</label>
                                <textarea name="notes" class="form-control" id="" rows="5" placeholder="List matters arising">@if($data != null) @foreach($data->notes as $note){{ $note }}&#13;&#10;@endforeach @endif</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="formGroupExampleInput">Links to supporting documents:</label>
                                @if($data != null) @foreach($data->link as $link)
                                    <input name="link[]" type="text" class="form-control" id="formGroupExampleInput" placeholder="Insert link" size="40" value="{{ $link }}">@endforeach @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label>Presents</label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox1" value="MR" {{ ($data!=null)?(in_array( 'Mykhailo Rogalskiy',$data->present)?"checked":""):"" }}>
                                            <label class="form-check-label mr-3" for="inlineCheckbox1">Mykhailo Rogalskiy</label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox6" value="SA" {{ ($data!=null)?(in_array( 'Scott Andrews',$data->present)?"checked":""):"" }}>
                                            <label class="form-check-label mr-3" for="inlineCheckbox3">Scott Andrews</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox7" value="SW" {{ ($data!=null)?(in_array( 'Stephen Weeks',$data->present)?"checked":""):"" }}>
                                            <label class="form-check-label mr-3" for="inlineCheckbox2">Stephen Weeks</label>
                                        </div>
                                        <div class="form-check f">
                                            <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox8" value="AMM" {{ ($data!=null)?(in_array( 'Amanda Morgan',$data->present)?"checked":""):"" }}>
                                            <label class="form-check-label mr-3" for="inlineCheckbox1">Amanda Morgan</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox11" value="option11" {{ ($data!=null)?(in_array( 'Max Pugach',$data->present)?"checked":""):"" }}>
                                            <label class="form-check-label mr-3" for="inlineCheckbox1">Max Pugach</label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox12" value="option12" {{ ($data!=null)?(in_array( 'Alex Dubilet',$data->present)?"checked":""):"" }}>
                                            <label class="form-check-label mr-3" for="inlineCheckbox2">Alex Dubilet</label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox13" value="MK" {{ ($data!=null)?(in_array( 'Maryna Koreshnykova',$data->present)?"checked":""):"" }}>
                                            <label class="form-check-label mr-3" for="inlineCheckbox3">Maryna Koreshnykova</label>
                                        </div>
                                    </div>
                                    <div class="col-md-9 text-left">
                                        <div class="form-check">
                                            <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox2" value="RE" {{ ($data!=null)?(in_array( 'Rob Escott',$data->present)?"checked":""):"" }}>
                                            <label class="form-check-label mr-3" for="inlineCheckbox2">Rob Escott</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox3" value="SH" {{ ($data!=null)?(in_array( 'Simon Harris',$data->present)?"checked":""):"" }}>
                                            <label class="form-check-label mr-3" for="inlineCheckbox3">Simon Harris</label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox4" value="CH" {{ ($data!=null)?(in_array( 'Colin Hollingsbee',$data->present)?"checked":""):"" }}>
                                            <label class="form-check-label mr-3" for="inlineCheckbox1">Colin Hollingsbee</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox5" value="AM" {{ ($data!=null)?(in_array( 'Anna Maxim',$data->present)?"checked":""):"" }}>
                                            <label class="form-check-label mr-3" for="inlineCheckbox2">Anna Maxim</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox9" value="JS" {{ ($data!=null)?(in_array( 'Josh Stedman',$data->present)?"checked":""):"" }}>
                                            <label class="form-check-label mr-3" for="inlineCheckbox2">Josh Stedman</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox10" value="SA" {{ ($data!=null)?(in_array( 'Kendra Orandi',$data->present)?"checked":""):"" }}>
                                            <label class="form-check-label mr-3" for="inlineCheckbox3">Kendra Orandi</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="formGroupExampleInput2">Not Present:</label>
                                <textarea name="not_present" id="" class="form-control" rows="2" placeholder="list not present">@if($data != null) @foreach($data->not_present as $not_present){{ $not_present }}@endforeach @endif</textarea>
                            </div>
                        </div>
                        <!-- <input type="textarea" class="form-control" id="formGroupExampleInput2" placeholder="List not present"> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <button class="btn btn-default text-white custom-buttons" name=""   {{ ($data !=null)?(($data->submit_for_review != null)?(($data->submit_for_review >=1)?"enabled":"disabled"):""):"disabled" }}>{{ ($data!=null)?(($data->submit_for_review != null)?" Submit ":"Submit for Review "):"Submit for Review " }}</button>
                    </div>
                    <div class="col-md-12 mb-4">
                        <a href="{{ route('add.message',$title)}}" class="btn btn-default text-white custom-buttons"><i class="fas fa-plus text-white mr-3"></i>Add Message</a>
                    </div>
                   {{-- <div class="col-md-12 mb-4">
                        <a href="{{ ($data!=null)?route('save.changes',[$data->id,$data->meeting]):"" }}" class="btn btn-default text-white custom-buttons" ><i class="fas fa-save text-white mr-3"></i>Save Changes</a>
                    </div>--}}
                    <div class="col-md-12 mb-4">
                        <a href="{{ ($data!=null)?route('discard.message',[$data->id, $data->meeting]):"#"}}" class="btn btn-default text-white custom-buttons"><i class="fas fa-times text-white mr-3"></i>Discard Message</a>
                    </div>
                </div>
            </form>

        <div class="row">
            <div class="col-12">
                <table class="table table-bordered table-responsive-lg table-responsive-md" id="example">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Meeting</th>
                        <th scope="col">Department</th>
                        <th scope="col">Meeting Date</th>
                        <th scope="col">Submitted for Review At</th>
                        <th scope="col">Submitted At</th>
                        <th scope="col">Submitted By</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($approved_data as $approved)
                    <tr>
                        <td>{{ $approved->id }}</td>
                        <td>{{ $approved->meeting }}</td>
                        <td>{{ $approved->slug }}</td>
                        <td>{{ $approved->meeting_date }}</td>
                        <td>{{ $approved->submit_for_review }}</td>
                        <td>{{ $approved->submitted_at }}</td>
                        <td>{{ $approved->user->name }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection
@section('page-script')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection
