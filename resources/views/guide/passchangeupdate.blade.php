<!DOCTYPE html>
<html>

<head>
    @extends('layouts.head')
    @section('title' , "Guide password reset Page")

    <style type="text/css">
        html {
    			background-size: cover;
    			height: 100%;
    		}
    </style>
</head>

<body>
  <!-- Navigation bar -->
  @extends('layouts.navi')
<br />
<br />
<br />
    <br />
    <br />
    <br />
    <br />
    <div class="container box">
<form action = "/edit/<?php echo $users[0]->id; ?>" method = "post">
<h3 class="text-center text-danger">{{ Session::get('message')}}</h3>
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table>
<tr>
<td>New Password</td>
<td>
<input type = 'text'  class="form-control" name = 'password'/> </td>
</tr>
<tr>
<tr>
<td colspan = '2'>
<input type = 'submit' class="btn btn-warning" value = "Update password" />
</td>
</tr>
</table>
</form>
</div>
</body>
</html>