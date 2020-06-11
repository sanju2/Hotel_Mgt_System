<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    `@extends('layouts.head')
    @section('title' , "Home Page")

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
            <a class="navbar-brand" href="/index">Green Mount Hotel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    </nav>
    <br />
    <br />
    <br />
    <center>
        <b>
            <p>Cansel your Booking</p>
        </b>
    </center>
    @if(session('mess'))
    <b>{{session('mess')}}</b>
    @endif
    

    <br />
    <br />
    <br />
    <br />
    <br />
    <form action="" method="get">
        @csrf
        <div class="container">
            <h1>Email Send to Inform</h1>
            @if(session('success'))
            <b>{{session('success')}}</b>
            @endif
            <input class="form-control" name="email" type="email" placeholder="Enter Email Address">
            <input class="form-control" name="subject" type="text" placeholder="Enter Emai Subject">
            <textarea class="form-control" name="content" placeholder="Email details"></textarea>
            <button class="btn btn-secondary">SEND</button>
        </div>
    </form>

</body>

</html>