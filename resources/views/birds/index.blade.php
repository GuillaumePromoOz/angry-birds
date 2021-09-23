@extends('layouts.app')

@section('content')

@if (Auth::user())
<div class="container d-flex justify-content-center">
    <a href="birds/create">
        <button type="button" class="btn btn-lg btn-secondary mt-5">Add a bird</button>
    </a>
</div>
@else
<!-- Header -->
<header class="container">
    <div class="jumbotron mt-3 home-header">
        <h1 class="display-4 text-center">Register now to sell your bird !</h1>
    </div>
</header>
@endif

<main class="container">
    <div class="row">
        @foreach ($birds as $bird)
        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <!-- Bird Card -->
            <div class="card home-bird-card" style="max-width: 20rem;">
                <a href="birds/{{ $bird->id}}">
                    <img class="home-bird-image" src="{{ asset('images/' . $bird->image) }}" alt="product-image" />
                    <button type="button" class="btn btn-warning home-bird-name">{{ $bird->name }}</button>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</main>
@endsection
