@foreach($products->chunk(3) as $productChunk)
<div class="row">
  
   @foreach($productChunk as $product)

   <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
    <img src="/uploads/item/{{$product->image}}" alt="..." class="img-responsive">
        <div class="caption">
            <h3>{{$product->itemname}}</h3>
            <p class="description">{{$product->description}}</p>
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