@extends('pagelayout.dashboard_layout')
@section('title', 'Practice')

@section('css', 'manualcss/user_list.css')
@section('content')

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container form_container">
        <form action="" class="form" method="POST" enctype="multipart/form-data">
            <div class="form-item mb-5 profile_pic">

                <img src="{{ asset('images/cat_default.jpg') }}" class=" image_pic rounded mx-auto d-block mb-2" alt="..." id="output" width="100px" height="100px">
                <h3 class="text-white">Profile picture</h3>
            </div>

            <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile02" onchange="loadFile(event)">
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="Firstname" id="Firstname" value="{{old('Firstname')}}" placeholder="Firstname">
                <label for="Firstname">Firstname</label>
                <span class="text-danger">@error('Firstname') {{$message}} @enderror</span>
                <p class="text-danger">Validation error message here</p>
            </div>
            
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="Middlename" id="Middlename" value="{{old('Middlename')}}" placeholder="Middlename">
                <label for="Middlename">Middlename</label>
                <span class="text-danger">@error('Middlename') {{$message}} @enderror</span>
                <p class="text-danger">Validation error message here</p>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="Lastname" id="Lastname" value="{{old('Lastname')}}" placeholder="Lastname">
                <label for="Lastname">Lastname</label>
                <span class="text-danger">@error('Lastname') {{$message}} @enderror</span>
                <p class="text-danger">Validation error message here</p>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="Password" id="Password" value="{{old('Password')}}" placeholder="Password">
                <label for="Password">Password</label>
                <span class="text-danger">@error('Password') {{$message}} @enderror</span>
                <p class="text-danger">Validation error message here</p>
            </div>

            <div class="form-floating mb-3">
                <input type="date" class="form-control" name="Birthdate" id="Birthdate" value="{{old('Birthdate')}}" placeholder="Birthdate">
                <label for="Birthdate">Birthdate</label>
                <span class="text-danger">@error('Birthdate') {{$message}} @enderror</span>
                <p class="text-danger">Validation error message here</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-sm-6 text-center mb-3">
                    <div class="dropdown">
                    <a class="btn dropdown_btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Gender
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Male</a></li>
                        <li><a class="dropdown-item" href="#">Female</a></li>
                        <li><a class="dropdown-item" href="#">Spaceship</a></li>
                    </ul>
                    </div>
                </div>

                <div class="col-sm-6 text-center mb-3">
                    <div class="dropdown">
                    <a class="btn dropdown_btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Roles
                    </a>
                    <ul class="dropdown-menu">
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection