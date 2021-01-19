<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet"  href="{{ asset('css/index_page/style.css') }}">
    <script src="https://kit.fontawesome.com/81f686e84d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

@include('layouts.navbar')
{{--<div id="carouselFadeExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active ">
            <img class="d-block w-100" src="{{ asset('images/index_page/f2.jpg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/index_page/f3.jpg') }}" alt="second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/index_page/f4.jpg') }}" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/index_page/f5.jpg') }}" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/index_page/fi1.png') }}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselFadeExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselFadeExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>--}}
<div class="container mt-5">
    <div class="row justify-content-center ">

        <div class="col-md-12 text-center">
            <h3 class="mobh1">Welcome to Covert Compliance</h3>
        </div>

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
    <!--    sec3-->
    <div class="row col-12">
        <p class="sec3t1">Pakistan Society for the Rehabilitation of the Disabled is a non-profit, charitable organization dedicated to the service of orthopedically handicapped persons. PSRD was initially established by orthopaedic surgeons in 1957 as a small Physiotherapy Centre within Mayo Hospital. PSRD moved to its current premises in 1964. With the passage of time, PSRD has become a facility recognised by Rehabilitation International as an organisation with the maximum number of activities under one roof. It is supported by donations from philanthropic individuals and organizations.</p>
        <p class="sec3t2">Mr. Parvez Masud, S.I. is the President of PSRD since 2012 and Mrs. Parveen Umar is the General Secretary.</p>
    </div>


</div><!--sec4-->
{{--<div class="container-fluid bg1 text-white mt-5">
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-4 sec4text">

            <h1 >Past Presidents</h1>
            <div class="sec4border"></div>
            <div class="row mt-4">
                <div class="col-md-6 col-6">
                    <p>Dr. Amir ud din </p>

                </div>
                <div class="col-md-6 col-6">
                    <p>  1957 – 1963</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-6">
                    <p>Dr. Amir ud din </p>

                </div>
                <div class="col-md-6 col-6">
                    <p>  1957 – 1963</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-6">
                    <p>Dr. Amir ud din </p>

                </div>
                <div class="col-md-6 col-6">
                    <p>  1957 – 1963</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-6">
                    <p>Dr. Amir ud din </p>

                </div>
                <div class="col-md-6 col-6">
                    <p>  1957 – 1963</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-6">
                    <p>Dr. Amir ud din </p>

                </div>
                <div class="col-md-6 col-6">
                    <p>  1957 – 1963</p>
                </div>
            </div>

        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-2">

        </div>
        <div class="col-md-8 sec5mainborder">


        </div>

    </div>
    <div class="row mt-4 ">
        <div class="col-md-2">

        </div>
        --}}{{--            <div class="col-md-4 mb-5">--}}{{--

        --}}{{--                <h1 >General Secretaries</h1>--}}{{--
        --}}{{--                <div class="sec4border"></div>--}}{{--
        --}}{{--                <div class="row mt-4">--}}{{--
        --}}{{--                    <div class="col-md-6 col-6">--}}{{--
        --}}{{--                        <p>Dr. Amir ud din </p>--}}{{--

        --}}{{--                    </div>--}}{{--
        --}}{{--                    <div class="col-md-6 col-6">--}}{{--
        --}}{{--                        <p>  1957 – 1963</p>--}}{{--
        --}}{{--                    </div>--}}{{--
        --}}{{--                </div>--}}{{--
        --}}{{--                <div class="row">--}}{{--
        --}}{{--                    <div class="col-md-6 col-6">--}}{{--
        --}}{{--                        <p>Dr. Amir ud din </p>--}}{{--

        --}}{{--                    </div>--}}{{--
        --}}{{--                    <div class="col-md-6 col-6">--}}{{--
        --}}{{--                        <p>  1957 – 1963</p>--}}{{--
        --}}{{--                    </div>--}}{{--
        --}}{{--                </div>--}}{{--
        --}}{{--                <div class="row">--}}{{--
        --}}{{--                    <div class="col-md-6 col-6">--}}{{--
        --}}{{--                        <p>Dr. Amir ud din </p>--}}{{--

        --}}{{--                    </div>--}}{{--
        --}}{{--                    <div class="col-md-6 col-6">--}}{{--
        --}}{{--                        <p>  1957 – 1963</p>--}}{{--
        --}}{{--                    </div>--}}{{--
        --}}{{--                </div>--}}{{--
        --}}{{--                <div class="row">--}}{{--
        --}}{{--                    <div class="col-md-6 col-6">--}}{{--
        --}}{{--                        <p>Dr. Amir ud din </p>--}}{{--

        --}}{{--                    </div>--}}{{--
        --}}{{--                    <div class="col-md-6 col-6">--}}{{--
        --}}{{--                        <p>  1957 – 1963</p>--}}{{--
        --}}{{--                    </div>--}}{{--
        --}}{{--                </div>--}}{{--
        --}}{{--                <div class="row">--}}{{--
        --}}{{--                    <div class="col-md-6 col-6">--}}{{--
        --}}{{--                        <p>Dr. Amir ud din </p>--}}{{--

        --}}{{--                    </div>--}}{{--
        --}}{{--                    <div class="col-md-6 col-6">--}}{{--
        --}}{{--                        <p>  1957 – 1963</p>--}}{{--
        --}}{{--                    </div>--}}{{--
        --}}{{--                </div>--}}{{--

        --}}{{--            </div>--}}{{--
    </div>

</div>--}}
<div class="container mt-5">
    <div class="row justify-content-center ">

        <div class="col-md-4 text-center">
            <h1 class="mobh2">Our Departments</h1>
        </div>

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
    <div class="row mt-5">
        @foreach($departments as $department)
        <div class="col-md-3 col-12 centericons mb-5 text-center">
            <h5>{{ $department->name }}</h5>
            <a style="background-color:#ffffff;text-decoration: none!important; text-underline-style: none!important;" href="{{ route('page',\Illuminate\Support\Str::slug($department->name)) }}"><img style="border-radius: 5px; box-shadow: 1px 3px 5px" src="{{asset('images/'.$department->slug.'.jpg')}}" width="200px" height="150px" alt="icon"></a>
        </div>
        @endforeach
        {{--<div class="col-md-3 col-12 centericons">
            <h5>Credit Risk</h5>
            <img src="{{asset('images/index_page/icons/icon%202.png')}}" alt="icon">
        </div>
        <div class="col-md-3 col-12 centericons">
            <h5>Board</h5>
            <img  src="{{asset('images/index_page/icons/icon%203.png')}}"  alt="icon">
        </div>
        <div class="col-md-3 col-12 centericons">
            <h5>Operations</h5>
            <img src="{{asset('images/index_page/icons/icon%204.png')}}"  alt="icon">
        </div>--}}

    </div>
    {{--<div class="row mt-5">
        <div class="col-md-3 col-12 centericons">
            <h5>Financial Crime</h5>
            <img src="{{asset('images/index_page/icons/icon%204.png')}}"  alt="icon">
        </div>
        <div class="col-md-3 col-12 centericons">
            <h5>Fraud </h5>
            <img src="{{asset('images/index_page/icons/icon%204.png')}}"  alt="icon">
        </div>
        <div class="col-md-3 col-12 centericons">
            <h5>Decisions</h5>
            <img src="{{asset('images/index_page/icons/icon%204.png')}}" alt="icon">
        </div>
        <div class="col-md-3 col-12 centericons">
            <h5>End of Month</h5>
            <img src="{{asset('images/index_page/icons/icon%204.png')}}" alt="icon">
        </div>

    </div>
    <div class="row mt-5 mb-5">
        <div class="col-md-3 col-12 centericons">
            <h5>Onboarding</h5>
            <img src="{{asset('images/index_page/icons/icon%204.png')}}"  alt="icon">
        </div>
        <div class="col-md-3 col-12 centericons">
            <h5>Marketing </h5>
            <img src="{{asset('images/index_page/icons/icon%204.png')}}"  alt="icon">
        </div>
        <div class="col-md-3 col-12 centericons">
            <h5>Finance</h5>
            <img src="{{asset('images/index_page/icons/icon%204.png')}}" alt="icon">
        </div>
        <div class="col-md-3 col-12 centericons">
            <h5>Risk Acceptance</h5>
            <img src="{{asset('images/index_page/icons/icon%204.png')}}"  alt="icon">
        </div>

    </div>--}}

    <h2 class="text-center mt-5 py-3
			">News </h2>
    <div class="row">
        @foreach($news as $new)
        <div class="col-md-4">
            <div class="card-deck">
                <!-- card-group ,card-deck :is use to create a space betwwen the card ;; card-columns is use to give the shumly layout -->

                <div class="card">
                    <img src="{{ asset('images/index_page/f2.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">{{ $new->title }}</p>
                        <!-- <button class="btn btn-info">read more</button> -->
                        <a href="{{ $new->link }}" target="_blank" class="card-link">read more</a>
                    </div>
                </div>

                {{--<div class="card">
                    <img src="{{ asset('images/index_page/f3.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title">card titles </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores perferendis adipisci culpa neque aperiam voluptates.</p>
                        <!-- <button class="btn btn-info">read more</button> -->
                        <a href="" class="card-link">read more</a>
                        <a href="" class="card-link"> more link</a>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('images/index_page/f4.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title">card titles </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores perferendis adipisci culpa neque aperiam voluptates.</p>
                        <!-- <button class="btn btn-info">read more</button> -->
                        <a href="" class="card-link">read more</a>
                        <a href="" class="card-link"> more link</a>
                    </div>
                </div>

                <div class="card">
                    <img src="{{ asset('images/index_page/f5.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title">card titles </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores perferendis adipisci culpa neque aperiam voluptates.</p>
                        <!-- <button class="btn btn-info">read more</button> -->
                        <a href="" class="card-link">read more</a>
                        <a href="" class="card-link"> more link</a>
                    </div>
                </div>--}}
            </div>
        </div>
        @endforeach

    </div>


</div>
<div class="container-fluid bg2 mt-5 text-white ">
    <div class="row mt-3">
        <div class="col-md-3">

        </div>
        <div class="col-md-5 sec5mainborder foot">

        </div>
        <div class="col-md-4">

        </div>

    </div>
    <div class="row mt-4">
        <div class="col-md-3">

        </div>
        <div class="col-md-5 foot">
            <div class="row">
                <div class="col-md-4 col-4">

                </div>
                <div class="col-md-6 footericons">
                    <i class="fab fa-facebook-f fa-2x"></i>
                    <i class="fab fa-instagram fa-2x ml-5"></i>
                    <i class="fab fa-twitter fa-2x ml-5"></i>

                </div>

                <div class="col-md-2 col-2">

                </div>

            </div>

        </div>
        <div class="col-md-4">

        </div>

    </div>
    <div class="row mt-3">
        <h6 class="footertext">Copyright 2018 PSRD | All Rights Reserved |  Designed by CraftwithWP</h6>
    </div>

</div>
</body>
</html>
