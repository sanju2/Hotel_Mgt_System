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
            background-color:aliceblue;
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
                        <a class="nav-link" href="/sglog">Back</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />

    <form action="" method="post">
        @csrf
        <div class="container">
            <h1>Email Send to Admin</h1>
            @if(session('success'))
            <b>{{session('success')}}</b>
            @endif
            <input class="form-control" name="email" type="email" value="lsanjeewa18@gmail.com" placeholder="Enter Email Address">
            <input class="form-control" name="subject" type="text" placeholder="Enter Emai Subject">
            <textarea class="form-control" name="content" placeholder="Email details"></textarea>
            <button class="btn btn-success">SEND</button>
        </div>
    </form>

</body>

</html>