<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>guide account update page</title>
</head>

<body background="../img/feedback.jpg">
    <div class="container">
        <div class="jambotron"></div>
        <br>
        <h1>You can update your profile</h1>
        <h3 class="text-center text-warning">{{ Session::get('message')}}</h3>
        <br>
        @foreach ($errors->all() as $error)

        <div class="alert alert-denger" role="alert">
            {{ $error }}

        </div>

        @endforeach
        <form action="/updateimage/{{ $guides->id }}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PUT')}}

            <input type="hidden" name="id" id="id" value="{{ $guides->id }}">

            <div class="form-group">
                <label><strong>First Name:</strong></label>
                <input type="text" name="fname" class="form-control" placeholder="Enter Your First Name">
            </div>

            <div class="form-group">
                <label><strong>Last Name:</strong></label>
                <input type="text" name="lname" class="form-control" placeholder="Enter Your Last Name">
            </div>

            <div class="form-group">
                <label><strong>Date Of Birth:</strong></label>
                <input type="date" name="dob" class="form-control" placeholder="Enter Your Birthday">
            </div>

            <div class="form-group">
                <label><strong>Gender:</strong></label>
                <select class="form-control" name="gender">
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>

            <div class="form-group">
                <label><strong>Your Qualifications:</strong></label>
                <input type="textarea" name="guidequalifications" class="form-control" placeholder="Enter Your Qualifications">
            </div>

            <div class="form-group">
                <label><strong>NIC No:</strong></label>
                <input type="text" name="nic" class="form-control" placeholder="Enter Your NIC Number">
            </div>
            
            <div class="form-group">
                <label><strong>Mobile No:</strong></label>
                <input type="text" name="mobileno" class="form-control" placeholder="Enter Your Mobile No">
            </div>
            
            <div class="form-group">
                <label><strong>Email:</strong></label>
                <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
            </div>

            <div class="form-group">
                <label><strong>Username:</strong></label>
                <input type="text" name="username" class="form-control" placeholder="Enter Your Username">
            </div>

            <div class="form-group">
                <label><strong>Password:</strong></label>
                <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
            </div>

            <div class="form-group">
                <label><strong>Confirm Password:</strong></label>
                <input type="password" name="conpassword" class="form-control" placeholder="Enter Re enter your password">
            </div>

            <div class="form-group">
                <lable><strong>Upload Your Photos: </strong> </lable> <br> <br>
                <input type="file" name="image" class="form-control">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Update Data </button>
        </form>
    </div>
</body>

</html>