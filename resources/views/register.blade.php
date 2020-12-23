@extends('master')

@section("content")

    <div class='container' style='margin:30px;padding-bottom:7px'>
        <div class='row'>
            <div class='col-sm-4 col-sm-offset-4 reg_custom'>
            <h2 style="text-align:center">Register Now</h2> <br>
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleDropdownFormEmail2">Name : </label>
                        <input type="text" name="name" class="form-control" id="exampleDropdownFormEmail2" placeholder="Write Your Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleDropdownFormEmail2">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleDropdownFormPassword2">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
                    </div><br>
                    <button type="submit" class="reg_btn btn btn-primary btn-block">Register</button>
                </form>
            </div>
        </div>
    </div>

@endsection