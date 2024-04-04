 <script src="https://code.jquery.com/jquery-3.3.1.min.js"
     integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous">
 </script>
 <script src="{{ asset('asset/owl-carousel/js/owl.carousel.js') }}"></script>
 @yield('script')

 {{-- <script>
        $(document).ready(function() {
            var owl = $('#owl-events');
            owl.owlCarousel({
                items: 1,
                loop: true,
                nav: false,
                margin: 0,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            });
            $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [2000])
            })
            $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
            })
        })
    </script> --}}
 {{-- <script>
        $(document).ready(function() {
            var owl = $('#owl-gallery');
            owl.owlCarousel({
                items: 4,
                loop: true,
                nav: false,
                margin: 0,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 4
                    }
                }
            });
            $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [2000])
            })
            $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
            })
        })
    </script> --}}
