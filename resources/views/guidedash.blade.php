<!DOCTYPE html>
<html>

<head>
    @extends('layouts.head')
    @section('title' , "Guide Dashboard")

    <style type="text/css">
        .box {
            width: 600px;
            margin: 0 auto;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>
    <br />
    <div class="container box">
        <h3 align="center">Guide page</h3><br />

        @foreach ($users as $user)
        @endforeach

        <h5> {{ $user->first_name }} </h5><br/>
        <a href="/edit/{{ $user->id }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Update Profile Details</a>
        <a href="/deleteimage/{{ $user->id }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Close Your Account</a>

    </div>
</body>

</html>