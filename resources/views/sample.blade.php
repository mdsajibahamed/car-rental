@extends('layouts.front')

@section('title')
    {{ __('Sample') }}
@endsection

@section('hero')
    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Sample</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="{{ route('site.home') }}">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Sample</h6>
        </div>
    </div>
    <!-- Page Header Start -->
@endsection

@section('content')
    
@endsection