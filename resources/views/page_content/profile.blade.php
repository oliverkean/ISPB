@extends('pagelayout.dashboard_layout')
@section('title', 'Profile Page')

@section('content')

    <div class="container mx-auto m-5" style="max-width: 60%; margin-top: 50px;" alt="User Profile Image">
        <div class="card border-dark p-2">
            <div class="card-header">
                <h3>PROFILE</h3>
            </div>

            <div class="card-body">
                <div class="d-flex position-relative">
                    <img src="https://via.placeholder.com/200x200" class="flex-shrink-0 me-3" style="max-width: 200px; max-height: 200px;" alt="...">
                    <div>
                        <h4 class="mt-0">Name Here</h4>
                        <p>info here</p>
                        <p>info here</p>
                        <p>info here</p>
                        <p>info here</p>
                        <p>info here</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection