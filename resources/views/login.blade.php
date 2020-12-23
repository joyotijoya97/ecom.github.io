@extends('master')

@section("content")

    <div class="container custom_login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4 custom">
            <h2 style="text-align:center">Login Now</h2> <br>
            <form action="login" method="POST" >
                 @csrf
                <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div><br>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>

                <!--2 column grid layout for inline styling -->
                    <div class="row mb-4">
                        <div class="col d-flex ">
                        <a style="float:right" href="#">Forgot password?</a>
                        </div>
                    </div>

                <br>
                <!--Submit button-->
                <button type="submit" class="log_btn btn btn-primary btn-block">Login</button>
            </form><br>
            <p style="text-align:center">New here? <a href="/register">Registration Now</a></p>
        </div>
    </div>
</div>

@endsection