@extends('survey.home')
{{-- //FIXME: Put Border --}}
@section('survey-home')

    <div class="container">
        @include('survey.forms._navigation')
        <div class="container-fluid h-100">
            <h1 class="h1 mt-5">Form 3: Healt Information</h1>
            <form class="mt-4">
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault01">Family Eats Three meals a day?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="1" id="radio1" value="Yes">
                            <label class="form-check-label" for="radio1">
                              Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="1" id="radio2" value="No">
                            <label class="form-check-label" for="radio2">
                              No
                            </label>
                        </div>
                     </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault01">Do you have a vegetable garden?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="2" id="radio3" value="Yes">
                            <label class="form-check-label" for="radio3">
                              Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="2" id="radio4" value="No">
                            <label class="form-check-label" for="radio4">
                              No
                            </label>
                        </div>
                     </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationDefault01">Do you have herbal plants?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="3" id="yes" value="Yes">
                            <label class="form-check-label" for="yes">
                              Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="3" id="no" value="No">
                            <label class="form-check-label" for="no">
                                No
                            </label>
                        </div>
                     </div>
                </div>

                <div class="form-group inputs_div">
                    <div class="form-row">
                        <div class="col-md-8 mb-3">
                            <label for="ifYEs">If yes -> What Herbal Plants?</label>
                            <input type="text" class="form-control border" id="ifYEs" disabled required>
                        </div>
                        
                        <a class="btn btn-success px-2 mr-2 ml-2 mt-2 align-self-center mb-2" id="add">Add More</a>
   
                        <a class="btn btn-danger px-2 mt-2 mb-2 align-self-center" id="remove">Remove</a>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationDefault01">Do you use iodized salt?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="4" id="radio5" value="Yes">
                            <label class="form-check-label" for="radio5">
                              Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="4" id="radio6" value="No">
                            <label class="form-check-label" for="radio6">
                                No
                            </label>
                        </div>
                     </div>
                </div>

                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationDefault01">Do you practice family planning?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="5" id="radio7" value="Yes">
                            <label class="form-check-label" for="radio7">
                              Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="5" id="radio8" value="No">
                            <label class="form-check-label" for="radio8">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="5" id="radio9" value="Not Applicable">
                            <label class="form-check-label" for="radio9">
                                Not Applicable
                            </label>
                        </div>
                     </div>
                </div>

                <div class="form-row">
                    <label for="validationDefault01">If yes:</label>
                </div>

                <div class="form-row">
                    <div class="col-md-5 mb-3">
                        <label for="validationDefault04">Natural</label>
                        <select class="custom-select" id="validationDefault04" required>
                          <option selected disabled value="">Choose...</option>
                          <option>Basal Body Temperature</option>
                          <option>Cervical Mucus</option>
                          <option>Lactational Amenorrhea Method</option>
                          <option>Rhythm</option>
                          <option>Standard Days Method</option>
                          <option>Sympto-thermal Method</option>
                          <option>Withdrawal</option>
                        </select>
                    </div>
                    <div class="col-md-5 mb-3">
                        <label for="validationDefault04">Artificial</label>
                        <select class="custom-select" id="validationDefault04" required>
                          <option selected disabled value="">Choose...</option>
                          <option>Condom</option>
                          <option>Depo Injection</option>
                          <option>IUD</option>
                          <option>Tubal Ligation</option>
                          <option>Pills</option>
                          <option>Vasectomy</option>
                          <option>Subdermal Implants</option>
                        </select>
                      </div>
                </div>

                <button class="btn btn-primary" type="submit">Submit form</button>
              </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){

            $(this).on("click", ".addMore", function(){
              var html = '<div class="form-row"><div class="col-md-8 mb-3"><input type="text" class="form-control" id="validationDefault02" required></div><a class="btn btn-success px-2 mr-2 ml-2 mb-3 addMore align-self-center" id="add">Add More</a><a class="btn btn-danger px-2 mb-3 align-self-center remove" id="remove">Remove</a></div>'
            
              $('.inputs_div').append(html);
            });

            $(this).on("click", ".remove", function(){
              var target_input = $(this).parent();
                target_input.remove();
            });

            $('#yes').click(function() {
                if($('#yes').is(':checked')) { 
                    $( "#ifYEs" ).prop( "disabled", false );
                    $('#add').addClass("addMore");
                }
            });
            $('#no').click(function() {
                if($('#no').is(':checked')) { 
                    $( "#ifYEs" ).prop( "disabled", true );
                    $('#add').removeClass("addMore");
                }
            });
        });
    </script>

@endsection