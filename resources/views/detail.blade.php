@extends('master')
@section("content")
<!--<h1>Login Page</h1>
<button class="btn btn-primary">Click on me</button>-->

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">GO BACK</a>
            <h2>{{$product['name']}}</h2>
            <h3>Price: {{$product['price']}}</h3>
            <h4>Description:{{$product['description']}}</h4>
            <h4>Category:{{$product['category']}}</h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
            <button class="btn btn-primary">Add to cart</button>
            </form>
            <br><br>
            <button class="btn btn-success">Buy Now</button>

        
    </div>
</div>
</div>
@endsection