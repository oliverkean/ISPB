@extends('pagelayout.dashboard_layout')
@section('title', 'Orders List')

@section('css', 'manualcss/orders.css')
@section('content')

    <div class="m-3">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Customer Orders</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link " id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Pending Orders to Supplier</button>
        </li>
      
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            
            <div class="container-fluid mx-auto m-5">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Order added succesfully!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Failure!</strong> Sorry, something went wrong!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="card bp-2 orders_container" >
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2 class="h2 h2-responsive-sm h2-responsive-md h2-responsive-lg" style="text-align: center"><i class="bi bi-cart4"></i>CUSTOMER ORDERS</h2>
                            <div class="col d-flex justify-content-end">
                                <a href="{{route('add-orders.index')}}" class="btn btn-outline-dark my-3" ><i class="bi bi-plus-square-fill"></i> Add Orders</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!---------------------------------------------SEARCH--------------------------------------------->
                        <div class="card  my-3 bg-light">
                            <form class="d-flex m-3 form-floating">
                                <input class="form-control me-2 border-dark" type="search" placeholder="Search" aria-label="Search">
                                <label for="Password"><i class="bi bi-search"></i> Search</label>
                                <button class="btn btn-outline-dark" type="submit"><i class="bi bi-search search-icon"></i></button>
                            </form>
                            <p class="text-danger">&nbsp;&nbsp;&nbsp;No result was found</p>
                        </div>

                        <!---------------------------------------------TABLE--------------------------------------------->
                        <div class="table-responsive">
                            <table class="table" style="text-align:center;">
                                <thead>
                                    <tr>
                                        <th>Customer Name</th>
                                        <th>Item</th>
                                        <th>Order Quantity</th>
                                        <th>Order Date</th>
                                        <th>Order Type</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="btn-group g-4 btn_action" role="group" aria-label="Basic example">
                                                <button type="button" class="btn edit_btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pen pen_icon"></i></button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Order Information</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="container form_container">
                                                                    <form action="" class="form" method="POST" enctype="multipart/form-data">
                                                                        <h3 class="text-white">Add Customer Order</h3>

                                                                        <div class="form-floating mb-3">
                                                                            <input type="text" class="form-control" name="Itemname" id="Itemname" value="{{old('Itemname')}}" placeholder="Itemname">
                                                                            <label for="Itemname">Customer Name</label>
                                                                            <span class="text-danger">@error('Itemname') {{$message}} @enderror</span>
                                                                            <p class="text-danger">Validation error message here</p>
                                                                        </div>

                                                                        <div class="form-floating mb-3">
                                                                            <input type="text" class="form-control" name="Itemname" id="Itemname" value="{{old('Itemname')}}" placeholder="Itemname">
                                                                            <label for="Itemname">Item Name</label>
                                                                            <span class="text-danger">@error('Itemname') {{$message}} @enderror</span>
                                                                            <p class="text-danger">Validation error message here</p>
                                                                        </div>
                                                                        
                                                                        <div class="form-floating mb-3">
                                                                            <input type="text" class="form-control" name="Orderquantity" id="Orderquantity" value="{{old('Orderquantity')}}" placeholder="Orderquantity">
                                                                            <label for="Orderquantity">Order Quantity</label>
                                                                            <span class="text-danger">@error('Orderquantity') {{$message}} @enderror</span>
                                                                            <p class="text-danger">Validation error message here</p>
                                                                        </div>

                                                                        <div class="form-floating mb-3">
                                                                            <input type="date" class="form-control" name="Orderdate" id="Orderdate" value="{{old('Orderdate')}}" placeholder="Orderdate">
                                                                            <label for="Orderdate">Order Date</label>
                                                                            <span class="text-danger">@error('Orderdate') {{$message}} @enderror</span>
                                                                            <p class="text-danger">Validation error message here</p>
                                                                        </div>

                                                                        <div class="form-floating mb-3">
                                                                            <input type="number" class="form-control" name="Orderdate" id="Orderdate" value="{{old('Orderdate')}}" placeholder="Orderdate">
                                                                            <label for="Orderdate">Price</label>
                                                                            <span class="text-danger">@error('Orderdate') {{$message}} @enderror</span>
                                                                            <p class="text-danger">Validation error message here</p>
                                                                        </div>

                                                                        <div class="row justify-content-center">
                                                                            <div class="col-sm-6 text-center mb-3">
                                                                                <div class="dropdown">
                                                                                <a class="btn dropdown_btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    Order Type
                                                                                </a>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="#">pick up</a></li>
                                                                                    <li><a class="dropdown-item" href="#">delivery</a></li>
                                                                                </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="mt-5 text-center">
                                                                            <button type="submit " class="btn btn-outline-dark ">Add Order!</button>
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
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn delete_btn" onclick="return confirm('Sure Want Delete?')"><i class="bi bi-trash3-fill"></i></a></td>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!-- PROFILE DIV TAB---->
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

        <div class="container-fluid mx-auto m-5">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Order added succesfully!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Failure!</strong> Sorry, something went wrong!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="card bp-2 orders_container" >
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2 class="h2 h2-responsive-sm h2-responsive-md h2-responsive-lg" style="text-align: center"><i class="bi bi-cart4"></i>PENDING ORDERS to SUPPLIER</h2>
                            <div class="col d-flex justify-content-end">
                                <a href="{{route('add-orders.index')}}" class="btn btn-outline-dark my-3" ><i class="bi bi-plus-square-fill"></i> Add Orders</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!---------------------------------------------SEARCH--------------------------------------------->
                        <div class="card  my-3 bg-light">
                            <form class="d-flex m-3 form-floating">
                                <input class="form-control me-2 border-dark" type="search" placeholder="Search" aria-label="Search">
                                <label for="Password"><i class="bi bi-search"></i> Search</label>
                                <button class="btn btn-outline-dark" type="submit"><i class="bi bi-search search-icon"></i></button>
                            </form>
                            <p class="text-danger">&nbsp;&nbsp;&nbsp;No result was found</p>
                        </div>

                        <!---------------------------------------------TABLE--------------------------------------------->
                        <div class="table-responsive">
                            <table class="table" style="text-align:center;">
                                <thead>
                                    <tr>
                                        <th>Supplier Name</th>
                                        <th>Item</th>
                                        <th>Order Quantity</th>
                                        <th>Order Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="btn-group g-4 btn_action" role="group" aria-label="Basic example">
                                                <button type="button" class="btn edit_btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pen pen_icon"></i></button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Order Information</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="container form_container">
                                                                    <form action="" class="form" method="POST" enctype="multipart/form-data">
                                                                        <h3 class="text-white">Add Order to Supplier</h3>

                                                                        <div class="form-floating mb-3">
                                                                            <input type="text" class="form-control" name="Itemname" id="Itemname" value="{{old('Itemname')}}" placeholder="Itemname">
                                                                            <label for="Itemname">Supplier Name</label>
                                                                            <span class="text-danger">@error('Itemname') {{$message}} @enderror</span>
                                                                            <p class="text-danger">Validation error message here</p>
                                                                        </div>

                                                                        <div class="form-floating mb-3">
                                                                            <input type="text" class="form-control" name="Itemname" id="Itemname" value="{{old('Itemname')}}" placeholder="Itemname">
                                                                            <label for="Itemname">Item Name</label>
                                                                            <span class="text-danger">@error('Itemname') {{$message}} @enderror</span>
                                                                            <p class="text-danger">Validation error message here</p>
                                                                        </div>
                                                                        
                                                                        <div class="form-floating mb-3">
                                                                            <input type="text" class="form-control" name="Orderquantity" id="Orderquantity" value="{{old('Orderquantity')}}" placeholder="Orderquantity">
                                                                            <label for="Orderquantity">Order Quantity</label>
                                                                            <span class="text-danger">@error('Orderquantity') {{$message}} @enderror</span>
                                                                            <p class="text-danger">Validation error message here</p>
                                                                        </div>

                                                                        <div class="form-floating mb-3">
                                                                            <input type="date" class="form-control" name="Orderdate" id="Orderdate" value="{{old('Orderdate')}}" placeholder="Orderdate">
                                                                            <label for="Orderdate">Order Date</label>
                                                                            <span class="text-danger">@error('Orderdate') {{$message}} @enderror</span>
                                                                            <p class="text-danger">Validation error message here</p>
                                                                        </div>

                                                                        <div class="mt-5 text-center">
                                                                            <button type="submit " class="btn btn-outline-dark ">Add Order!</button>
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
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn delete_btn" onclick="return confirm('Sure Want Delete?')"><i class="bi bi-trash3-fill"></i></a></td>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
    </div>
    </div>



    

@endsection