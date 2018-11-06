<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="initial-scale=1,minimum-scale=1,maximum-scale=1,width=device-width">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="/fonts/fonts/fonts.css" />
    <link rel="stylesheet" type="text/css" href="/fonts/fonts/fonts.min.css" />
    <link rel="stylesheet" href="{{ config('app.source_uri').mix('style/ui.css') }}">
    <link rel="stylesheet" href="{{ config('app.source_uri').mix('style/media_queries.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">




    <title>HostingMaks</title>

</head>
<body>
    <div id="root">
        <header class="" style="background-color:grey;">
            <div class="tm-header-menu-container uk-container">
                <div class="uk-text-center uk-flex-middle" style="background-color:white;margin:0px;z-index:2;" uk-grid>
                    <div class="uk-width-auto" style="padding:0px;">
                        <div class="tm-logo-container">
                            <img src="img/header/logo.png" alt="#">
                        </div>
                    </div>
                    <div class="uk-width-expand" style="padding-left:0px;">
                        <div class="tm-menu-container">

                            <div class="tm-nav-section-container uk-width-auto">
                                <div class="tm-nav-container">
                                    <ul>
                                        <li>
                                            <a href="#">Calendar</a>
                                        </li>
                                        <li class="tm-item2">
                                            <a href="#">Blog</a>
                                        </li>
                                        <li>
                                            <a href="#">Contact us</a>
                                        </li>
                                        <li>

                                            <div class="uk-navbar-right">

                                                <div>
                                                    <a class="uk-navbar-toggle" style="color:white;height:15px;" uk-search-icon href="#"></a>
                                                    <div class="uk-drop" uk-drop="mode: click; pos: left; offset: 0">
                                                        <form  class="uk-search uk-search-navbar uk-width-1-1">
                                                            <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <nav>
                                    <ul class="topnav" id="myTopnav">
                                        <li><a>about</a></li>
                                        <li style="margin:0 50;"><a>media</a></li>
                                        <li><a>events</a></li>
                                        <li style="margin:0 50;"><a>shop</a></li>
                                        <li><a>give</a></li>
                                        <li style="position:relative;"class="icon responsive" onclick="funcMenu()">

                                                <a href="#offcanvas-slide" class="uk-button uk-button-default" uk-toggle><i class="fas fa-bars"></i></a>

                                                <div id="offcanvas-slide" uk-offcanvas>
                                                    <div class="uk-offcanvas-bar tm-responsive-menu">

                                                        <ul class="uk-nav uk-nav-default">
                                                            <li class="uk-active"><a href="#">About</a></li>
                                                            <li class="uk-active"><a href="#">Media</a></li>
                                                            <li class="uk-active"><a href="#">Events</a></li>
                                                            <li class="uk-active"><a href="#">Shop</a></li>
                                                            <li class="uk-active"><a href="#">Give</a></li>
                                                            <li class="uk-nav-divider"></li>
                                                            <li class="uk-active"><a href="#">Calendar</a></li>
                                                            <li class="uk-active"><a href="#">Blog</a></li>
                                                            <li class="uk-active"><a href="#">Contact us</a></li>
                                                            <li class="tm-search-icon-menu">
                                                                <div class="nav-overlay uk-navbar-right">
                                                                    <a class="uk-navbar-toggle tm-search-icon-menu" uk-search-icon uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
                                                                </div>
                                                                       <div class="nav-overlay uk-navbar-left uk-flex-1" hidden>

                                                                           <div class="uk-navbar-item uk-width-expand">
                                                                               <form class="uk-search uk-search-navbar uk-width-1-1">
                                                                                   <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
                                                                               </form>
                                                                           </div>

                                                                           <a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>

                                                                       </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tm-welcome-slider">
                    <span>Welcome to SevenOaks<br>website</span> which is run by the<br> friends of SevenOaks
                </div>
            </div>
            <div class="tm-slider-header">
                <div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="min-height: 300; max-height: 600; animation: push">

                    <ul class="uk-slideshow-items">
                        <li class="uk-overflow-hidden">
                            <img src="/img/header/slider-img.png" alt="#" uk-cover>
                        </li>
                        <li>
                            <img src="/img/header/slider-img.png" alt="#" uk-cover>
                        </li>
                        <li>
                            <img src="/img/header/slider-img.png" alt="#" uk-cover>
                        </li>
                    </ul>

                    <a class="uk-position-center-left uk-position-small" style="background-color:#60605f;padding:20 10;margin-left:0;" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" style="background-color:#60605f;padding:20 10;margin-right:0;" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                </div>
            </div>
        </header>
        <main style="background-color: #f3eeea;padding:20 0;">
            <section class="tm-content-container uk-container uk-animation-toggle">
                    <div class="uk-text-center" uk-grid>
                        <div class="uk-width-1-3">
                            <div class="uk-card tm-card1 uk-card-default uk-card-body">
                                <div class="tm-img-text-container1 uk-overlay uk-light uk-position-bottom">
                                    <h1>stories</h1>
                                    <p><a>Read stories of Seven Oaks<i style="padding-left:15px;"class="fas fa-arrow-circle-right"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-3">
                            <div class="uk-card tm-card2 uk-card-default uk-card-body">
                                <div class="tm-img-text-container2 uk-overlay uk-light uk-position-bottom">
                                    <h1>give online</h1>
                                    <p><a>Quick & easy online giving<i style="padding-left:15px;"class="fas fa-arrow-circle-right"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-3">
                            <div class="uk-card tm-card3 uk-card-default uk-card-body">
                                <div class="tm-img-text-container3 uk-overlay uk-light uk-position-bottom">
                                    <h1>prayer</h1>
                                    <p><a>Submit your prayer request<i style="padding-left:15px;"class="fas fa-arrow-circle-right"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="uk-grid">
                    <div class="uk-width-1-2 tm-events-container">
                        <div class="tm-title-content"><a href="#">upcoming events</a></div>
                        <ul>
                            <li style="border-top:1px solid grey;padding-top:15px;">
                                <div class="tm-calendar-container">
                                    <div class="tm-data-container">
                                        <div class="tm-data">
                                            <div>20</div>
                                            <div>july</div>
                                        </div>
                                        <div class="tm-date">
                                            <span class="tm-item1-date">family sunday</span><br>
                                            <span class="tm-item2-date">Sunday</span>
                                            <span class="tm-item3-date">9:30pm</span>
                                        </div>
                                    </div>
                                        <div class="tm-data-button">
                                            <button class="uk-button uk-button-primary">more</button>
                                        </div>

                                </div>
                            </li>
                            <li class="tm-data-container2">
                                <div class="tm-calendar-container">
                                    <div class="tm-data-container">
                                        <div class="tm-data">
                                            <div>20</div>
                                            <div>july</div>
                                        </div>
                                        <div class="tm-date">
                                            <span class="tm-item1-date">family sunday</span><br>
                                            <span class="tm-item2-date">Sunday</span>
                                            <span class="tm-item3-date">9:30pm</span>
                                        </div>
                                    </div>
                                        <div class="tm-data-button">
                                            <button class="uk-button uk-button-primary">more</button>
                                        </div>

                                </div>
                            </li>
                            <li>
                                <div class="tm-calendar-container">
                                    <div class="tm-data-container">
                                        <div class="tm-data">
                                            <div>20</div>
                                            <div>july</div>
                                        </div>
                                        <div class="tm-date">
                                            <span class="tm-item1-date">family sunday</span><br>
                                            <span class="tm-item2-date">Sunday</span>
                                            <span class="tm-item3-date">9:30pm</span>
                                        </div>
                                    </div>
                                        <div class="tm-data-button">
                                            <button class="uk-button uk-button-primary">more</button>
                                        </div>

                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tm-text-info-container uk-width-1-2">
                        <div class="tm-title-content"><a href="#">sevenoaks</a></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p style="margin:15 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <div>
                            <a href="#" style="text-transform:uppercase;color:red;font-size:15px;text-decoration:none;">read more >></a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer style="background-color:#525252;padding:20 0;border-bottom:1px solid grey;padding-top:20px;">
            <div class="tm-footer-container uk-container" style="padding-top:20px;">
                <div class="uk-grid uk-flex-middle">
                    <div class="uk-width-1-3 tm-footer-1-3">
                        <div style="margin-bottom:40px;"><h1>signup to newsletter</h1></div>
                        <div>
                            <a class="uk-button uk-button-default tm-popup-button" href="#modal" uk-toggle>subscribe</a>
                                <div id="modal" uk-modal>
                                    <div class="uk-modal-dialog tm-popup-container">
                                        <button class="" style="width:100%;text-align:right" type="button" uk-close></button>
                                        <div class="tm-popup-info-container">
                                            <p style="color:#4999af;text-transform:uppercase;font-size:20px;margin-bottom:20px;font-weight:bold;">Subscribe to our newsletters</p>
                                            <p style="color:grey; margin-bottom:5px;line-height:1.2;">Please enter your email adresse to receive all<br> news from our site</p>
                                            <input type="text" name="" value="" placeholder="example@gmail.com">
                                            <p>*Don't worry you'll not be spammed</p>
                                            <button type="button" name="button">subscribe</button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3 tm-footer-item2">
                        <div class="tm-service-times"><h1>service times</h1></div>
                        <div  class="tm-item2-footer" style="font-size:23px;color:white;">Sundays at 9:30 & 11:30 AM</div>
                        <div style="color:#b3b3b3;font-size:13px;text-align:left;padding-left:55px;">Lorem ipsum sit dolar imset.</div>
                    </div>
                    <div class="uk-width-1-3 tm-footer-1-3" >
                        <div style="margin-bottom:40px;padding-left:50px;"><h1>connect with us</h1></div>
                        <div class="tm-icons-footer-container">
                            <a class="uk-icon-button tm-footer-icon-button" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="uk-icon-button tm-footer-icon-button" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="uk-icon-button tm-footer-icon-button" href="#"><i class="fab fa-youtube"></i></a>
                            <a class="uk-icon-button tm-footer-icon-button" href="#"><i class="fab fa-paypal"></i></a>
                            <a class="uk-icon-button tm-footer-icon-button" href="#"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="tm-main-footer" style="height:50px;padding:20 0;background-color:#525252;color:white;">
            <div class="uk-container" style="padding-top:1.1%;">C Copyright 2017 SevenOaks. All rights reserved. Privacy Policy | Share This</div>
        </div>
        <div class="text">
            a
        </div>
    </div>
    <!-- <script type="text/javascript">
        function funcMenu() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            }
            else {
                x.className = "topnav";
            }
        }
    </script> -->
<script type="text/javascript" src="{{ config('app.source_uri').mix('js/home.js') }}"></script>
<script src="uikit/dist/js/uikit-icons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.20/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.20/js/uikit-icons.min.js"></script>
</body>
