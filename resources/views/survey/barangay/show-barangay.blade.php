@extends('survey.home')

@section('survey-home')
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-0 p-0">
                <span>
                    <h1>{{ $barangay->barangay }}</h1>
                    <p style="font-size: 1.3rem">Estimated number of residents: 1500</p>
                </span>
            </div>
            <div class="col-lg-2 m-0 p-0">
                <a href="{{ route('forms.index', $barangay->id) }}" class="btn btn-primary">Take Survey</a>
            </div>
        </div>

        <div class="row d-flex flex-column mt-3">
            <h5>List of Surveyed Household</h5>
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Household ID</th>
                    <th scope="col">Household Name</th>
                    <th scope="col">Date Surveyed</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
@endsection