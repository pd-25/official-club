@extends('user.layout.mainLayout')
@section('content')
    <section id="event-banner-slider">
        <div class="event-banner" style="background-image: url({{'/storage/ActivityImage/' . $activity->image}}); background-size: contain;">
        </div>
    </section>
    <!-- Page Content -->

    <section id="inn-pg-section" class="inn-page-event">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 event-img">

                </div>
                <div class="col-lg-12">
                    <h1>{{$activity->title}}</h1>
                    <p>{{ $activity->desc }}
                    </p>

                </div>
            </div>


        </div>
    </section>
@endsection
