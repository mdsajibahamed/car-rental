@extends('layouts.admin')
@section('title')
{{__('  ')}}
    
@endsection
@section('content')

    <section>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <h2>All Vehicle</h2>
                    </div>
                    <div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>SL </th>
                                    <th>User Id </th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile Number</th>
                                    <th>Message</th>
                                    <th>Create  Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($contacts as $contact)
                                <tr>
                                    <td>{{$loop->iteration}} </td>
                                    <td>{{$contact->user_id}}</td>
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->mobile_number}}</td>
                                    <td>{{$contact->message}}</td>
                                    <td> {{$contact->created_at->diffforhumans()}} </td>
                                </tr>
                                @empty
                                
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
    
@endsection

