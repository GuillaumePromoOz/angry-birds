@extends('layouts.app')

@section('content')
<div class="container mt-4 mb-4 d-flex justify-content-center">
    <a href="birds/create">
        <button type="button" class="btn btn-lg btn-secondary">Add a bird</button>
    </a>
</div>


<main class="container">
    <div class="row">
        @foreach ($birds as $bird)
        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <!-- Bird Card -->
            <div class="card border-secondary mb-3 bg-transparent" style="max-width: 20rem;">
                <div class="card-header">{{ $bird->name }}</div>
                <img class="home-product-image" src="{{ asset('images/' . $bird->image) }}" alt="product-image" />
                <div class="card-body">
                    <h4 class="card-title">{{ $bird->image }}</h4>
                    <p class="card-text">{{ $bird->description }}</p>
                    <p class="card-text">{{ $bird->price }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</main>
@endsection
