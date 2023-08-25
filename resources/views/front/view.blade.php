{{-- @extends('layouts.front') <!-- Use your layout file -->

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="" alt="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h1>{{$service->title}}</h1>
                <p>{{$service->description}}</p>
                <p>{{$service->price}}</p>
                <p>{{ $service->status }}</p> <!-- Assuming you have a category relationship -->
                <!-- Add more product details here -->
                <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
    </div>
@endsection --}}
