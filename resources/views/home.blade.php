<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Page Content -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Hotel : Tour deatils</title>
    <style>
        .productbox {
            background-color: #ffffff;
            padding: 10px;
            margin-bottom: 10px;
            -webkit-box-shadow: 0 8px 6px -6px #999;
            -moz-box-shadow: 0 8px 6px -6px #999;
            box-shadow: 0 8px 6px -6px #999;
        }

        .producttitle {
            font-weight: bold;
            padding: 5px 0 5px 0;
        }

        .productprice {
            border-top: 1px solid #dadada;
            padding-top: 5px;
        }

        .pricetext {
            font-weight: bold;
            font-size: 2.8em;
        }
    </style>
</head>

<body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        You are logged in as <strong> User </strong>!<br />

                        <a href='/bookss'> <input type="button" name="register" class="btn btn-primary" value="Book a Tour" /></a>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <br /><br />
    <div class="col-md-3 column productbox">
        <img src="{{asset('tour_page/gallep.jpg')}}" class="img-responsive">
        <div class="producttitle">Galle</div>
        <div class="productprice">

            <div class="pricetext">Visit to Galle</div>
        </div>
    </div>
    <div class="col-md-3 column productbox">
        <img src="{{asset('tour_page/anurap.jpg')}}" class="img-responsive">
        <div class="producttitle">Anuradhapura</div>
        <div class="productprice">

            <div class="pricetext">Visit to Anuradhapura</div>
        </div>
    </div>
    <div class="col-md-3 column productbox">
        <img src="{{asset('tour_page/sigiriyap.jpg')}}" class="img-responsive">
        <div class="producttitle">Sigiriya</div>
        <div class="productprice">

            <div class="pricetext">Visit to Sigiriya</div>
        </div>
    </div>
    <div class="col-md-3 column productbox">
        <img src="{{asset('tour_page/Badullap.jpg')}}" class="img-responsive">
        <div class="producttitle">Badulla</div>
        <div class="productprice">

            <div class="pricetext">Visit to Badulla</div>
        </div>
    </div>


    @endsection
</body>

</html>