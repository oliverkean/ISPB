@extends('pagelayout.dashboard_layout')
@section('title', 'Add Products')

@section('css', 'manualcss/add_products.css')

@section('content')
    <div class="container form_container">
        <form action="" class="form" method="POST" enctype="multipart/form-data">
            <div class="form-item mb-5 profile_pic">
                <h3 class="text-white">Add New Supplier</h3>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="ProductName" id="ProductName" value="{{old('ProductName')}}" placeholder="ProductName">
                <label for="ProductName">Supplier Name</label>
                <span class="text-danger">@error('ProductName') {{$message}} @enderror</span>
                <p class="text-warning">Validation error message here</p>
            </div>
            
            <div class="form-floating mb-3">
                <input type="number" class="form-control" name="Description" id="Description" value="{{old('Description')}}" placeholder="Description">
                <label for="Description">Contact</label>
                <span class="text-danger">@error('Description') {{$message}} @enderror</span>
                <p class="text-warning">Validation error message here</p>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="Quantity" id="Quantity" value="{{old('Quantity')}}" placeholder="Quantity">
                <label for="Quantity">Address</label>
                <span class="text-danger">@error('Quantity') {{$message}} @enderror</span>
                <p class="text-warning">Validation error message here</p>
            </div>

            <div class="mt-5 text-center">
                <button type="submit " class="btn btn-outline-light ">Add Supplier!</button>
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