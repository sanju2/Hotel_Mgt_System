<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1>Add Food Items</h1>
            <br>
           
        </div>
    </div>

<div class="container">
    <div class="jumbotron">
    <form action="{{route('saveItem')}}" method="POST" enctype="multipart/form-data">
         {{ csrf_field() }}
         <label>Categories</label>
         <select name="cat_id" id="cat_id" class="form-control">
            <option value="">Please select a category</option>
            @foreach(App\cats::all() as $cData)
            <option value="{{$cData->id}}">{{$cData->cat_name}}</option>
            @endforeach


         </select>
         <br>
            <div class="form-group">
                <label>Food name</label>
                <input type="text" name="itemname" class="form-control" placeholder="Enter food name">
            </div>

            <div class="form-group">
                    <label>Price</label>
                    <input type="text" name="price" class="form-control" placeholder="Enter price">
                </div>

                <div class="form-group">
                        <label>Calorie</label>
                        <input type="text" name="calorie" class="form-control" placeholder="Enter calorie amount">
                </div>


            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input">
                    <label class="custom-file-label">Choose file</label>
                </div>
            </div>


            <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" class="form-control" placeholder="Enter description ">
            </div>


            <br>
            <br>
            <button type="submit" name="submit" class="btn-btn-primary">Save Data</button>
        </form>
    </div>









</body>
</html>