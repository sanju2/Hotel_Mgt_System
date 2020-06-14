<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel : Add leave</title>

</head>

<body>
    @extends('layouts.app10')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Leave</div>

                    <div class="card-body">






                        <br />
                        <br />
                        <form method="post" action="/addleave">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Enter Your Register No</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-address-card"></i>
                                            </div>
                                        </div>
                                        <input id="ID" name="ID" onkeypress="return tabE(this,event)" placeholder="E001" type="text" class="form-control" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-4 col-form-label">Name</label>
                                <div class="col-8">
                                    <input id="name" name="name" onkeypress="return tabE(this,event)" placeholder="Ranil Ramanayaka" type="text" class="form-control" required="required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="today" class="col-4 col-form-label">Requesting Date</label>
                                <div class="col-8">
                                    <input id="today" name="today" onkeypress="return tabE(this,event)" placeholder="2002-10-02" type="text" required="required" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="text1" class="col-4 col-form-label">Leaving Date</label>
                                <div class="col-8">
                                    <input id="Date" name="Date" onkeypress="return tabE(this,event)" placeholder="2002-10-10" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="text2" class="col-4 col-form-label">No Of Days</label>
                                <div class="col-8">
                                    <input id="#days" name="#days" onkeypress="return tabE(this,event)" placeholder="2" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="leavetype" class="col-4 col-form-label">Leave Type</label>
                                <div class="col-8">
                                    <select id="leavetype" onkeypress="return tabE(this,event)" name="leavetype" class="custom-select">
                                        <option value="Annual">Annual Leave</option>
                                        <option value="Casual">Casual Leave</option>
                                        <option value="Medical">Medical Leave</option>
                                        <option value="Nopay">Nopay</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>




                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
</body>

</html>