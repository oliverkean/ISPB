@extends('pagelayout.masterlayout')
@section('title', 'Login')
@section('content')

    <div class="container" style="max-width: 500px; margin-top: 50px;">
        <div class="card p-5">
            <form action="">
                <h1 class="h1 h1-responsive-sm h1-responsive-md h1-responsive-lg" style="text-align: center">Login</h1>
                @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif

                <div class="mb-3">
                    <label for="" class="form-label">Email address</label>
                    <input type="text" class="form-control input-group-sm input-group-md input-group-lg" name="Email" id="Email" value="{{old('Email')}}">
                    <span class="text-danger">@error('Email') {{$message}} @enderror</span>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="Password" id="Password" value="{{old('Password')}}">
                    <span class="text-danger">@error('Password') {{$message}} @enderror</span>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-sm btn-md btn-lg" id="submit" onclick="loading()">
                        <span class="spinner-border spinner-border-sm me-2 d-none" role="status" aria-hidden="true"></span>
                        <span id="btn-text">Login</span>
                    </button>
                </div>
                <script>
                    function loading() {
                    var spinner = document.querySelector(".spinner-border");
                    var btnText = document.getElementById("btn-text");
                    spinner.classList.remove("d-none");
                    btnText.innerHTML = "Processing..";
                }
                </script>
            </form>
        </div>
    </div>

@endsection