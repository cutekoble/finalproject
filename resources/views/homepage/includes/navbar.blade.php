 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-3">
    <a href="" class="navbar-brand d-block d-lg-none">


    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
        <ul class="navbar-nav mr-auto py-0">


            @if ( url()->current() == url('/'))
            <h1 class="nav-item mx-0 mx-lg-1"><a class="nav-link " href="{{ url ('/')}}#index">HOME</a></h1>
            <h1 class="nav-item mx-0 mx-lg-1"><a class="nav-link " href="{{ url ('/')}}#about">ABOUT</a></h1>
            <h1 class="nav-item mx-0 mx-lg-1"><a class="nav-link " href="{{ url ('/')}}#service">SERVICE</a></h1>
            <h1 class="nav-item mx-0 mx-lg-1"><a class="nav-link " href="{{ url ('/')}}#contact">CONTACT</a></h1>
            <h1 class="nav-item mx-0 mx-lg-1"><a class="nav-link " href="{{ url ('/')}}#announcement">ANNOUNCEMENT</a></h1>
            <h1 class="nav-item mx-0 mx-lg-1"><a class="nav-link " href="{{ url ('/login')}}">LOGIN</a></h1>

        @else
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link " href="{{ url ('/')}}#index">Home</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link " href="{{ url ('/')}}#about">About</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link " href="{{ url ('/')}}#service">Service</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link " href="{{ url ('/')}}#contact">Contact</a></li>
            <h1 class="nav-item mx-0 mx-lg-1"><a class="nav-link " href="{{ url ('/')}}#announcement">ANNOUNCEMENT</a></h1>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link " href="{{ url ('/login')}}">Login</a></li>

        @endif
        </ul>

    </div>


    <div class="col-lg-4 text-center bg-primary border-inner py-0">
        <div class="d-inline-flex align-items-center justify-content-center">
            <a href="index.html" class="navbar-brand">
                <h1 class="m-0 text-uppercase text-white"><i class='fas fa-paw' style='color: #ffbb00'></i> Po Tropical </h1><h1> PetShoppe</h1>
            </a>
        </div>
    </div>
</nav>

<!-- Navbar End -->
