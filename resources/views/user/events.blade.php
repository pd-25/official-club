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






    <section id="inn-pg-section" class="inn-page-event">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Events</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin efficitur lobortis nisl, sit amet
                        bibendum metus sodales a. Cras porttitor a nisi non auctor. Donec eu orci eleifend, mollis enim
                        non, scelerisque augue. Pellentesque non leo auctor, iaculis magna id, consectetur nisl.</p>

                </div>
            </div>


            @foreach ($events as $event)
            <div class="row mb-5">
                <div class="col-lg-6 event-img">
                    <img class="img-fluid" src="{{ asset('storage/EventImage/' . $event->image) }}">
                </div>
                <div class="col-lg-6 event-ctn">
                    <p class="epost-date"><span>{{ date('jS F Y H:i A', strtotime($event->event_date_from)) }}</span>-<span> {{ date('jS F Y H:i A', strtotime($event->event_date_to)) }}</span></p>
                    <h2>{{ $event->title }}</h2>
                    <p>{{ $event->long_desc }}</p>
                    <a href="{{route('user.events-details', $event->id)}}" class="rmBtn">Read More</a>
                </div>
            </div>
            @endforeach






        </div>
    </section>
@endsection
