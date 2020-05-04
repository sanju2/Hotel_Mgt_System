<!DOCTYPE html>
<html>

<head>
    @extends('layouts.head')
    @section('title' , "Guide Dashboard")

    <style type="text/css">
        body {
            background-image: url("{{asset('images/guide_dash.jpg')}}");
            background-size: cover;
            height: 100%;
        }
    </style>
</head>

<body style="background-color:#DEE8B9;">
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/index">Green Mount Hotel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/index">Home Page</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br /><br /><br /> <br />

    <div class="container box">
        <h3 align="center">
            <p class="font-italic">Guide Profile Details.</p>
        </h3><br />

        @foreach ($users as $user)
        @endforeach



        <pre>
        <h5> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp {{ $user->first_name }} {{ $user->last_name }}</h5><br />
            <a href="/edit/{{ $user->id }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Update Profile Details</a><br />
            <a href="/deleteimage/{{ $user->id }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Close Your Account</a>
        </pre>

    </div>


</body>

</html>