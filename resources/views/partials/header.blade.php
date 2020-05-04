@include('partials.ourJs')

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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
                <div class="split-nav-menu clearfix widget cs-text-widget widget-blog-list clearfix">
                    <div class="cs-text">
                        <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Sort Price & Calorie</h4>
                        <div class="tm-widget tm-widget-blog-list ">
                            <article class="post media-post clearfix">
                                <select class="form-control sortcheck" name="sort" value="{{ old('sort') }}"
                                    id="sortid">
                                    <option value="asc" selected="true">ASC</option>
                                    <option value="desc">DESC</option>
                                </select><br>

                                <select class="form-control sortcheck" name="sortby" value="{{ old('sorrtby') }}"
                                    id="sortbyid">
                                    <option value="itemname">Item Name</option>
                                    <option value="calorie">Calorie</option>
                                    <option value="price">Price</option>
                                </select>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">

                <div class="widget cs-text-widget">
                    <div class="cs-text">
                        <h4>Filter Item List By..</h4>
                        <select class="form-control filtercheck" name="p_id" value="{{ old('p_id') }}" id="pid">
                            <option value="">Select Price Range</option>
                            <option value="0-100">0-100</option>
                            <option value="100-300">100-300</option>
                            <option value="300-500">300-500</option>
                            <option value="500-1000">500-1000</option>
                            <option value="1000-2000">upto 1000</option>
                        </select>
                        <br>
                        <select class="form-control filtercheck" id="cid">
                            <option value="" disable="true" selected="true">Select Category</option>
                            @foreach(App\cats::all() as $cList)
                            <option class="option" value="{{$cList->id}}" data-filter_province_name="{{$cList->id}}">
                                {{$cList->cat_name}}</option>
                            @endforeach
                        </select>

                        <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                        <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="itemname" />
                        <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
                        <input type="hidden" name="hidden_price_id" id="hidden_price_id" value="" />
                        <input type="hidden" name="hidden_category_id" id="hidden_category_id" value="" />
                        <input type="hidden" name="search" type="text" placeholder="Search Staff" value="" />

                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="widget cs-text-widget">
                    <div class="cs-text">
                    <h4>Search Items..</h4>
                        <form role="search" method="get" class="search-form" action="">
                            <input class="form-control" id="search" name="search" type="text" placeholder="Search Food Items" />
                            
                        </form>

                    </div>
                </div>
            </div>

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