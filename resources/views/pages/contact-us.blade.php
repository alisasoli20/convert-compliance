@extends('layouts.master')
@section('content')
    <section class="form-section pt-5">
        <div class="container request-form mb-2">
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
                <div class="col-md-4 col-4"></div>
                <div class="col-md-4">
                    <h1 class="contacthead">Contact Us</h1>
                </div>
                <div class="col-md-4 col-4"></div>
            </div>
            <div class="row ">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-3 col-3">

                        </div>
                        <div class="col-md-2 line col-2">

                        </div>
                        <div class="col-md-2 col-2">
                            <h5 class="linetext">ooo</h5>
                        </div>
                        <div class="col-md-2 line col-2">

                        </div>

                    </div>

                </div>
                <div class="col-md-4"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form method="POST" action="{{ route('save.contact.us') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" class="form-control fm3" name="name"  required id="exampleFormControlInput" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email address</label>
                            <input type="email" class="form-control fm3" name="email" required id="exampleFormControlInput1" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Contact</label>
                            <input type="text" class="form-control fm3" id="exampleFormControlInput2" name="contact" placeholder="Enter Contact No" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Message</label>
                            <textarea class="form-control fm3" id="exampleFormControlTextarea1" name="message" rows="3" required></textarea>
                        </div>
                        <button  class="btn btn-primary custom-buttons">Send</button>
                    </form>
                </div>
                {{--            <div class="col-md-4">--}}
                {{--                <img class="contactusimage" src="asset/images/contact%20us%20img.jpeg" alt="contact" >--}}

                {{--            </div>--}}

            </div>
        </div>
    </section>
@endsection
