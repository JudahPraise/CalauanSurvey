@extends('layouts.app')

@section('content')

<<<<<<< HEAD
    <div class="container-fluid">
        @yield('survey-home')
=======
            <div class="card-columns">
                @foreach ($barangays as $barangay)
                <div class="card">
                    @component('components.maps', ['barangay' => $barangay->barangay])@endcomponent
                  <div class="card-body">
                    <h2 class="card-title">{{ $barangay->barangay }}</h2>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 19 mins ago</small></p>
                  </div>
                </div>
                @endforeach
            </div>
        </div>
>>>>>>> 5731d80e97681a503c136eb8e6f2cdfe1f843a65
    </div>

@endsection

{{-- Rnwck Brent--}}
