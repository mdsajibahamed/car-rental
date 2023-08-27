@extends('layouts.front')

@section('title')
    {{__('Checkout')}}
@endsection
@section('content')
<div class="py-5"></div>
<h1 class="text-center">Checkout Page</h1>
<main>
  <section>
    <div class="container">
      <form action="">
        <div class="row my-3">
          <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7 p-2">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Checkout Form</h4>
              </div>
              <div class="card-body">
                <fieldset>
                  <legend>Billing Information</legend>
                  <div class="form-group my-2">
                    <label for="name1">Full Name</label>
                    
                  </div>
                  <div class="row my-2">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                      <div class="form-group">
                        <label for="email1">Email Address</label>
                        <div class="input-group input-group-sm my-1">
                          <span class="input-group-text" id="inputGroup-sizing-sm">
                            <i class="fas fa-envelope"></i>
                          </span>
                          <input type="email" class="form-control" id="email1" placeholder="someone@example.com" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required />
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                      <div class="form-group">
                        <label for="phone1">Cell Phone</label>
                        <div class="input-group input-group-sm my-1">
                          <span class="input-group-text" id="inputGroup-sizing-sm">
                            <i class="fas fa-phone"></i>
                          </span>
                          <input type="tel" class="form-control" id="phone" name="phone" placeholder="+88 (0XX) XX-XXXXXX" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" oninput="formatPhoneNumber()" maxlength="19" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group my-2">
                    <label for="addressOne1">Address Line-01</label>
                    <div class="input-group input-group-sm my-1">
                      <input type="text" class="form-control" id="addressOne1" placeholder="1234 Main St" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required />
                    </div>
                  </div>
                  <div class="form-group my-2">
                    <label for="addressTwo1">Address Line-02</label>
                    <div class="input-group input-group-sm my-1">
                      <input type="text" class="form-control" id="addressTwo1" placeholder="Apartment or Suite" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                    </div>
                  </div>
                  <div class="row my-2">
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                      <div class="form-group">
                        <label for="division1">Division</label>
                        <select class="form-control form-control-sm d-block w-100 my-1" id="division1" required>
                          <option value="">-- Choose One --</option>
                          <option value="1">Barisal</option>
                          <option value="2">Chittagong</option>
                          <option value="3">Dhaka</option>
                          <option value="4">Khulna</option>
                          <option value="5">Mymensingh</option>
                          <option value="6">Rajshahi</option>
                          <option value="7">Rangpur</option>
                          <option value="8">Sylhet</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                      <div class="form-group">
                        <label for="district1">District</label>
                        <select class="form-control form-control-sm d-block w-100 my-1" id="district1" required>
                          <option value="">-- Choose One --</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                      <div class="form-group">
                        <label for="postal1">Postal Code</label>
                        <div class="input-group input-group-sm my-1">
                          <input type="text" class="form-control" id="postal1" placeholder="Ex. 1216" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" maxlength="5" />
                        </div>
                      </div>
                    </div>
                  </div>
                </fieldset>
                <hr>
                
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5 p-2">
            <div class="card mt-3">
              <div class="card-body">
                <fieldset>
                  <legend>Payment Method</legend>
                  <div class="custom-control custom-radio mt-3">
                    <input id="cashDelivery" name="paymentMethod" type="radio" class="custom-control-input" checked />
                    <label class="custom-control-label" for="cashDelivery">Cash on Delivery</label>
                  </div>
                  <div class="d-flex mt-3 mb-2">
                    <div class="custom-control payment-icon custom-radio py-0 my-0">
                      <input id="creditCard" name="paymentMethod" type="radio" class="custom-control-input visually-hidden" value="option-1" />
                      <label class="custom-control-label" for="creditCard" title="Credit Card" >
                        <i class="far fa-credit-card pay-icon"></i>
                      </label>
                    </div>
                    <div class="custom-control payment-icon custom-radio py-0 my-0">
                      <input id="debitCard" name="paymentMethod" type="radio" class="custom-control-input visually-hidden" value="option-1" />
                      <label class="custom-control-label" for="debitCard" title="Debit Card" >
                        <i class="fas fa-credit-card pay-icon"></i>
                      </label>
                    </div>
                    <div class="custom-control payment-icon custom-radio py-0 my-0">
                      <input id="stripe" name="paymentMethod" type="radio" class="custom-control-input visually-hidden" value="option-1" />
                      <label class="custom-control-label" for="stripe" title="Stripe" >
                        <i class="fab fa-cc-stripe pay-icon"></i>
                      </label>
                    </div>
                    <div class="custom-control payment-icon custom-radio py-0 my-0">
                      <input id="masterCard" name="paymentMethod" type="radio" class="custom-control-input visually-hidden" value="option-1" />
                      <label class="custom-control-label" for="masterCard" title="Mastercard" >
                        <i class="fab fa-cc-mastercard pay-icon"></i>
                      </label>
                    </div>
                    <div class="custom-control payment-icon custom-radio py-0 my-0">
                      <input id="visaCard" name="paymentMethod" type="radio" class="custom-control-input visually-hidden" value="option-1" />
                      <label class="custom-control-label" for="visaCard" title="Visa" >
                        <i class="fab fa-cc-visa pay-icon"></i>
                      </label>
                    </div>
                    <div class="custom-control payment-icon custom-radio py-0 my-0">
                      <input id="americanExpress" name="paymentMethod" type="radio" class="custom-control-input visually-hidden" value="option-1" />
                      <label class="custom-control-label" for="americanExpress" title="Amrecian Express" >
                        <i class="fab fa-cc-amex pay-icon"></i>
                      </label>
                    </div>
                    <div class="custom-control payment-icon custom-radio py-0 my-0">
                      <input id="payPal" name="paymentMethod" type="radio" class="custom-control-input visually-hidden" value="option-1" />
                      <label class="custom-control-label" for="payPal" title="Paypal" >
                        <i class="fab fa-cc-paypal pay-icon"></i>
                      </label>
                    </div>
                  </div>
                  
                  <div class="row my-2">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="cc-name">Name on card</label>
                        <div class="input-group input-group-sm my-1">
                          <input type="text" class="form-control input-field" id="cc-name" placeholder="John Doe" disabled required />
                        </div>
                        <small class="text-muted">Full name as displayed on card</small>
                        <div class="invalid-feedback">
                          Name on card is required
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="cc-number">Credit card number</label>
                        <div class="input-group input-group-sm my-1">
                          <input type="text" class="form-control input-field text-center" id="cc-number" placeholder="XXXX-XXXX-XXXX-XXXX" maxlength="16" disabled required />
                        </div>
                        <div class="invalid-feedback">
                          Credit card number is required
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row my-2">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="cc-expiration">Expiration</label>
                        <div class="input-group input-group-sm my-1">
                          <input type="date" class="form-control input-field" id="cc-expiration" placeholder="" disabled required />
                        </div>
                        <div class="invalid-feedback">
                          Expiration date required
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="cc-cvv">CVV</label>
                        <div class="input-group input-group-sm my-1">
                          <input type="text" class="form-control input-field text-center" id="cc-cvv" placeholder="XXXX" maxlength="4" disabled required />
                        </div>
                        <div class="invalid-feedback">
                          Security code required
                        </div>
                      </div>
                    </div>
                  </div>
                </fieldset>
              </div>
              <div class="card-footer">
                <div class="d-grid">
                  <button type="submit" class="btn btn-outline-primary" >Place Your Order</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
</main>
@endsection




 {{-- @extends('layouts.admin')
@section('title')
{{__(' Payment')}}
    
@endsection
@section('content')

    <section>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-8">
                    <div class="d-flex justify-content-between">
                        <h2>Create Payment</h2>
                        <a href="{{ route('payment.index') }}" title="Back to Index" style="font-size: 2rem"><i class="bi bi-backspace"></i></a>
                    </div>
                    <div>
                        <form action="{{route('payment.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label mt-3">Booking Id</label>
                                <select name="booking_id" id="" class="form-select">
                                    <option value="">Select Booking Id</option>
                                    @foreach ($bookings as $booking)
                                    <option value="{{$booking->id}}">{{$booking->id}}</option>
                                        
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label mt-3">Payment Date</label>
                                <input type="date" name="payment_date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label mt-3">Payment Type</label>
                               <select name="payment_type" id="" class="form-select">
                                <option value="">Select Payment Type</option>
                                <option value="cash">Cash</option>
                                <option value="bkash">bKash</option>
                                <option value="nagad">Nagad</option>
                               </select>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label mt-3"> Transaction Id</label>
                                <input type="text" name="trxid"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label mt-3"> Amount</label>
                                <input type="text" name="amount"  class="form-control">
                            </div>
                           
                            <input type="submit" class="btn btn-outline-primary mt-3" value="Insert">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')
    
@endsection
  --}}
