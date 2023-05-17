@extends('pagelayout.dashboard_layout')
@section('title', 'Add Users')

@section('css', 'manualcss/add_user.css')

@section('content')
    <div class="container form_container">
        <form action="" class="form" method="POST" enctype="multipart/form-data">
           <div class="container icon text-center mb-3">
                <i class="bi bi-person-add"></i>
           </div>

          
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="Firstname" id="Firstname" value="{{old('Firstname')}}" placeholder="Firstname">
                <label for="Firstname">Firstname</label>
                <span class="text-danger">@error('Firstname') {{$message}} @enderror</span>
                <p class="text-warning">Validation error message here</p>
            </div>

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