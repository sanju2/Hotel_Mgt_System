<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    `@extends('layouts.head')
    @section('title' , "Email Send Page")

    <style>
        html,
        body {

            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            flex: 1;
            flex-direction: column;
            align-items: stretch;
            width: 80%;
            margin-left: auto;
            margin-right: auto;

        }

        .form-control {
            border-radius: 0.25em;
            border: 1px solid gray;
            padding: 1em;
            margin-bottom: 1em;


        }
    </style>
</head>

<body>

    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/index">Green Mount Hotel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">Back</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <br />
    <br />
    <br />


    <center>
        <b>
            <p>Booking Deatils</p>
        </b>
    </center>
    @if(session('mess'))
    <b>{{session('mess')}}</b>
    @endif
    <table border="1" class="table table-dark" align="left">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>phone</td>
            <td>Email</td>
            <td>place</td>
            <td>dates</td>
            <td>Action</td>
        </tr>
        @foreach ($getbooksde as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->place }}</td>
            <td>{{ $user->dates }}</td>
            <td><a href='delete/{{ $user->id }}' class="text-warning">Cancel Tour</a></td>
        </tr>
        @endforeach
    </table>

    <br />
    <br />

    <center>
        <b>
            <p>Tour Booking Cancel Details</p>
        </b>
    </center>
    <table border="1" class="table table-dark" align="left">
        <tr>
            <td>Id</td>
            <td>Reason</td>
            <td>phone</td>
        </tr>
        @foreach ($tourr as $tour)
        <tr>
            <td>{{ $tour->id }}</td>
            <td>{{ $tour->to }}</td>
            <td>{{ $tour->phone }}</td>

        </tr>
        @endforeach
    </table>

    <br />
    <br />
    <center>
        <b>
            <p>Guide Deatils</p>
        </b>
    </center>
    <table border="1" class="table table-dark" align="left">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>phone</td>
            <td>Email</td>
            <td>place</td>
            <td>dates</td>
        </tr>
        @foreach ($getagentn as $guid)
        <tr>
            <td>{{ $guid->id }}</td>
            <td>{{ $guid->first_name }}</td>
            <td>{{ $guid->last_name }}</td>
            <td>{{ $guid->nic }}</td>
            <td>{{ $guid->mobileno }}</td>
            <td>{{ $guid->email }}</td>
        </tr>
        @endforeach
    </table>

    <br />
    <br />
    <br />
    <br />
    <br />
    <form action="" method="post">
        @csrf
        <div class="container">
            <h1>Email Send to Inform</h1>
            @if(session('success'))
            <b>{{session('success')}}</b>
            @endif
            <input class="form-control" name="email" type="email" placeholder="Enter Email Address">
            <input class="form-control" name="subject" type="text" placeholder="Enter Emai Subject">
            <textarea class="form-control" name="content" placeholder="Email details"></textarea>
            <button class="btn btn-success">SEND</button>
        </div>
    </form>
    <br />
</body>

</html>