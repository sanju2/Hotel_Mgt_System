<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Tel : Tour Details</title>
    <!-- Page Content -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        body {
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;


        }

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
            font-size: 20px;
        }

        .producttitle2 {
            font-weight: bold;
            padding: 5px 0 5px 0;
            font-size: 20px;
        }

        .productprice {
            border-top: 1px solid #dadada;
            padding-top: 5px;
        }

        .pricetext {
            font-weight: bold;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <h1>Select Your Place</h1>
    <div class="col-md-3 column productbox">
        <img src="{{asset('tour_page/gallep.jpg')}}" class="img-responsive">
        <div class="producttitle">Galle</div>
        <div class="producttitle2">Rs.4000</div>
        <div class="productprice">

            <div class="pricetext">Galle is a city situated on the southwestern tip of Sri Lanka, 119 km from Colombo. Galle is the best example of a fortified city built by Europeans in south and Southeast Asia, showing the interaction between European architectural styles and south Asian traditions.</div>
        </div>
    </div>
    <div class="col-md-3 column productbox">
        <img src="{{asset('tour_page/anurap.jpg')}}" class="img-responsive">
        <div class="producttitle">Anuradhapura</div>
        <div class="producttitle2">Rs.3000</div>
        <div class="productprice">

            <div class="pricetext">Anuradhapura is belongs to the North Central Province in to Sri Lanka. Anuradhapura is one of the ancient capitals of Sri Lanka, famous for its well-preserved ruins of ancient Lankan civilization. The city, now a UNESCO World Heritage Site, lies 205 km north of the current capital Colombo in Sri Lanka.</div>
        </div>
    </div>
    <div class="col-md-3 column productbox">
        <img src="{{asset('tour_page/sigiriyap.jpg')}}" class="img-responsive">
        <div class="producttitle">Sigiriya</div>
        <div class="producttitle2">Rs.2000</div>
        <div class="productprice">

            <div class="pricetext">Sigiriya also known as the Lion's Rock is a rock fortress and a palace located in the Matale district of Sri Lanka. This ruin is surrounded by gardens, ponds and other structures. Sigiriya was built by King Kassapa and it is included as a World Heritage site.</div>
        </div>
    </div>
    <div class="col-md-3 column productbox">
        <img src="{{asset('tour_page/Badullap.jpg')}}" class="img-responsive">
        <div class="producttitle">Badulla</div>
        <div class="producttitle2">Rs.1000</div>
        <div class="productprice">

            <div class="pricetext">Badulla is the capital of Uva Province in Sri Lanka. Badulla is located on the southeast of Kandy, almost encircled by the Badulu Oya River, about 680 meters (2200 ft) above sea level and is surrounded by tea plantations. The town is overshadowed by the Namunukula range of mountains.</div>
        </div>
    </div>
    <br /> <br />
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    <a href="/bookss" class="btn btn-success btn-lg" role="button">Book Now</a>
    <a href="/generate-pdf" class="btn btn-primary btn-lg" role="button">Generate Pdf</a>
    <a href="/customerdash" class="btn btn-warning btn-lg" role="button">Back</a>

</body>

</html>