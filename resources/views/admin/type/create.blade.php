@extends('layouts.admin')
@section('title')
{{__(' Type Create')}}
    
@endsection
@section('content')

    <section>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-8">
                    <div class="d-flex justify-content-between">
                        <h2>Create Type</h2>
                        <a href="{{route('type.index')}}" title="Back to Index" style="font-size: 2rem"><i class="bi bi-backspace"></i></a>

                    </div>
                    <div>
                       <form action="{{ route('type.store')}}" method="POST">
                         @csrf
                        <div class="form-group">
                            <label for="" class="form-label">Title</label>
                            <input type="text" class="form-control my-2 "  name="title" value="{{old('title')}}" >
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Description</label>
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

@section('script')
    
@endsection

