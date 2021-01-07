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
                <form action="{{ route('logout') }}" method="POST">@csrf<button class="nav-link btn text-white" href="#" >Logout</button>
                </form>
            </li>
        </ul>

    </div>
</nav>
