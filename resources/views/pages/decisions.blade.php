@extends('layouts.master')
@section('page-css')

    <style>

        div.links{
            float: right;
        }
        a{
            padding: 0 30px;
            color: white;
            text-decoration: none;
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
            margin:100px 0px;
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

    <h2>Decisions</h2>
    <p>Please fill in the form below following every executive level decision:</p>

    <br> <br>
    <form>
        <div class="form-group1">

            <div>
                <label for="formGroupExampleInput">Meeting Date:</label>
                <br>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Insert date (dd/mm/yy)" value="07-01-2021">
                <br><br>

            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Present:</label>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Mykhailo Rogalskiy</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" checked>
                    <label class="form-check-label" for="inlineCheckbox2">Robert Escott</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" checked>
                    <label class="form-check-label" for="inlineCheckbox3">Simon Harris</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4" checked>
                    <label class="form-check-label" for="inlineCheckbox1">Colin Hollingsbee</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                    <label class="form-check-label" for="inlineCheckbox2">Anna Maxim</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
                    <label class="form-check-label" for="inlineCheckbox3">Scott Andrews</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option7">
                    <label class="form-check-label" for="inlineCheckbox2">Stephen Weeks</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option8">
                    <label class="form-check-label" for="inlineCheckbox1">Amanda Morgan</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="option9">
                    <label class="form-check-label" for="inlineCheckbox2">Josh Stedman</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="option10">
                    <label class="form-check-label" for="inlineCheckbox3">Kendra Orandi</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox11" value="option11">
                    <label class="form-check-label" for="inlineCheckbox1">Max Pugach</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox12" value="option12">
                    <label class="form-check-label" for="inlineCheckbox2">Alex Dubilet</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox13" value="option13">
                    <label class="form-check-label" for="inlineCheckbox3">Maryna Koreshnykova</label>
                </div>
                <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="List other attendees"> -->
                <textarea name="" id="" cols="25" rows="2" placeholder="list other attendees"></textarea>



                <br><br>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Not Present:</label>
                </div>
                <!-- <input type="textarea" class="form-control" id="formGroupExampleInput2" placeholder="List not present"> -->
                <textarea name="" id="" cols="25" rows="2" placeholder="list not present">AM</textarea>


            </div>
        </div>

        <div class="form-group2">


            <div>
                <label for="formGroupExampleInput">Actions:</label>
                <br>
                <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="List actions"> -->
                <textarea name="" id="" cols="60" rows="10" placeholder="List actions">
                    1. SH: Bring in new CFO
                    2. RE: Expand Board
                    3. CH: Increase fraud budget</textarea>
            </div>




            <div>
                <label for="formGroupExampleInput2">Key Decisons:</label>
                <br>
                <textarea name="" id="" cols="60" rows="10" placeholder="List key decisions">
                    1. Bring in New CFO
                    2. Expand Board
                    3. Increase fraud budget
                </textarea>


            </div>

            <div>

                <label for="formGroupExampleInput2">Matters arrising:</label>
                <br>
                <textarea name="" id="" cols="60" rows="10" placeholder="List matters arising">
                    1. hioqhfiqepqnfpi
                    2. asbcvhrvrogoq[jf
                    3. if-c9h4hoq3dw
                </textarea>



            </div>





        </div>

        <div class="form-group3">
            <div>

                <label for="formGroupExampleInput">Links to supporting documents:</label>
                <br>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Insert link" size="40" value="https://drive.google.com/file/d/1yM8Mr2_7WVvPYMj9m}">
                <br>

            </div>

            <br><br><br>

            <p id="warning"> Please ensure all details on this form are correct before pressing submit. You will not be able to make changes beyond this point.</p>
            <input type="submit" name="" id="submit">

        </div>


    </form>

@endsection
