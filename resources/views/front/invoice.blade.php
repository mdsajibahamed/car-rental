@extends('layouts.front')
@section('title')
    {{__('Invoice')}}
@endsection
@section('content')
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
                    class="fw-bold">Creation Date: </span>August  22,2023</li>
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
                  <th scope="col">Vehicle Name</th>
                  <th scope="col">Per/km price </th>
                  <th scope="col">Amount</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Toyota X50 </td>
                  <td>Johan</td>
                  <td>Toyota X50</td>
                  <td>$5</td>
                  <td>$300</td>
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
                <li class="text-muted ms-3"><span class="text-black me-4">SubTotal</span>$300</li>
                <li class="text-muted ms-3 mt-2"><span class="text-black me-4">Tax(5%)</span>$285</li>
              </ul>
              <p class="text-black float-start"><span class="text-black me-3"> Total Amount</span><span
                  style="font-size: 25px;">$285</span></p>
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