@extends('layouts.admin')
@section('title')
{{__('  ')}}
    
@endsection
@section('content')

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="d-flex justify-content-between">
                        <h2>All Vehicle</h2>
                        <a href="{{route('vehicle.create')}}" title="add new vehicle" class="" style="font-size:2rem"><i class="bi bi-plus-circle"></i></a>
                    </div>
                    <div>
                        <table class="table table-striped">
                            <tr>
                                <th></th>
                                <th></th>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')
    
@endsection

