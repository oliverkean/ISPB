@extends('pagelayout.dashboard_layout')
@section('title', 'Profile Page')
@section('css', 'manualcss/profile.css')

@section('content')

@include('modal.Change_password_modal')
            <div class="container  mt-5">
                <div class="container container_pic_info">
                    <div class="pic_container">

                        <div class="profile_pic">
    
                        </div>
                    </div>
                    <div>
                        <div class="card-header mb-3">
                            <h4>USER INFORMATION</h4>
                        </div>
                        <div class="card-body">

                            <h6>Name: Lee Sang-hyeok (이상혁)</h6>
                            <h6>Role: Inventory Clerk</h6>
                            <h6>Email: Faker@gmail.com</h6>
                            <h6>Password: Korea</h6>
                        </div>

                        <div class="card-footer">
                            
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Change Password
                            </button>
  
                        </div>
                        
                    </div>
                </div>
            </div>
     

@endsection