@extends('layouts.admin')
@section('title')
    {{__('Create Brands')}}
@endsection
@section('content')

    <section>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-8">
                    <div class="d-flex justify-content-between">
                        <h2>All Brands</h2>
                        <a href="{{route('brand.index')}}" title="Back to Index" style="font-size: 2rem"><i class="bi bi-backspace"></i></a>
                    </div>
                    <div>
                       <form action="{{ route('brand.store') }}" method="post">
                      
                        @csrf 
                        <div class="form-group">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control my-2" name="title" value="{{ old('title') }}" id="title">
                        </div> 
                        <div class="form-group">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control my-2" name="description" value="{{ old('description') }}" id="description">
                        </div>
                        <div class="form-group">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" class="form-control" id="status">
                                <option value="0">Choose status...</option>
                                <option value="1">Enable</option>
                                <option value="2">Disable</option>
                            </select>
                        </div>
                        
                        
                            <input type="submit" value="Insert" class="btn btn-outline-primary my-3">    
                        
                    </form>
                    
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