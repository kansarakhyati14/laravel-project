@extends('master')
@section("content")

<div class="custom-product">

 <div class="col-sm-10">
<div class="trending-wrapper">
<h2><center>My orders</center></h2>
@foreach($orders as $item)
<div class="row Searched-item cart-list-devider">
<div class="col-sm-3">
<a href="detail/{{$item->id}}">
<img class="trending-image" src="{{$item->gallery}}">

</a>
</div>
<br><br>
<div class="col-sm-4">
<div class="">
<h4><b>Name :{{$item->name}}</b></h4>
<h5>Delivery Status :{{$item->status}}</h5>
<h5>Address :{{$item->address}}</h5>
<h5>Payment Status :{{$item->paymemt_status}}</h5>
<h5>Payment Method :{{$item->payment_method}}</h5>
</div>
</div>


</div>

@endforeach
</div>

</div>
</div>

@endsection