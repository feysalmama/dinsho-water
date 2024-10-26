<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Dinsho - Spring Water | @yield('title')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

            <!-- SEO Metadata -->
        <meta name="description" content="Dinsho Natural Spring Water Bottling Factory">
        <meta name="keywords" content="Its blessed source is placed deep in the original wilderness of the mountains, where we’ve been bottling it to preserve its mineral-rich taste and the planet.">
        <meta name="author" content="Dinsho Natural Spring Water Bottling Factory">
        <meta name="robots" content="index, follow">

        <!-- Open Graph Metadata (for social media sharing) -->
        <meta property="og:title" content="Dinsho Natural Spring Water Bottling Factory">
        <meta property="og:description" content="Its blessed source is placed deep in the original wilderness of the mountains, where we’ve been bottling it to preserve its mineral-rich taste and the planet">
        <meta property="og:image" content="https://dinshospringwater.com">
        <meta property="og:url" content="https://dinshospringwater.com/">

        <link rel="icon" type="image/x-icon" href="{{asset("img/favicon.ico")}}">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
          <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/lightbox.min.css" rel="stylesheet">
        
    </head>

    <body>

        @include('layout.header')
        
        @yield('hero')
        @yield('welcome')
        @yield('about')
        @yield('quality')
        @yield('facts')
        {{-- @yield('services') --}}
        @yield('products')
        @yield('blogs')
        @yield('gallery')
        @yield('careers')
        @yield('teams')
        @yield('testimonials')
        @yield('contact')

        @include('layout.footer')
        

    </body>

</html>