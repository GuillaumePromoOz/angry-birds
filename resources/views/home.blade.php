@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="dashboard-header">Dashboard</h5>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">{{ __('Hello ') . Auth::user()->name . __('!') }}</h5>
                    <a href="#" class="btn btn-primary mt-3">Sell a bird</a>
                </div>
                <div class="card-footer text-muted text-center">
                    last connection 2 days ago
                </div>
            </div>
        </div>
    </div>
    @endsection
