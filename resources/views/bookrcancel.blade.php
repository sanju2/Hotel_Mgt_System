<!DOCTPE html>
    <html>

    <head>
        @extends('layouts.head')
        @section('title' , "Booking Room Cancel")
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
                    <ul class="navbar-nav ml-auto">
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
        <br />
        <br />
        <h3 class="text-center text-danger">{{ Session::get('message')}}</h3>
        <table class="table table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">customer_id</th>
                <th scope="col">type</th>
                <th scope="col">checkin</th>
                <th scope="col">checkout</th>
                <th scope="col">status</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->customer_id }}</td>
                <td>{{ $user->type }}</td>
                <td>{{ $user->checkin }}</td>
                <td>{{ $user->checkout }}</td>
                <td>{{ $user->status }}</td>
                <td><a href='delete/{{ $user->id }}'>Cancel Booking</a></td>
            </tr>
            @endforeach
        </table>
    </body>

    </html>