{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> --}}
<style>

.modal {
    --bs-modal-width: 900px !important;

  }
</style>
<!-- Search Start -->
<div class="container-fluid bg-white pt-3 px-lg-5">
    <div class="row mx-n2">
        <div class="col-xl-2 col-lg-4 col-md-6 px-2">
            <select class="custom-select px-4 mb-3" style="height: 50px;">
                <option selected>Pickup Location</option>
                <option value="1">Dhaka</option>
                <option value="2">Mirpur </option>
                <option value="3">Dhanmondhi</option>
                <option value="3">Gulshan</option>
                <option value="3">JatraBari</option>
                <option value="3">Mohakhali</option>
                <option value="3">Khilgoan</option>
                <option value="3">Cantonment</option>
                <option value="3">Keraniganj</option>
                <option value="3">Mohammadpur</option>
                <option value="3">Saver</option>
                <option value="3">Ashulia</option>
            </select>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 px-2">
            <select class="custom-select px-4 mb-3" style="height: 50px;">
                <option selected>Drop Location</option>
                <option value="1">Manikgonj</option>
                <option value="2">Munshigonj</option>
                <option value="4">Narayangonj</option>
                <option value="5">kishoregonj</option>
                <option value="6">Gazipur</option>
                <option value="7">Tangail</option>
                  <option value="8">Norsingdi</option>
                  <option value="9">Rajbari</option>
                  <option value="10">Faridpur</option>
                  <option value="11">Madaripur</option>
                  <option value="12">Gopalgonj</option>
                  <option value="13">Shariatpur</option>
                  <option value="14">Dhaka</option>
                  <option value="15">Sherpur</option>
                  <option value="16">Netrokona</option>
                  <option value="17">Jamalpur</option>
                  <option value="18">Mymensingh</option>
                  <option value="19">Dinajpur</option>
                  <option value="20">Rangpur</option>
                  <option value="21">Kurigram</option>
                  <option value="22">Gaibandha</option>
                  <option value="23">Thakurgoan</option>
                  <option value="24">Nilphamari</option>
                  <option value="25">Lalmonirhat</option>
                  <option value="26">Panchagarh</option>
                  <option value="28">Rajahahi</option>
                  <option value="29">Natore</option>
                  <option value="30">Sirajgonj</option>
                  <option value="31">Pabna</option>
                  <option value="31">Bogura</option>
                  <option value="32">Joypurhat</option>
                  <option value="33">Chapainawabgonj</option>
                  <option value="34">Naogoan</option>
                  <option value="35">Feni</option>
                  <option value="36">Coxsbazer</option>
                  <option value="37">Rangamati</option>
                  <option value="38">Khagrachhari</option>
                  <option value="39">Bandarban</option>
                  <option value="40">Chattogram</option>
                  <option value="41">Cumilla</option>
                  <option value="42">Brahmanbaria</option>
                  <option value="43">Chadpur</option>
                  <option value="44">Lakshmipur</option>
                  <option value="45">Satkhira </option>
                  <option value="46">Meherpur</option>
                  <option value="47">Narail</option>
                  <option value="48">Chuadanga</option>
                  <option value="49">Kushtia</option>
                  <option value="50">Magura</option>
                  <option value="51">Khulna</option>
                  <option value="52">Bagerhut</option>
                  <option value="53">Jashore</option>
                  <option value="54">Jhenaidha</option>
                  <option value="55">Pathuakhali</option>
                  <option value="56">Pirojpur</option>
                  <option value="57">Jhalakathi</option>
                  <option value="58">Bhola</option>
                  <option value="59">Barguna</option>
                  <option value="60">Barisal</option>
                  <option value="61">Sylhet</option>
                  <option value="62">Moulvibazer</option>
                  <option value="63">Habigonj</option>
                  <option value="64">Sunamgonj</option>
                  
                </select>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 px-2">
            <div class="date mb-3" id="date" data-target-input="nearest">
                <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Pickup Date"
                    data-target="#date" data-toggle="datetimepicker" />
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 px-2">
            <div class="time mb-3" id="time" data-target-input="nearest">
                <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Pickup Time"
                    data-target="#time" data-toggle="datetimepicker" />
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 px-2">
            <select class="custom-select px-4 mb-3" style="height: 50px;">
                <option selected>Select A Car</option>
                <option value="1">BMW X1</option>
                <option value="2">BMW X2</option>
                <option value="3">BMW X3</option>
                <option value="4">TOYOTA RAV4</option>
                <option value="5">TOYOTA COROLLA ALTIS</option>
                <option value="6">TOYOTA CAMRY</option>
                <option value="7">SUZUKI SWIFT</option>
                <option value="8">SUZUKI CIAZ </option>
                <option value="9">HYUNDAI ACCENT </option>
                <option value="10">HYUNDAI CRETA</option>
                <option value="11">TATA NEXON</option>
                <option value="12">TATA TIAGO</option>
                <option value="13">MITSUBISHI PAJERO</option>
                <option value="14">MITSUBISHI OUTLANDER </option>
                <option value="15">MITSUBISHI L200</option>
                <option value="16">NISSAN NAVARA</option>
                <option value="17">NISSAN PETROL</option>
                <option value="18">NISSAN XTRAIL</option>
                <option value="19">SUZUKI OMNI MICROBUS </option>
                <option value="20">SUZUKI GRAND VITARA</option>
                <option value="20">https://www.autosbangla.com/</option>
            </select>

        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 px-2">
          <button type="button" class="btn btn-primary btn-block mb-3 " style="height: 50px;"  data-toggle="modal" data-target="#exampleModal">
            Search
          </button>
            {{-- <a class="btn btn-primary btn-block mb-3" style="height: 50px;"  href="{{route('search.dashboard')}}">Search</a> --}}
            {{-- <button class="btn btn-primary btn-block mb-3" type="submit" style="height: 50px;">{{}}</button> --}}
        </div>
    </div>
</div>
<!-- Modal -->

{{-- <div class="modal fade w-100" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="">
            <label for="" class="form-label">Pickup Location</label>
            <select class="form-control" name="" id="">
              <option value="">Select</option>
              <option value="">Dhaka</option>
            </select>
            <label for="" class="form-label">Drop Location</label>
            <select name="" id="" class="form-control">
              <option value="">Select</option>
              <option value="">Manikgonj</option>
              <option value="">Munshigonj</option>
              <option value="">Tangil</option>
            </select>
            <label for="" class="form-label">Date</label>
            <input type="date" class="form-control">
            <label for="" class="form-label">Time</label>
            <input type="text" class="form-control">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
<!-- Search End --> --}}
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
          <label for="" class="form-label">Pickup Location</label>
          <select class="form-control" name="" id="">
            <option value="">Select</option>
            <option value="">Dhaka</option>
          </select>
          <label for="" class="form-label">Drop Location</label>
          <select name="" id="" class="form-control">
            <option value="">Select</option>
            <option value="">Manikgonj</option>
            <option value="">Munshigonj</option>
            <option value="">Tangil</option>
          </select>
          <label for="" class="form-label">Date</label>
          <input type="date" class="form-control">
          <label for="" class="form-label">Time</label>
          <input type="text" class="form-control">
          <label for="" class=" form-label">Car</label>
          <select name="" id="" class=" form-control">
            <option value="">Select  Car</option>
            <option value="">TOYOTA RAV4</option>
            <option value="">HYUNDAI ACCENT</option>
          </select>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> --}}
