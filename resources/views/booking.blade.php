<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>


    <br />
    <br />
    <br />
    
    <!--<h3 class="text-center text-danger">{{ Session::get('message')}}</h3>-->
    <center><h2>Booking a tour</h2></center>
    <form action="/book" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="exampleFormControlInput1">Enter Your Name</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">{{ $errors->first('name') }}</div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Enter Your Phone No</label>
            <input type="text" name="phoneno" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">{{ $errors->first('phoneno') }}</div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Place</label>
            <input type="text" name="place" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">{{ $errors->first('place') }}</div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Dates</label>
            <input type="text" name="dates" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">{{ $errors->first('dates') }}</div>


        <button type="submit" name="book" action="{{ url('/pay') }}" class="btn btn-primary">Book Now</button>
    </form>
</body>

</html>