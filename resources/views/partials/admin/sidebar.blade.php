<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">SAJIB</h6>
                <span>Admin</span>
            </div>
        </div> 
        <div class="navbar-nav w-100">
            <a href="{{route('admin.dashboard')}}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{route('vehicle.index')}}" class="nav-item nav-link"><i class="me-2 bi bi-car-front"></i>Vehicle</a>
            <a href="{{route('brand.index')}}" class="nav-item nav-link"><i class="me-2 bi bi-unity"></i>Brand</a>
            <a href="{{route('user.index')}}" class="nav-item nav-link"><i class="me-2 bi bi-person-circle"></i>User</a>
            <a href="{{route('type.index')}}" class="nav-item nav-link"><i class="me-2 bi bi-list-task"></i>Type</a>
            <a href="{{route('role.index')}}" class="nav-item nav-link"><i class="me-2 bi bi-menu-button-wide"></i>Role</a>
            <a href="{{route('booking.index')}}" class="nav-item nav-link"><i class="me-2 bi bi-bookmark-plus-fill"></i>Booking </a>
            <a href="{{route('bservice.index')}}" class="nav-item nav-link"><i class="me-2 bi bi-bookmark-plus-fill"></i>Booking Services </a>
            <a href="{{route('payment.index')}}" class="nav-item nav-link"><i class=" me-2 bi bi-credit-card-2-front"></i>Payment </a>
            <a href="{{route('location.index')}}" class="nav-item nav-link"><i class=" me-2  bi bi-unity"></i>Location </a>

            <a href="{{route('service.index')}}" class="nav-item nav-link"><i class="me-2 bi bi-tools"></i>Service</a>
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="me-2 bi bi-tools"></i>Services</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{url('')}}" class="dropdown-item">Car Financing</a>
                    <a href="typography.html" class="dropdown-item">Car Insfection</a>
                    <a href="element.html" class="dropdown-item">Auto Repairing</a>
                    <a href="element.html" class="dropdown-item">Auto Painting</a>
                    <a href="element.html" class="dropdown-item">Auto Cleaning</a>
                </div>  
            </div> --}}
            <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
            {{-- <a href="{{route('form.dashboard')}}" class="nav-item nav-link"><i class="bi bi-credit-card-2-front me-2"></i>Payment</a> --}}
            <a href="#" class="nav-item nav-link"><i class="bi bi-book-half me-2"></i>Booking</a>
            <a href="table.html" class="nav-item nav-link"><i class="bi bi-calendar-check-fill me-2"></i>Available Calender</a>
            <a href="chart.html" class="nav-item nav-link"><i class="bi bi-x-circle me-2"></i>Cancelletion and Refund Policies</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item">Sign In</a>
                    <a href="signup.html" class="dropdown-item">Sign Up</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                    <a href="blank.html" class="dropdown-item active">Blank Page</a>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Sidebar End -->