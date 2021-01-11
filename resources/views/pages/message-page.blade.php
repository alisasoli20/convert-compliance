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

        p#warning{

            position: absolute;
            margin-left: -30px;
            width: 400px;

        }


    </style>
@endsection
@section('content')

    <br>

    <br><br><br><br><br>

    <h2>{{ $title }}</h2>
    <p>Please fill in the form below following every executive level decision:</p>

    <br> <br>
    <form method="POST" action="#">
        <div class="form-group1">

            <div>
                <label for="formGroupExampleInput">Meeting Date:</label>
                <br>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Insert date (dd/mm/yy)" value="{{ ($data!=null)?$data->meeting_date:'' }}">
                <br><br>

            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Present:</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" {{ ($data!=null)?(in_array('Mykhailo Rogalskiy',$data->present)?"checked":""):"" }}>
                    <label class="form-check-label" for="inlineCheckbox1">Mykhailo Rogalskiy</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" {{ ($data!=null)?(in_array('Rob Escott',$data->present)?"checked":""):"" }}>
                    <label class="form-check-label" for="inlineCheckbox2">Rob Escott</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" {{ ($data!=null)?(in_array('Simon Harris',$data->present)?"checked":""):"" }}>
                    <label class="form-check-label" for="inlineCheckbox3">Simon Harris</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4" {{ ($data!=null)?(in_array('Colin Hollingsbee',$data->present)?"checked":""):"" }}>
                    <label class="form-check-label" for="inlineCheckbox1">Colin Hollingsbee</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5" {{ ($data!=null)?(in_array('Anna Maxim',$data->present)?"checked":""):"" }}>
                    <label class="form-check-label" for="inlineCheckbox2">Anna Maxim</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6" {{ ($data!=null)?(in_array('Scott Andrews',$data->present)?"checked":""):"" }}>
                    <label class="form-check-label" for="inlineCheckbox3">Scott Andrews</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option7" {{ ($data!=null)?(in_array('Stephen Weeks',$data->present)?"checked":""):"" }}>
                    <label class="form-check-label" for="inlineCheckbox2">Stephen Weeks</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option8" {{ ($data!=null)?(in_array('Amanda Morgan',$data->present)?"checked":""):"" }}>
                    <label class="form-check-label" for="inlineCheckbox1">Amanda Morgan</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="option9" {{ ($data!=null)?(in_array('Josh Stedman',$data->present)?"checked":""):"" }}>
                    <label class="form-check-label" for="inlineCheckbox2">Josh Stedman</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="option10" {{ ($data!=null)?(in_array('Kendra Orandi',$data->present)?"checked":""):"" }}>
                    <label class="form-check-label" for="inlineCheckbox3">Kendra Orandi</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox11" value="option11" {{ ($data!=null)?(in_array('Max Pugach',$data->present)?"checked":""):"" }}>
                    <label class="form-check-label" for="inlineCheckbox1">Max Pugach</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox12" value="option12" {{ ($data!=null)?(in_array('Alex Dubilet',$data->present)?"checked":""):"" }}>
                    <label class="form-check-label" for="inlineCheckbox2">Alex Dubilet</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox13" value="option13" {{ ($data!=null)?(in_array('Maryna Koreshnykova',$data->present)?"checked":""):"" }}>
                    <label class="form-check-label" for="inlineCheckbox3">Maryna Koreshnykova</label>
                </div>
                <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="List other attendees"> -->
                <textarea name="" id="" cols="25" rows="2" placeholder="list other attendees"></textarea>



                <br><br>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Not Present:</label>
                </div>
                <!-- <input type="textarea" class="form-control" id="formGroupExampleInput2" placeholder="List not present"> -->
                <textarea name="" id="" cols="25" rows="2" placeholder="list not present">@if($data != null) @foreach($data->not_present as $not_present){{ $not_present }}@endforeach @endif</textarea>


            </div>
        </div>

        <div class="form-group2">


            <div>
                <label for="formGroupExampleInput">Actions:</label>
                <br>
                <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="List actions"> -->
                <textarea name="" id="" cols="60" rows="10" placeholder="List actions">@if($data !=null) @foreach($data->actions as $action){{ $action }}&#13;&#10;@endforeach @endif</textarea>
            </div>




            <div>
                <label for="formGroupExampleInput2">Key Decisons:</label>
                <br>
                <textarea name="" id="" cols="60" rows="10" placeholder="List key decisions">@if($data!= null) @foreach($data->key_decisions as $key_decision){{ $key_decision }}&#13;&#10;@endforeach @endif</textarea>


            </div>

            <div>

                <label for="formGroupExampleInput2">Matters arrising:</label>
                <br>
                <textarea name="" id="" cols="60" rows="10" placeholder="List matters arising">@if($data != null) @foreach($data->notes as $note){{ $note }}&#13;&#10;@endforeach @endif</textarea>



            </div>





        </div>

        <div class="form-group3">
            <div>

                <label for="formGroupExampleInput">Links to supporting documents:</label>
                <br>
                @if($data != null)
                @foreach($data->link as $link)
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Insert link" size="40" value="{{ $link }}">
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
            <a href="" class="buttons">Discard Message</a>
            <input type="submit" name="" id="submit" value="Submit for review">

        </div>


    </form>

@endsection
