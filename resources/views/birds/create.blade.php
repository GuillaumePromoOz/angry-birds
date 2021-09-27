@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="jumbotron create-form">
        <form action="/birds" method="POST" enctype="multipart/form-data">
            @csrf
            <h1 class="display-4">Add a bird</h1>
            <div class="form-group">
                <label for="inputname" class="form-label mt-4">Name</label>
                <input type="text" class="form-control" id="inputname" name="name" placeholder="enter a name">
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="inputdescription" class="form-label mt-4">Description</label>
                <textarea class="form-control" id="inputdescription" name="description" rows="3"></textarea>
                @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="inputimage" class="form-label mt-4">Image</label>
                <input type="file" class="form-control" id="inputimage" name="image">
                @if ($errors->has('image'))
                <span class="text-danger">{{ $errors->first('image') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label class="form-label mt-4">Price</label>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <span class="input-group-text">€</span>
                        <input type="text" class="form-control" name="price" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                @if ($errors->has('price'))
                <span class="text-danger">{{ $errors->first('price') }}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-secondary mt-5">Submit</button>
        </form>

    </div>
    <div class="d-flex justify-content-center">
        <a href="{{ url('birds') }}" type="button" class="btn btn-dark btn-lg mt-4 mb-4">back</a>
    </div>
</div>
@endsection
