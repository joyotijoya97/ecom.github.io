<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-com Project</title>

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    {{View::make('header')}}

        @yield('content')

    {{View::make('footer')}}

</body>

<style>
    body{
        background:#f4f7f6;
        padding-top: 70px;
    }
    
    .about{
        background-color:#e2e2e2;
    }

  

    .nav-clr{
        background-color: #332b2d;
        font-size: 18px;
    }

    .nav-clr a{
       color: #f7ecec;
    }

    .nav-clr ul li a:hover{
        color:black;
        font-size: 18px;

    }

    .custom{
        height: 530px;
        width: 417px;
        background: #211d1d;
        color: #eae5e5;
        font-size: 17px;
        padding: 50px;
        border-radius: 17px;
    }

    .custom a{
        color: #eae5e5;
    }

    .reg_custom{
        height: 500px;
        width: 417px;
        background: #211d1d;
        color: #eae5e5;
        font-size: 17px;
        padding: 50px;
        border-radius: 17px;
    }

    .reg_btn{
        background:#07131d;
        border-color: #b1afaf;
        font-size:19px
    }
    
    .reg_btn:hover{
        color:black;
        background:#ececec
    }

    .log_btn{
        background:#07131d;
        border-color: #b1afaf;
        font-size:19px
    }

    .log_btn:hover{
        color:black;
        background:#ececec
    
    }

    .trand_pro{
        margin: 50px;
        padding-left: 60px;
        padding-bottom: 60px;
    }

    .about{
        margin-top: 90px;
    }

    .about_h1{
        text-align:center
    }

    .product_list{
         height: 530px;
    }

    .custom_login{
        style='margin:50px; padding-bottom:17px;height: 530px;
    }
   
</style>

</html>