@extends('layouts.admin')
@section('title')
{{__('admin')}}
    
@endsection
@section('content')
    <section class="my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="d-flex justify-content-between">
                      <h2>All User</h2>
                      <a href="{{route('role.create')}}" title="Add new User" class="" style="font-size:2rem"><i class="bi bi-plus-circle"></i></a>

                    </div>
                    <div>
                        <table class="table table-striped justify-content-center">
                            <colgroup>
                                <col>
                                <col>
                                <col>
                                <col >
                            </colgroup>
                            <tr>
                                <th >Sl</th>
                                <th >Title </th>
                                <th>Id</th>                                
                                <th >Status</th>
                                <th >Date create</th>
                                <th class="text-align-center">Action</th>
                            </tr>
                          @forelse ($roles as $k => $role)
                            <tr>
                              <td>{{$loop->iteration}}</td>
                                {{-- <td>{{$k+1}}</td>
                                <td>{{$k}}</td> --}}
                                <td>{{$role->title}}</td>
                                <td>{{$role->id}}</td>
                                <td> 
                                    @if($role->status ===1){
                                        <span class="badge bg-success">{{ __('Enable') }}</span>
                                    }@elseif($role->status === 0){
                                        
                                        <span class="badge bg-danger">{{__('Disable')}}</span>
                                    }@else
                                        <span class="badge bg-secondary">{{__('Pending')}}</span>
                                    @endif
                                </td>
                                <td>
                                 {{ $role->created_at->diffforhumans() }}
                                    {{-- {{ $role->created_at }}  --}}
                                </td>
                                <td >
                                    <a href="{{ route('role.show',$role->id)}}"><i class="bi bi-eye-fill"></i></a>
                                    <a href="{{route('role.edit',$role->id)}}"><i class="bi bi-pencil-square"></i></a> 
                                    <form action="{{ route('role.destroy',$role->id)}}" class="d-inline" method="POST">
                                        @csrf
                                        @method("delete")
                                        <a href="#" class="bi bi-trash3-fill" onclick="del(event,this)"></a>
                                    </form>
                                </td>
                            
                           @empty
                                
                                    <td class=" text align-center">Data not found</td>
                                
                            @endforelse
                        </tr>
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