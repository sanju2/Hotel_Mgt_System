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
             <h3>Food orders</h3>
             <br>
             <br>
                <table class="table table-dark">
                 

                    <th>Name</th>
                    <th>Address</th>
                    <th>Food orders</th>
                    <th>Phone Number</th>
                    
                      @foreach($foodorder as $foodorder)
                     
                        <tr>
                    
                        <td>Navodya Sathsarani</td>
                        <td>kurunegala</td>
                        <td>pancake 1,Divine cake 1</td>

                        <td>

                        @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4 style="margin-bottom: 0;"><i class="icon fa fa-ban"></i> {{Session('success')}}</h4>
                </div>
            @endif

            <form action="{{ url('foodorders') }}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    
                    <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Mobile number">
                </div>

                <td>
                <button type="submit" class="btn btn-primary">Send SMS</button>
                </td>
            </form>
                        
            
                        
                        </td>
                        </tr>
                        
                        @endforeach
                    
                      </table>

         </div>
        </div>


    
</body>
</html>