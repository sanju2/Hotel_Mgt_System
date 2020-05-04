<!DOCTYPE html>
<html>

<head>
    @extends('layouts.head')
    @section('title' , "Employee Page")
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <style>
        #result {
            position: absolute;
            width: 100%;
            max-width: 870px;
            cursor: pointer;
            overflow-y: auto;
            max-height: 400px;
            box-sizing: border-box;
            z-index: 1001;
        }

        .link-class:hover {
            background-color: #f1f1f1;
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
    <div class="container" style="width:900px;">
        <h3 align="center">Our Staff Members Details Search</h3>
        <br /><br />
        <div align="center">
            <input type="text" name="search" id="search" placeholder="Search Employee Details" class="form-control" />
        </div>
        <ul class="list-group" id="result"></ul>
        <br />
    </div>
    <center>
        <h3> Staff-Members </h3>
    </center>
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="img/um.png" alt="Sudharaka" style="width:50%">
                <div class="container">
                    <h2>Mr.Tharindu Jayasignha</h2>
                    <p class="title">CEO & Founder</p>
                    <p>CEO @ Founder of the Green Mount Hotel</p>
                    <p>tharindu@gmail.com</p>
                    <p><button class="btn btn-primary">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="img/um.png" alt="Asitha" style="width:50%">
                <div class="container">
                    <h2>Mr.Lasantha Sanjeewa</h2>
                    <p class="title">Financial Manager</p>
                    <p>Financial Manager of the Green Mount Hotel</p>
                    <p>lsanjeewa947@gmail.com</p>
                    <p><button class="btn btn-primary">Contact</button></p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="img/uf.jpg" alt="Vishal" style="width:50%">
                <div class="container">
                    <h2>Mrs.Navodya Sathsarani</h2>
                    <p class="title">HR Manager</p>
                    <p>HR Manager of the Green Mount Hotel</p>
                    <p>navodyasath@gmail.com</p>
                    <p><button class="btn btn-primary">Contact</button></p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="img/uf.jpg" alt="Vishal" style="width:50%">
                <div class="container">
                    <h2>Mrs.Pavithra Piyumi</h2>
                    <p class="title">Main Chef</p>
                    <p>Main Chef of Green Mount Hotel</p>
                    <p>pavithpiyumi@gmail.com</p>
                    <p><button class="btn btn-primary">Contact</button></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    $(document).ready(function() {
        $.ajaxSetup({
            cache: false
        });
        $('#search').keyup(function() {
            $('#result').html('');
            $('#state').val('');
            var searchField = $('#search').val();
            var expression = new RegExp(searchField, "i");
            $.getJSON('data.json', function(data) {
                $.each(data, function(key, value) {
                    if (value.name.search(expression) != -1 || value.location.search(expression) != -1) {
                        $('#result').append('<li class="list-group-item link-class"><img src="' + value.image + '" height="40" width="40" class="img-thumbnail" /> ' + value.name + ' | <span class="text-muted">' + value.location + '</span></li>');
                    }
                });
            });
        });

        $('#result').on('click', 'li', function() {
            var click_text = $(this).text().split('|');
            $('#search').val($.trim(click_text[0]));
            $("#result").html('');
        });
    });
</script>