@extends('pagelayout.dashboard_layout')
@section('title', 'Add Orders')

@section('css', 'manualcss/add_order.css')

@section('content')
    <div class="container form_container">
        <form action="" class="form" method="POST" enctype="multipart/form-data">
            <h3 class="text-white"><i class="bi bi-cart-plus"></i>Add Order</h3>

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