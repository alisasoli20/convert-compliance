@extends('layouts.master')
@section('content')
    <section class="form-section">
        <div class="container-fluid request-form">
            <div class="row">
                <div class="mt-5 col-md-12 text-center">
                    <h3>To upload a new policy please complete the steps below:</h3>
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-5">


                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="label col-md-6">View Uploaded PDF</label>
                                    <div class="col-md-6">
                                        <a href="{{ asset('pdf/'.$policy->pdf) }}" target="_blank">View Policy PDF</a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="label col-md-6">Policy Name</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="policy_name" value="{{ $policy->policy_name }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="label col-md-6">Upload Document</label>
                                    <div class="col-md-6">
                                        <input type="file" name="pdf">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="label col-md-6">Policy Owner</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="policy_owner" value="{{ $policy->policy_owner }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="label col-md-6">Approved By</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="approved_by" value="{{ $policy->approved_by }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="label col-md-6">Approval Date</label>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control" name="approval_date" value="{{ $policy->approval_date }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="label col-md-6">Review Date</label>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control" name="review_date" value="{{ $policy->review_date }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="label col-md-6">Policy Level</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="policy_level" value="{{ $policy->policy_level }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="label col-md-6">Policy Status</label>
                                    <div class="col-md-6">
                                        <select class="form-control" name="status">
                                            <option value="pending" {{  ($policy->status == "pending")?"selected":"" }}>Pending</option>
                                            <option value="approved" {{  ($policy->status == "approved")?"selected":"" }}>Approved</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 text-left pl-5">
                                <div class="form-group row">
                                    <label class="label col-md-12">Distribution List:</label>
                                    @foreach($users as $user)
                                        <div class="col-md-12 ">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="{{ $user->email }}" name="distribution_list[]" id="defaultCheck1" {{ (in_array($user->email,$policy->distribution_list))?"checked":'' }}  >
                                                <label class="form-check-label" for="defaultCheck1">
                                                    {{ $user->name }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="form-group row mt-5">
                                    <div class="col-md-12">
                                        <button class="btn btn-primary">Update Policy</button>
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
