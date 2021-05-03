@extends('layouts.app')

@section('content')


      <div class="container-fluid">
        @yield('survey-home')
            <div class="card-columns">
                @foreach ($barangays as $barangay)
                <div class="card">
                    @component('components.maps', ['barangay' => $barangay->barangay])@endcomponent
                  <div class="card-body">
                    <h2 class="card-title">{{ $barangay->barangay }}</h2>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

{{-- Rnwck Brent--}}
