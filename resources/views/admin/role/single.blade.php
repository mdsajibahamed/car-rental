@extends('layouts.admin')
@section('title')
    {{__('Single Role')}}
@endsection
@section('content')

    <section>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-8">
                   <form action="">
                    <div class="form-group">
                        <label for="" class="form-label">Title</label><br>
                        <h2>{{$role->title}}</h2><br>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Description</label><br>
                        <h2>{{$role->description}}</h2><br>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Create at</label><br>
                        <h2>{{$role->created_at}}</h2>
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </section>
@endsection