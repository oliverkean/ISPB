@extends('pagelayout.dashboard_layout')
@section('title', 'Profile Page')

@section('content')

    <div class="container mx-auto m-5" style="max-width: 60%; margin-top: 50px;" alt="User Profile Image">
        <div class="card border-dark p-2">
            <div class="card-body">
                <div class="d-flex position-relative">
                    <img src="{{ asset('images/faker.webp') }}" class="flex-shrink-0 me-3 my-auto border border-secondary border-2 rounded-circle" style="max-width: 200px; max-height: 200px;" alt="...">
                    <div>
                        <h6>Lee Sang-hyeok (이상혁)</h6>
                        <h6>South Korea</h6>
                        <h6>May 7, 1996</h6>
                        <h6>Korea</h6>
                        <h6>Team| T1</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection