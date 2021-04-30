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
                <label for="inputEmail4">Latitude</label>
                <input type="email" class="form-control" id="inputEmail4">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Longitude</label>
                <input type="password" class="form-control" id="inputPassword4">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputCity">House No.</label>
                <input type="text" class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">Street/Subd</label>
                <select id="inputState" class="form-control">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="inputZip">Purok</label>
                <input type="text" class="form-control" id="inputZip">
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputCity">Barangay</label>
                  <select id="inputState" class="form-control">
                    @foreach ($barangays as $barangay)
                        <option>{{ $barangay->barangay }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">Municipality</label>
                  <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputZip">Province</label>
                  <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
            </div>

            <h4 class="h4 mt-3">Family Head Name</h4>
            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="inputEmail4">First Name</label>
                <input type="email" class="form-control" id="inputEmail4">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4">Middle Name</label>
                <input type="password" class="form-control" id="inputPassword4">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4">Last Name</label>
                <input type="password" class="form-control" id="inputPassword4">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4">Qualifier</label>
                <input type="password" class="form-control" id="inputPassword4">
              </div>
            </div>

            <h4 class="h4 mt-3">Household Condition</h4>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label class=" mr-2" for="inlineFormCustomSelectPref">Preference</label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                      <option selected>Choose...</option>
                      <option value="Owner (Main Family)"> Owner (Main Family)</option>
                      <option value="Extended Family">Extended Family</option>
                    </select>
                </div>
                <div class="col-md-8">
                    <label for="inputPassword4">Indicate HeadID of main Family</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
            </div>

            <h4 class="h4 mt-3">Family Information</h4>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="formGroupExampleInput">1. No. of Family Members:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="formGroupExampleInput">2. Year the household head first resided in the barangay:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="formGroupExampleInput">3. Household head place of origin before living in the barangay (Municipal, Province):</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                </div>
            </div>
            <label for="formGroupExampleInput">4. Telephone and Internet Service Provider</label>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="formGroupExampleInput">Telephone/Mobile Service Provider:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="formGroupExampleInput">Contact Number:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="formGroupExampleInput">Internet Service Provider:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                </div>
            </div>
        
            <label for="formGroupExampleInput">5. Type and Number of Vehicles owned:</label>
            <div class="form-group inputs_div">
                <div class="form-row d-flex mb-3">
                    <div class="col-md-5">
                        <label for="formGroupExampleInput">Vehicle:</label>
                        <input type="text" class="form-control" id="vehicle" placeholder="Example input placeholder">
                    </div>
                    <div class="col-md-5">
                        <label for="formGroupExampleInput">Number:</label>
                        <input type="text" class="form-control" id="number" placeholder="Example input placeholder">
                    </div>

                    <a class="btn btn-success px-2 mr-2 ml-2 addMore align-self-end">Add More</a>
   
                    <a class="btn btn-danger px-2 align-self-end" onclick="document.getElementById('vehicle').value=''; document.getElementById('number').value=''">Remove</a>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Sign in</button>
          </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){

            $(this).on("click", ".addMore", function(){
              var html = '<div class="form-row d-flex mb-3"><div class="col-md-5"><label for="formGroupExampleInput">Vehicle:</label><input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder"></div><div class="col-md-5"><label for="formGroupExampleInput">Number:</label><input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder"></div><a class="btn btn-success px-2 mr-2 ml-2 addMore align-self-end">Add More</a><a class="btn btn-danger px-2 remove align-self-end">Remove</a>'
            
              $('.inputs_div').append(html);
            });

            $(this).on("click", ".remove", function(){
              var target_input = $(this).parent();
                target_input.remove();
            });
        });
    </script>

@endsection