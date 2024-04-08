@extends('user.layout.mainLayout')
@section('content')
<section id="inn-banner-slider" class="banner-slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('/asset/images/about-banner.jpg')">
            </div>


        </div>
    </div>
</section>
<!-- Page Content -->

<section id="contact-pg-section">
    <div class="container">
        <h2>Contact Us</h2>
        <p>Thanks for showing your interest. Please fill the bellow mentioned form so that we can contact you asap.
        </p>
        <div class="row">

            <div class="col-lg-8">
                <!-- <form role="form" action="smtp_mail/mail_1.php" method="post" id="contact-form">-->
                <form id="contact-form" method="post" action="{{route('user.contactUsMail')}}" role="form">
@csrf
                    <div class="controls">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="form_name" name="form_name" class="form-control"
                                        placeholder="First name" required="required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="form_lastname" name="form_lastname"
                                        class="form-control" placeholder="Last name" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" id="form_email" name="form_email" class="form-control"
                                        placeholder="Email" required="required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="tel" id="form_phone" name="form_phone" class="form-control"
                                        placeholder="Phone no" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="form_message" name="form_message" class="form-control" placeholder="Message for me" rows="4"
                                        required="required" data-error="Please,leave us a message."></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="rmBtn" value="Submit Now">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-4">
                <div class="contact-pg-box">
                    <h5>Our Address:-</h5>
                    <p>SgTPP Township,</p>
                    <p>Monigram</p>
                    <p>Murshidabad</p>
                    <p>West Bengal</p>
                    <p>INDIA</p>

                    <br>
                    <h5>Club Secretary:-</h5>
                    <p>Mr. Bibek Bhakta</p>
                    <p><strong>Phone:</strong> + 919477160954</p>
                    <p><strong>Email:</strong> info@officersclubsgtpp.com</p>
                </div>
            </div>


        </div>
    </div>
</section>

<section id="map-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d58150.12451057923!2d88.106716!3d24.367984!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xec80f4794b4b864d!2sSagardighi%20Thermal%20Power%20Station!5e0!3m2!1sen!2sus!4v1584713488583!5m2!1sen!2sus"
                    width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                    aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</section>    
@endsection
