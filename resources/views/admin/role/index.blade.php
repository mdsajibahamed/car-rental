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
                        <table class="table table-striped">
                            <colgroup>
                               
                                <col>
                                <col>
                                <col>
                                <col style="width: 20%;">
                            </colgroup>
                            <tr>
                                <th >Sl</th>
                                <th >Title </th>                                
                                <th >Status</th>
                                <th >Date create</th>
                                <th >Action</th>
                            </tr>
                          @forelse ($roles as $role)
                            <tr>
                                {{-- <td>{{$role->sl}}</td> 
                              <th>{{$loop->iteration}}</th>
                                <th>{{$k+1}}</th>
                                <th>{{$k}}</th>
                                <td>{{$role->title}}</td>
                                <td>  --}}
                                    {{-- @if($role->staus ==== 1){
                                        <span>{{('Enable')}}</span>
                                    }@elseif($role->status ==== 0){
                                        
                                        <span>{{('Disable')}}</span>
                                    }@else
                                        <span>{{('Pending')}}</span>
                                    @endif
                                </td>
                                <td>
                                    {{-- {{ $role->created_at->diffforhumans() }}
                                    {{ $role->created_at }} --}}
                                </td>
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