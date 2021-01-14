<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img style="border-radius: 50px" class="mb-3" src="{{ (auth()->user()->profile_picture != null)?asset('images/'.auth()->user()->profile_picture):asset('images/dummy.png') }}" width="35px" height="40px">
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <form id="logout" method="POST" action="{{ route('logout') }}">@csrf<button id="logout-btn" class="dropdown-item" href="#">Logout</button></form>
            </div>
        </li>
    </ul>
</nav>
