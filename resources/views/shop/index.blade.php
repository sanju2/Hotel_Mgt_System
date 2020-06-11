@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')

@include('partials.ourJs') 
@if(Session::has('success'))
<div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
        <div id="charge-message" class="alert alert-success">
            {{Session::get('success')}}

        </div>

    </div>


</div>
@endif


@if(count($products)=="0")
<div class="col-xs-6 col-sm-4" >
    <div class="itembox">
        <h2>No items found under this category</h2>
    </div>
</div>
@else
<div id="productData">
    @foreach($products->chunk(3) as $productChunk)
    <div class="row">
      
       @foreach($productChunk as $product)

       <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
        <img src="/uploads/item/{{$product->image}}" alt="..." class="img-responsive">
            <div class="caption">
                <h3>{{$product->itemname}}</h3>
                <p class="description">{{$product->description}}</p>


                
                <p class="calorie">{{$product->calorie}}</p>
                <div class="clearfix">
                    <div class="pull-left price">Rs.{{$product->price}}</div>
                <a href="{{route('product.AddToCart',['id'=>$product->id])}}" class="btn btn-success pull-right" role="button">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>

       @endforeach
    </div>
   
     
    
    @endforeach
</div>
    @endif
    
@endsection