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
                
         <div class="jumbotron">
             <h3>News Section</h3>
             <br>
             <br>
                <table class="table table-dark">
                 
                    
                      @foreach($news as $news)
                     
                        <tr>
                    
                        <td>{{$news->Description}}</td>
                        
                     
                        </tr>
                        @endforeach
                    
                      </table>

         </div>
        </div>


    
</body>
</html>