
<html>
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
        <header class="">
            <div class="tm-slider-header">
                <div class="tm-header-menu-container">
                    <div class="uk-container">
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
                                                                <form  class="uk-search  uk-width-large tm-search-area">
                                                                    <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
                                                                </form>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </li>
                                                <li class="tm-rotate">
                                                    <div class="tm-skew">

                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <nav>
                                            <ul class="topnav" id="myTopnav">
                                                <li><a>about</a></li>
                                                <li class="tm-nav-list-item2"><a>media</a></li>
                                                <li><a>events</a></li>
                                                <li class="tm-nav-list-item4"><a>shop</a></li>
                                                <li><a>give</a></li>
                                                <li style="position:relative;" class="icon responsive" onclick="funcMenu()">

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
                    </div>
                </div>
                <div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="min-height:700; max-height: 700; animation: push">

                    <ul class="uk-slideshow-items">
                        <li class="uk-overflow-hidden">
                            <img src="/img/header/slider-img.png" alt="#" uk-cover>
                            <div class="tm-welcome-slider uk-container">
                                <div>
                                    <span>Welcome to SevenOaks<br>website</span> which is run by the<br> friends of SevenOaks
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="/img/header/slider-img.png" alt="#" uk-cover>
                            <div class="tm-welcome-slider uk-container">
                                <div>
                                    <span>Welcome to SevenOaks<br>website</span> which is run by the<br> friends of SevenOaks.
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="/img/header/slider-img.png" alt="#" uk-cover>
                            <div class="tm-welcome-slider uk-container">
                                <div>
                                    <span>Welcome to SevenOaks<br>website</span> which is run by the<br> friends of SevenOaks..
                                </div>
                            </div>
                        </li>
                    </ul>

                    <a class="uk-position-center-left uk-position-small" style="background-color:#60605f;padding:20px 10px;margin-left:0px;" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" style="background-color:#60605f;padding:20px 10px;margin-right:0px;" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                </div>
            </div>


        </header>
        <main style="background-color: #f3eeea;padding:20px 0px;">
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
                                    <p><a>Quick & easy online giving<i style="padding-left:15px;" class="fas fa-arrow-circle-right"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-3">
                            <div class="uk-card tm-card3 uk-card-default uk-card-body">
                                <div class="tm-img-text-container3 uk-overlay uk-light uk-position-bottom">
                                    <h1>prayer</h1>
                                    <p><a>Submit your prayer request<i style="padding-left:15px;" class="fas fa-arrow-circle-right"></i></a></p>
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
                        <p style="margin:15px 0px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <div>
                            <a href="#" style="text-transform:uppercase;color:red;font-size:15px;text-decoration:none;">read more >></a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer >
            <div class="tm-footer-container uk-container" style="padding-top:20px;">
                <div class="uk-grid uk-flex-middle">
                    <div class="uk-width-1-3 tm-footer-container1">
                        <div style="margin-bottom:40px;"><h1>signup to newsletter</h1></div>
                        <div>
                            <a class="uk-button uk-button-default tm-popup-button" href="#modal" uk-toggle>subscribe</a>
                                <div id="modal" uk-modal>
                                    <div class="uk-modal-dialog tm-popup-container">
                                        <button style="width:25px;" class="uk-modal-close-default" type="button" uk-close></button>
                                        <div class="tm-popup-info-container">
                                            <p style="color:#4999af;text-transform:uppercase;font-size:20px;margin-bottom:20px;font-weight:bold;">Subscribe to our newsletters</p>
                                            <p style="color:grey; margin-bottom:5px;line-height:1.2;">Please enter your email adresse to receive all<br> news from our site</p>
                                            <input type="text" name="e-mail-area" value="" placeholder="example@gmail.com">
                                            <p>*Don't worry you'll not be spammed</p>
                                            <button type="button" name="button">subscribe</button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3 tm-footer-container2">
                        <div class="tm-service-times"><h1>service times</h1></div>
                        <div  class="tm-item2-footer-container2">Sundays at 9:30 & 11:30 AM</div>
                        <div class="tm-item3-footer-container2">Lorem ipsum sit dolar imset.</div>
                    </div>
                    <div class="uk-width-1-3 tm-footer-container3" >
                        <div class="tm-connect-us"><h1>connect with us</h1></div>
                        <div class="tm-icons-footer-container">
                            <a class="uk-icon-button tm-footer-icon-button1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="uk-icon-button tm-footer-icon-button2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="uk-icon-button tm-footer-icon-button3" href="#"><i class="fab fa-youtube"></i></a>
                            <a class="uk-icon-button tm-footer-icon-button4" href="#"><i class="fab fa-paypal"></i></a>
                            <a class="uk-icon-button tm-footer-icon-button5" href="#"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="tm-main-footer">
            <div class="uk-container" style="padding-top:1.1%;">&copy; Copyright 2017 SevenOaks. All rights reserved. Privacy Policy | Share This</div>
        </div>
        <div class="text-text">
        <div class="text">

        </div>
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
</html>
