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
                    <div class="d-flex justify-content-center">
                        <a href="users/{{ Auth::user()->id }}/edit" class="btn btn-primary mt-3 edit-profile-btn">Edit profile</a>
                        <form action="{{ route('users.destroy',Auth::user()->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mt-3 ml-1">Delete profile</button>
                        </form>
                    </div>
                </div>
                <div class="card-footer text-muted text-center">
                    last connection 2 days ago
                </div>
            </div>
        </div>
    </div>
    @endsection
