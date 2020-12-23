@extends('master')

@section("content")

<div class="container product_list" >
    <div class="row">
        <div class="col-sm-6">
            <img style="height:200px" src="{{$product['gellary']}}" alt="Product Image">
        </div>
        <div class="col-sm-6">
            <a style="float:right" href="/">Go Back</a>
            <h1><b>Product Details</b></h1>
            <h3>Product Name: {{$product['name']}}</h3>
            <h3>Price: {{$product['price']}}</h3>
            <h3>Description: {{$product['description']}}</h3>
            <h3>Cetagory: {{$product['cetagory']}}</h3>
            <br><br>
            <form action="/add_to_cart" method="post">
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
                <button class="btn btn-primary">Add to Cart</button>
            </form>
            <br><br>
            @if(Session::has('user'))
            <a class="btn btn-success" href="/ordernow">Order Now</a>
            @else
            <a class="btn btn-success" href="/login">Order Now</a>
            @endif
        </div>
    </div>
</div>
@endsection