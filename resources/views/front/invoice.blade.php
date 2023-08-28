@extends('layouts.front')
@section('title')
    {{__('Invoice')}}
@endsection
@section('content')

<div class="card">
  <div class="card-body">
    <div class="container">
      <div class="row d-flex align-items-baseline">
        <div class="col-xl-9">
          <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
            <div class="d-flex align-items-center justify-content-between mb-3">
                {{-- <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                    <i class="fa fa-2x fa-car text-secondary"></i>
                </div> --}}
                <h1 class="display-2 text-white mt-n2 m-0">01</h1>
            </div>
            <h4 class="text-uppercase mb-3">{{$services->title}}</h4>
            <p class="m-0">{{$services->description}}</p>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="d-flex align-items-center  bg-primary ml-n4">
                 <h3>{{$services->price}}</h3>
              </div>
              <a class="btn btn-primary px-3" href=" ">{{ __('Book') }}</a>

          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>


<section>
  <div class="container">
    <div class="row">
      <div class="col-8 justify-content-center">
      <div class="col-8 col-lg-12 mb-5">
      <div class="bg-secondary p-5"> 
      <h3 class="text-primary text-center mb-4"> Book  a Service </h3>
      <form action="{{route('bservice.store')}}" method="POST">
          @csrf

              <input type="hidden" name="user_id" id="" value="{{isset(Auth::user()->id) ? Auth::user()->id : ''}}">
              <input type="hidden" name="service_id" value="{{$services->id}}">
              <div class="form-group">
                  <select name="location" class="custom-select px-4" style="height: 50px;">
                      <option selected >Select Location</option>
                      <option value = "dhaka" >Dhaka</option>
                      <option value = "saver" >Saver</option>
                    
                  </select>
                  
              </div>

              <div class="form-group">
                  <div class="date" id="date1" data-target-input="nearest">
                      <input name="date" type="text" class="form-control p-4 datetimepicker-input" placeholder=" Date type"
                          data-target="#date1" data-toggle="datetimepicker" />
                  </div>
              </div>
              <div class="form-group">
                <select name="service_type" class="custom-select px-4" style="height: 50px;">
                    <option selected>service  Type</option>
                    <option value = "Repairing" >Repairing</option>
                    <option value = "Cleaning" >Cleaning</option>
                    <option value = "Painting" >Painting</option>
                    <option value = "Refinancing" >Refinancing</option>
                    <option value = "Wasing" >Wasing</option>
                    <option value = "Inspection" >Inspection</option>
                    <option value = "Rim Repairs" >Rim Repairs</option>
                  
                </select>
                
            </div>
              {{-- <div class="form-group">
                  <div   class="text" id="amount" >
                      <input name="amount" type="text" class="form-control p-4 total_amount-input" placeholder="Amount"
                          data-target="#amount" data-toggle="total_amount" />
                  </div>
              </div> --}}
              <div class="form-group">
                  <div   class="text" id="payment_type" >
                      <select name="payment_type" class="custom-select px-4" style="height: 50px;">
                          <option value="">Select Payment Option</option>
                          <option value="cash">Cash</option>
                          <option value="bkash">bKash</option>
                          <option value="nagad">Nagad</option>
                      </select>

                  </div>
              </div>
              
              <div class="form-group mb-0">
                  <button class="btn btn-primary btn-block" type="submit" style="height: 50px;">Submit</button>
              </div>
      </form>
      
  </div>
</div>
      </div>
    </div>
  </div>
</section>


<div class="card">
    <div class="card-body">
      <div class="container mb-5 mt-3">
        <div class="row d-flex align-items-baseline">
          <div class="col-xl-9">
            <p style="color: #7e8d9f;font-size: 20px;">Invoice >> <strong>ID: 123-123</strong></p>
          </div>
          <div class="col-xl-3 float-end">
            <a class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark"><i
                class="fas fa-print text-primary"></i> Print</a>
            <a class="btn btn-light text-capitalize" data-mdb-ripple-color="dark"><i
                class="far fa-file-pdf text-danger"></i> Export</a>
          </div>
          <hr>
        </div>
  
        <div class="container">
          <div class="col-md-12">
            <div class="text-center">
              <i class="fab fa-mdb fa-4x ms-0" style="color:#5d9fc5 ;"></i>
              <p class="pt-0">BD </p>
            </div>
  
          </div>
  
  
          <div class="row">
            <div class="col-xl-8">
              <ul class="list-unstyled">
                <li class="text-muted">To: <span style="color:#5d9fc5 ;"></span></li>
                <li class="text-muted">Mirpur City</li>
                <li class="text-muted"> Dhaka, Bangladesh</li>
                <li class="text-muted"><i class="fas fa-phone"></i>  01303011991</li>
              </ul>
            </div>
            <div class="col-xl-4">
              <p class="text-muted">Invoice</p>
              <ul class="list-unstyled">
                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                    class="fw-bold">ID:</span> 123-456</li>
                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                    class="fw-bold">Creation Date: </span>August  30,2023</li>
                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                    class="me-1 fw-bold">Status</span><span class="badge bg-warning text-black fw-bold">
                    Paid</span></li>  
              </ul>
            </div>
          </div>
  
          <div class="row my-2 mx-1 justify-content-center">
            <table class="table table-striped table-borderless">
              <thead style="background-color:#84B0CA ;" class="text-white">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Description</th>
                  <th scope="col">Name</th>
                  <th scope="col">paymenat type</th>
                  <th scope="col"> price </th>
                  <th scope="col">Amount</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Car painting service </td>
                  <td>Car painting </td>
                  <td>bkash</td>
                  <td>5000</td>
                  <td>5000 Tk</td>
                  {{-- <td>5000 Tk</td> --}}
                </tr>
              </tbody>
  
            </table>
          </div>

            <div class="col-xl-4">
                <div class=""> 
                    <div class="form">
                      <label class="form-label" class="form-label" for="formControlLgXM">Payment Method :</label>
                     <select name="" id="" class="form-control">
                      <option value="BKash">Bkash</option>
                      <option value="Nagad">Nagad</option>
                      <option value="Cash">Cash</option>
                     </select>
                    </div>
              </div>
           </div>
          <div class="row">
            <div class="col-xl-8">
              <p class="ms-3">Add additional notes and payment information</p>
  
            </div>
            <div class="col-xl-4">
              <ul class="list-unstyled">
                <li class="text-muted ms-3"><span class="text-black me-4">SubTotal</span>5000 Tk</li>
                <li class="text-muted ms-3 mt-2"><span class="text-black me-4">Tax(10%)</span>500 Tk</li>
              </ul>
              <p class="text-black float-start"><span class="text-black me-3"> Total Amount  :</span><span
                  style="font-size: 25px;"> 4500 Tk</span></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-xl-10">
              <p>Thank you for your purchase</p>
            </div>
            <div class="col-xl-2">
              <button type="button" class="btn btn-primary text-capitalize"
                style="background-color:#60bdf3 ;">Pay Now</button>
            </div>
          </div>
  
        </div>
      </div>
    </div>
  </div>


@endsection