@extends('user.layout.mainLayout')
@section('content')
    <section id="event-banner-slider">
        <div class="event-banner" style="background-image: url({{'/storage/EventImage/' . $event->image}}); background-size: contain;">
        </div>
    </section>
    <!-- Page Content -->

    <section id="inn-pg-section" class="inn-page-event">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 event-img">

                </div>
                <div class="col-lg-12">
                    <h1>{{$event->title}}</h1>
                    <p class="epost-date"><span>{{ date('jS F Y H:i A', strtotime($event->event_date_from)) }}</span>-<span> {{ date('jS F Y H:i A', strtotime($event->event_date_to)) }}</span></p>
                    <p>{{ $event->long_desc }}
                    </p>

                </div>
            </div>


        </div>
    </section>
@endsection
