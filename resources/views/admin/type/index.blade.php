@extends('layouts.admin')
@section('title')
{{__('Type')}}
    
@endsection
@section('content')

    <section>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-8">
                    <div class="d-flex justify-content-between">
                        <h2> All Type</h2>
                        {{-- <a href="" title="Back to Index" style="font-size: 2rem"><i class="bi bi-backspace"></i></a> --}}

                        <a href="{{route('type.create')}}" title="add new vehicle" class="" style="font-size:2rem"><i class="bi bi-plus-circle"></i></a>
                    </div>
                    <div>
                        <table class="table table-striped">
                            <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Id</th>
                                <th>Status</th>
                                <th>Date Create</th>
                                <th>Action</th>
                                <th></th>
                            </tr>
                            @forelse ($types as $type)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$type->title}}</td>
                                    <td>{{$type->id}}</td>
                                    <td> 
                                        @if($type->status ===1){
                                            <span class="badge bg-success">{{ __('Enable') }}</span>
                                        }@elseif($type->status === 0){
                                            
                                            <span class="badge bg-danger">{{__('Disable')}}</span>
                                        }@else
                                            <span class="badge bg-secondary">{{__('Pending')}}</span>
                                        @endif
                                    </td>
                                    <td>{{ $type->created_at->diffforhumans()}}</td>
                                    <td >
                                        <a href=""><i class="bi bi-eye-fill"></i></a>
                                        <a href="{{ route('type.edit',$type->id) }}"><i class="bi bi-pencil-square"></i></a> 
                                        <form action="{{ route('type.destroy',$type->id) }}" class="d-inline" method="POST">
                                            @csrf
                                            @method("delete")
                                            <a href="#" class="bi bi-trash3-fill" onclick="del(event,this)"></a>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                
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

