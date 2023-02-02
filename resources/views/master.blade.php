<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, intial-scale=1.0">
        <meta http-equiv="X-UA-Compitable" content="ie=edge">
        
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <title>E-COMM PROJECT</title>
    <body>

        {{View::make('header')}}
        @yield('content')
        {{View::make('footer')}}
    
    </body>
 <!--   <script>
        $(document).ready (function()
        {
            $ ("button").click(function()
            {
                alert("all set")
            })
        })
    </script>-->

    <style>
        .custom-login
        {
            height:500px;
            padding-top: 100px;
        }
        img.slider-img
        {
            height: 400px !important; 
        }
        .custom-product
        {

            height: 600px;
        }
        .slider-text{

            background-color: #35443585 !important;
        }
        .trending-image{

            height: 100px;

        }
        .trening-item
        {
            float: left;
            width: 30%;
        }
        .trending-wrapper
        {
            margin: 160px;
        }
        .detail-img{
            height: 200px;
        }

        .cart-list-devider
        {
            border-bottom: 1px solid #ccc;
            margin-bottom: 20px;
            padding-bottom: 20px;

        }
    </style>
</html>