@extends('pagelayout.dashboard_layout')
@section('title', 'Products List')

@section('css', 'manualcss/products.css')

@section('content')

    <div class="container-fluid mx-auto m-5 " >
        <div class="card main_container p-2">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="h2 h2-responsive-sm h2-responsive-md h2-responsive-lg" style="text-align: center">ITEMs</h2>
                    <div class="col d-flex justify-content-end">
                        <button type="button" class="btn btn-success my-3" style="width: 80px;">Add</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <!---------------------------------------------SEARCH--------------------------------------------->
                <div class="container">
                    <form class="d-flex m-3 form-floating">
                        <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
                        <label for="search"><i class="bi bi-search"></i> Search</label>
                        <button class="btn btn-outline-light" type="submit"><i class="bi bi-search search-icon"></i></button>
                    </form>
                </div>

                <!---------------------------------------------CARDS--------------------------------------------->
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col ">
                        <div class="card item-card">
                            <div class="container_item">
                                    <!--Default pic here-->
                            </div>
                        
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <div class="btn btn-success">Update</div>
                            <div class="btn btn-danger">Delete</div>
                        </div>
                        </div>
                    </div>

                    <div class="col ">
                        <div class="card item-card">
                            <div class="container_item">
                                <!--Default pic here-->
                            </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <div class="btn btn-success">Update</div>
                            <div class="btn btn-danger">Delete</div>
                        </div>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="card item-card">
                            <div class="container_item">
                                <!--Default pic here-->
                            </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <div class="btn btn-success">Update</div>
                            <div class="btn btn-danger">Delete</div>
                        </div>
                        </div>
                    </div>

                    <div class="col ">
                        <div class="card item-card">
                            <div class="container_item">
                                <!--Default pic here-->
                            </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer ">
                            <div class="btn btn-success">Update</div>
                            <div class="btn btn-danger">Delete</div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection