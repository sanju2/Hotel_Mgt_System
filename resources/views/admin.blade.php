@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in <strong> Admin </strong>!<br />
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">News</th>
      <th scope="col">Add Category</th>
      <th scope="col">View Category</th>
      <th scope="col">Add Food Item</th>
      <th scope="col">View Food Items</th>
      <th scope="col">Food Orders</th>
      <th scope="col">Mange a room</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td><a href='/news'> <input type="button" name="news" class="btn btn-warning" value="Add to news"/></a><br /><br /></td>
      <td> <a href='/addCategory'> <input type="button" name="category" class="btn btn-primary" value="Add Category"/></a><br /><br /></td>
      <td><a href='/cats'> <input type="button" name="category" class="btn btn-dark" value="View Categories"/></a><br /><br /></td>
      <td><a href='/food'> <input type="button" name="food" class="btn btn-success" value="Add Food items"/></a><br /><br /></td>
      <td><a href='/viewfood'> <input type="button" name="food" class="btn btn-danger" value="View Food Items"/></a><br /><br /></td>
      <td> <a href='/foodorders'> <input type="button" name="food" class="btn btn-dark" value="Food orders"/></a><br /><br /></td>
      <td> <a href='/room_management'> <input type="button" name="food" class="btn btn-warning" value="Mange a room"/></a><br /><br /></td>
    </tr>
  </tbody>
</table>
                    
                   
                    
                    
                    
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


