<!DOCTPE html>
    <html>

    <head>
        @extends('layouts.head')
        @section('title' , "Booking Success")
    </head>

    <body>
        <!-- Navigation bar -->
        <!-- Navigation bar -->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/index">Green Mount Hotel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                   
                </div>
            </div>
        </nav>
        <br />
        <br />
        <br />
        <br />
        <br />
        
    <h2>You Have Successfully Book your Room </h2>
    <h4>If you wish to cansel your reservation please let us know before 24 hours.</h4>
    <button class="btn btn-success btn-block btn-lg" type="submit"><a href="{{url('/mailroom')}}">Cancel your reservation</a></button>
   
                
               
                   
              

    </html>