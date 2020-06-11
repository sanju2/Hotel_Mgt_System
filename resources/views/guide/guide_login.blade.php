<!DOCTYPE html>
<html>

<head>
    @extends('layouts.head')
    @section('title' , "Guide Login Page")

    <style>
        body {
            background-image: url("{{asset('images/guide_login.jpg')}}");
            background-size: cover;
            height: 100%;
        }
    </style>
</head>

<body>
    <!-- Navigation bar -->
    @extends('layouts.navi')
    <br />
    <br />
    <br />
    <br />
    <br />
    <div class="container box">
        <h3 align="center">Guide Login Here</h3><br />
        <h3 class="text-center text-danger">{{ Session::get('message')}}</h3>
        @foreach ($errors->all() as $error)

        <div class="alert alert-denger" role="alert">
            {{ $error }}

        </div>

        @endforeach

        <form method="post" action="{{ URL::to('/glog')}}">

            <div class="form-group">
                <label>Enter UserName</label>
                <input type="text" name="username" class="form-control" />
            </div>
            <div class="form-group">
                <label>Enter Password</label>
                <input type="password" name="password" class="form-control" />
            </div>
            <input type="hidden" name="_token" value="{{csrf_token()}}" />
            <div class="form-group">
                <input type="submit" name="login" class="btn btn-success" value="Login" />
                <a href='/greg'> <input type="button" name="register" class="btn btn-warning" value="Register Now" /></a><br /><br />
                @foreach ($users as $user)
                <tr>
                    <td><a href='editt/{{ $user->id }}'> <input type="button" name="forgetpass" class="btn btn-dark" value="Forget Password" /></a></td>
                </tr>
                @endforeach


            </div>
        </form>
    </div>
</body>

</html>