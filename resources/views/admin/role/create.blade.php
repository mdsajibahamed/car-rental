@extends('layouts.admin')
@section('title')
{{__('User Create')}}
    
@endsection
@section('content')
    <section class="my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="d-flex justify-content-between">
                        <h2>Add Role</h2>
                        
                         <a href="{{route('role.index')}}" title="Back to Index" style="font-size: 2rem"><i class="bi bi-backspace"></i></a>
                        
                    </div>
                    <div class="">
                        <form action="{{route('role.store')}}" method="post">
                            @csrf 
                            <div class="form-group">
                                <label for="" class="form-label">Title</label>
                                <input type="text" class="form-control my-2 "  name="title" value="{{old('title')}}" >
                            </div> 
                            <div class="form-group">
                                <label for="" class="form-label">Decription</label>
                                <input type="text" class="form-control my-2 "  name="description" value="{{old('description')}}" >
                            </div>
                            <div class="form-group">
                               <select name="status" class="form-control" id="">

                                <option value="1">choose status....</option>
                                <option value="1">Enable</option>
                                <option value="0">Disable</option>
                               </select>
                            </div>
                            <div class="form-group">
                            <input type="submit" value="Insert" class="btn btn-outline-primary my-3">    
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection