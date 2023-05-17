@extends('pagelayout.dashboard_layout')
@section('title', 'Products List')

@section('css', 'manualcss/products.css')

@section('content')



    <div class="container-fluid mx-auto m-5 " >
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Product/Item added succesfully!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Failure!</strong> Sorry, something went wrong!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="card main_container p-2">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="h2 h2-responsive-sm h2-responsive-md h2-responsive-lg text-white" style="text-align: center">ITEMS</h2>
                    <div class="col d-flex justify-content-end">
                        <a href="{{route('add-products.index')}}" class="btn btn-outline-light "><i class="bi bi-plus-square-fill"></i> Add Items</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <!---------------------------------------------SEARCH--------------------------------------------->
                <div class="container-fluid mb-5">
                    <form class="d-flex m-3 form-floating">
                        <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
                        <label for="search"><i class="bi bi-search"></i> Search</label>
                        <button class="btn btn-outline-light" type="submit"><i class="bi bi-search search-icon"></i></button>
                    </form>
                    <p class="text-warning">&nbsp;&nbsp;&nbsp;No result was found</p>
                </div>



                 <!--CALLLING THE EDIT MODAL FOR PRODUCTS--->
                 @include('modal.edit_products_modal')


                <!---------------------------------------------CARDS--------------------------------------------->
                <div class="mt-5 row row-cols-1 row-cols-md-3 g-4">
                    <div class="col ">
                        <div class="card item-card">
                            <div class="container_item">
                                    <!--Default pic here-->
                            </div>
                        
                        <div class="card-body">
                            <h5 class="card-title">Product title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p>Current Stock: 26</p>
                            <p>Price per Kilo: 40</p>
                            <p>Price per Sack: 2000</p>
                        </div>

                       
                        <div class="card-footer">
                            
                            

                            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square"></i> Update</button>


                            
                            <div class="btn btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="bi bi-trash3-fill"></i> Delete</div>
                        </div>
                        </div>
                    </div>

                    <div class="col ">
                        <div class="card item-card">
                            <div class="container_item">
                                <!--Default pic here-->
                            </div>
                        <div class="card-body">
                            <h5 class="card-title">Product title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p>Current Stock: 26</p>
                            <p>Price per Kilo: 40</p>
                            <p>Price per Sack: 2000</p>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square"></i> Update</button>
                            <div class="btn btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="bi bi-trash3-fill"></i>Delete</div>
                        </div>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="card item-card">
                            <div class="container_item">
                                <!--Default pic here-->
                            </div>
                        <div class="card-body">
                            <h5 class="card-title">Product title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                            <p>Current Stock: 26</p>
                            <p>Price per Kilo: 40</p>
                            <p>Price per Sack: 2000</p>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square"></i> Update</button>
                            <div class="btn btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="bi bi-trash3-fill"></i>Delete</div>
                        </div>
                        </div>
                    </div>

                    <div class="col ">
                        <div class="card item-card">
                            <div class="container_item">
                                <!--Default pic here-->
                            </div>
                        <div class="card-body">
                            <h5 class="card-title">Product title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p>Current Stock: 26</p>
                            <p>Price per Kilo: 40</p>
                            <p>Price per Sack: 2000</p>
                        </div>
                        <div class="card-footer ">
                            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square"></i> Update</button>
                            <div class="btn btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="bi bi-trash3-fill"></i>Delete</div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection