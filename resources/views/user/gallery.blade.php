@extends('user.layout.mainLayout')
@section('style')
    <link href="{{ asset('asset/assets/js/source/jquery.fancybox.css') }}" rel="stylesheet" />
@endsection
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
                <div class="col-lg-12 text-center">
                    <h1>Our Gallery</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin efficitur lobortis nisl, sit amet
                        bibendum metus sodales a. Cras porttitor a nisi non auctor. Donec eu orci eleifend, mollis enim
                        non, scelerisque augue. Pellentesque non leo auctor, iaculis magna id, consectetur nisl.</p>

                </div>
            </div>



            <div class="row text-center">
                <div class="col-md-12">
                    <hr />
                    <div class="caegories">
                        <ul class="gallery-head">
                            <li><a href="#" data-filter="*" class="gallery-btn active">All</a></li>
                            <li><a href="#" data-filter=".Categorie1" class="gallery-btn">Categories 1</a></li>
                            <li><a href="#" data-filter=".Categorie2" class="gallery-btn">Categories 2</a></li>
                            <li><a href="#" data-filter=".Categorie3" class="gallery-btn">Categories 3</a></li>
                            <li><a href="#" data-filter=".Categorie4" class="gallery-btn">Categories 4</a></li>
                        </ul>
                        <hr />
                    </div>
                </div>
            </div>

            <div class="row text-center" id="portfolio-div">
                @foreach ($galleries as $gallerie)
                <div class="col-md-4 col-sm-4 Categorie{{$gallerie->category_name}}">
                    <a class="fancybox-media" title="" href="{{asset('storage/GalleryImage/' . $gallerie->image)}}">
                        <img src="{{ asset('storage/GalleryImage/' . $gallerie->image) }}" class="img-fluid " alt="" />
                    </a>
                </div>
                @endforeach
                
                {{-- <div class="col-md-4 col-sm-4 Categorie2">
                    <a class="fancybox-media" title="" href="{{asset('asset/images/gallery/gal-pic2.jpg')}}">
                        <img src="{{ asset('asset/images/gallery/gal-pic2.jpg') }}" class="img-fluid " alt="" />
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 Categorie3">
                    <a class="fancybox-media" title="" href="{{asset('asset/images/gallery/gal-pic3.jpg')}}">
                        <img src="{{ asset('asset/images/gallery/gal-pic3.jpg') }}" class="img-fluid " alt="" />
                    </a>
                </div>

                <div class="col-md-4 col-sm-4 Categorie4">
                    <a class="fancybox-media" title="" href="{{asset('asset/images/gallery/gal-pic4.jpg')}}">
                        <img src="{{ asset('asset/images/gallery/gal-pic4.jpg') }}" class="img-fluid " alt="" />
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 Categorie4">
                    <a class="fancybox-media" title="" href="{{asset('asset/images/gallery/gal-pic111.jpg')}}">
                        <img src="{{ asset('asset/images/gallery/gal-pic111.jpg') }}" class="img-fluid " alt="" />
                    </a>
                </div> --}}


            </div>





        </div>
    </section>
@endsection
@section('script')
    
    <script src="{{ asset('asset/assets/js/jquery-1.11.1.js') }}"></script>
    <!--  FANCYBOX PLUGIN -->
    <script src="{{ asset('asset/assets/js/source/jquery.fancybox.js') }}"></script>
    <!-- ISOTOPE SCRIPTS -->
    <script src="{{ asset('asset/assets/js/jquery.isotope.js') }}"></script>
    <!-- CUSTOM SCRIPTS REQIRED-->
    <script src="{{ asset('asset/assets/js/custom.js') }}"></script>
@endsection
