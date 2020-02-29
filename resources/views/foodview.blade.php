<!DOCTYPE html>
<html lang="en">
<head>

    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="text-center">
            <br>
            <br>
            <h1>Retrieve,Update and Delete Food Categories and Food Items</h1>
            <br>
        </div>
        
            
          

       <br>
       <br>

       @if($message=Session::get('success'))
       <div class="alert alert-success">
           <p>{{$message}}</p>
       </div>
       @endif
                <table class="table table-dark">
                    <thead>
                    <tr>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th>Calorie Amount</th>
                    <th>Image</th> 
                    <th>Category</th>
                    <th>Item Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </tr>
                    </thead>


                    <tbody>
                       
                    @foreach($items as $item)
                    <tr>
                            <td>{{$item->itemname}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->calorie}}</td>
                            <td><img src="{{asset('uploads/item/' .$item->image)}}" width="100px" height="100px"></td>
                            <td>{{$item->cat_id}}</td>
                            <td>{{$item->description}}</td>
                            <td><a href="/editimage/{{$item->id}}" class="btn btn-success"> Edit</a></td>
                            <td>
                            <td><a href="/food/delete/{{$item->id}}" class="btn btn-danger">Delete</a></td>
                            </td>                
                    </tr>
                        @endforeach
                        
                  
                   
                   
                   </tbody>
                    
                </table>
    </div>

    <script>
     $(document).ready(function(){

        $('.delete_form').on('submit',function(){
         if(confirm("Are you sure you want to delete it?")){
            return true;
         }else{
             return false;
         }

        });

     });


        </script>
         
</body>
</html>