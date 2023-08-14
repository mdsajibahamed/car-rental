@extends('layouts.admin')
@section('title')
    {{__('Brand')}}
@endsection
@section('content')
<section>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-8">
                <div class="d-flex justify-content-between">
                    <h2>Brand List</h2>
                        {{-- <a href="" title="Back to Index" style="font-size: 2rem"><i class="bi bi-backspace"></i></a> --}}

                    <a href="{{route('brand.create')}}" title="add new vehicle" class="" style="font-size:2rem"><i class="bi bi-plus-circle"></i></a>
                </div>
                <div>
                    <table class="table table-striped">
                        <tr>
                            <th >Sl</th>
                             <th >Title </th>                              
                             <th >Status</th>
                             <th >Date create</th>
                             <th>Action</th>
                        </tr>
                        @forelse ($brands as $brand)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$brand->title}}</td>
                                <td>
                                @if($brand->status ===1){
                                    <span class="badge bg-success">{{ __('Enable') }}</span>
                                }@elseif($brand->status === 0){   
                                    <span class="badge bg-danger">{{__('Disable')}}</span>
                                }@else
                                    <span class="badge bg-secondary">{{__('Pending')}}</span>
                                @endif
                                 </td>
                                <td>{{$brand->created_at->diffforhumans()}}</td>
                                <td>
                                    <a href="{{ route('brand.show',$brand->id)}}"><i class="bi bi-eye-fill"></i></a>
                                    <a href="{{route('brand.edit',$brand->id)}}"><i class="bi bi-pencil-square"></i></a> 
                                    <form action="{{ route('brand.destroy',$brand->id) }}" class="d-inline" method="POST">
                                        @csrf
                                        @method("delete")
                                        <a href="#" class="bi bi-trash3-fill" onclick="del(event,this)"></a>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr></tr>
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