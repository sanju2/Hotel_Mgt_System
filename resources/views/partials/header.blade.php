

@include('partials.ourJs') 

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        <a class="navbar-brand" href="{{route('product.index')}}">Brand</a>
        </div> 
        <br>





       
        
        <div class="row">
            <div class="col-xs-6 col-sm-3"> 
                <div class="nice-select">
                    <a class="navbar-brand">Food categories</a>
                    <ul class="">
                        
                        @foreach(App\cats::all() as $cList)

                     
                        
                        <button class="list-group-item" id="cat{{$cList->id}}" value="{{$cList->id}}">{{$cList->cat_name}}</button>
                       
                      
                    @endforeach
    
                    </ul>
                </div>

           



        </div>

       
              

        

            {{-- <div class="col-xs-6 col-sm-3">
                <select id="selectbox2">
                    <option value="">Select Price Range</option>
                    <option value="0-100">0-100</option>
                    <option value="100-300">100-300</option>
                    <option value="300-500">300-500</option>
                    <option value="500-1000">500-1000</option>
                </select>
  </div> --}}


        {{-- <div class="col-sm-6 hidden-xs">
            <div class="row">

                <div class="col-sm-4 pull-right">
                    <button id="findBtn" class="btn btn-success">Find</button>
                </div>
               
            </div>
        </div> --}}

    </div>







        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                <a href="{{route('product.shoppingCart')}}">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart
                    <span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                    </a>
                </li>

               
              
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

