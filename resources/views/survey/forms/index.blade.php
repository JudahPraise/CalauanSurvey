@extends('survey.home')

@section('survey-home')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="row row-cols-1 row-cols-md-3">
                <a class="col mb-4 text-decoration-none text-dark" href="{{ route('form.family-info') }}">
                  <div class="card h-100 animation neu-effect navigation p-1">
                    <div class="card-body">
                      <h2 class="card-title h2">Family Information</h2>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </a>
                <a class="col mb-4 text-decoration-none text-dark" href="{{ route('form.family-members') }}">
                  <div class="card h-100 animation neu-effect navigation p-1">
                    <div class="card-body">
                      <h2 class="card-title h2">Family Members Information</h2>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </a>
                <a class="col mb-4 text-decoration-none text-dark" href="{{ route('form.health-info') }}">
                  <div class="card h-100 animation neu-effect navigation p-1">
                    <div class="card-body">
                      <h2 class="card-title h2">Health Information</h2>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                  </div>
                </a>
                <a class="col mb-4 text-decoration-none text-dark" href="{{ route('form.environment-sanitation') }}">
                  <div class="card h-100 animation neu-effect navigation p-1">
                    <div class="card-body">
                      <h2 class="card-title h2">Environment and Sanitation</h2>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </a>
              </div>
        </div>
    </div>
</div>
@endsection