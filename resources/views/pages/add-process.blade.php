@extends('layouts.master')
@section('content')
    <section class="form-section pt-5">
        <div class="container request-form">
            <div class="row">
                <div class="mt-5 col-md-12 text-center">
                    <h3>To upload a new process please complete the steps below:</h3>
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="label col-md-6">Upload Document</label>
                                    <div class="col-md-6">
                                        <input type="file" name="pdf">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="label col-md-6">Process Name</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="process_name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="label col-md-6">Process Owner</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="process_owner">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="label col-md-6">Approved By</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="approved_by">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="label col-md-6">Approval Date</label>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control" name="approval_date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="label col-md-6">Review Date</label>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control" name="review_date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="label col-md-6">Process Level</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="process_level">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 text-left">
                                <div class="form-group row">
                                    <label class="label col-md-12">Distribution List:</label>
                                    @foreach($users as $user)
                                        <div class="col-md-12 ">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="{{ $user->email }}" name="distribution_list[]" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    {{ $user->name }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="form-group row mt-5">
                                    <div class="col-md-12">
                                        <button class="btn btn-primary">Submit Process</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection


