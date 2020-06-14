<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel : User Dashborad</title>

</head>

<body>
    @extends('layouts.app')

    @section('content')
    <br />
    <br />
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


                        You are logged in as <strong> User </strong>!<br /><br />
                        <h3 class="text-center text-success">{{ Session::get('message')}}</h3>
                        <a href='/change-password'> <input type="button" name="register" class="btn btn-primary btn-lg" value="Change Password" /></a> <br /><br />
                        <a href='/item'> <input type="button" name="register" class="btn btn-primary btn-lg" value="Food Delivery" /></a> <br /><br />
                        <a href='/book'> <input type="button" name="register" class="btn btn-primary btn-lg" value="Book Room" /></a> &nbsp; &nbsp;
                        <a href='/sendmail'> <input type="button" name="register" class="btn btn-info btn-lg" value="Cancel Room Booking" /></a> <br /><br />
                        <a href='/TP'> <input type="button" name="register" class="btn btn-primary btn-lg" value="Book Tour" /></a> &nbsp; &nbsp;
                        <a href='/bcancel'> <input type="button" name="register" class="btn btn-info btn-lg" value="Cancel Tour Booking" /></a> <br /><br />
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
</body>

</html>