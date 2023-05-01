@extends('pagelayout.dashboard_layout')
@section('title', 'Add Users')

@section('css', 'manualcss/add_user.css')

@section('content')
    <div class="container form_container">
        <form action="" class="form">
            <div class="mb-5 container text-center text-white">
                <i class="bi bi-person-fill-add user_icon"></i>
            </div>

            <div class="mb-3 label_container">
                <input type="text" class="form-control" placeholder="First name">
            </div>

            <div class="mb-3 label_container">
                <input type="text" class="form-control" placeholder="Last name">
            </div>

            <div class="mb-3 label_container">
                <input type="password" class="form-control" placeholder="Password">
            </div>

            <div class="mb-3 text-center">
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

            <div class="mt-5 text-center">
                <button type="submit " class="btn btn-outline-light ">Add User!</button>
            </div>
        </form>
    </div>

@endsection