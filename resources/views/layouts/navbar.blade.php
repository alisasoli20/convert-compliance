{{--
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('page','idea') }}">Idea</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('page','how-it-works') }}">How It Works</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('page','contact-us') }}">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('page','incident') }}">Incident</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('page','privacy-policy') }}">Privacy Policy</a>
            </li>

            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">@csrf<button class="nav-link btn text-white" href="#" >Logout</button>
                </form>
            </li>
        </ul>

    </div>
</nav>
--}}
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#"><img class="logo" src="{{ asset('images/index_page/LogoBlack.png') }}" width="50%"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('idea') }}">Idea</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Departments
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <ul class="sub-menu">
                        @foreach($departments as $department)
                            <li><a href="{{ route('page',\Illuminate\Support\Str::slug($department->name)) }}">{{ $department->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('how-it-works') }}">How It Works</a>
            </li>
            {{--            <li class="nav-item">--}}
            {{--                <a class="nav-link" href="#">Partners</a>--}}
            {{--            </li>--}}

            {{--            <li class="nav-item">--}}
            {{--                <a class="nav-link" href="#">Fiance</a>--}}
            {{--            </li>--}}
            {{--            <li class="nav-item dropdown">--}}
            {{--                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
            {{--                    Media--}}
            {{--                </a>--}}
            {{--                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">--}}
            {{--                    <ul class="sub-menu">--}}
            {{--                        <li >Gallery</li>--}}
            {{--                        <li> Videos</li>--}}

            {{--                    </ul>--}}
            {{--                </div>--}}
            {{--            </li>--}}

            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('page','incident') }}">Incident</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('page','privacy-policy') }}">Privacy Policy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('page','process') }}">Process</a>
            </li>
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">@csrf<button style="border: none; background-color: #ffffff; color: rgba(0,0,0,.5); font-weight: 500" class="nav-link" href="{{route('logout')}}">Logout</button></form>
            </li>
            {{--            <li class="nav-item">--}}
            {{--                <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> </a>--}}
            {{--            </li>--}}
            {{--            <li class="nav-item">--}}
            {{--                <a class="nav-link" href="#"><i class="fas fa-search"></i></a>--}}
            {{--            </li>--}}

        </div>
    </div>

</nav>
