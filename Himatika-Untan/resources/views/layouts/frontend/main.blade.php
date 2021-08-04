<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>HIMATIKA FMIPA UNTAN</title>
    
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset('frontend/css/all.css') }}">
    
    
        <!-- --------- Owl-Carousel ------------------->
        <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    
        <!-- ------------ AOS Library ------------------------- -->
        <link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}">
    
        <!-- Custom Style   -->
        <link rel="stylesheet" href="{{ asset('frontend/css/Style.css') }}">
        <!-- <link rel="stylesheet" href="./css/blog.css"> -->
        <!-- home -->
        <meta name="description" content="HIMATIKA ( Himpunan Mahasiswa Matematika ) FMIPA UNTAN merupakan Himpunan termuda yang ada di Universitas Tanjungpura. Pada awalnya himpunan ini bernama HIMMASI (Himpunan Mahasiswa Matematika Science) yang dibentuk pada tanggal 18 September 2002">
        <meta name="keywords" content="himatika, untan, himatikauntan, himatika untan">
        <link rel='dns-prefetch' href='/himatikauntan.org' />
        <link rel="icon" href="{{ asset('frontend/assets/img/footer/cropped-Untitled-1-300x300.jpg') }}" sizes="32x32" />
        <link rel="icon" href="{{ asset('frontend/assets/img/footer/cropped-Untitled-1-300x300.jpg') }}" sizes="192x192" />
        <link rel="apple-touch-icon-precomposed" href="{{ asset('frontend/assets/img/footer/cropped-Untitled-1-300x300.jpg') }}">
        <meta name="msapplication-TileImage" content="{{ asset('frontend/assets/img/footer/cropped-Untitled-1-300x300.jpg') }}">
        
    </head>

<body>

    <!-- ----------------------------  Navigation ---------------------------------------------- -->

    @include('layouts.frontend.partisi.navigasi')

    <!-- ------------x---------------  Navigation --------------------------x------------------- -->

    <!----------------------------- Main Site Section ------------------------------>

    <main>
        
            @yield('content')

    </main>


    @include('layouts.frontend.partisi.footer')

    <!-- -------------x------------- Footer --------------------x------------------- -->

    <!-- Jquery Library file -->
    <script src="{{ asset('frontend/js/Jquery3.4.1.min.js') }}"></script>

    <!-- --------- Owl-Carousel js ------------------->
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="{{ asset('frontend/js/aos.js') }}"></script>

    <!-- Custom Javascript file -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    
</body>

</html>