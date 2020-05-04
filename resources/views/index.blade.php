<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--header inclue-->

<head>
    @extends('layouts.head')
    @section('title' , "Home Page")

    <!-- sinidu parts-->
    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" media="all" />
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" media="all" />
    <link href="{{ URL::asset('css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/easy-responsive-tabs.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/flexslider.css') }}" rel="stylesheet" media="screen" property="" />
    <link href="{{ URL::asset('css/chocolat.css') }}" rel="stylesheet" media="screen" />
    <link href="{{ URL::asset('css/jquery-ui.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/swipebox.css') }}" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Federo&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />

    <script src="{{ URL::asset('js/modernizr-2.6.2.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ URL::asset('js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ URL::asset('js/jquery-ui.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap-3.1.1.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.swipebox.min.js') }}"></script>
    <script src="{{ URL::asset('js/move-top.js') }}"></script>
    <script src="{{ URL::asset('js/easing.js') }}"></script>
    <script src="{{ URL::asset('js/responsiveslides.min.js') }}"></script>
    <script src="{{ URL::asset('js/easy-responsive-tabs.js') }}"></script>
    <script defer src="{{ URL::asset('js/jquery.flexslider.js') }}"></script>

    <script>
        jQuery(function($) {
            $(".swipebox").swipebox();
        });
    </script>

    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();

                $('html, body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>

    <script>
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",

                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>

    <script>
        $(function() {
            $("#slider4").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",

                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },

                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default',
                width: 'auto',
                fit: true,
                closed: 'accordion',

                activate: function(event) {
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });

            $('#verticalTab').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });
    </script>

    <script>
        $(function() {
            $("#datepicker, #datepicker1, #datepicker2, #datepicker3").datepicker();
        });
    </script>

    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <style>
        /* Features Section */


        #box1,
        #box2,
        #box3,
        #box4,
        #box5 {
            height: 100vh;
            text-align: center;
            margin: auto max-width: none;
            background-size: cover;
            vertical-align: middle;
        }

        #box1 {
            background-image: url(img/box1.jpg);
            transition: 5s;
            overflow: hidden;

        }

        .box1text {
            color: #fff;
            font-size: 150%;
            font-weight: 600;
            position: absolute;
            background: rgba(0, 0, 0, 0.5);
            width: 100%;
            height: 100%;
            vertical-align: middle;
            transition: 5s;
            left: -100%;
            overflow: hidden;

        }

        .box1text h1 {
            font-size: 170%;
            margin: 0;
            padding: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
            width: 100%;
        }

        .box1text h5 {
            font-size: 100%;
            margin: 0;
            padding: 0;
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
            text-transform: lowercase;
            font-family: agency fb;
            width: 100%;
        }

        #box1:hover {
            transform: scale(1.2);
        }

        #box1:hover .box1text {
            left: 0%;
        }

        /* end box1 */
    </style>

</head>

<body>
    <!-- Navigation bar -->
    @extends('layouts.navi')

    <div class="blockx">
        <div id="box1">
            <div class="box1text">
                <h1>No.1 Hotel in Srilanka</h1>
                <h5>Welcome to Our World</h5>
            </div>
        </div>
    </div>
    <!--sign up section-->



    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
    </header>

    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5">
                        <img class="img-fluid rounded-circle" src="{{asset('img/wifi.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Guide Login here </h2>
                        <a href='/glog'> <input type="button" class="btn btn-danger" value="Guide Login"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--room reservation section-->
    <div class="w3ls_banner_bottom_grids">
        <ul class="cbp-ig-grid">
            <li>
                <div class="w3_grid_effect">
                    <span class="cbp-ig-icon w3_road"></span>
                    <h4 class="cbp-ig-title">Master Bedrooms</h4>
                    <span class="cbp-ig-category">Green Mount</span>
                </div>
            </li>

            <li>
                <div class="w3_grid_effect">
                    <span class="cbp-ig-icon w3_cube"></span>
                    <h4 class="cbp-ig-title">Mount View Balcony</h4>
                    <span class="cbp-ig-category">Green Mount</span>
                </div>
            </li>

            <li>
                <div class="w3_grid_effect">
                    <span class="cbp-ig-icon w3_users"></span>
                    <h4 class="cbp-ig-title">Large Cafe</h4>
                    <span class="cbp-ig-category">Green Mount</span>
                </div>
            </li>

            <li>
                <div class="w3_grid_effect">
                    <span class="cbp-ig-icon w3_ticket"></span>
                    <h4 class="cbp-ig-title">Wifi Coverage</h4>
                    <span class="cbp-ig-category">Green Mount</span>
                </div>
            </li>
        </ul>
    </div>
    </div>
    </div>


    <!-- tour booking section-->
    <div class="plans-section" id="rooms">
        <div class="container">
            <h3 class="title-w3-agileits title-black-wthree">Book Your Tour</h3>

            <div class="priceing-table-main">
                <div class="col-sm-4 price-grid">
                    <div class="price-block agile">
                        <div class="price-gd-top">
                            <img src="{{ asset('images/t1.jpg') }}" alt="single" class="img-responsive" />
                            <h4>One Day Tour</h4>
                        </div>

                        <div class="price-gd-bottom">
                            <div class="price-list">
                                <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                </ul>
                            </div>

                            <div class="price-selet">
                                <h3><span>LKR</span>2000</h3>
                                <a href="/home">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 price-grid">
                    <div class="price-block agile">
                        <div class="price-gd-top">
                            <img src="{{ asset('images/t2.jpg') }}" alt="double" class="img-responsive" />
                            <h4>3 days Tour</h4>
                        </div>

                        <div class="price-gd-bottom">
                            <div class="price-list">
                                <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                </ul>
                            </div>

                            <div class="price-selet">
                                <h3><span>LKR</span>4000</h3>
                                <a href="/home">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 price-grid">
                    <div class="price-block agile">
                        <div class="price-gd-top">
                            <img src="{{ asset('images/t3.jpg') }}" alt="family" class="img-responsive" />
                            <h4>More Than 3 Days</h4>
                        </div>

                        <div class="price-gd-bottom">
                            <div class="price-list">
                                <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                </ul>
                            </div>

                            <div class="price-selet">
                                <h3><span>LKR</span>7500</h3>
                                <a href="/home">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="book">
                    <a href="/home" class="myButton">BOOK NOW!</a>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>



    <div class="plans-section" id="rooms">
        <div class="container">
            <h3 class="title-w3-agileits title-black-wthree">Accomodation</h3>

            <div class="priceing-table-main">
                <div class="col-sm-4 price-grid">
                    <div class="price-block agile">
                        <div class="price-gd-top">
                            <img src="{{ asset('images/r1.jpg') }}" alt="single" class="img-responsive" />
                            <h4>Single Bedroom</h4>
                        </div>

                        <div class="price-gd-bottom">
                            <div class="price-list">
                                <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                </ul>
                            </div>

                            <div class="price-selet">
                                <h3><span>LKR</span>2000</h3>
                                <a href="{{ url('/online_reservation') }}">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 price-grid">
                    <div class="price-block agile">
                        <div class="price-gd-top">
                            <img src="{{ asset('images/r2.jpg') }}" alt="double" class="img-responsive" />
                            <h4>Double Bedroom</h4>
                        </div>

                        <div class="price-gd-bottom">
                            <div class="price-list">
                                <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                </ul>
                            </div>

                            <div class="price-selet">
                                <h3><span>LKR</span>4000</h3>
                                <a href="{{ url('/online_reservation') }}">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 price-grid">
                    <div class="price-block agile">
                        <div class="price-gd-top">
                            <img src="{{ asset('images/r3.jpg') }}" alt="family" class="img-responsive" />
                            <h4>Family Bedroom</h4>
                        </div>

                        <div class="price-gd-bottom">
                            <div class="price-list">
                                <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                </ul>
                            </div>

                            <div class="price-selet">
                                <h3><span>LKR</span>7500</h3>
                                <a href="{{ url('/online_reservation') }}">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="book">
                    <a href="{{ url('/online_reservation') }}" class="myButton">BOOK NOW!</a>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <!--map section-->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.0962259612743!2d81.05482181409569!3d6.997948619408864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae4620d9750137b%3A0x428e77b3738fe94f!2sHotel%20Green%20Mount!5e0!3m2!1sen!2slk!4v1572466908453!5m2!1sen!2slk" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <!--footer-->
    @extends('layouts.footer')


    <!--js cdn-->
    @extends('layouts.js')

</body>

</html>