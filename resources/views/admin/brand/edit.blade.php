@extends('layouts.admin')
@section('title')
{{__('Edit Brand')}}
    
@endsection
@section('content')

    <section>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-8">
                    <div class="d-flex justify-content-between">
                        <h2>All Vehicle</h2>
                        <a href="" title="Back to Index" style="font-size: 2rem"><i class="bi bi-backspace"></i></a>

                    </div>
                    <div>
                       <form action="{{ route('brand.update',$brand->id) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="{{ __('title')}}" value="{{$brand->title}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Description</label>
                                <input type="text" class="form-control" name="description" placeholder="{{ __('description')}}" value="{{$brand->description}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label mt-2">Status</label>
                                <select name="status" class="form-control" id="">
                                    <option value="">{{__('choose status')}}</option>
                                    <option value="1" {{$brand->status === 1 ? 'selected' : ''}}>{{__('Enable')}}</option>
                                    <option value="0" {{$brand->status === 0 ? 'selected' : ''}}>{{__('Disable')}}</option>
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

@section('script')
    
@endsection
