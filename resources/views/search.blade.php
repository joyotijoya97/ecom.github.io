@extends('master')

@section("content")

    <div class="product_list">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
            <div class="search-wrapper" style="margin:50px">
                <h4>Result for product</h4>
                @foreach($products as $item)
                    <div class="search-item">
                        <a href="detail/{{$item['id']}}">
                            <img style="height:100px!important" src="{{$item['gellary']}}">
                                <div class="">
                                    <h3>{{$item['name']}}</h3>
                                    <h3>{{$item['description']}}</h3>
                                </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
</div>
@endsection