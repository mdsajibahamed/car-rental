@extends('layouts.admin')
@section('title')
{{__(' Payment')}}
    
@endsection
@section('content')

    <section>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-8">
                    <div class="d-flex justify-content-between">
                        <h2>Create Payment</h2>
                        <a href="{{ route('payment.index') }}" title="Back to Index" style="font-size: 2rem"><i class="bi bi-backspace"></i></a>
                    </div>
                    <div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')
    
@endsection

