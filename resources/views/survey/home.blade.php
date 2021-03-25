@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            @forelse ($barangays as $barangay)
                 <p>{{ $barangay->barangay }}</p>
            @empty
                 <p>No data</p>
            @endforelse

            </div>
        </div>
    </div>
</div>
@endsection
