@extends('user.layout.mainLayout')
@section('content')
    <section id="banner-slider" class="banner-slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="background-image: url('asset/images/banner.jpg')">
                    <div class="carousel-caption">
                        <h1>Officers's Club<br><strong>SgTPP.WBPDCL</strong></h1>
                        <p>Our club has facilities for recreation of various cultural activities for our members and
                            families.</p>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Page Content -->






    <section id="welcome-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-7">
                    <div class="our-panelBox">
                        <p class="head-caption">Welcome To</p>
                        <h1>Officers's Club, SgTPP</h1>
                        <p>Welcome to Officer’s club, sgTPP online. Officer Club was founded in 2008 as a meeting ground
                            for Officers and their family members and registered to WBPDCL. The club building is located
                            inside the SgTPP Township near Township gate no3, under Monigram gram Panchayat , in
                            Murshidabad district ,West Bengal.</p>
                        <p>The club provides for its member a platform comes together and enjoys its various facilities.
                            It offers facilities for badminton, table tennis, carom, Billiards, and others different
                            sports. The Club has a Card room, a billiards room, lawns, TV lounge, conference hall, a big
                            dining cum community hall for family get together events and a Well-stocked Library with
                            books & magazines covering diverse topics for all ages.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset('asset/images/welcome-pic.jpg') }}" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section id="pmessage-section" class="parallax-window" data-parallax="scroll"
        data-image-src="{{ asset('asset/images/bg-img.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <img src="{{ asset('asset/images/pre-pic.jpg') }}" class="img-fluid">
                </div>
                <div class="col-lg-9">
                    <h1>Club President's Message</h1>
                    <p>I take immense pleasure in welcoming you all to the newly launched website of our Officer’s Club
                        SgTPP. Designed to be aesthetically pleasing and more organized, the user-friendly site allows
                        visitors to easily navigate classes, menus, sports, facilities, information’s, announcements and
                        more.</p>
                    <p>My team has made the website very interesting and informative. It contains a brief history of the
                        Officers club, facilities available at the Club, sports going on throughout years. You will
                        agree that it is not possible to compress all details on the website but an effort has been made
                        to include important relevant details.</p>
                    <p>We look forward to receiving your valuable feedback.</p>
                    <p class="pre-sign">Aloke Datta Roy</p>
                    <p class="pre-desig">( President, Officers Club )</p>
                </div>

            </div>
        </div>
    </section>

    <section id="activities-section">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-12">
                    <h1>Our Activities</h1>
                    <p>Recreation facilities are incredibly important for a healthy, vibrant community. In our officers
                        club members community facilities for recreation of different activities like dance , music,
                        drama, recitation etc. are provided.</p>
                </div>

            </div>
            <div class="row">
                @foreach ($activities as $activity)
                    
               
                <div class="col-lg-4">
                    <div class="activities-box">
                        <img src="{{ asset('storage/ActivityImage/' . $activity->image) }}" class="img-fluid">
                        <div class="activities-boxCtn">
                            <h3>{{$activity->title}}</h3>
                            <p>{{\Illuminate\Support\Str::limit(@$activity->desc, $limit = 50, $end = '...') }}</p>
                            <a href="{{route('user.activity-details', $activity->id)}}" class="rmBtn">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach

                {{-- <div class="col-lg-4">
                    <div class="activities-box">
                        <img src="{{ asset('asset/images/act-pic2.jpg') }}" class="img-fluid">
                        <div class="activities-boxCtn">
                            <h3>Dance Class</h3>
                            <p>Oficers club, SgTPP facilitates Dance class for Members & their wards.</p>
                            <a href="" class="rmBtn">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="activities-box">
                        <img src="{{ asset('asset/images/act-pic3.jpg') }}" class="img-fluid">
                        <div class="activities-boxCtn">
                            <h3>Karate class</h3>
                            <p>Officers club, SgTPP facilitates Karate class for Members & their wards.</p>
                            <a href="" class="rmBtn">Read More</a>
                        </div>
                    </div>
                </div> --}}

            </div>

            {{-- <div class="row">
                <div class="col-lg-4">
                    <div class="activities-box">
                        <img src="{{ asset('asset/images/act-pic4.jpg') }}" class="img-fluid">
                        <div class="activities-boxCtn">
                            <h3>Drawing Class</h3>
                            <p>Officers club, SgTPP facilitates drawing class for member's wards.</p>
                            <a href="" class="rmBtn">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="activities-box">
                        <img src="{{ asset('asset/images/act-pic5.jpg') }}" class="img-fluid">
                        <div class="activities-boxCtn">
                            <h3>Recitation Class</h3>
                            <p>Officers club, SgTPP is going to facilitates Recitation class.</p>
                            <a href="" class="rmBtn">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="activities-box">
                        <img src="{{ asset('asset/images/act-pic6.jpg') }}" class="img-fluid">
                        <div class="activities-boxCtn">
                            <h3>Swimming</h3>
                            <p>Officers club, SgTPP facilitates learning of swimming.</p>
                            <a href="" class="rmBtn">Read More</a>
                        </div>
                    </div>
                </div>

            </div> --}}
        </div>
    </section>



    <section id="web-message-section" class="parallax-window" data-parallax="scroll"
        data-image-src="{{ asset('asset/images/bg-img.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>In our Club through the year all modern sports activities like Table Tennis, Badminton,
                        Carrom,Card game etc. are taking place. Club members and their families’ take part in various
                        sports activities and completions help throughout the year. In addition, recently our club
                        renovates the playground with plantation with grass which grows faster and makes for speedier
                        and competitive play. Our club has facilities for recreation of various cultural activities for
                        our members and families.</p>
                </div>

            </div>
        </div>
    </section>





    <section id="facilities-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Our Facilities</h1>
                    <p>Our newly constructed Officers Club Building have following facilities for the club members and
                        their family members.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 faciBox">
                    <div class="hmBox-img"> <img src="{{ asset('asset/images/fac-icon1.png') }}" class="img-fluid"> </div>
                    <div class="hmBox-ctn">
                        <h3>Conference Hall</h3>
                        <p>Well equipped, the conference cum meeting rooms at Officers’ Club building.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 faciBox">
                    <div class="hmBox-img"> <img src="{{ asset('asset/images/fac-icon2.png') }}" class="img-fluid"> </div>
                    <div class="hmBox-ctn">
                        <h3>Community Hall</h3>
                        <p>Community Hall is the excellent facility for events, programs, social and activities.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 faciBox">
                    <div class="hmBox-img"> <img src="{{ asset('asset/images/fac-icon3.png') }}" class="img-fluid">
                    </div>
                    <div class="hmBox-ctn">
                        <h3>Library Room</h3>
                        <p>The Library has an excellent collection of books and monthly & weekly magazines.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 faciBox">
                    <div class="hmBox-img"> <img src="{{ asset('asset/images/fac-icon4.png') }}" class="img-fluid">
                    </div>
                    <div class="hmBox-ctn">
                        <h3>Kids Play Room</h3>
                        <p>Officers Club has a great play area for toddlers and young children.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 faciBox">
                    <div class="hmBox-img"> <img src="{{ asset('asset/images/fac-icon5.png') }}" class="img-fluid">
                    </div>
                    <div class="hmBox-ctn">
                        <h3>TV Lounge</h3>
                        <p>In our Club Building a new 50 inch Plasma TV is Installed with DTH Connection.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 faciBox">
                    <div class="hmBox-img"> <img src="{{ asset('asset/images/fac-icon6.png') }}" class="img-fluid">
                    </div>
                    <div class="hmBox-ctn">
                        <h3>Gynasium</h3>
                        <p>Our Club houses exercise equipments for the purpose of physical exercise. </p>
                    </div>
                </div>
            </div>




        </div>
    </section>


    <section id="sports-section" class="parallax-window" data-parallax="scroll"
        data-image-src="{{ asset('asset/images/bg-img.jpg') }}">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-12">
                    <h1>Sports</h1>
                    <p>In our Officers Club, SgTPP various sports activities and competitions are arranged through out
                        the year. All the members and their family members are actively take part and make the
                        competition successful.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2">
                    <img src="{{ asset('asset/images/sports-icon1.png') }}" class="img-fluid mb-2">
                    <h4>Badminton</h4>
                </div>
                <div class="col-lg-2">
                    <img src="{{ asset('asset/images/sports-icon2.png') }}" class="img-fluid mb-2">
                    <h4>Table Tennis</h4>
                </div>
                <div class="col-lg-2">
                    <img src="{{ asset('asset/images/sports-icon3.png') }}" class="img-fluid mb-2">
                    <h4>Card Game</h4>
                </div>
                <div class="col-lg-2">
                    <img src="{{ asset('asset/images/sports-icon4.png') }}" class="img-fluid mb-2">
                    <h4>Carrom</h4>
                </div>
                <div class="col-lg-2">
                    <img src="{{ asset('asset/images/sports-icon5.png') }}" class="img-fluid mb-2">
                    <h4>Cricket</h4>
                </div>
                <div class="col-lg-2">
                    <img src="{{ asset('asset/images/sports-icon6.png') }}" class="img-fluid mb-2">
                    <h4>Football</h4>
                </div>
            </div>
        </div>
    </section>






    <section id="events-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center section-head mb-2">
                    <h1>Events</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin efficitur lobortis nisl, sit amet
                        bibendum metus sodales a. Cras porttitor a nisi non auctor. Donec eu orci eleifend, mollis enim
                        non, scelerisque augue. Pellentesque non leo auctor, iaculis magna id, consectetur nisl.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div id="demo-pranab">
                        <div id="owl-events" class="owl-carousel owl-theme">
                            @foreach ($events as $event)
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6 event-img">
                                            <img src="{{ asset('storage/EventImage/' . $event->image) }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="col-lg-6 event-ctn">
                                            <p class="epost-date">
                                                <span>{{ date('jS F Y H:i A', strtotime($event->event_date_from)) }}</span>-<span>{{ date('jS F Y H:i A', strtotime($event->event_date_to)) }}</span>
                                            </p>
                                            <h2>{{ $event->title }}</h2>
                                            <p>{{ $event->long_desc }}</p>
                                            <a class="rmBtn" href="javascript:void(0)">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>





    <section id="gallery-section">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center section-head mb-2">
                    <h1>Our Gallery</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin efficitur lobortis nisl, sit amet
                        bibendum metus sodales a. Cras porttitor a nisi non auctor. Donec eu orci eleifend.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div id="demo-pranab">
                        <div id="owl-gallery" class="owl-carousel owl-theme">
                            @foreach ($galleries as $gallerie)
                                <div class="item">
                                    <img src="{{ asset('storage/GalleryImage/' . $gallerie->image) }}" class="img-fluid">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <a class="rmBtn" href="{{ route('user.gallery') }}">View Gallery</a>
                </div>
            </div>

        </div>
    </section>
@endsection
