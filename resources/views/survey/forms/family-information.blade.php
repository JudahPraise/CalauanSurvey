@extends('survey.home')
{{-- //FIXME: Put Border --}}
@section('survey-home')
    <div class="container">
        @include('survey.forms._navigation')
        <h1 class="h1">Form 1: Family Information</h1>
        <form>
            <h4 class="h4 mt-3">Address</h4>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="latitude">Latitude</label>
                <input type="text" class="form-control" id="latitude" name="latitude">
              </div>
              <div class="form-group col-md-6">
                <label for="longitude">Longitude</label>
                <input type="text" class="form-control" id="longitude" name="longitude">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="house_num">House No.</label>
                <input type="text" class="form-control" id="house_num" name="house_num">
              </div>
              <div class="form-group col-md-4">
                <label for="street">Street/Subd</label>
                <input type="text" class="form-control" id="street" name="street">
              </div>
              <div class="form-group col-md-4">
                <label for="purok">Purok</label>
                <input type="text" class="form-control" id="purok" name="purok">
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="barangay">Barangay</label>
                  <select id="barangay" class="form-control" name="barangay">
                      <option disabled selected>Select Barangay</option>
                    @foreach ($barangays as $barangay)
                        <option>{{ $barangay->barangay }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="municipality">Municipality</label>
                  <input type="text" class="form-control" id="municipality" name="municipality">
                </div>
                <div class="form-group col-md-4">
                  <label for="province">Province</label>
                  <input type="text" class="form-control" id="province" name="province">
                </div>
            </div>

            <h4 class="h4 mt-3">Family Head Name</h4>
            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="hh_fname">First Name</label>
                <input type="text" class="form-control" id="hh_fname" name="hh_fname">
              </div>
              <div class="form-group col-md-3">
                <label for="hh_mname">Middle Name</label>
                <input type="text" class="form-control" id="hh_mname" name="hh_mname">
              </div>
              <div class="form-group col-md-3">
                <label for="hh_lname">Last Name</label>
                <input type="text" class="form-control" id="hh_lname" name="hh_lname">
              </div>
              <div class="form-group col-md-3">
                <label for="hh_qualifier">Qualifier</label>
                <input type="text" class="form-control" id="hh_qualifier" name="hh_qualifier">
              </div>
            </div>

            <h4 class="h4 mt-3">Household Condition</h4>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label class="mr-2" for="inlineFormCustomSelectPref">Preference</label>
                    <select class="form-control" id="inlineFormCustomSelectPref" name="hh_condition">
                      <option disabled selected>Choose...</option>
                      <option value="Owner (Main Family)"> Owner (Main Family)</option>
                      <option value="Extended Family">Extended Family</option>
                    </select>
                </div>
                <div class="col-md-8">
                    <label for="indicateMainFam">Indicate HeadID of main Family</label>
                    <input type="text" class="form-control" id="inputPassword4" name="main_fam_id">
                </div>
            </div>

            <h4 class="h4 mt-3">Family Information</h4>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="formGroupExampleInput">1. No. of Family Members:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="e.g. 5, 10, 15" name="fmem_num">
                </div>


                <div class="col-md-6 mb-3">
                    <label for="formGroupExampleInput">2. Year the household head first resided in the barangay:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="e.g. 1990, 2000" name="year_resided">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="formGroupExampleInput">3. Household head place of origin before living in the barangay (Municipality, Province):</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="e.g. Calauan, Laguna" name="hh_origin">
                </div>
            </div>
            <label for="formGroupExampleInput">4. Telephone and Internet Service Provider</label>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="formGroupExampleInput">Telephone/Mobile Service Provider:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" name="tel_provider">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="formGroupExampleInput">Contact Number:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" name="contact_num">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="formGroupExampleInput">Internet Service Provider:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" name="internet_provider">
                </div>
            </div>

            <label for="formGroupExampleInput">5. Type and Number of Vehicles owned:</label>
            <div class="form-group inputs_div">
                <div class="form-row d-flex mb-3">
                    <div class="col-md-5">
                        <label for="formGroupExampleInput">Vehicle:</label>
                        <input type="text" class="form-control" id="vehicle" placeholder="e.g. Car, Van, Jeep" name="vehicles[]">
                    </div>
                    <div class="col-md-5">
                        <label for="formGroupExampleInput">Number:</label>
                        <input type="text" class="form-control" id="number" placeholder="" name="quantities[]">
                    </div>

                    <a class="btn btn-success px-2 mr-2 ml-2 addMore align-self-end">Add More</a>

                    <a class="btn btn-danger px-2 align-self-end" onclick="document.getElementById('vehicle').value=''; document.getElementById('number').value=''">Remove</a>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
          </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){

            $(this).on("click", ".addMore", function(){
              var html = '<div class="form-row d-flex mb-3"><div class="col-md-5"><label for="formGroupExampleInput">Vehicle:</label><input type="text" class="form-control" id="formGroupExampleInput" placeholder="e.g. Car, Van, Jeep" name="vehicles[]"></div><div class="col-md-5"><label for="formGroupExampleInput">Number:</label><input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="quantities[]"></div><a class="btn btn-success px-2 mr-2 ml-2 addMore align-self-end">Add More</a><a class="btn btn-danger px-2 remove align-self-end">Remove</a>'

              $('.inputs_div').append(html);
            });

            $(this).on("click", ".remove", function(){
              var target_input = $(this).parent();
                target_input.remove();
            });
        });
    </script>


    <script>
    $(document).ready(function () {
    var $input = $('input[name=main_fam_id]');
    $input.attr('disabled', 'disabled');
    $('select[name=hh_condition]').on('change', function () {
        $input.attr('disabled', $(this).val() != "Extended Family");
    });
});
    </script>
@endsection
