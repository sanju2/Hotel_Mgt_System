<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<div, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
        <form action="/editimage/{{$items->id}}" method="post" enctype="multipart/form-data">
             {{ csrf_field() }}
             {{-- {{methos_field('PUT')}} --}}
            {{-- <input type="hidden" name="itemname" id="itemname" value="{{$id->itemname}}"> --}}

        



            <div class="form-group">
                    <label>Price</label>
                <input type="text" name="price" class="form-control" value="{{$items->price}}" placeholder="Enter price">
                </div>



                <div class="form-group">
                        <label>Calorie</label>
                    <input type="text" name="calorie" class="form-control" value="{{$items->calorie}}" placeholder="Enter calorie amount">
                    </div>



                    <label>Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" value="{{$items->image}}">
                        <label class="custom-file-label">Choose file</label>
                        </div>   
                    </div>
                        
                        
                        <div class="form-group">
                            <label>Description</label>
                        <input type="text" name="description" class="form-control" value="{{$items->description}}" placeholder="Enter description">
                        </div>
                    </div> 
                </div> 
                   
                    <br><br>

                    <button type="submit" name="submit" class="btn btn-primary btn-lg">Update data</button>

            </form>
</body>
</html>