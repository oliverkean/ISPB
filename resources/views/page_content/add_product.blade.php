@extends('pagelayout.dashboard_layout')
@section('title', 'Add Products')

@section('css', 'manualcss/add_user.css')

@section('content')
    <div class="container form_container">
        <form action="" class="form" method="POST" enctype="multipart/form-data">
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

            <div class="mt-5 text-center">
                <button type="submit " class="btn btn-outline-light ">Add Product!</button>
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