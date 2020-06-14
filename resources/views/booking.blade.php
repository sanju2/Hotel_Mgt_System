<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @extends('layouts.app4')
    @extends('layouts.head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        * {
            font-family: 'Raleway', sans-serif;
        }

        body {
            background: rgb(162, 45, 238);
            background: linear-gradient(174deg, rgba(162, 45, 238, 1) 0%, rgba(91, 112, 191, 1) 100%);
            color: #786fa4;
            overflow-x: hidden;
            font-size: 14px;
        }

        .h-100vh {
            height: 100vh !important;
        }

        .card {
            margin: 0 auto;
            max-width: 700px;
            border: none;
            -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14),
                0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14),
                0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);

        }

        @media only screen and (max-width: 767px) {
            body {
                padding-top: 20px;
            }

            .card {
                width: 100%;
            }
        }

        input[type="checkbox"] {
            display: none;
        }

        .custom-control-input:checked~.custom-control-label::before {
            color: #FDFFFC !important;
            border-color: #26A598 !important;
            background-color: #26A598 !important;
        }

        .text-center {
            color: #FDFFFC !important;
            background-color: #52177A !important;
        }

        .btn-primary {
            color: #FDFFFC;
            background-color: #8D27D1;
            border-color: #8D27D1;
        }

        .btn-primary:hover {
            background-color: #a22dee;
            border-color: #a22dee;
        }

        .card-header.display-4 {
            font-weight: bold;
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
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>

    </nav>
    <br />
    <br />

    <div class="container h-100vh">
        <div class="row row h-100 align-items-center justify-content-centerr">
            <div class="col align-self-cente ">
                <div class="card">
                    <div class="card-header text-center display-4">
                        Booking Your Tour
                        <h3 class="text-center text-success">{{ Session::get('message')}}</h3>
                    </div>
                    <div class="card-body">
                        <form action="/books" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="firstName">Name</label>
                                    <input type="text" class="form-control" name="name" id="firstName" placeholder="Name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="phonenumber">Phone Number</label>
                                    <input type="text" class="form-control" name="phone" id="phonenumber" placeholder="Phone Number">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="phonenumber">Email Address</label>
                                    <input type="email" class="form-control" name="email" id="phonenumber" placeholder="Email">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="inputState">place</label>
                                    <select id="yeardropdown" name="place" class="form-control">
                                        <option selected>Galle</option>
                                        <option selected>Anuradhapura</option>
                                        <option selected>Sigiriya</option>
                                        <option selected>Badulla</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Sername">Dates</label>
                                    <input type="text" name="dates" class="form-control" id="Sername" placeholder="Dates">
                                </div>

                            </div>
                            <button type="submit" name="book" action="/pay" class="btn btn-primary btn-lg btn-block">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
