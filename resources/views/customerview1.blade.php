session_start();
$connect=mysqli_connect("localhost","root","","food");



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <br>
    <div class="container" style="width:700px;">
        <h3 align="center">Ordering food</h3><br>
    </div><br>

    <?php
  $query="select* from fooditems order by id ASC";
  $result=mysqli_query($connect,$query);

  if(mysqli_num_rows($result)>0){

while($row=mysqli_fetch_array($result)){

}

  }

?>



    
</body>
</html>