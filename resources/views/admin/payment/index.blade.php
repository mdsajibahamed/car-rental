@extends('layouts.admin')
@section('title')
{{__(' Payment')}}
    
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
@endsection
@section('content')

    <section>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-10">
                    <div class="d-flex justify-content-between">
                        <h2>Payment List</h2>
                        {{-- <a href="" title="Back to Index" style="font-size: 2rem"><i class="bi bi-backspace"></i></a> --}}

                        <a href="{{ route('payment.create') }}" title="add new vehicle" class="" style="font-size:2rem"><i class="bi bi-plus-circle"></i></a>
                    </div>
                    <div class="table-responsive">
                        <table id="table" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Booking Id</th>
                                    <th>Payment Date</th>
                                    <th>Payment Type</th>
                                    <th>Transaction Id</th>
                                    <th>Amount</th>
                                    <th>Create time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                               @foreach ($payments as $payment)
                                   <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$payment->booking_id}}</td>
                                    <td>{{$payment->payment_type}}</td>
                                    <td>{{$payment->payment_type}}</td>
                                    <td>{{$payment->trxid}}</td>
                                    <td>{{$payment->amount}}</td>
                                    <td>{{$payment->created_at->diffforhumans()}}</td>
                                    <td>
                                        <a href="{{ route('payment.edit', $payment->id)}}"><i class="bi bi-pencil-square"></i></a> 
                                        <form action="{{ route('payment.destroy',$payment->id) }}" class="d-inline" method="POST">
                                            @csrf
                                            @method("delete")
                                            <a href="#" class="bi bi-trash3-fill" onclick="del(event,this)"></a>
                                        </form>
                                    </td>
                                   </tr>
                               @endforeach
                                
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
    let table = new DataTable('#table');
</script>
<script>
    function del(e,t){
        e.preventDefault();
        let c = confirm("Are you sure you want to delete?");
        if(!c) return;            
        t.closest('form').submit();
    }
    
</script>
    
@endsection

