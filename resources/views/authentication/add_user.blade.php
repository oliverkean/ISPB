@extends('pagelayout.dashboard_layout')
@section('title', 'Add Users')

@section('css', 'manualcss/add_user.css')

@section('content')
    <div class="container form_container">
        <form action="" class="form" method="POST" enctype="multipart/form-data">
            <div class="form-item mb-5 profile_pic">

                <img src="{{ asset('images/cat_default.jpg') }}" class=" image_pic rounded mx-auto d-block mb-2" alt="..." id="output" width="100px" height="100px">
                <h3 class="text-white">Add New User</h3>
            </div>

            <div class="input-group">
                <input type="file" class="form-control" id="inputGroupFile02" onchange="loadFile(event)">
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                <span class="text-danger">@error('Firstname') {{$message}} @enderror</span>
            </div>
            <p class="text-warning">Validation error message here</p>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="Firstname" id="Firstname" value="{{old('Firstname')}}" placeholder="Firstname">
                <label for="Firstname">Firstname</label>
                <span class="text-danger">@error('Firstname') {{$message}} @enderror</span>
                <p class="text-warning">Validation error message here</p>
            </div>
<<<<<<< HEAD
            
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="Middlename" id="Middlename" value="{{old('Middlename')}}" placeholder="Middlename">
                <label for="Middlename">Middlename</label>
                <span class="text-danger">@error('Middlename') {{$message}} @enderror</span>
                <p class="text-warning">Validation error message here</p>
            </div>
=======
>>>>>>> 8d52753defd04a00c4db64a1e8ea8b0815a0d9a6

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="Lastname" id="Lastname" value="{{old('Lastname')}}" placeholder="Lastname">
                <label for="Lastname">Lastname</label>
                <span class="text-danger">@error('Lastname') {{$message}} @enderror</span>
                <p class="text-warning">Validation error message here</p>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="Password" id="Password" value="{{old('Password')}}" placeholder="Password">
                <label for="Password">Password</label>
                <span class="text-danger">@error('Password') {{$message}} @enderror</span>
                <p class="text-warning">Validation error message here</p>
            </div>

            <div class="form-floating mb-3">
                <input type="date" class="form-control" name="Birthdate" id="Birthdate" value="{{old('Birthdate')}}" placeholder="Birthdate">
                <label for="Birthdate">Birthdate</label>
                <span class="text-danger">@error('Birthdate') {{$message}} @enderror</span>
                <p class="text-warning">Validation error message here</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-sm-6 text-center mb-3">
                    <div class="dropdown">
                    <a class="btn dropdown_btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Roles
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Unicorn</a></li>
                        <li><a class="dropdown-item" href="#">Administrator</a></li>
                        <li><a class="dropdown-item" href="#">Inventory clerk</a></li>
                    </ul>
                    </div>
                </div>
            </div>

            <div class="mt-5 text-center">
                <button type="submit " class="btn btn-outline-light ">Add User!</button>
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