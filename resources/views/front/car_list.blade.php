@extends('layouts.front')
@section('title')
    {{__('Car List')}}
@endsection
@section('hero')
    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Car Listing</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Car Listing</h6>
        </div>
    </div>
    <!-- Page Header Start -->
@endsection

@section('content')
    

    
    
    <!-- Rent A Car Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
                <h1 class="display-1 text-primary text-center">03</h1>
                <h1 class="display-4 text-uppercase text-center mb-5">Find Your Car</h1>
                <div class="container">
                    <div class="col-lg-4">
                        <form action="">
                            <input type="date" class="form-control mb-2" placeholder="Picked Date">
                            <input type="date" class="form-control" placeholder="Return ">
                            <input type="button" value="Search" class="btn btn-outline-primary" >
                        </form>
                       </div>
                </div>
            <div class="row ">
                @forelse ($vehicles as $vehicle)
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4">
                        {{-- <img class="img-fluid mb-4"src="{{ asset('img/vehicle/'.$vehicle->thumbnail)}}" alt="Vehicle Image"> --}}
                        <h4 class="text-uppercase mb-4">{{$vehicle->model}}</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>{{$vehicle->year}}</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>{{$vehicle->type}}</span>
                            </div>
                           
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>{{$vehicle->price}}</span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="">   {{$vehicle->rentamount}}  --Per/Day</a>
                        <a class="btn btn-primary px-3" href="{{ route('car.details', $vehicle->id ) }}">{{ __('View') }}</a>
                    </div>
                </div> 
                @empty
                    
                @endforelse
                {{-- <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4">
                        <img class="img-fluid mb-4" src="img/car_11.jpg" alt="">
                        <h4 class="text-uppercase mb-4">Mercedes Benz R3</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2015</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>AUTO</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>25K</span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="">$99.00/Day</a>
                    </div>
                </div> --}}
                
            </div>
        </div>
    </div>
    <!-- Rent A Car End -->

@endsection