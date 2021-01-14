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

    <h2>{{ $model }}</h2>
    <p>Please fill in the form below following every executive level decision:</p>

    <br> <br>
    <form method="POST" action="{{ route('save.message',$model) }}">
        @csrf
        <div class="form-group1">
            <input name="meeting" value="" hidden>
            <div>
                <label for="formGroupExampleInput">Meeting Date:</label>
                <br>
                <input type="date" name="meeting_date" class="form-control" id="formGroupExampleInput" placeholder="Insert date (dd/mm/yy)" value="" required>
                <br><br>

            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Present:</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox1" value="MR" >
                    <label class="form-check-label" for="inlineCheckbox1">Mykhailo Rogalskiy</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox2" value="RE" >
                    <label class="form-check-label" for="inlineCheckbox2">Rob Escott</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox3" value="SH" >
                    <label class="form-check-label" for="inlineCheckbox3">Simon Harris</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox4" value="CH" >
                    <label class="form-check-label" for="inlineCheckbox1">Colin Hollingsbee</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox5" value="AM" >
                    <label class="form-check-label" for="inlineCheckbox2">Anna Maxim</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox6" value="SA" >
                    <label class="form-check-label" for="inlineCheckbox3">Scott Andrews</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox7" value="SW" >
                    <label class="form-check-label" for="inlineCheckbox2">Stephen Weeks</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox8" value="AMM" >
                    <label class="form-check-label" for="inlineCheckbox1">Amanda Morgan</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox9" value="JS" >
                    <label class="form-check-label" for="inlineCheckbox2">Josh Stedman</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox10" value="SA" >
                    <label class="form-check-label" for="inlineCheckbox3">Kendra Orandi</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox11" value="option11">
                    <label class="form-check-label" for="inlineCheckbox1">Max Pugach</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox12" value="option12" >
                    <label class="form-check-label" for="inlineCheckbox2">Alex Dubilet</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="present[]" type="checkbox" id="inlineCheckbox13" value="MK" >
                    <label class="form-check-label" for="inlineCheckbox3">Maryna Koreshnykova</label>
                </div>
                <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="List other attendees"> -->
                <textarea name="" id="" cols="25" rows="2" placeholder="list other attendees"></textarea>



                <br><br>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Not Present:</label>
                </div>
                <!-- <input type="textarea" class="form-control" id="formGroupExampleInput2" placeholder="List not present"> -->
                <textarea name="not_present" id="" cols="25" rows="2" name placeholder="list not present"></textarea>


            </div>
        </div>

        <div class="form-group2">


            <div>
                <label for="formGroupExampleInput">Actions:</label>
                <br>
                <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="List actions"> -->
                <textarea name="actions" id="" cols="60" rows="10" placeholder="List actions" required></textarea>
            </div>




            <div>
                <label for="formGroupExampleInput2">Key Decisons:</label>
                <br>
                <textarea name="key_decisions" id="" cols="60" rows="10" placeholder="List key decisions" required></textarea>


            </div>

            <div>

                <label for="formGroupExampleInput2">Matters arrising:</label>
                <br>
                <textarea name="notes" id="" cols="60" rows="10" placeholder="List matters arising" required></textarea>



            </div>





        </div>

        <div class="form-group3">
            <div>

                <label for="formGroupExampleInput">Links to supporting documents:</label>
                <br>
                <textarea cols="30" rows="6" name="link" type="text" class="form-control" id="formGroupExampleInput" placeholder="Insert link" size="40" required></textarea>
                <br>

            </div>

            <br><br><br>

            <p id="warning"> Please ensure all details on this form are correct before pressing submit. You will not be able to make changes beyond this point.</p>
            <br>
            <br>
            <br>
            <br>

            <input type="submit" name="" id="submit" value="Add Message">
        </div>


    </form>

@endsection
