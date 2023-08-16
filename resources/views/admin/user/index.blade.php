@extends('layouts.admin')
@section('title')
    {{__('user create')}}
@endsection
@section('css')
    {{-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
@endsection
@section('content')

    <section>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-8">
                    <div class="d-flex justify-content-between  my-3">
                        <h2>All user</h2>
                        <a href="{{route('user.create')}}" title="Add new vehicle" class="" style="font-size:2rem"><i class="bi bi-plus-circle"></i></a>
                    </div>
                    <div>
                        <table id="table" class="table table-striped">
                                <thead>
                                    <th>SL</th>
                                    <th>User Name</th>
                                    <th>Email Address</th>
                                    <th>Role Id</th>
                                    <th>Create Date</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                   @forelse ($users as $user)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->role_id}}</td>
                                        <td>{{ $user->created_at->diffforhumans() }}</td>
                                        <td >
                                            {{-- <a href="{{ route('user.show',$role->id)}}"><i class="bi bi-eye-fill"></i></a> --}}
                                            <a href="{{route('user.edit',$user->id)}}"><i class="bi bi-pencil-square"></i></a> 
                                            <form action="{{route('user.destroy',$user->id)}}" class="d-inline" method="POST">
                                                @csrf
                                                @method("delete")
                                                <a href="#" class="bi bi-trash3-fill" onclick="del(event,this)"></a>
                                            </form>
                                        </td>
                                    
                                        @empty
                                        <tr>
                                            <td class="d-flex justity-items-center">NO Data Found</td>
                                        </tr>
                                        @endforelse
                                    </tr>
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
