@extends('pagelayout.dashboard_layout')
@section('title', 'User List')

@section('css', 'manualcss/user_list.css')
@section('content')

    <div class="container-fluid mx-auto m-5">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> User added succesfully!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Failure!</strong> Sorry, something went wrong!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="card bp-2 user_list_container" >
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="h2 h2-responsive-sm h2-responsive-md h2-responsive-lg" style="text-align: center"><i class="bi bi-people-fill"></i>USERS</h2>
                    <div class="col d-flex justify-content-end">
                        <a href="{{route('add-users.index')}}" class="btn btn-outline-dark my-3" ><i class="bi bi-plus-square-fill"></i> Add Users</a>
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
                                <th>ID</th>
                                <th>FirstName</th>
                                <th>LastName</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>000001</td>
                                <td>Vincent James</td>
                                <td>Beato</td>
                                <td>Super Administrator</td>
                                <td>
                                    <div class="btn-group g-4 btn_action" role="group" aria-label="Basic example">
                                        <button type="button" class="btn edit_btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pen pen_icon"></i></button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit User Information</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <div class="container form_container">
                                                        <form action="" class="form" method="POST" enctype="multipart/form-data">
                                                            <div class="form-item mb-5 profile_pic" >

                                                                <img src="{{ asset('images/cat_default.jpg') }}" class=" image_pic rounded mx-auto d-block mb-2" alt="..." id="output" width="100px" height="100px" style="border: 3px solid rgb(43, 43, 43)">
                                                                <h3 class="text-dark">Profile</h3>
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
                                                                    <a class="btn btn-outline-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                                <button type="submit " class="btn btn-outline-light ">Save Changes</button>
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

@endsection