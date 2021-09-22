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
            <div class="d-flex flex-row-reverse">
                <div class="p-2">
                    <form action="{{ route('birds.destroy',$bird->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
                <div class="p-2">
                    <a href="{{ $bird->id }}/edit" type="button" class="btn btn-primary">Edit</a>
                </div>
                <div class="p-2">
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $bird->id }}" name="id">
                        <input type="hidden" value="{{ $bird->name }}" name="name">
                        <input type="hidden" value="{{ $bird->price }}" name="price">
                        <input type="hidden" value="{{ $bird->image }}" name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button type="submit" class="btn btn-success">Add to cart</button>
                    </form>
                </div>
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
