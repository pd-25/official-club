@extends('user.layout.mainLayout')
@section('content')
<section id="inn-banner-slider" class="banner-slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('asset/images/about-banner.jpg')">
            </div>


        </div>
    </div>
</section>
<!-- Page Content -->






<section id="inn-pg-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h2>About Us</h2>
                <p>Welcome to Officer’s club, sgTPP online. Officer Club was founded in 2008 as a meeting ground for
                    Officers and their family members and registered to WBPDCL. The club building is located inside
                    the SgTPP Township near Township gate no3, under Monigram gram Panchayat , in Murshidabad
                    district ,West Bengal.</p>
                <p>The club provides for its member a platform comes together and enjoys its various facilities. It
                    offers facilities for badminton, table tennis, carom, Billiards, and others different sports.
                    The Club has a Card room, a billiards room, lawns, TV lounge, conference hall, a big dining cum
                    community hall for family get together events and a Well-stocked Library with books & magazines
                    covering diverse topics for all ages.</p>

            </div>
            <div class="col-lg-5">
                <img class="img-fluid" src="{{asset('asset/images/about-pic.jpg')}}">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <p>The Club is to provide a family friendly and healthy atmosphere to their members. Due care is
                    being taken to enhance the Cultural, Social and Sparkling activities on our members by arranging
                    cultural meets, Social get-together with lots of Fun and Prizes.</p>
                <p>Sports apart, the Club offers to the members their family members a wide range of entertainment
                    throughout the year like music, dancing, drawing and Karate learning families.</p>
                <p>Over the years each new Committees have continued with overall improvements to the Club and
                    accelerated the introduction of new facilities.</p>
            </div>
        </div>
    </div>
</section>
@endsection