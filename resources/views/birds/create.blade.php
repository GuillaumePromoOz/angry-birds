@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <form action="/birds" method="POST">
        @csrf
        <legend>Create a bird</legend>
        <div class="form-group">
            <label for="inputname" class="form-label mt-4">Name</label>
            <input type="text" class="form-control" id="inputname" name="name" placeholder="enter a name">
        </div>
        <div class="form-group">
            <label for="inputdescription" class="form-label mt-4">Description</label>
            <textarea class="form-control" id="inputdescription" name="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="inputimage" class="form-label mt-4">Image</label>
            <input type="text" class="form-control" id="inputimage" name="image" placeholder=".png">
        </div>
        <div class="form-group">
            <label class="form-label mt-4">Price</label>
            <div class="form-group">
                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="text" class="form-control" name="price" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                </div>
            </div>
        </div>
        <!--<div class="form-group">
            <label for="formFile" class="form-label mt-4">Image</label>
            <input class="form-control" type="file" id="formFile">
        </div>-->
        <button type="submit" class="btn btn-secondary mt-5">Submit</button>
    </form>
</div>
@endsection
