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
            <p>Cancel your Booking</p>
        </b>
    </center>
  

    <br />
    <br />
    <br />
    <br />
    <br />
   
    <form action="" method="post">
        @csrf
        <div class="container">
            <h1>To Cancel your reservation </h1>
            <h4>Please be kind enough to inform your booking details including Name, Telephone number and reservation Dates. </h4>
            <h5>Notice: We are not refund you money for your cancelation</h5>
            @if(session('success'))
            <b>{{session('success')}}</b>
            @endif
            <input class="form-control" name="email" type="email" placeholder="greenmount049@gmail.com">
            <input class="form-control" name="subject" type="text" placeholder="Enter your Name">
            <textarea class="form-control" name="content" placeholder="Reason for Cancelation"></textarea>
            <button class="btn btn-secondary">SEND</button>
        </div>
    </form>

</body>

</html>