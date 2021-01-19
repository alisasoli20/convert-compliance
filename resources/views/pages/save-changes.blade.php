@extends('layouts.master')
@section('content')
    <section class="form-section pt-5">
        <div class="container request-form">
            <div class="row mt-2">
                <div class="col text-center">
                    <h1>{{ $title }}</h1>
                </div>
            </div>
            <form method="POST" action="">
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
                                <textarea name="not_present" id="" class="form-control" rows="2" placeholder="list not present">{{ $data->not_present }}</textarea>
                            </div>
                        </div>
                        <!-- <input type="textarea" class="form-control" id="formGroupExampleInput2" placeholder="List not present"> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <button class="btn btn-default text-white custom-buttons" name=""   {{ ($data !=null)?(($data->submit_for_review != null)?(($data->submit_for_review >=1)?"enabled":"disabled"):""):"disabled" }}>{{ ($data!=null)?(($data->submit_for_review != null)?" Submit ":"Submit for Review "):"Submit for Review " }}</button>
                    </div>
                </div>
            </form>

        </div>
    </section>
@endsection
