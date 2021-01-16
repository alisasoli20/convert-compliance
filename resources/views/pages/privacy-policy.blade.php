@extends('layouts.master')
@section('content')
    <section class="form-section pt-5">
        <div class="container request-form ">
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
                <div class="row pt-4">
                    <div class="col-md-12">
                        <a href="{{ route('add.policy') }}" class="float-right btn btn-light mb-5"><i class="fas fa-upload mr-3"></i>Upload New Policy</a>
                    </div>
                </div>
            <div class="row">
                <div class="mt-5 mb-5 col-md-12 text-center">
                    <h1>Privacy Policy</h1>
                    <table class="table table-bordered mb-5" id="policy">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name of Policy</th>
                            <th scope="col">Level</th>
                            <th scope="col">Owner</th>
                            <th scope="col">Approval Date</th>
                            <th scope="col">Review Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($approved_policies))
                            @foreach($approved_policies as $approved_policy)
                                <tr>
                                    <td>{{ $approved_policy->id }}</td>
                                    <td>{{ $approved_policy->policy_name }}</td>
                                    <td>{{ $approved_policy->policy_level }}</td>
                                    <td>{{ $approved_policy->policy_owner }}</td>
                                    <td>{{ $approved_policy->approval_date }}</td>
                                    <td>{{ $approved_policy->review_date }}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    <h3>Policy Required Action</h3>
                    <table class="table table-bordered mt-5" id="action_policy">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name of Policy</th>
                            <th scope="col">Level</th>
                            <th scope="col">Action required by(list date below)</th>

                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($pending_policies))
                            @foreach($pending_policies as $pending_policy)
                                <tr>
                                    <td>{{ $pending_policy->id }}</td>
                                    <td>{{ $pending_policy->policy_name }}</td>
                                    <td>{{ $pending_policy->policy_level }}</td>
                                    <td><a href="{{ route('edit.policy',$pending_policy->id) }}"><i class="fas fa-edit"></i></a></td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('page-script')
    <script>
        $('#action_policy').DataTable()
        $('#policy').DataTable()
    </script>
@endsection
