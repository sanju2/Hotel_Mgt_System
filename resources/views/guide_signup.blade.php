<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  @extends('layouts.head')
  @section('title' , "Guide Create Accout Page")

  <style>
    form {
      background-color: gray;
      margin: 10%;
      max-width: 670px;
      height: auto;
    }

    input:required:invalid,
    input:focus:invalid {
      border: 1px solid red;
    }

    input:required:valid {
      border: 1px solid green;
    }

    .warning {
      color: red;
      font-weight: bold;
    }
  </style>
  <script>
    $(document).ready(function() {
      if ($('#id').val() === "") {
        $('#warning1').html("The name field is required.")
      }
    })
  </script>
</head>

<body>
  <!-- Navigation bar -->
  @extends('layouts.navi')
  @foreach ($errors->all() as $error)

  <div class="alert alert-denger" role="alert">
    {{ $error }}

  </div>

  @endforeach

  <form class="form-horizontal" role="form" action="/greg" method="post" enctype="multipart/form-data">
    <div class="panel panel-default">
      <div class="panel-heading">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <h1>Guide Register Here</h1>
        <h3 class="text-center text-warning">{{ Session::get('message')}}</h3>
      </div>
      <div class="panel-body">

        <div class="form-group has-feedback" id="divName">
          <label class="control-label col-sm-3" for="id">First Name: </label>
          <div class="col-sm-9">
            <input type="text" name="fname" class="form-control" id="id" required>
            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
            <!--<div class="form-group">{{ $errors->first('fname') }}</div>-->
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9 warning" id="warning1">

          </div>
        </div>

        <div class="form-group has-feedback" id="divName">
          <label class="control-label col-sm-3" for="id">Last Name: </label>
          <div class="col-sm-9">
            <input type="text" name="lname" class="form-control" id="id" required>
            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
            <!--<div class="form-group">{{ $errors->first('lname') }}</div>-->
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9 warning" id="warning1">

          </div>
        </div>

        <div class="form-group has-feedback" id="divName">
          <label class="control-label col-sm-3" for="id">Date of Birth: </label>
          <div class="col-sm-9">
            <input type="date" name="dob" class="form-control" id="id" required>
            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9 warning" id="warning1">

          </div>
        </div>

        <div class="form-group has-feedback" id="divName">
          <label class="control-label col-sm-3" for="id">Gender: </label>
          <div class="col-sm-9">
            <select class="form-control" name="gender" id="id" required>
              <option>Male</option>
              <option>Female</option>
            </select>
            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9 warning" id="warning2">

          </div>
        </div>

        <div class="form-group has-feedback" id="divName">
          <label class="control-label col-sm-3" for="id">Qualifications: </label>
          <div class="col-sm-9">
            <textarea class="form-control" name="qualifi" rows="3" id="id" required></textarea>
            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9 warning" id="warning2">

          </div>
        </div>

        <div class="form-group has-feedback" id="divName">
          <label class="control-label col-sm-3" for="id">NIC: </label>
          <div class="col-sm-9">
            <input type="text" name="nic" class="form-control" id="id" required>
            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9 warning" id="warning2">

          </div>
        </div>

        <div class="form-group has-feedback" id="divName">
          <label class="control-label col-sm-3" for="id">Mobile No: </label>
          <div class="col-sm-9">
            <input type="text" name="mobileno" class="form-control" id="id" required>
            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9 warning" id="warning2">

          </div>
        </div>

        <div class="form-group has-feedback" id="divEmail">
          <label class="control-label col-sm-3" for="email">Email: </label>
          <div class="col-sm-9">
            <input type="email" name="email" class="form-control" id="email" required>
            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9 warning" id="warning2">

          </div>
        </div>

        <div class="form-group has-feedback" id="divName">
          <label class="control-label col-sm-3" for="id">User Name: </label>
          <div class="col-sm-9">
            <input type="text" name="username" class="form-control" id="id" required>
            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9 warning" id="warning2">

          </div>
        </div>

        <div class="form-group" id="divPassword">
          <label class="control-label col-sm-3" for="pwd">Password: </label>
          <div class="col-sm-9">
            <input type="password" name="password" class="form-control" id="pwd" required>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9 warning" id="warning3">

          </div>
        </div>

        <div class="form-group" id="divRePassPassword">
          <label class="control-label col-sm-3" for="email">Confirm Password: </label>
          <div class="col-sm-9">
            <input type="password" name="conpassword" class="form-control" id="repwd" required>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9 warning" id="warning4">

          </div>
        </div>

        <div class="form-group has-feedback" id="divName">
          <label class="control-label col-sm-3" for="id">Upload a pic: </label>
          <div class="col-sm-9">
            <input type="file" name="image" class="form-control" id="id" required>
            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
          </div>
        </div>



        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" class="btn btn-primary" value="Register" name="register"><span class="glyphicon glyphicon-user"></span> Register</button>
          </div>
        </div>
      </div>
    </div>
  </form>



</body>

</html>