@extends('layouts.admin')
@section('title')
    {{__('service')}}
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
@endsection
@section('content')

    <section>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-12">
                    <div class="d-flex justify-content-between table-resposive">
                        <h2>All Service List</h2>
                        <a href="{{ route('service.create')}}" title="add new vehicle"     v      class=""style="font-size:2rem"><i class="bi bi-plus-circle"></i></a>
                    </div>
                    <div class="table-responsive">
                        <table id="table" class="table  table-hover">
                            {{-- table-bordered border-primary --}}
                            <thead >
                                <tr >
                                    <th  style="text-align: center" >SL</th>
                                    <th  style="text-align: center">Title</th>
                                    <th style="text-align: center">Description</th>
                                    <th style="text-align: center">Status</th>
                                    <th  style="text-align: center">Price</th>
                                    <th  style="text-align: center">Create At</th>
                                    <th  style="text-align: center" >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($services as $service)

                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$service->title}}</td>
                                    <td>{{$service->description}}</td>
                                    <td>{{$service->status}}</td>
                                    <td>{{$service->price}}</td>
                                    <td>{{$service->created_at->diffforhumans()}}</td>
                                   <td style="text-align: center">
                                        <a href=""><i class="bi bi-eye-fill"></i></i></a>
                                        <a href="{{ route('service.edit',$service->id)}}"><i class="bi bi-pencil-square"></i></a> 
                                        <form action="{{ route('service.destroy',$service->id)}}" method="POST" class="d-inline">
                                        @csrf
                                        @method("delete")
                                        {{-- <button type="submit"><i class="bi bi-trash3-fill"></i></button> --}}
                                        <a href="#" onclick="del(event, this)"><i class="bi bi-trash3-fill"></i></a>
                                        </form> 
                                  </td>
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


    
