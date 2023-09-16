@extends('layouts.admin')
@section('title')
{{__('  ')}}
    
@endsection
@section('content')

    <section>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-8">
                    <div class="d-flex justify-content-between">
                        <h2>All Vehicle</h2>
                        <a href="" title="Back to Index" style="font-size: 2rem"><i class="bi bi-backspace"></i></a>

                        <a href="" title="add new vehicle" class="" style="font-size:2rem"><i class="bi bi-plus-circle"></i></a>
                    </div>
                    <div>
                        <table class="table table-striped">
                            <tr>
                                <th> service name</th>
                                <th> service status</th>
                            </tr>

                            <tr>
                                <td>paniting</td>
                                <td>1</td>
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

