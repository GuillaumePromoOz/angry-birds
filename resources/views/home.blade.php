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
                    <a href="users/{{ Auth::user()->id }}/edit" class="btn btn-primary mt-3">Edit profile</a>
                    <a href="#" class="btn btn-danger mt-3">Delete profile</a>
                </div>
                <div class="card-footer text-muted text-center">
                    last connection 2 days ago
                </div>
            </div>
        </div>
    </div>
    @endsection
