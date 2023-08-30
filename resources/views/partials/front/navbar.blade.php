<!-- Navbar Start -->
{{-- <div class="container-fluid position-relative nav-bar p-0"> --}}
    {{-- <div class="position-relative px-lg-5" style="z-index: 9;"> --}}
        <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="{{ route('site.home') }}" class="navbar-brand">
                <h1 class="text-uppercase text-primary mb-1">Royal Cars</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="{{ route('site.home') }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ route('site.about') }}" class="nav-item nav-link">About</a>

                
                    <a href="{{route('site.service')}}" class="nav-item nav-link">Service</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Cars</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{route('site.car_list')}}" class="dropdown-item">Car Listing</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{route('site.team')}}" class="dropdown-item">The Team</a>
                            <a href="{{route('site.testimonial')}}" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="{{route ('site.contact')}}" class="nav-item nav-link">Contact</a>
                    
                    @auth
                       <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                            {{Auth::user()->name}}  
                          </a>
                          <div class="dropdown-menu rounded-0 m-0">
                            <a class="dropdown-item" href="{{route("profile.edit")}}">Profile</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="#" onclick="event.preventDefault();
                               this.closest('form').submit();">Logout</a>
                            </form>
                              <a class="dropdown-item"  href="https://laravel.com/" target="_blank">Something Wrong</a>
                              <a class="dropdown-item"  href="" target="_blank">Add to Vehicle</a>
                          </div>
                       </div>  
                    @endauth
                    @guest
                    <a class="nav-item nav-link" href="{{url('login')}}">Login</a>
                    <a href="{{url('register')}}" class="nav-item nav-link">Registration</a>
                    @endguest
                    
                    
                   
                </div>
            </div>
        </nav>
    {{-- </div> --}}
{{-- </div> --}}
<!-- Navbar End -->