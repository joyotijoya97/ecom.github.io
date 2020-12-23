@extends('master')
@section("content")
<div class="product_list">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h2>List for My Orders</h2>
            @foreach($orders as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gellary}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2>Name : {{$item->name}}</h2>
                      <h5>Delivery status : {{$item->status}}</h5>
                      <h5>Address : {{$item->address}}</h5>
                      <h5>payment Status : {{$item->payment_status}}</h5>
                      <h5>Payment Method : {{$item->payment_method}}</h5>
                      
                    </div>
             </div>
            </div>
            @endforeach
          </div>
          

     </div>
</div>
@endsection 