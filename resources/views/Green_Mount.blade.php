<!DOCTYPE html>
<html lang="en">

<head>
    <title>GreenMount Hotel</title>

    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" media="all"/>
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" media="all"/>
    <link href="{{ URL::asset('css/font-awesome.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('css/easy-responsive-tabs.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('css/flexslider.css') }}" rel="stylesheet" media="screen" property=""/>
    <link href="{{ URL::asset('css/chocolat.css') }}" rel="stylesheet" media="screen"/>
    <link href="{{ URL::asset('css/jquery-ui.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('css/swipebox.css') }}" rel="stylesheet"/>

    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Federo&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>

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
        jQuery(function ($) {
            $(".swipebox").swipebox();
        });
    </script>

    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html, body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>

    <script>
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",

                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>

    <script>
        $(function () {
            $("#slider4").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",

                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },

                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default',
                width: 'auto',
                fit: true,
                closed: 'accordion',

                activate: function (event) {
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
        $(document).ready(function () {
            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });
    </script>

    <script>
        $(function () {
            $("#datepicker, #datepicker1, #datepicker2, #datepicker3").datepicker();
        });
    </script>

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
</head>

<body>

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





<div class="plans-section" id="rooms">
    <div class="container">
        <h3 class="title-w3-agileits title-black-wthree">Accomodation</h3>

        <div class="priceing-table-main">
            <div class="col-sm-4 price-grid">
                <div class="price-block agile">
                    <div class="price-gd-top">
                        <img src="{{ asset('images/r1.jpg') }}" alt="single" class="img-responsive"/>
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
                        <img src="{{ asset('images/r2.jpg') }}" alt="double" class="img-responsive"/>
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
                        <img src="{{ asset('images/r3.jpg') }}" alt="family" class="img-responsive"/>
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


</body>

</html>
