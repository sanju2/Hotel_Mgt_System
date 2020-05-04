<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>all guides details </title>
</head>
<body background="../images/p1.jpg">

    <div class="container">
        <div class="jambotron">
        <br>
        <h1>Applyed Guides</h1>
        <br>
        <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Dob</th>
                <th scope="col">Gender</th>
                <th scope="col">Guide Qualifications</th>
                <th scope="col">NIC</th>
                <th scope="col">Mobile No</th>
                <th scope="col">Email</th>
                <th scope="col">Image</th>
                <th>EDIT</th>
                <th>DELETE</th>
                
                </tr>
            </thead>
            <tbody>
                @foreach( $guides as $guide )

            
                <tr>
                <th scope="row">{{ $guide->id }}</th>
                <td>{{ $guide->first_name }}</td>
                <td>{{ $guide->last_name }}</td>
                <td>{{ $guide->dob }}</td>
                <td>{{ $guide->gender }}</td>
                <td>{{ $guide->guidequalifications }}</td>
                <td>{{ $guide->nic }}</td>
                <td>{{ $guide->mobileno }}</td>
                <td>{{ $guide->email }}</td>


                <th><img src="{{ asset('uploads/guide/' . $guide->image) }}"width="200px;" heigth="200px;" alt="Image"></th>
                <th><a href="/edit/{{ $guide->id }}" class="btn btn-success">EDIT</a></th>

                <th><a href="/deleteimage/{{ $guide->id }}" class="btn btn-danger">DELETE</a></th>


                </tr>
                @endforeach
                
            </tbody>
            </table>
            <br>
           

        </div>
    </div>
</body>
</html>