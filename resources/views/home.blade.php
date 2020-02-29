@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                 <div class="card-header">User Dashboard</div> 

                 <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as <strong> User </strong>!<br />

                    <a href='/book'> <input type="button" name="register" class="btn btn-warning" value="Book a Tour"/></a>
                </div> 
            </div>
        </div>
    </div>
</div>


@endsection


