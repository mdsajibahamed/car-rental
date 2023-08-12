@extends('layouts.admin')
@section('title')
{{__('admin')}}
    
@endsection
@section('content')
    <section class="my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="d-flex justify-content-between">
                      <h2>All User</h2>
                      <a href="{{route('user.create')}}" title="Add new User" class="" style="font-size:2rem"><i class="bi bi-plus-circle"></i></a>

                    </div>
                    <div>
                        <table class="table table-striped">
                            <colgroup>
                               
                                <col>
                                <col>
                                <col>
                                <col style="width: 20%;">
                            </colgroup>
                            <tr>
                                <th> id</th>
                                <th>User id</th>
                                <th> Full Name</th>
                                <th>Email</th>
                                <th>Title</th>
                                <th>Mobile Phone</th>
                                <th>Address1</th>
                                <th>Action</th>
                            </tr>
                            @forelse ($details as $detail)
                            <tr>
                                <td>{{$detail->id}}</td>
                                <td>{{$detail->user_id}}</td>
                                <td>{{$detail->full_name}}</td>
                                <td>{{$detail->email}}</td>
                                <td>{{$detail->title}}</td>
                                <td>{{$detail->mobile_number}}</td>
                                <td>{{$detail->address1}}</td>
                                <td style="text-align: center">
                                    <a href=""><i class="bi bi-eye-fill"></i></a>
                                    <a href="{{route('user.edit',$detail->id)}}"><i class="bi bi-pencil-square"></i></a> 

                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td>Data not found</td>
                                </tr>
                            @endforelse
                           
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </section>
@endsection

@section('script')
    <script>
        function del(e,t){
            e.preventDefault();
            let c = confirm("Are you sure you want to delete?");
            if(!c) return;            
            t.closest('form').submit();
        }
    </script>
@endsection