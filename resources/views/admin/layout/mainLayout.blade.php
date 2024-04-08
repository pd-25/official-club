<!DOCTYPE html>
<html lang="en">


<head>
    <title>{{ env('APP_NAME') }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    @include('admin.layout.partials.headdocument')
</head>

<body>
    <div class="app">
        <div class="app-wrap">
            <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="{{ asset('adminassets/img/loader/loader.svg') }}" alt="loader">
                    </div>
                </div>
            </div>
            @include('admin.layout.partials.header')

            <div class="app-container">

                @include('admin.layout.partials.sidebar')

                <div class="app-main" id="main" style="margin-top: 66px !important">
                    <!-- begin container-fluid -->
                    @yield('content')
                    <!-- end container-fluid -->
                </div>
            </div>
            @include('admin.layout.partials.sidebar')
            @include('admin.layout.partials.footer')


        </div>
    </div>
    <script src="{{ asset('adminassets/js/vendors.js') }}"></script>

    <script src="{{ asset('adminassets/js/app.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var showConfirmButtons = document.querySelectorAll('.show_confirm');

            showConfirmButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    var form = button.closest('form');
                    var name = button.getAttribute('data-name');
                    event.preventDefault();
                    swal({
                        title: 'Delete?',
                        text: 'Please ensure and then confirm!',
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, delete it!',
                        cancelButtonText: 'No, cancel!',
                        reverseButtons: true
                    }).then(function(willDelete) {
                        if (willDelete.value) {
                            form.submit();
                        } else {
                            swal('Your data file is safe!');
                        }
                    });
                });
            });
        });
    </script>
</body>


</html>
