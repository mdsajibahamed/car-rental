@extends('layouts.front')
@section('title')
{{__('Car_Details')}}
    
@endsection
@section('hero')
  <!-- Page Header Start -->
  <div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3">Car Detail</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">Car Detail</h6>
    </div>
</div>
<!-- Page Header Start -->
    
@endsection
@section('content')
{{-- <h1>Laravel Up & Running Second Edition </h1>
    <br> --}}


    <!-- Detail Start -->
    <div class="container-fluid pt-5">
        <div class="container pt-5">
            <div class="row">
               
                <div class="col-lg-8 mb-5">
                    <h1 class="display-4 text-uppercase mb-5">{{$vehicle->model}}</h1>
                    <div class="row mx-n2 mb-3">
                        <div class="col-md-3 col-6 px-2 pb-2">
                            {{-- @forelse ($vehicles as $vehicle)
                                <h1>{{$vehicle->model}} </h1>
                            @empty
                                
                            @endforelse --}}
                        </div>
                        <div class="col-md-3 col-6 px-2 pb-2">
                            <img class="img-fluid w-100" src="img/gallery-1.jpg" alt="">
                        </div>
                        <div class="col-md-3 col-6 px-2 pb-2">
                            <img class="img-fluid w-100" src="img/gallery-2.jpg" alt="">
                        </div>
                        <div class="col-md-3 col-6 px-2 pb-2">
                            <img class="img-fluid w-100" src="img/gallery-3.jpg" alt="">
                        </div>
                        <div class="col-md-3 col-6 px-2 pb-2">
                            <img class="img-fluid w-100" src="img/gallery-4.jpg" alt="">
                        </div>
                    </div>
                    <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata consetetur invidunt magna dolores aliquyam dolores dolore. Amet erat amet et magna</p>
                    <div class="row pt-2">
                        <div class="col-md-3 col-6 mb-2">
                            <i class="fa fa-car text-primary mr-2"></i>
                            <span>Model: 2015</span>
                        </div>
                        <div class="col-md-3 col-6 mb-2">
                            <i class="fa fa-cogs text-primary mr-2"></i>
                            <span>Automatic</span>
                        </div>
                        <div class="col-md-3 col-6 mb-2">
                            <i class="fa fa-road text-primary mr-2"></i>
                            <span>20km/liter</span>
                        </div>
                        <div class="col-md-3 col-6 mb-2">
                            <i class="fa fa-eye text-primary mr-2"></i>
                            <span>GPS Navigation</span>
                        </div>
                        <div class="col-md-3 col-6 mb-2">
                            <i class="fa fa-car text-primary mr-2"></i>
                            <span>Model: 2015</span>
                        </div>
                        <div class="col-md-3 col-6 mb-2">
                            <i class="fa fa-cogs text-primary mr-2"></i>
                            <span>Automatic</span>
                        </div>
                        <div class="col-md-3 col-6 mb-2">
                            <i class="fa fa-road text-primary mr-2"></i>
                            <span>20km/liter</span>
                        </div>
                        <div class="col-md-3 col-6 mb-2">
                            <i class="fa fa-eye text-primary mr-2"></i>
                            <span>GPS Navigation</span>
                        </div>
                        <div class="col-md-3 col-6 mb-2">
                            <i class="fa fa-car text-primary mr-2"></i>
                            <span>Model: 2015</span>
                        </div>
                        <div class="col-md-3 col-6 mb-2">
                            <i class="fa fa-cogs text-primary mr-2"></i>
                            <span>Automatic</span>
                        </div>
                        <div class="col-md-3 col-6 mb-2">
                            <i class="fa fa-road text-primary mr-2"></i>
                            <span>20km/liter</span>
                        </div>
                        <div class="col-md-3 col-6 mb-2">
                            <i class="fa fa-eye text-primary mr-2"></i>
                            <span>GPS Navigation</span>
                        </div>
                    </div>
               </div>
                

                <div class="col-lg-4 mb-5">
                    <div class="bg-secondary p-5">
                        <h3 class="text-primary text-center mb-4">Check Availability</h3>
                        <div class="form-group">
                            <select class="custom-select px-4" style="height: 50px;">
                                <option selected>Pickup Location</option>
                                <option value="1">Location 1</option>
                                <option value="2">Location 2</option>
                                <option value="3">Location 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="custom-select px-4" style="height: 50px;">
                                <option selected>Drop Location</option>
                                <option value="1">Location 1</option>
                                <option value="2">Location 2</option>
                                <option value="3">Location 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="date" id="date1" data-target-input="nearest">
                                <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Pickup Date"
                                    data-target="#date1" data-toggle="datetimepicker" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="time" id="time1" data-target-input="nearest">
                                <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Pickup Time"
                                    data-target="#time1" data-toggle="datetimepicker" />
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="custom-select px-4" style="height: 50px;">
                                <option selected>Select Person</option>
                                <option value="1">Person 1</option>
                                <option value="2">Person 2</option>
                                <option value="3">Person 3</option>
                            </select>
                        </div>
                        <div class="form-group mb-0">
                            <button class="btn btn-primary btn-block" type="submit" style="height: 50px;">Check Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->


    <!-- Related Car Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <h2 class="mb-4">Related Cars</h2>
            <div class="owl-carousel related-carousel position-relative" style="padding: 0 30px;">
                <div class="rent-item">
                    <img class="img-fluid mb-4" src="img/car-rent-1.png" alt="">
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
                <div class="rent-item">
                    <img class="img-fluid mb-4" src="img/car-rent-2.png" alt="">
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
                <div class="rent-item">
                    <img class="img-fluid mb-4" src="img/car-rent-3.png" alt="">
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
                <div class="rent-item">
                    <img class="img-fluid mb-4" src="img/car-rent-4.png" alt="">
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
            </div>
        </div>
    </div>
    <!-- Related Car End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img src="img/vendor-1.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-2.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-3.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-4.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-5.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-6.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-7.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-8.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

@endsection