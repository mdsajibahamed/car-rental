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
                    <a title="back to index" style="font-size: 2em" href="{{route("user.index")}}"><i class="bi bi-backspace"></i></a>
                </div>
                <div>
                        <form action="{{route("user.update",$detail->id)}}" method="post">
                            @csrf
                            @method("put")
                            <div class="form-group">
                            <label for="" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="title..." value="{{$detail->title}}">
                            </div>
                            <div class="form-group">
                            <label for="" class="form-label mt-2">Full Name</label>
                            <input type="text" class="form-control" name="full_name" placeholder="full_name..." value="{{$detail->full_name}}">
                            </div>
                            <div class="form-group">
                            <label for="" class="form-label mt-2">Status</label>
                            <input type="text" class="form-control" name="status" placeholder="status..." value="{{$detail->status}}">
                            </div>
                            <div class="form-group">
                            <label for="" class="form-label mt-2">Mobile Number</label>
                            <input type="text" class="form-control" name="mobile_number" placeholder="mobile_number.." value="{{$detail->mobile_number}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label mt-2">Address1</label>
                                <input type="text" class="form-control" name="address1" placeholder="address1.." value="{{$detail->address1}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label mt-2">Address2</label>
                                <input type="text" class="form-control" name="address2" placeholder="address2.." value="{{$detail->address2}}">
                            </div>
                        
                            <input type="submit" value="Update" class="btn btn-outline-primary my-3">     
                        </form>
                </div>

            </div>
        </div>
    </div>
</section>


 
@endsection