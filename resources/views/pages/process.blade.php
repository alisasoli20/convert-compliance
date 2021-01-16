@extends('layouts.master')
@section('content')
    <section class="form-section pt-4">
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
                <div class="row pt-4">
                    <div class="col-md-12">
                        <a href="{{ route('add.process') }}" class="float-right btn btn-light mb-5"><i class="fas fa-upload mr-3"></i>Upload New Process</a>
                    </div>
                </div>
            <div class="row pt-4">
                <div class="mt-5 col-md-12 text-center">
                    <h1>Process</h1>
                    <table class="table table-bordered" id="process">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name of Process</th>
                            <th scope="col">Level</th>
                            <th scope="col">Owner</th>
                            <th scope="col">Approval Date</th>
                            <th scope="col">Review Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($approved_processes))
                            @foreach($approved_processes as $approved_process)
                                <tr>
                                    <td>{{ $approved_process->id }}</td>
                                    <td>{{ $approved_process->process_name }}</td>
                                    <td>{{ $approved_process->process_level }}</td>
                                    <td>{{ $approved_process->process_owner }}</td>
                                    <td>{{ $approved_process->approval_date }}</td>
                                    <td>{{ $approved_process->review_date }}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    <table class="table table-bordered" id="action_process">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name of Process</th>
                            <th scope="col">Level</th>
                            <th scope="col">Action required by(list date below)</th>

                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($pending_processes))
                            @foreach($pending_processes as $pending_process)
                                <tr>
                                    <td>{{ $pending_process->id }}</td>
                                    <td>{{ $pending_process->process_name }}</td>
                                    <td>{{ $pending_process->process_level }}</td>
                                    <td><a href="{{ route('edit.process',$pending_process->id) }}"><i class="fas fa-edit"></i></a></td>
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
        $('#process').DataTable()
        $('#action_process').DataTable()
    </script>
@endsection
