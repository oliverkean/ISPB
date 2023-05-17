@extends('pagelayout.dashboard_layout')
@section('title', 'Profile Page')
@section('css', 'manualcss/profile.css')

@section('content')

@include('modal.Change_password_modal')
@include('modal.Edit_Profile')
            <div class="container  mt-5">
                <div class="container container_pic_info">
                    <div class="container  pic_container ">

                        <div class="profile_pic">
    
                        </div>
                        <div class="card-footer">

                            <form action="" class="d-flex"  method="post">
                                <input type="file" name="" id="" >
                                <button type="button" class="btn btn-dark">Upload</button>
    
                            </form>
                        </div>
                    </div>
                    <div class="container user_info">
                        <div class="card-header mb-3">
                            <h4>USER INFORMATION</h4>
                        </div>
                        <div class="card-body">

                            <h6>Name: Lee Sang-hyeok (이상혁)</h6>
                            <h6>Role: Inventory Clerk</h6>
                            <h6>Email: Faker@gmail.com</h6>
                            <h6>Contact Number: 0915 544 3568</h6>
                            <h6>Birth Date: January 1, 2001</h6>
                        </div>

                        <div class="card-footer">
                            
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#examplesModal">
                                Edit Profile
                            </button>
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Change Password
                            </button>
  
                        </div>
                        
                    </div>
                </div>
            </div>
     

@endsection