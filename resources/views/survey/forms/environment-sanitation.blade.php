@extends('survey.home')

@section('survey-home')

    <div class="container">
        @include('survey.forms._navigation')
        <h1 class="h1">Form 4: Environment and Sanitation</h1>
        <form>
            {{-- //TODO: Toilet Facilities --}}
            <div class="form-group p-3 border">
                <h4 class="h4 mt-3">Toilet Facilities</h4>
                <div class="form-row">
                    <form class="col-md-6">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault01">Pour/Flush Type with Septic Tank:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Owned" name="withSeptic">
                                <label class="form-check-label" for="inlineRadio1">Owned</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Shared" name="withSeptic">
                                <label class="form-check-label" for="inlineRadio2">Shared</label>
                            </div>
                        </div>
                    </form>
                    <form class="col-md-6">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault01">Pour/Flush Type w/out Septic Tank:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Owned" name="withoutSeptic">
                                    <label class="form-check-label" for="inlineRadio3">Owned</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="Shared" name="withoutSeptic">
                                    <label class="form-check-label" for="inlineRadio4">Shared</label>
                                </div>
                        </div>
                    </form>
                </div>


                <div class="form-row">
                    <form class="col-md-6">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault01">Covered Pit w/ ventilation:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Owned" name="withVents">
                                <label class="form-check-label" for="inlineRadio1">Owned</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Shared" name="withVents">
                                <label class="form-check-label" for="inlineRadio2">Shared</label>
                            </div>
                        </div>
                    </form>
                    <form class="col-md-6">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault01">Open Pit w/out ventilation:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Owned" name="withoutVents">
                                <label class="form-check-label" for="inlineRadio1">Owned</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Shared" name="withoutVents">
                                <label class="form-check-label" for="inlineRadio2">Shared</label>
                            </div>
                        </div>
                    </form>
                </div>

<hr>

                    <div class="col-md-3 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="withoutToilet">
                            <label class="form-check-label" for="defaultCheck1">
                                Without Toilet
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="others">
                            <label class="form-check-label" for="defaultCheck1">
                                Others(Pail System, and Others)
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="connectedToSewage">
                            <label class="form-check-label" for="defaultCheck1">
                                Pour/Flush toilet connected to septic tank and sewerage system
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="overhungLatrines">
                            <label class="form-check-label" for="defaultCheck1">
                                Overhung Latrines
                            </label>
                        </div>
                    </div>

            </div>


            {{--//TODO: Water Drinking and Coocking --}}
            <div class="form-group p-3 border">
                <h4 class="h4 mt-3">Source of water used for Drinking and Cooking</h4>

                <div class="form-row">
                    <form class="col-md-6">
                    <div class="col-md-6 mb-3">
                      <label for="validationDefault01">Dug Well:</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Owned" name="dugWell">
                        <label class="form-check-label" for="inlineRadio1">Owned</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Public" name="dugWell">
                        <label class="form-check-label" for="inlineRadio2">Public</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Shared" name="dugWell">
                        <label class="form-check-label" for="inlineRadio2">Shared</label>
                      </div>
                    </div>
                </form>
                <form class="col-md-6">
                    <div class="col-md-6 mb-3">
                      <label for="validationDefault01">Barangay Water System:</label>
                      <div class="form-check ">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Owned" name="brgyWaterSystem">
                        <label class="form-check-label" for="inlineRadio1">Owned</label>
                      </div>
                      <div class="form-check ">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Public" name="brgyWaterSystem">
                        <label class="form-check-label" for="inlineRadio2">Public</label>
                      </div>
                      <div class="form-check ">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Shared" name="brgyWaterSystem">
                        <label class="form-check-label" for="inlineRadio2">Shared</label>
                      </div>
                    </div>
                </form>
                </div>


                <div class="form-row">
                    <form class="col-md-6">
                    <div class="col-md-6 mb-3">
                      <label for="validationDefault01">Tubed/Piped Deep Well:</label>
                      <div class="form-check ">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Owned" name="deepWell">
                        <label class="form-check-label" for="inlineRadio1">Owned</label>
                      </div>
                      <div class="form-check ">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Public" name="deepWell">
                        <label class="form-check-label" for="inlineRadio2">Public</label>
                      </div>
                      <div class="form-check ">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Shared" name="deepWell">
                        <label class="form-check-label" for="inlineRadio2">Shared</label>
                      </div>
                    </div>
                    </form>
                    <form class="col-md-6">
                    <div class="col-md-6 mb-3">
                      <label for="validationDefault01">Tubed/Piped Shallow Well:</label>
                      <div class="form-check ">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Owned" name="shallowWell">
                        <label class="form-check-label" for="inlineRadio1">Owned</label>
                      </div>
                      <div class="form-check ">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Public" name="shallowWell">
                        <label class="form-check-label" for="inlineRadio2">Public</label>
                      </div>
                      <div class="form-check ">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Shared" name="shallowWell">
                        <label class="form-check-label" for="inlineRadio2">Shared</label>
                      </div>
                    </div>
                    </form>
                </div>

                <hr>

                    <div class="col-md-3 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="naturalSource">
                            <label class="form-check-label" for="defaultCheck1">
                                Spring, Lake, River & Rain
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="peddler">
                            <label class="form-check-label" for="defaultCheck1">
                                Peddler
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="bottledWater">
                            <label class="form-check-label" for="defaultCheck1">
                                Buy Mineral/Bottled Water
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="waterDistrict">
                            <label class="form-check-label" for="defaultCheck1">
                                Water District Directly to Household
                            </label>
                        </div>
                    </div>

            </div>

            {{--//TODO: Water General Use --}}
            <div class="form-group border p-3">
                <h4 class="h4 mt-3">Source of water used for Washing/General Use</h4>
                <div class="form-row">
                    <form class="col-md-6">
                    <div class="col-md-6 mb-3">
                      <label for="validationDefault01">Dug Well:</label>
                      <div class="form-check ">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Owned" name="dugWellgeneral">
                        <label class="form-check-label" for="inlineRadio1">Owned</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Public" name="dugWellgeneral">
                        <label class="form-check-label" for="inlineRadio2">Public</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Shared" name="dugWellgeneral">
                        <label class="form-check-label" for="inlineRadio2">Shared</label>
                      </div>
                    </div>
                    </form>
                    <form class="col-md-6">
                    <div class="col-md-6 mb-3">
                      <label for="validationDefault01">Barangay Water System:</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Owned" name="brgyWaterSystemGeneral">
                        <label class="form-check-label" for="inlineRadio1">Owned</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Public" name="brgyWaterSystemGeneral">
                        <label class="form-check-label" for="inlineRadio2">Public</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Shared" name="brgyWaterSystemGeneral">
                        <label class="form-check-label" for="inlineRadio2">Shared</label>
                      </div>
                    </div>
                    </form>
                </div>
                <div class="form-row">
                    <form class="col-md-6">
                    <div class="col-md-6 mb-3">
                      <label for="validationDefault01">Tubed/Piped Deep Well:</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Owned" name="deepWellGeneral">
                        <label class="form-check-label" for="inlineRadio1">Owned</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Public" name="deepWellGeneral">
                        <label class="form-check-label" for="inlineRadio2">Public</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Shared" name="deepWellGeneral">
                        <label class="form-check-label" for="inlineRadio2">Shared</label>
                      </div>
                    </div>
                    </form>
                    <form class="col-md-6">
                    <div class="col-md-6 mb-3">
                      <label for="validationDefault01">Tubed/Piped Shallow Well:</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Owned"  name="shallowWellGeneral">
                        <label class="form-check-label" for="inlineRadio1">Owned</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Public" name="shallowWellGeneral">
                        <label class="form-check-label" for="inlineRadio2">Public</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Shared" name="shallowWellGeneral">
                        <label class="form-check-label" for="inlineRadio2">Shared</label>
                      </div>
                    </div>
                    </form>
                </div>
                <hr>
                    <div class="col-md-3 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1"  name="naturalSourceGeneral">
                            <label class="form-check-label" for="defaultCheck1">
                                Spring, Lake, River & Rain
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="peddlerGeneral">
                            <label class="form-check-label" for="defaultCheck1">
                                Peddler
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="bottledWaterGeneral">
                            <label class="form-check-label" for="defaultCheck1">
                                Buy Mineral/Bottled Water
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="waterDistrictGeneral">
                            <label class="form-check-label" for="defaultCheck1">
                                Water District Directly to Household
                            </label>
                        </div>
                    </div>

            </div>

            {{-- //TODO: Source of Electricity --}}
            <div class="form-group p-3 border">
                <h4 class="h4 mt-3">Source of Electricity</h4>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputState">Source</label>
                        <select id="inputState" class="form-control" name="electricSource">
                          <option selected>Choose...</option>
                          <option>Barangay Generator</option>
                          <option>Battery</option>
                          <option>Biogas</option>
                          <option>Own Generator</option>
                          <option>Solar</option>
                          <option>None</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputZip">Power Producer/Cooperative:</label>
                        <input type="text" class="form-control" id="inputZip" name="powerProducer">
                    </div>
                </div>
            </div>

            {{-- //FIXME: Function in select option electricity --}}
            <div class="form-group p-3 border">
                <h4 class="h4 mt-3">Lighting Used</h4>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputState">Source</label>
                        <select id="lighting" class="form-control" name="lighting">
                          <option selected>Choose...</option>
                          <option >Battery</option>
                          <option >Candle</option>
                          <option >Solar Power</option>
                          <option >Kerosene (Gaas)</option>
                          <option >Generator</option>
                          <option>Electricity</option>
                        </select>
                    </div>
                    {{-- <div class="form-group col-md-6 electSelected">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="With Electric Meter">
                            <label class="form-check-label" for="inlineRadio1">With Electric Meter</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Without Electric Meter">
                            <label class="form-check-label" for="inlineRadio2">Without Electric Meter</label>
                        </div>
                    </div> --}}
                </div>
            </div>

            <div class="form-group p-3 border">
                <h4 class="h4 mt-3">House</h4>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="validationDefault04">House Acquisition</label>
                        <select class="custom-select" id="validationDefault04" required name="houseAcquisition">
                          <option selected disabled value="">Choose...</option>
                          <option>Owned</option>
                          <option>Rented</option>
                          <option>Being Amortized</option>
                          <option>Being Occupied for free with consent</option>
                          <option>Being Occupied for free without consent</option>
                          <option>Caretaker</option>
                          <option>Family Owned</option>
                          <option>Government Owned</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="validationDefault04">Lot Ownership</label>
                        <select class="custom-select" id="validationDefault04" required name="lotOwnership">
                          <option selected disabled value="">Choose...</option>
                          <option>Owned</option>
                          <option>Rented</option>
                          <option>Being Amortized</option>
                          <option>Being Occupied for free with consent</option>
                          <option>Being Occupied for free without consent</option>
                          <option>Caretaker</option>
                          <option>Family Owned</option>
                          <option>Government Owned</option>
                          <option>PNR Lot</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="validationDefault04">Structure of the House</label>
                        <select class="custom-select" id="validationDefault04" required name="houseStructure">
                          <option selected disabled value="">Choose...</option>
                          <option>Duplex</option>
                          <option>Commercial/Industrial/Agricultural</option>
                          <option>Extension</option>
                          <option>Institutional Living Quarters</option>
                          <option>Multi-Unit Residence</option>
                          <option>Single House</option>
                          <option>Other Housing Unit</option>
                          <option>Not Reported</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="validationDefault04">External Housing Walls</label>
                        <select class="custom-select" id="validationDefault04" required name="housingWalls">
                          <option selected disabled value="">Choose...</option>
                          <option>Asbestos/Glass/Others</option>
                          <option>Bamboo,Sawali,Cogon,Nipa</option>
                          <option>Concrete/Brick/Stone</option>
                          <option>Galvanized Iron/Aluminum</option>
                          <option>Half-Concrete,Brick,Stone,Half-Wood</option>
                          <option>Makeshift, Salvaged, Improvised</option>
                          <option>Wood</option>
                          <option>No Walls/Not Reported</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="validationDefault04">Roof Construction Materials</label>
                        <select class="custom-select" id="validationDefault04" required name="roofMaterial">
                          <option selected disabled value="">Choose...</option>
                          <option>Bamboo,Sawali,Cogon,Nipa</option>
                          <option>Galvanized Iron/Aluminum</option>
                          <option>Makeshift, Salvaged, Improvised</option>
                          <option>Mixed Materials but more of Cogon,Nipa,Anahaw</option>
                          <option>Mixed Materials but more of Galvanized Iron</option>
                          <option>Cement</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="validationDefault04">Floor Material (First Floor)</label>
                        <select class="custom-select" id="validationDefault04" required name="floorMaterial">
                          <option selected disabled value="">Choose...</option>
                          <option>Bamboo</option>
                          <option>Cement</option>
                          <option>Cemented with Linoleum</option>
                          <option>Cemented with Tiles</option>
                          <option>Wood</option>
                          <option>Soil</option>
                          <option>Soil with Linoleum</option>
                          <option>Others</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="validationDefault04">Cooking Facilities</label>
                        <select class="custom-select" id="validationDefault04" required name="cookingFacilities">
                          <option selected disabled value="">Choose...</option>
                          <option>Charcoal</option>
                          <option>Electricity</option>
                          <option>Kerosene</option>
                          <option>LPG</option>
                          <option>Wood</option>
                          <option>Biogas</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="validationDefault04">Garbage Disposal</label>
                        <select class="custom-select" id="validationDefault04"  name="garbageDisposal">
                          <option selected disabled value="">Choose...</option>
                          <option>Burned</option>
                          <option>Collected by City</option>
                          <option>Backyard Composting</option>
                          <option>Open Pit</option>
                          <option>River</option>
                          <option>Thrown Anywhere</option>
                          <option>Waste Segregation</option>
                          <option>Collected by Barangay</option>
                          <option>Recyling/Reuse</option>
                          <option>Burying</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="validationDefault04">Location of House</label>
                        <select class="custom-select" id="validationDefault04" required name="houseLocation">
                          <option selected disabled value="">Choose...</option>
                          <option>Along the Irrigation Canal</option>
                          <option>Along the Lakeshore</option>
                          <option>Along the Railroad</option>
                          <option>Along the Riverbank</option>
                          <option>Along the Seashore</option>
                          <option>Foot of Hill</option>
                          <option>Foot of Mountain</option>
                          <option>On a Hill</option>
                          <option>On the Mountain</option>
                          <option>Ricefield</option>
                          <option>National Road Along (0-10m)</option>
                          <option>National Road Near (11-500m)</option>
                          <option>National Road Far (>500m)</option>
                          <option>Municipal Road Along (0-10m)</option>
                          <option>Municipal Road Near (11-500m)</option>
                          <option>Municipal Road Far (>500m)</option>
                          <option>Barangay Road Along (0-10m)</option>
                          <option>Barangay Road Near (11-500m)</option>
                          <option>Barangay Road Far (>500m)</option>
                          <option>Others (Waiting Shed, Under the Bridge, Card, etc.)</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="validationDefault04">Location of House according to ecological setting:</label>
                        <select class="custom-select" id="validationDefault04"  name="ecoSetting">
                          <option selected disabled value="">Choose...</option>
                          <option>Coastal</option>
                          <option>Lowland</option>
                          <option>Upland</option>
                        </select>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary" type="submit">Submit form</button>
          </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#lighting').change(function(){
                var html =  ' <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="With Electric Meter"><label class="form-check-label" for="inlineRadio1">With Electric Meter</label></div><div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Without Electric Meter"><label class="form-check-label" for="inlineRadio2">Without Electric Meter</label></div>'

                $('.electSelected').append(html);
            });


            if($('#lighting').val('Electricity')){
                $('#lighting').trigger('change');
            }
        });
    </script>

@endsection
