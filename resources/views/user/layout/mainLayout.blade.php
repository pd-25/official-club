<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Officers Club sGTTP</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    @include('user.layout.partial.headdocument')
</head>

<body>

    <header id="main-header">
        <div id="top-head">
            <div class="container">
                <div class="row justify-content-between">

                    <div class="col-lg-6">
                        <div class="left-tophead">
                            <p class="hd-address">SgTPP. PO-Monigram, PS- Sagardighi, Murshidabad, PIN-742237. W.B</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="right-tophead">
                            <p><span class="hd-email"><a href="">info@officersclubsgtpp.com</a></span></p>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        <div id="snd-head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo">
                            <img src="{{ asset('asset/images/logo.png') }}" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-9 header-menu">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNav"
                                data-target="#navbarNav" data-toggle="collapse" type="button" class="navbar-toggler">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="navbarNav" class="collapse navbar-collapse">
                                <ul class="nav navbar-nav ml-auto mt-3">
                                    <li class="nav-item active">
                                        <a href="{{route('user.home')}}" class="nav-link">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('user.about-us')}}" class="nav-link">About Us</a>
                                    </li>
                                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
                                            href="#">Services</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="nav-link" href="#">Services 1</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Services 2</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Services 3</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('user.events')}}">Events</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('user.gallery')}}">Gallery</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('user.contactUs')}}">Contact Us</a></li>
                                    <li class="nav-item"><a class="nav-link last-menu" href="buy-coupon.html">Buy
                                            Coupon</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </header>

   @yield('content')

    <footer id="main_footer">
        <div id="footer_columns">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 first-footer">
                        <img class="img-fluid mb-3" src="{{ asset('asset/images/logo.png') }}">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum, felis a feugiat
                            tristique, tellus velit ultrices lorem, id ultrices dolor mi non lectus.</p>
                    </div>

                    <div class="col-md-2 offset-md-1 second-footer">
                        <h4>Quick Links</h4>
                        <ul class="footer-menu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about-us.html">About US</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="events.html">Events</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 offset-md-2 third-footer">
                        <h4>Connect With US</h4>
                        <p>SgTPP Township<br>
                            Monigram, Murshidabad,<br>
                            742237. WB</p>

                        <p class="mb-0">+91 9477160954</p>
                        <p class="mb-2">info@officersclubsgtpp.com</p>
                        <ul class="footer-social">
                            <li><a href=""><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-youtube"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
        <div id="footer_copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 copyleft-area">
                        <p>&copy; 2020 All Rights Reserved. Officers Club sGTTP | Design and Developed By <a
                                href="https://www.webredas.com/">Webredas</a></p>
                    </div>
                </div>
            </div>
        </div>

    </footer>

   @include('user.layout.partial.footerdocument')

</body>

</html>
