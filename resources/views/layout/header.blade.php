 <!-- Spinner Start -->
 <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
           <img src="{{asset("img/logo.png")}}" alt="">
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">

                <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                <a href="{{route("products")}}" class="nav-item nav-link">Product</a>
                <a href="{{route("quality")}}" class="nav-item nav-link">Quality</a>
                {{-- <a href="{{route('blogs')}}" class="nav-item nav-link">Blog</a> --}}
                <a href="{{route('gallery')}}" class="nav-item nav-link">Gallery</a>
                <a href="{{route("team")}}" class="nav-item nav-link">Team</a>
                <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                <a href="{{route('careers')}}" class="nav-item nav-link">Careers</a>

            </div>
           
        </div>
    </nav>