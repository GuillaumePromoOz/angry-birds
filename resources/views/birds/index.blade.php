@extends('layouts.app')

@section('content')
<!-- Header -->
<header class="container">
    <div class="jumbotron mt-3">
        <h1 class="display-4">A Field Guide to Angry Birds</h1>
        <p class="lead">Games that lodge in the brain often have comical stars !</p>
        <hr class="my-4">
        <p>To celerate the new year and have the birds with you all day long, here's a gift !</p>
        <p class="lead">
            <a class="btn btn-primary btn-md" href="#" role="button">Download PDF Calendar</a>
        </p>
    </div>
</header>

<main class="container">
    <div class="row">

        <!-- Bird Card -->
        @foreach ($birds as $bird)
        <div class="card border-secondary mb-3 bg-transparent" style="max-width: 20rem;">
            <div class="card-header">{{ $bird->name }}</div>
            <div class="card-body">
                <h4 class="card-title">{{ $bird->image }}</h4>
                <p class="card-text">{{ $bird->description }}</p>
            </div>
        </div>
        @endforeach
    </div>


</main>
@endsection
