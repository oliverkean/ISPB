@extends('pagelayout.dashboard_layout')
@section('title', 'Add Supplier Orders')

@section('css', 'manualcss/add_order.css')

@section('content')
    <div class="container form_container">
        <form action="" class="form" method="POST" enctype="multipart/form-data">
            <div class="card-header mb-5">

                <h3 class="text-white"><i class="bi bi-cart-plus"></i>ORDER TO SUPPLIER</h3>
            </div>


            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="Itemname" id="Itemname" value="{{old('Itemname')}}" placeholder="Itemname">
                <label for="Itemname">Supplier</label>
                <span class="text-danger">@error('Itemname') {{$message}} @enderror</span>
                <p class="text-warning">Validation error message here</p>
            </div>

            <div class="form-floating mb-3">

                <div class="dropdown">
                    <button class="btn drop_down_btn dropdown-toggle" style="width: 100%" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Product
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Bmeg</a></li>
                      <li><a class="dropdown-item" href="#">Bmeg 1000</a></li>
                      <li><a class="dropdown-item" href="#">Bmeg 2000</a></li>
                    </ul>
                  </div>
                <span class="text-danger">@error('Itemname') {{$message}} @enderror</span>
                <p class="text-warning">Validation error message here</p>
            </div>
            
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="Orderquantity" id="Orderquantity" value="{{old('Orderquantity')}}" placeholder="Orderquantity">
                <label for="Orderquantity">Order Quantity</label>
                <span class="text-danger">@error('Orderquantity') {{$message}} @enderror</span>
                <p class="text-warning">Validation error message here</p>
            </div>

            <div class="form-floating mb-3">
                <input type="number" class="form-control" name="Orderquantity" id="Orderquantity" value="{{old('Orderquantity')}}" placeholder="Orderquantity">
                <label for="Orderquantity">Price</label>
                <span class="text-danger">@error('Orderquantity') {{$message}} @enderror</span>
                <p class="text-warning">Validation error message here</p>
            </div>

            <div class="form-floating mb-3">
                <input type="date" class="form-control" name="Orderdate" id="Orderdate" value="{{old('Orderdate')}}" placeholder="Orderdate">
                <label for="Orderdate">Order Date</label>
                <span class="text-danger">@error('Orderdate') {{$message}} @enderror</span>
                <p class="text-warning">Validation error message here</p>
            </div>

            <div class="mt-5 text-center">
                <button type="submit " class="btn btn-outline-light ">Add Order!</button>
            </div>
        </form>
    </div>
    <script>

        var loadFile = function(event){
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
        };

    </script>

@endsection