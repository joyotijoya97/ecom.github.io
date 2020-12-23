@extends('master')

@section("content")

    <div style='height:600px!important'>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach($products as $item)
                <div class="item {{$item['id']==1?'active':''}}">
                <a href="detail/{{$item['id']}}">
                    <img style="height:400px!important" src="{{$item['gellary']}}">
                    <div class="carousel-caption" style="background-color:#35443585!important">
                        <h3>{{$item['name']}}</h3>
                        <p>{{$item['description']}}</p>
                    </div>
                </a>
                </div>
            @endforeach
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    

    <!--Trainding Wrapper-->
        <div class="tranding-wrapper trand_pro">
            <h2>Tranding Products</h2><br>
            @foreach($products as $item)
                <div class="tranding-item" style="float:left; width:20%">
                    <a href="detail/{{$item['id']}}">
                        <img style="height:100px!important" src="{{$item['gellary']}}">
                            <div class="">
                                <h3>{{$item['name']}}</h3>
                            </div>
                    </a>
                </div>
            @endforeach
        </div>
</div>
<br><br>

<div class="about">
<div id="about" class="container d-flex justify-content-center about">
    <div class="row">
        <div class="col">
            <h1 class="d-flex justify-content-center about_h1"><b>About Us</b></h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic odio atque voluptates rem et maiores obcaecati non exercitationem incidunt asperiores quae similique omnis eos accusantium corporis expedita consectetur, laborum ipsa eveniet! Ex voluptate repellendus at dolorem ipsam eius voluptatibus, nostrum vel quaerat consectetur quibusdam! Nesciunt, rem, velit tenetur deserunt necessitatibus libero vero quam ipsam minima commodi deleniti autem atque explicabo distinctio, adipisci provident perferendis repellendus quas sit nostrum. Placeat dolorum eaque mollitia cumque id voluptas, nam, et excepturi magnam quod magni laborum ad. Facilis doloribus minima optio nam perferendis dolorem, architecto, sit nihil recusandae, nemo ratione voluptatibus excepturi ullam placeat. Totam sed hic laudantium, nulla iste, perferendis dolorem quo quis maiores in cum labore. In quaerat incidunt eveniet inventore sunt perferendis cupiditate quos amet animi, officia earum, commodi voluptates, neque libero tempore quidem eum ullam consequatur rem mollitia totam. Eos nesciunt rerum facilis saepe dolorum? Quis tenetur nihil ipsum in consequatur officia, aspernatur ratione architecto est fuga et, eligendi esse fugiat dolore itaque similique iste veniam. Nostrum debitis cumque quisquam tempora maxime expedita, consectetur ut fugiat labore beatae consequuntur quam illo quasi perferendis numquam quis deserunt, optio laborum magnam totam, minus quidem repellendus pariatur. Accusamus vitae nihil odio temporibus mollitia?</p>
        </div>
    </div>
</div>
</div>

@endsection