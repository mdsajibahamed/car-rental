@extends('layouts.admin')
@section('title')
{{__('Create Booking')}}
    
@endsection
@section('content')

    <section>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-8">
                    <div class="d-flex justify-content-between">
                        <h2>Crate Booking</h2>
                        <a href="{{ route('booking.index')}}" title="Back to Index" style="font-size: 2rem"><i class="bi bi-backspace"></i></a>
                    </div>
                    <div> 
                        <form action="{{ route('booking.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Detail Id </label>
                                <select name="user_id" class="form-select" id="">
                                @forelse ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->id }}</option>
                                @empty
                                    <option value="">{{ __('-- Choose One --') }}</option>
                                @endforelse
                               </select>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Vehicle Name </label>
                                <select name="vehicle_id" class="form-select" id="">
                                @forelse ($vehicles as $vehicle)
                                    <option value="{{ $vehicle->id }}">{{ $vehicle->id }}</option>
                                @empty
                                    <option value="">{{ __('-- Choose One --') }}</option>
                                @endforelse
                               </select>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label mt-2">Pickup Lacation</label>
                                <select class="form-select mt-2" name="location_from">
                                    <option selected>Pickup Location</option>
                                    <option value="Manikgonj">Manikgonj</option>
                                        <option value="Munshigonj">Munshigonj</option>
                                        <option value="Narayangonj">Narayangonj</option>
                                        <option value="kishoregonj">kishoregonj</option>
                                        <option value="Gazipur">Gazipur</option>
                                        <option value="Tangail">Tangail</option>
                                        <option value="Norsingdi">Norsingdi</option>
                                        <option value="Rajbari">Rajbari</option>
                                        <option value="Faridpur">Faridpur</option>
                                        <option value="Madaripur">Madaripur</option>
                                        <option value="Gopalgonj">Gopalgonj</option>
                                        <option value="Shariatpur">Shariatpur</option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Sherpur">Sherpur</option>
                                        <option value="Netrokona">Netrokona</option>
                                        <option value="Jamalpur">Jamalpur</option>
                                        <option value="Mymensingh">Mymensingh</option>
                                        <option value="Dinajpur">Dinajpur</option>
                                        <option value="Rangpur">Rangpur</option>
                                        <option value="Kurigram">Kurigram</option>
                                        <option value="Gaibandha">Gaibandha</option>
                                        <option value="Thakurgoan">Thakurgoan</option>
                                        <option value="Nilphamari">Nilphamari</option>
                                        <option value="Lalmonirhat">Lalmonirhat</option>
                                        <option value="Panchagarh">Panchagarh</option>
                                        <option value="Rajahahi">Rajahahi</option>
                                        <option value="Natore">Natore</option>
                                        <option value="Sirajgonj">Sirajgonj</option>
                                        <option value="Pabna">Pabna</option>
                                        <option value="Bogura">Bogura</option>
                                        <option value="Joypurhat">Joypurhat</option>
                                        <option value="Chapainawabgonj">Chapainawabgonj</option>
                                        <option value="Naogoan">Naogoan</option>
                                        <option value="Feni">Feni</option>
                                        <option value="Coxsbazer">Coxsbazer</option>
                                        <option value="Rangamati">Rangamati</option>
                                        <option value="Khagrachhari">Khagrachhari</option>
                                        <option value="Bandarban">Bandarban</option>
                                        <option value="Chattogram">Chattogram</option>
                                        <option value="Cumilla">Cumilla</option>
                                        <option value="Brahmanbaria">Brahmanbaria</option>
                                        <option value="Chadpur">Chadpur</option>
                                        <option value="Lakshmipur">Lakshmipur</option>
                                        <option value="Satkhira">Satkhira </option>
                                        <option value="Meherpur">Meherpur</option>
                                        <option value="Narail">Narail</option>
                                        <option value="Chuadanga">Chuadanga</option>
                                        <option value="Kushtia">Kushtia</option>
                                        <option value="Magura">Magura</option>
                                        <option value="Khulna">Khulna</option>
                                        <option value="Bagerhut">Bagerhut</option>
                                        <option value="Jashore">Jashore</option>
                                        <option value="Jhenaidha">Jhenaidha</option>
                                        <option value="Pathuakhali">Pathuakhali</option>
                                        <option value="Pirojpur">Pirojpur</option>
                                        <option value="Jhalakathi">Jhalakathi</option>
                                        <option value="Bhola">Bhola</option>
                                        <option value="Barguna">Barguna</option>
                                        <option value="Barisal">Barisal</option>
                                        <option value="Sylhet">Sylhet</option>
                                        <option value="Moulvibazer">Moulvibazer</option>
                                        <option value="Habigonj">Habigonj</option>
                                        <option value="Sunamgonj">Sunamgonj</option>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="" class="form-label mt-2">Drop Location</label>
                                    <select class="form-select mt-2" name="location_to">
                                        <option selected>Drop Location</option>
                                        <option value="Manikgonj">Manikgonj</option>
                                        <option value="Munshigonj">Munshigonj</option>
                                        <option value="Narayangonj">Narayangonj</option>
                                        <option value="kishoregonj">kishoregonj</option>
                                        <option value="Gazipur">Gazipur</option>
                                        <option value="Tangail">Tangail</option>
                                        <option value="Norsingdi">Norsingdi</option>
                                        <option value="Rajbari">Rajbari</option>
                                        <option value="Faridpur">Faridpur</option>
                                        <option value="Madaripur">Madaripur</option>
                                        <option value="Gopalgonj">Gopalgonj</option>
                                        <option value="Shariatpur">Shariatpur</option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Sherpur">Sherpur</option>
                                        <option value="Netrokona">Netrokona</option>
                                        <option value="Jamalpur">Jamalpur</option>
                                        <option value="Mymensingh">Mymensingh</option>
                                        <option value="Dinajpur">Dinajpur</option>
                                        <option value="Rangpur">Rangpur</option>
                                        <option value="Kurigram">Kurigram</option>
                                        <option value="Gaibandha">Gaibandha</option>
                                        <option value="Thakurgoan">Thakurgoan</option>
                                        <option value="Nilphamari">Nilphamari</option>
                                        <option value="Lalmonirhat">Lalmonirhat</option>
                                        <option value="Panchagarh">Panchagarh</option>
                                        <option value="Rajahahi">Rajahahi</option>
                                        <option value="Natore">Natore</option>
                                        <option value="Sirajgonj">Sirajgonj</option>
                                        <option value="Pabna">Pabna</option>
                                        <option value="Bogura">Bogura</option>
                                        <option value="Joypurhat">Joypurhat</option>
                                        <option value="Chapainawabgonj">Chapainawabgonj</option>
                                        <option value="Naogoan">Naogoan</option>
                                        <option value="Feni">Feni</option>
                                        <option value="Coxsbazer">Coxsbazer</option>
                                        <option value="Rangamati">Rangamati</option>
                                        <option value="Khagrachhari">Khagrachhari</option>
                                        <option value="Bandarban">Bandarban</option>
                                        <option value="Chattogram">Chattogram</option>
                                        <option value="Cumilla">Cumilla</option>
                                        <option value="Brahmanbaria">Brahmanbaria</option>
                                        <option value="Chadpur">Chadpur</option>
                                        <option value="Lakshmipur">Lakshmipur</option>
                                        <option value="Satkhira">Satkhira </option>
                                        <option value="Meherpur">Meherpur</option>
                                        <option value="Narail">Narail</option>
                                        <option value="Chuadanga">Chuadanga</option>
                                        <option value="Kushtia">Kushtia</option>
                                        <option value="Magura">Magura</option>
                                        <option value="Khulna">Khulna</option>
                                        <option value="Bagerhut">Bagerhut</option>
                                        <option value="Jashore">Jashore</option>
                                        <option value="Jhenaidha">Jhenaidha</option>
                                        <option value="Pathuakhali">Pathuakhali</option>
                                        <option value="Pirojpur">Pirojpur</option>
                                        <option value="Jhalakathi">Jhalakathi</option>
                                        <option value="Bhola">Bhola</option>
                                        <option value="Barguna">Barguna</option>
                                        <option value="Barisal">Barisal</option>
                                        <option value="Sylhet">Sylhet</option>
                                        <option value="Moulvibazer">Moulvibazer</option>
                                        <option value="Habigonj">Habigonj</option>
                                        <option value="Sunamgonj">Sunamgonj</option>
                                    </select>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="" class="form-label mt-3">Picked Date</label>
                                        <input type="date" name="pickup_date" value="{{old('pickup_date')}}" class="form-control">
                                    </div>
                                   
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="" class="form-label mt-3">Return Date</label>
                                        <input type="date" name="return_date"  value="{{ old('return_date')}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label mt-3"> Total Day</label>
                                <input type="text" name="total_days" value="{{old('total_days')}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label mt-3"> Status</label>
                                <select name="status" class="form-control" id="">

                                    <option value="1">choose status....</option>
                                    <option value="1">Enable</option>
                                    <option value="0">Disable</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label mt-3"> Total Amount</label>
                                <input type="text" name="total_amount" value="{{old('total_amount')}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-outline-primary mt-3" value="Insert">
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

