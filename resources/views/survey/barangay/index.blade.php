@extends('survey.home')

@section('survey-home')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="row row-cols-1 row-cols-md-3">
                @foreach ($barangays as $barangay)
                <a href="{{ route('barangay.barangay', $barangay->id) }}" class="col mb-5  text-decoration-none text-dark">
                    <div class="ccard h-100 animation neu-effect">
                        @component('components.maps', ['barangay' => $barangay->barangay])@endcomponent
                      <div class="card-body">
                        <h2 class="card-title h2">{{ $barangay->barangay }}</h2>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

{{-- Rnwck Brent--}}
