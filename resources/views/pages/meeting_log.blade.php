@extends('layouts.master')
@section('content')
    <section class="form-section pt-5">
        <div class="container request-form">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('images/information-technology.jpg') }}" width="200px" height="200px">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/information-technology.jpg') }}" width="200px" height="200px">
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('images/information-technology.jpg') }}" width="200px" height="100px">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col text-center mt-3">
                            <button class="btn btn-light">Submit</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <h3>Action Log</h3>
                    <div class="form-group">
                        <input class="form-control">
                    </div>

                </div>
                <div class="col-md-6">
                    <h3>Key Decision Log</h3>
                    <div class="form-group">
                        <input class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
