 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
    <a href="" class="navbar-brand d-block d-lg-none">
        <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Safety</span>First</h1>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
        <ul class="navbar-nav mr-auto py-0">

        @if ( url()->current() == url('/'))
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link " href="{{ url ('/')}}#index">Home</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link " href="{{ url ('/')}}#about">About</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link " href="{{ url ('/')}}#service">Service</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link " href="{{ url ('/')}}#contact">Contact</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link  " href="{{ url ('/login')}}">Login</a></li>

        @else
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link " href="{{ url ('/')}}#index">Home</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link " href="{{ url ('/')}}#about">About</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link " href="{{ url ('/')}}#service">Service</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link " href="{{ url ('/')}}#contact">Contact</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link " href="{{ url ('/login')}}">Login</a></li>
        @endif
        </ul>

    </div>
</nav>

<!-- Navbar End -->
