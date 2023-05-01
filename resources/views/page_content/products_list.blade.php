@extends('pagelayout.dashboard_layout')
@section('title', 'Products List')


@section('content')

    <div class="container mx-auto m-5" style="max-width: 80%; margin-top: 50px;">
        <!---------------------------------------------SEARCH--------------------------------------------->
        <div class="card my-3 bg-light">
            <form class="d-flex m-3">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>

        <!---------------------------------------------CARDS--------------------------------------------->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card border-light">
                <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-light">
                <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-light">
                <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-light">
                <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </div>
            </div>
        </div>
    </div>

@endsection