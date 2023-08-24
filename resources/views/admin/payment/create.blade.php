@extends('layouts.admin')
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

