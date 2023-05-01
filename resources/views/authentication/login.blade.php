@extends('pagelayout.masterlayout')
@section('title', 'Login')
@section('content')

    <div class="container" style="max-width: 800px; margin-top: 50px;">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Access Denied!</strong> You need to login first to access page!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="card p-5">
            <div class="row justify-content-md-between">
                <div class="col">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae reiciendis ipsa rerum, omnis libero error nihil vitae explicabo magni asperiores in tempore incidunt aliquid alias corrupti sapiente nobis veritatis quo?
                </div>
                <div class="col">
                    <form action="">
                        @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                        
                        <h2 class="h2 h2-responsive-sm h2-responsive-md h2-responsive-lg" style="text-align: center">ISPB LOGIN</h2>
                        <br>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control input-group-sm input-group-md input-group-lg" name="Username" id="Email" value="{{old('Username')}}" placeholder="Username">
                            <label for="Username"><i class="bi bi-person-fill"></i> Username</label>
                            <span class="text-danger">@error('Username') {{$message}} @enderror</span>
                            <p class="text-danger">Validation error message here</p>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="Password" id="Password" value="{{old('Password')}}" placeholder="Password">
                            <label for="Password"><i class="bi bi-lock-fill"></i> Password</label>
                            <span class="text-danger">@error('Password') {{$message}} @enderror</span>
                            <p class="text-danger">Validation error message here</p>
                        </div>
                        <br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-sm btn-lg w-100 rounded-circle-5" id="submit" onclick="loading()">
                                <span class="spinner-border spinner-border-sm me-2 d-none" role="status" aria-hidden="true"></span>
                                <span id="btn-text">Login</span>
                            </button>
                        </div>
                        <script>
                            function loading() {
                            var spinner = document.querySelector(".spinner-border");
                            var btnText = document.getElementById("btn-text");
                            spinner.classList.remove("d-none");
                            btnText.innerHTML = "Authenticating...";
                        }
                        </script>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection