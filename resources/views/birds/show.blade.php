@extends('layouts.app')

@section('content')
<main class="container mt-5">
    <div class="jumbotron bird-detail">
        <h1 class="display-4">{{ $bird->name }}</h1>
        <div class="row">
            <div class="col-3">
                <img class="home-product-image" src="{{ asset('images/' . $bird->image) }}" alt="product-image" />
            </div>
            <div class="col-9">
                <p class="lead">{{ $bird->description }}</p>
                <hr class="my-4">
                <h3 class="display-4">{{ $bird->price}}€</h3>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ $bird->id }}/edit" type="button" class="btn btn-success update-button">Edit</a>
                <form action="{{ route('birds.destroy',$bird->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</main>

<div class="container mt-4 mb-4 d-flex justify-content-center">
    <a href="{{ url('birds') }}">
        <button type="button" class="btn btn-lg btn-secondary">Back</button>
    </a>
</div>
@endsection
