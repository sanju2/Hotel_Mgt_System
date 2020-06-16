<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
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
                     
                        <a href="/change-password"><i class="fa fa-key fa-2x"></i> {{ __('Change Password') }}</a><br /><br />
                        <a href="/item"><i class=" fa fa-cutlery fa-2x"></i> {{ __('Food Delivery') }}</a><br /><br />
                        <a href="/book"><i class=" fa fa-book fa-2x"></i> {{ __('Book Room') }}</a> &nbsp; &nbsp;
                        <a href="/sendmail"><i class=" fa fa-ban fa-2x"></i> {{ __('Cancel Room Booking') }}</a><br /><br />
                        <a href="/TP"><i class="fa fa-bookmark fa-2x"></i> {{ __('Book Tour') }}</a> &nbsp; &nbsp;
                        <a href="/bcancel"><i class=" fa fa-ban fa-2x"></i> {{ __('Cancel Tour Booking') }}</a><br /><br />
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
</body>

</html>