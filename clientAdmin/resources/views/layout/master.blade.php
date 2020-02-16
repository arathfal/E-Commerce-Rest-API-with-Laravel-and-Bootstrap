<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset ('/img/football.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css')}}">
    <script src="{{ asset('/assets/js/jquery3.20.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/js/style.js') }}"></script>
    <!-- <script src="{{ asset('/assets/js/ckeditor/ckeditor.js') }}"></script> -->
</head>

<body>

    @yield('content')


    <!-- Footer -->

    <footer class="credit">

        <div class="container">

            <div class="row">

                <div class="col-md-4">
                    <div class="row">
                        <h4>About Futsal$tore</h4>
                    </div>
                    <div class="row">
                        <p class="ending">
                            Futsal$tore adalah sebuah aplikasi yang berjalan dibidang e-commerce sebagai tempat penjualan alat-alat futsal
                        </p>
                    </div>
                    <div class="row">
                        <p>Copyright 2019 &copy; Futsal$tore</p>
                    </div>
                </div>

                <div class="col-md-4 offset-md-4">
                    <div class="row">
                        <div class="col-md-8 offset-md-4">
                            <h5>Info Contact</h5><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('assets/img/facebook.png') }}" width="40" height="40"></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('assets/img/instagram.png') }}" width="40" height="40"></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('assets/img/youtube.png') }}" width="40" height="40"></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="{{ asset('assets/img/rss.png') }}" width="40" height="40"></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </footer>

    <!-- <script type="text/javascript">
        CKEDITOR.replace('ckeditor1', {
            height: 500
        });
    </script> -->

</body>

</html>