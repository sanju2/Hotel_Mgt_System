<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
        <br>
        <br>
        <br>
 <div class="jumbotron">
    
 <form action="{{route('addnews')}}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
         <div class="form-group">
           <label for="news"><h3>Add Upcoming News Here..</h3></label>
           <br>
           <br>
           <br>
           <textarea class="form-control" type="Description" name="Description" rows="5" id="news" placeholder="Enter any upcoming news "></textarea>
           
         </div>
      
      
       <button type="submit" name="submit" class="btn btn-primary">Submit</button>
     </form>
</div>
<table class="table table-dark">
    <th>ID</th>
    <th>Description</th>


    @foreach($news as $news)
    <tr>
    <td>{{$news->id}}</td>
    <td>{{$news->Description}}
    
    <a href="/deletenews/{{$news->id}}" class="btn btn-warning">Delete</a>
    <a href="/updatenews/{{$news->id}}" class="btn btn-success">Update</a>
    
    </td>
    </tr>
    @endforeach

  </table>
</div>

</body>
</html>