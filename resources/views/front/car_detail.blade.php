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
                

                <div class="col-8 col-lg-12 mb-5">
                    <div class="bg-secondary p-5">
                        <h3 class="text-primary text-center mb-4">Check Availability</h3>
                        <form action="{{ route('site.invoice')}}" type="POST">
                            @csrf
                            <div class="form-group">
                                <select name="location_from" class="custom-select px-4" style="height: 50px;">
                                    <option selected>Pickup Location</option>
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Mirpur">Mirpur </option>
                                    <option value="Dhanmondhi">Dhanmondhi</option>
                                    <option value="Gulshan">Gulshan</option>
                                    <option value="JatraBari">JatraBari</option>
                                    <option value="Mohakhali">Mohakhali</option>
                                    <option value="Khilgoan">Khilgoan</option>
                                    <option value="Cantonment">Cantonment</option>
                                    <option value="Keraniganj">Keraniganj</option>
                                    <option value="Mohammadpur">Mohammadpur</option>
                                    <option value="Saver">Saver</option>
                                    <option value="Ashulia">Ashulia</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <select name="location_to" class="custom-select px-4" style="height: 50px;">
                                    <option selected>Drop Location</option>
                                            <option value="Manikgonj">Manikgonj</option>
                                            <option value="Munshigonj">Munshigonj</option>
                                            <option value="Narayangonj">Narayangonj</option>
                                            <option value="kishoregonj">kishoregonj</option>
                                            <option value="Gazipur">Gazipur</option>
                                            <option value="Tangail">Tangail</option>
                                            <option value="Norsingdi">Norsingdi</option>
                                            <option value="Rajbari">Rajbari</option>
                                            <option value="Faridpur">Faridpur</option>
                                            <option value="Madaripur">Madaripur</option>
                                            <option value="Gopalgonj">Gopalgonj</option>
                                            <option value="Shariatpur">Shariatpur</option>
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="Sherpur">Sherpur</option>
                                            <option value="Netrokona">Netrokona</option>
                                            <option value="Jamalpur">Jamalpur</option>
                                            <option value="Mymensingh">Mymensingh</option>
                                            <option value="Dinajpur">Dinajpur</option>
                                            <option value="Rangpur">Rangpur</option>
                                            <option value="Kurigram">Kurigram</option>
                                            <option value="Gaibandha">Gaibandha</option>
                                            <option value="Thakurgoan">Thakurgoan</option>
                                            <option value="Nilphamari">Nilphamari</option>
                                            <option value="Lalmonirhat">Lalmonirhat</option>
                                            <option value="Panchagarh">Panchagarh</option>
                                            <option value="Rajahahi">Rajahahi</option>
                                            <option value="Natore">Natore</option>
                                            <option value="Sirajgonj">Sirajgonj</option>
                                            <option value="Pabna">Pabna</option>
                                            <option value="Bogura">Bogura</option>
                                            <option value="Joypurhat">Joypurhat</option>
                                            <option value="Chapainawabgonj">Chapainawabgonj</option>
                                            <option value="Naogoan">Naogoan</option>
                                            <option value="Feni">Feni</option>
                                            <option value="Coxsbazer">Coxsbazer</option>
                                            <option value="Rangamati">Rangamati</option>
                                            <option value="Khagrachhari">Khagrachhari</option>
                                            <option value="Bandarban">Bandarban</option>
                                            <option value="Chattogram">Chattogram</option>
                                            <option value="Cumilla">Cumilla</option>
                                            <option value="Brahmanbaria">Brahmanbaria</option>
                                            <option value="Chadpur">Chadpur</option>
                                            <option value="Lakshmipur">Lakshmipur</option>
                                            <option value="Satkhira">Satkhira </option>
                                            <option value="Meherpur">Meherpur</option>
                                            <option value="Narail">Narail</option>
                                            <option value="Chuadanga">Chuadanga</option>
                                            <option value="Kushtia">Kushtia</option>
                                            <option value="Magura">Magura</option>
                                            <option value="Khulna">Khulna</option>
                                            <option value="Bagerhut">Bagerhut</option>
                                            <option value="Jashore">Jashore</option>
                                            <option value="Jhenaidha">Jhenaidha</option>
                                            <option value="Pathuakhali">Pathuakhali</option>
                                            <option value="Pirojpur">Pirojpur</option>
                                            <option value="Jhalakathi">Jhalakathi</option>
                                            <option value="Bhola">Bhola</option>
                                            <option value="Barguna">Barguna</option>
                                            <option value="Barisal">Barisal</option>
                                            <option value="Sylhet">Sylhet</option>
                                            <option value="Moulvibazer">Moulvibazer</option>
                                            <option value="Habigonj">Habigonj</option>
                                            <option value="Sunamgonj">Sunamgonj</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input name="pickup_date" type="text" class="form-control p-4 datetimepicker-input" placeholder="Pickup Date"
                                        data-target="#date1" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div   class="time" id="time1" data-target-input="nearest">
                                    <input name="return_date" type="text" class="form-control p-4 datetimepicker-input" placeholder="Pickup Time"
                                        data-target="#time1" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="form-group">
                                <select name="payment_method" class="custom-select px-4" style="height: 50px;">
                                    <option selected>Select Payment Method</option>
                                    <option value="Cash">Cash </option>
                                    <option value="Bkash">Bkash</option>
                                    <option value="Nadad">Nadad</option>
                                </select>
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