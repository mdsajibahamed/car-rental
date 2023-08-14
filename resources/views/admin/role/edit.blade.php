@extends('layouts.admin')
@section('title')
    {{__('Edit User')}}
@endsection
@section('content')
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="d-flex justify-content-between">
                    <h2>Edit user</h2>
                    <a title="back to index" style="font-size: 2em" href="{{route('role.index')}}"><i class="bi bi-backspace"></i></a>
                </div>
                <div>
                        <form action="{{ route('role.update',$role->id) }}" method="post">
        
                            @csrf
                           @method('put')
                            <div class="form-group">
                            <label for="" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="{{ __('title....')}}" value="{{$role->title}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Description</label>
                                <input type="text" class="form-control" name="description" placeholder="{{ __('description....') }}" value="{{$role->description}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label mt-2">Status</label>
                                <select name="status" class="form-control" id="">
                                    <option value="">{{__('choose status')}}</option>
                                    <option value="1" {{$role->status === 1 ? 'selected' : ''}}>{{__('Enable')}}</option>
                                    <option value="0" {{$role->status === 0 ? 'selected' : ''}}>{{__('Disable')}}</option>
                                </select>
                            </div>
                            <input type="submit" value="Update" class="btn btn-outline-primary my-3">     
                        </form>
                </div>

            </div>
        </div>
    </div>
</section>


 
@endsection