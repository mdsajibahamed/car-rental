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
        <div class="container pt-5 justify items center">
            <div class="row justify items center">
               
                <div class="col-lg-8 mb-5">
                    <h1 class="display-4 text-uppercase mb-5"> {{ $vehicles->model }}</h1>
                    <div class="row mx-n2 mb-3">
                        <div class="col-md-3 col-6 px-2 pb-2">
                        </div>
                        <div class="col-md-3 col-6 px-2 pb-2">
                       
                        <div class="col-md-3 col-6 px-2 pb-2">
                            <img class="img-fluid w-100" src="img/gallery-4.jpg" alt="">
                        </div>
                    </div>
                    <p>{{$vehicles->description}} </p>
                    <div class="row pt-2">
                        <div class="col-md-4 col-6 mb-2">
                            <i class="fa fa-car text-primary mr-2"></i>
                            <span> Year : {{ $vehicles->year }}</span>
                        </div>
                        <div class="col-md-4 col-6 mb-2">
                            <i class="fa fa-cogs text-primary mr-2"></i>
                            <span>Owner Name : {{$vehicles->owner_name}} </span>
                        </div>
                        <div class="col-md-4 col-6 mb-2">
                            <i class="fa fa-road text-primary mr-2"></i>
                            <span> Price : {{$vehicles->price}} </span>
                        </div>
                        <div class="col-md-4 col-6 mb-2">
                            <i class="fa fa-eye text-primary mr-2"></i>
                            <span>Phone : {{$vehicles->owner_phone}} </span>
                        </div>
                        <div class="col-md-4 col-6 mb-2">
                            <i class="fa fa-car text-primary mr-2"></i>
                            <span>Model: 2015</span>
                        </div>
                        <div class="col-md-4 col-6 mb-2">
                            <i class="fa fa-cogs text-primary mr-2"></i>
                            <span>Automatic</span>
                        </div>
                        <div class="col-md-4 col-6 mb-2">
                            <i class="fa fa-road text-primary mr-2"></i>
                            <span> Per Day : {{$vehicles->rentamount}}</span>
                        </div>
                        <div class="col-md-4 col-6 mb-2">
                            <i class="fa fa-eye text-primary mr-2"></i>
                            <span>GPS Navigation</span>
                        </div>
                        <div class="col-md-4 col-6 mb-2">
                            <i class="fa fa-car text-primary mr-2"></i>
                            <span>Model: 2015</span>
                        </div>
                        <div class="col-md-4 col-6 mb-2">
                            <i class="fa fa-cogs text-primary mr-2"></i>
                            <span>Automatic</span>
                        </div>
                        <div class="col-md-4 col-6 mb-2">
                            <i class="fa fa-road text-primary mr-2"></i>
                            <span>20km/liter</span>
                        </div>
                        <div class="col-md-4 col-6 mb-2">
                            <i class="fa fa-eye text-primary mr-2"></i>
                            <span>GPS Navigation</span>
                        </div>
                    </div>
               </div>
                
                          {{-- checked avality --}}
                        <div class="mapouter my-5 justify items center">
                            <h2> Booking Your Rent</h2>
                                    <div class="gmap_canvas ">
                                        <iframe src="https://maps.google.com/maps?q=university%20of%20san%20francisco&amp;t=&amp;z=4&amp;ie=UTF8&amp;iwloc=&amp;output=embed" id="gmap_canvas" frameborder="0" scrolling="no" style="width: 700px; height: 400px;">
                                        </iframe>
                                        <style>.mapouter{position:relative;text-align:right;height:400px;width:700px;}
                                        </style>
                                        <style>.gmap_canvas{overflow:hidden;background:none!important;height:400px;width:700px;}</style>
                                        <a href="https://www.eireportingonline.com">ei reporting</a>
                                   </div>
                        </div>



                             {{-- checked avality end  --}}
                <div class="col-8 col-lg-12 mb-5">
                    <div class="bg-secondary p-5">
                        <h3 class="text-primary text-center mb-4">Submit</h3>
                        <form action="{{ route('site.store.booking')}}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" id="" value="{{isset(Auth::user()->id) ? Auth::user()->id : ''}}">
                            <input type="hidden" name="vehicle_id" value="{{$vehicles->id}}">
                            <div class="form-group">
                                <select name="location_from" class="custom-select px-4" style="height: 50px;">
                                    <option selected>Pickup Location</option>
                                    @foreach ($locations as $location)
                                    <option value="{{$location->name}}">{{$location->name}}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                            <div class="form-group"> 
                                <select name="location_to" class="custom-select px-4" style="height: 50px;">
                                    <option selected>Drop Location</option>
                                    @foreach ($locations as $location)
                                    <option value="{{$location->name}}">{{$location->name}} </option>
                                    @endforeach
                                            
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input name="pickup_date" type="text" class="form-control p-4 datetimepicker-input" placeholder="Pickup Date"
                                        data-target="#date1" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="date" id="date2" data-target-input="nearest">
                                    <input name="return_date" type="text" class="form-control p-4 datetimepicker-input" placeholder="Return Date"
                                        data-target="#date2" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div   class="text" id="days" >
                                    <input name="total_days" type="text" class="form-control p-4 total_days-input" placeholder="Total Days"
                                        data-target="#days" data-toggle="total_days" value="2"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div   class="text" id="amount" >
                                    <input name="total_amount" type="text" class="form-control p-4 total_amount-input" placeholder="Total Amount"
                                        data-target="#amount" data-toggle="total_amount" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div   class="text" id="add_payment" >
                                    <select name="add_payment" class="custom-select px-4" style="height: 50px;">
                                        <option value="">Select Payment Option</option>
                                        <option value="cash">Cash</option>
                                        <option value="bkash">bKash</option>
                                        <option value="nagad">Nagad</option>
                                    </select>

                                </div>
                            </div>
                            
                            <div class="form-group mb-0">
                                <button class="btn btn-primary btn-block" type="submit" style="height: 50px;">Check Now</button>
                            </div>
                        </form>
                        
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
