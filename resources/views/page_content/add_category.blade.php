@extends('pagelayout.dashboard_layout')
@section('title', 'Add Category')

@section('css', 'manualcss/add_user.css')

@section('content')
    <div class="container form_container">
        <form action="" class="form" method="POST" enctype="multipart/form-data">

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="CategoryCode" id="CategoryCode" value="{{old('CategoryCode')}}" placeholder="CategoryCode">
                <label for="CategoryCode">Category Code</label>
                <span class="text-danger">@error('CategoryCode') {{$message}} @enderror</span>
                <p class="text-danger">Validation error message here</p>
            </div>
            
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="CategoryName" id="CategoryName" value="{{old('CategoryName')}}" placeholder="CategoryName">
                <label for="CategoryName">Category Name</label>
                <span class="text-danger">@error('CategoryName') {{$message}} @enderror</span>
                <p class="text-danger">Validation error message here</p>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="Description" id="Description" value="{{old('Description')}}" placeholder="Description">
                <label for="Description">Description</label>
                <span class="text-danger">@error('Description') {{$message}} @enderror</span>
                <p class="text-danger">Validation error message here</p>
            </div>

            <div class="mt-5 text-center">
                <button type="submit " class="btn btn-outline-light ">Add Category!</button>
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