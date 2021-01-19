@extends('layouts.master')
@section('content')
    <section class="form-section pt-5">
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
            <div class="row mt-5">
                <div class="col-md-12 text-center">

                    <h3>Action Log</h3>
                    <form method="POST" action="{{ route('save.action.log',[$data->meeting,$data->id]) }}">
                        @csrf
                    <div class="form-group row">
                        <label class="label col-md-2 text-right">Action</label>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="4" name="action" required>{{ $data->actions }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="label col-md-2 text-right">Priority</label>
                        <div class="col-md-10">
                            <select name="priority" class="form-control" required>
                                <option value="P1">P1</option>
                                <option value="P2">P2</option>
                                <option value="P3">P3</option>
                            </select>
                        </div>
                    </div><div class="form-group row">
                        <label class="label col-md-2 text-right">Responsible</label>
                        <div class="col-md-10">
                            <select name="responsible" class="form-control" required>
                                @foreach($users as $user)
                                    <option value="{{ $user->name }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="label col-md-2 text-right">Status</label>
                        <div class="col-md-10">
                            <select name="status" class="form-control" required>
                                <option value="0">Not Started</option>
                                <option value="1">In Progress</option>
                                <option value="2">Complete</option>
                                <option value="3">Blocked</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="label col-md-2 text-right">Date Assigned</label>
                        <div class="col-md-10">
                            <input type="date" name="date_assigned" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="label col-md-2 text-right">General Notes</label>
                        <div class="col-md-10">
                            <input type="text" name="general_notes" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <button class="btn btn-primary custom-buttons">Sign Off</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 text-center">
                    <h3>Key Decision Log</h3>
                    <form method="POST" action="{{ route('save.decision.log',[$data->meeting,$data->id]) }}">
                        @csrf
                    <div class="form-group row">
                        <label class="label col-md-2 text-right">Decsion</label>
                        <div class="col-md-10">
                            <textarea name="decision" class="form-control" rows="4" required>{{ $data->key_decisions }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="label col-md-2 text-right">Responsible</label>
                        <div class="col-md-10">
                            <select name="responsible" class="form-control" required>
                                @foreach($users as $user)
                                    <option value="{{ $user->name }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="label col-md-2 text-right">Date Made</label>
                        <div class="col-md-10">
                            <input type="date" name="date_made" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="label col-md-2 text-right">General Notes</label>
                        <div class="col-md-10">
                            <input type="text" name="general_notes" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <button class="btn btn-primary custom-buttons">Sign Off</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
