<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>Green_Mount Hotel || Tour Type Management</title>

    <!--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>

    <link href="{{ URL::asset('css/admin.css') }}" rel="stylesheet"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>
<div class="container">
    <div class="navigation">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                </ul>
                    @endforeach
            </div>
        @endif

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                

                <ul class="nav navbar-nav" id="nav-topics">
                    <li><a href="{{ url('/tour_management') }}">Tours</a></li>
                    <li class="active"><a href="#">Tour Types</a></li>
                    <li><a href="{{ url('/tour_reservation_management') }}">Tour Reservations</a></li>
                    
                </ul>

                
            </div>
        </nav>
    </div>

    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="room_mngmnt">
                        <a href="{{ url('/tour_type_management') }}">Tour Type <b>Management</b></a>
                    </h2>
                </div>

                <div class="col-sm-3">
                    <div class="search-box">
                        <a href="#searchRoomTypeModal" class="search" data-toggle="modal">
                            <img src="{{ asset('images/search_bar.png') }}" alt="search_icon">
                        </a>
                    </div>
                </div>

                <div class="col-sm-3">
                    <a href="#addRoomTypeModal" class="btn btn-success" data-toggle="modal">
                        <i class="material-icons">&#xE147;</i>
                        <span>Add New Tour Type</span>
                    </a>
                </div>
            </div>
        </div>

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Type ID</th>
                <th>Name</th>
                <th>Base Price (LKR)</th>
                <th>Total Tour Count</th>
                <th>Available Tour Count</th>
                <th>Actions</th>
            </tr>
            </thead>

            <tbody>
                @foreach ($tour_types as $tour_type)
                    <tr>
                        <td>{{ $tour_type->id }}</td>
                        <td>{{ $tour_type->name }}</td>
                        <td>{{ $tour_type->base_price }}</td>
                        <td>{{ $tour_type->total }}</td>
                        <td>{{ $tour_type->available }}</td>

                        <td>
                            <a href="/view_type/{{ $tour_type->id }}" class="view">
                                <i class="material-icons" data-toggle="tooltip" title="View">&#xE417;</i>
                            </a>

                            <a href="/update_tour_type/{{ $tour_type->id }}" class="edit">
                                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                            </a>

                            <a class="delete" role="button" data-toggle="modal" data-target="#deleteRoomTypeModal"
                               data-id="{{ $tour_type->id }}" data-url="{{ url('tour_types', $tour_type->id) }}">
                                <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if (!isset($tour_type))
            <div class="alert alert-info" role="alert">
                No Records!
            </div>
        @endif

        <div class="clearfix"></div>
    </div>
</div>

<!-- Add Modal HTML -->
<div id="addRoomTypeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="/add_tour_type">
                {{ csrf_field() }}

                <div class="modal-header">
                    <h4 class="modal-title">Add New Tour Type</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label>Tour Type ID</label>
                        <input type="text" name="t_id" class="form-control" value="{{ old('t_id') }}">
                    </div>

                    <div class="form-group">
                        <label>Tour Type Name</label>
                        <input type="text" name="t_name" class="form-control" value="{{ old('t_name') }}">
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="desc">{{ old('desc') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Base Price (LKR)</label>
                        <input type="text" name="price" class="form-control" value="{{ old('price') }}">
                    </div>
                </div>

                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Add">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Search Modal HTML -->
<div id="searchRoomTypeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="/search_tour_type">
                {{ csrf_field() }}

                <div class="modal-header">
                    <h4 class="modal-title">Search Tour Type</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label>Tour Type ID</label>
                        <input type="text" name="t_id" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Tour Type Name</label>
                        <input type="text" name="t_name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Availability</label>

                        <div class="radio">
                            <label><input type="radio" name="available" value="1">Available</label>
                        </div>

                        <div class="radio">
                            <label><input type="radio" name="available" value="0">Not Available</label>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Search">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Modal HTML -->
<div id="deleteRoomTypeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="" id="deleteForm">
                {{ csrf_field() }}

                @if (isset($tour_type))
                    <input type="hidden" value="{{ $tour_type->id }}" name="id">
                @endif

                <div class="modal-header">
                    <h4 class="modal-title">Delete Tour Type</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>

                <div class="modal-body">
                    <p>Are you sure you want to delete this Record?</p>
                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                </div>

                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-danger" value="Delete">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        // For A Delete Record Popup
        $('.delete').click(function () {
            var id = $(this).attr('data-id');
            var url = $(this).attr('data-url');

            $("#deleteForm", 'input').val(id);
            $("#deleteForm").attr("action", url);
        });
    });
</script>
</body>

</html>
