@extends('survey.home')
{{-- //FIXME: Put Border --}}
@section('survey-home')

    <div class="container">
        @include('survey.forms._navigation')
        <h1 class="h1">Form 2: Family Members Information</h1>
        <form class="needs-validation" novalidate>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationTooltip01">First name</label>
                <input type="text" class="form-control" id="validationTooltip01" required>
                <div class="valid-tooltip">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationTooltip02">Middle name</label>
                <input type="text" class="form-control" id="validationTooltip02" required>
                <div class="valid-tooltip">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationTooltip02">Last name</label>
                <input type="text" class="form-control" id="validationTooltip02" required>
                <div class="valid-tooltip">
                  Looks good!
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationTooltip03">Relation to Household Head:</label>
                <select class="custom-select" id="validationTooltip04" required>
                  <option selected disabled value="">Choose...</option>
                  <option>Adopted</option>
                  <option>Brother/Sister</option>
                  <option>Brother-in-Law</option>
                  <option>Child</option>
                  <option>Daughter/Son-in-Law</option>
                  <option>Employee</option>
                  <option>Grandchild</option>
                  <option>Grandparent/s</option>
                  <option>Head of the Family</option>
                  <option>Live-in/Cohabit</option>
                  <option>Niece/Nephew</option>
                  <option>Others</option>
                  <option>Parent/s</option>
                  <option>Parent-in-Law</option>
                  <option>Relative</option>
                  <option>Sister-in-Law</option>
                  <option>Spouse</option>
                  <option>Step Son/Daughter</option>
                  <option>Step-Parent</option>
                  <option>Student</option>
                  <option>Not-Related</option>
                  <option>Housemaid</option>
                </select>
                <div class="invalid-tooltip">
                  Please provide a valid city.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationTooltip04">Status:</label>
                  <select class="custom-select" id="validationTooltip04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>Active</option>
                    <option>Transferred</option>
                    <option>Died</option>
                  </select>
                  <div class="invalid-tooltip">
                    Please provide a valid zip.
                  </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationTooltip05">Sex/Gender:</label>
                <select class="custom-select" id="validationTooltip04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Lesbian</option>
                    <option>Gay</option>
                    <option>Bisexual</option>
                    <option>Transgender</option>
                </select>
                <div class="invalid-tooltip">
                  Please provide a valid zip.
                </div>
              </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip02">Birthday</label>
                    <input type="date" class="form-control" id="validationTooltip02" required>
                    <div class="valid-tooltip">
                      Looks good!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip02">Place of Birth</label>
                    <input type="text" class="form-control" id="validationTooltip02" required>
                    <div class="invalid-tooltip">
                      Please provide a valid zip.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip03">Registered Birth at Civil Registrar:</label>
                    <select class="custom-select" id="validationTooltip04" required>
                      <option selected disabled value="">Choose...</option>
                      <option>Yes (Registered Birth)</option>
                      <option>No (Birth not Registered)</option>
                    </select>
                    <div class="invalid-tooltip">
                      Please provide a valid city.
                    </div>
                  </div>
                </div>

              <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip02">Registered COMELEC Voter in the Barangay</label>
                    <select class="custom-select" id="validationTooltip04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Yes</option>
                        <option>No</option>
                        <option>Not Registered</option>
                        <option>Not Applicable (Age 0-17 Years Old)</option>
                    </select>
                    <div class="valid-tooltip">
                      Looks good!
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationTooltip02">Civil Status</label>
                    <select class="custom-select" id="validationTooltip04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Married</option>
                        <option>Not Married</option>
                        <option>Single</option>
                        <option>Widow</option>
                        <option>Legally Separated</option>
                        <option>Annulled</option>
                        <option>Separated</option>
                        <option>Divorced</option>
                    </select>
                    <div class="invalid-tooltip">
                      Please provide a valid zip.
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationTooltip02">Religion:</label>
                    <input type="text" class="form-control" id="validationTooltip02" required>
                    <div class="invalid-tooltip">
                      Please provide a valid city.
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationTooltip01">Skills:</label>
                  <input type="text" class="form-control" id="validationTooltip01" required>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationTooltip02">Organizations (e.g. 4P's Beneficiary):</label>
                  <input type="text" class="form-control" id="validationTooltip02" required>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationTooltip02">Ethnicity (e.g. Tagalog, Bisaya, etc):</label>
                  <input type="text" class="form-control" id="validationTooltip02" required>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationTooltip01">Country of Citizenship:</label>
                  <input type="text" class="form-control" id="validationTooltip01" required>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="validationTooltip02">Studying:</label>
                  <select class="custom-select" id="validationTooltip04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>Yes</option>
                    <option>No</option>
                  </select>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationTooltip01">Name of School</label>
                  <input type="text" class="form-control" id="validationTooltip01" required>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationTooltip02">Educational Level:</label>
                  <select class="custom-select" id="validationTooltip04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>No Schooling</option>
                    <option>Not Yet Studying</option>
                    <option>Day Care</option>
                    <option>Kinder</option>
                    <option>Elementary</option>
                    <option>Highschool</option>
                    <option>College</option>
                  </select>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationTooltip02">Status of Schooling:</label>
                  <select class="custom-select" id="validationTooltip04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>Yes</option>
                    <option>No</option>
                  </select>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationTooltip01">Degree/Course</label>
                  <input type="text" class="form-control" id="validationTooltip01" required>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationTooltip02">Main source of Income (Actual Work)</label>
                  <input type="text" class="form-control" id="validationTooltip01" required>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationTooltip02">Status of Schooling:</label>
                  <select class="custom-select" id="validationTooltip04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>Actively seeking work</option>
                    <option>Not actively seeking work</option>
                    <option>Not Applicable</option>
                  </select>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-2 mb-3">
                  <label for="validationTooltip01">Status of Work</label>
                  <select class="custom-select" id="validationTooltip04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>Employer</option>
                    <option>Wage & Salary Worker</option>
                    <option>Self-Employed</option>
                    <option>Unpaid Family Worker</option>
                  </select>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="validationTooltip02">OFW and Country/Place of Work</label>
                  <input type="text" class="form-control" id="validationTooltip01" required>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="validationTooltip02">Other sources of Income</label>
                  <input type="text" class="form-control" id="validationTooltip01" required>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationTooltip02">Total Monthly Income (Add Main and Other Sources)</label>
                  <input type="text" class="form-control" id="validationTooltip01" required>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationTooltip01">Illness</label>
                  <input type="text" class="form-control" id="validationTooltip01" required>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationTooltip02">Disability:</label>
                  <input type="text" class="form-control" id="validationTooltip01" required>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationTooltip02">Type of Health Insurance</label>
                  <select class="custom-select" id="validationTooltip04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>No Health Insurance</option>
                    <option>Philhealth - Employed(Government)</option>
                    <option>Philhealth - Employed(Private)</option>
                    <option>Philhealth Member Dependent</option>
                    <option>Philhealth Lifetime Member</option>
                    <option>Individually Paying Program(Organized Group)</option>
                    <option>Active Member of Health Maintenance</option>
                    <option>Active Member of community/cooperative scheme organization</option>
                    <option>Active Member of private health insurance</option>
                    <option>Dependent Health Insurance</option>
                    <option>Local Health Insurance</option>
                    <option>Sponsored(NHTS)</option>
                    <option>Sponsored(LGU)</option>
                    <option>Sponsored(Private)</option>
                  </select>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>
            </div>

            <button class="btn btn-primary" type="submit">Submit form</button>
          </form>
    </div>
    
@endsection