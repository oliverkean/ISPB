@extends('pagelayout.dashboard_layout')
@section('title', 'Profile Page')

@section('content')

    <div class="container mx-auto m-5" style="max-width: 60%; margin-top: 50px;" alt="User Profile Image">
        <div class="card border-dark p-2">
            <div class="card-header bg-light">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="h3 h3-responsive-sm h3-responsive-md h3-responsive-lg" style="text-align: center">USER's TABLE</h3>
                    <div class="col d-flex justify-content-end">
                        <a type="button" class="btn btn-light my-3" ><i class="bi bi-three-dots"></i></a>
                    </div>
                </div>
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