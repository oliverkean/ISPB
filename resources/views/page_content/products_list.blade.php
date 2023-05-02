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
                    <p class="text-warning" style="font-family:Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;No result was found</p>
                </div>

                <!---------------------------------------------CARDS--------------------------------------------->
                <div class="mt-5 row row-cols-1 row-cols-md-3 g-4">
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
                            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square"></i> Update</button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Product Information</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <div class="container form_container">
                                            <form action="" class="form" method="POST" enctype="multipart/form-data">
                                                <h3 class="text-white">Add Product</h3>

                                                <div class="form-item mb-5 profile_pic">

                                                    <img src="{{ asset('images/cat_default.jpg') }}" class=" image_pic rounded mx-auto d-block mb-2" alt="..." id="output" width="100px" height="100px">
                                                    <h3 class="text-white">Product picture</h3>
                                                </div>

                                                <div class="input-group">
                                                    <input type="file" class="form-control" name="ProductImage" id="inputGroupFile02" onchange="loadFile(event)">
                                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                    <span class="text-danger">@error('ProductImage') {{$message}} @enderror</span>
                                                </div>
                                                <p class="text-danger">Validation error message here</p>

                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" name="ProductName" id="ProductName" value="{{old('ProductName')}}" placeholder="ProductName">
                                                    <label for="ProductName">ProductName</label>
                                                    <span class="text-danger">@error('ProductName') {{$message}} @enderror</span>
                                                    <p class="text-danger">Validation error message here</p>
                                                </div>
                                                
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" name="Description" id="Description" value="{{old('Description')}}" placeholder="Description">
                                                    <label for="Description">Description</label>
                                                    <span class="text-danger">@error('Description') {{$message}} @enderror</span>
                                                    <p class="text-danger">Validation error message here</p>
                                                </div>

                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" name="Quantity" id="Quantity" value="{{old('Quantity')}}" placeholder="Quantity">
                                                    <label for="Quantity">Quantity</label>
                                                    <span class="text-danger">@error('Quantity') {{$message}} @enderror</span>
                                                    <p class="text-danger">Validation error message here</p>
                                                </div>

                                                <div class="row justify-content-center">
                                                    <div class="col-sm-6 text-center mb-3">
                                                        <div class="dropdown">
                                                        <a class="btn dropdown_btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Category
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">Category 1</a></li>
                                                            <li><a class="dropdown-item" href="#">Category 2</a></li>
                                                            <li><a class="dropdown-item" href="#">Category 3</a></li>
                                                        </ul>
                                                        </div>
                                                    </div>
                                                </div>


                                            </form>
                                        </div>
                                        <script>

                                            var loadFile = function(event){
                                                var output = document.getElementById('output');
                                                output.src = URL.createObjectURL(event.target.files[0]);
                                            };

                                        </script>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit " class="btn btn-outline-dark ">Save changes!</button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <div class="btn btn-outline-dark"><i class="bi bi-pencil-square"></i> Update</div>
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
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <div class="btn btn-outline-dark"><i class="bi bi-pencil-square"></i> Update</div>
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
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer ">
                            <div class="btn btn-outline-dark"><i class="bi bi-pencil-square"></i> Update</div>
                            <div class="btn btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="bi bi-trash3-fill"></i>Delete</div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection