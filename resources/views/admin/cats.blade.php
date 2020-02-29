
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<table style="width:100%">
    <tr >
  <td colspan="4" ><b>Total:</b> {{App\cats::count()}}</td>
    </tr>
    <tr style="border-bottom:1px solid #ccc;">
      <th style="padding:10px">Category Name</th>
  
      <th>Update</th>
      <th>Delete</th>
    </tr>
  @foreach($data as $product)
    <tr  style="height:50px">
      <td style="padding:10px">{{$product->cat_name}}</td>
  
      <td><a class="btn btn-sm btn-fill btn-primary"
        href="{{url('/admin/editProduct')}}/{{$product->id}}">Edit</td>
        
        <td><a class="btn btn-danger"
          href="{{url('/admin/editProduct')}}/{{$product->id}}">Delete</td>

    </tr>
  @endforeach
  </table>
  