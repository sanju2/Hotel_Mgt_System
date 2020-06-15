@extends('layouts.app12')
@section('content')
<!DOCTPE html>
    <html>

    <head>
        <title>GreenMount : Customer Action</title>

    </head>

    <body>
        <nav>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
            </ul>
        </nav>

        <center>
            <h2> Customer Action Page</h2>
        </center>
        <center>
            <h3 class="text-center text-success">{{ Session::get('message')}}</h3>
        </center>
        <br />
        <table class="table table-dark">
            <tr>
                <td scope="col">ID</td>
                <td scope="col">Name</td>
                <td scope="col">Email</td>
                <td scope="col">Action</td>
            </tr>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><a href="delete2/{{ $user->id }}" class="btn btn-primary" role="button">Deactivate</a></td>
            </tr>
            @endforeach
        </table>
    </body>

    </html>
    @endsection