@extends('layout.app')
@section('gallery')


 <!-- Header Start -->
 <div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Gallery</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active text-primary">Gallery</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<div class="container py-5">
    <h2 class="gallery-title text-center">Our Gallery</h2>
    <p class="text-center mb-5">Explore the beauty of Dinsho Natural Spring Water and its surrounding nature.</p>

    <div class="row">
        <div class="col-md-4 mb-4">
            <a href="img/gallery/1.jpg" data-lightbox="gallery" data-title="Beautiful Spring View">
                <img src="{{asset("img/gallery/1.jpg")}}" class="img-fluid gallery-img" alt="Spring View">
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="img/gallery/2.jpg" data-lightbox="gallery" data-title="Bottling Process">
                <img src="{{asset("img/gallery/2.jpg")}}"  class="img-fluid gallery-img" alt="Bottling Process">
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="img/gallery/3.jpg" data-lightbox="gallery" data-title="Mountain Springs">
                <img src="{{asset("img/gallery/3.jpg")}}"  class="img-fluid gallery-img" alt="Mountain Springs">
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="img/gallery/4.jpg" data-lightbox="gallery" data-title="Our Machinery">
                <img src="{{asset("img/gallery/4.jpg")}}"  class="img-fluid gallery-img" alt="Machinery">
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="img/gallery/5.jpg" data-lightbox="gallery" data-title="Quality Testing">
                <img src="{{asset("img/gallery/5.jpg")}}"  class="img-fluid gallery-img" alt="Quality Testing">
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="img/gallery/6.jpg" data-lightbox="gallery" data-title="Local Community Engagement">
                <img src="{{asset("img/gallery/6.jpg")}}"  class="img-fluid gallery-img" alt="Community Engagement">
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="img/gallery/7.jpg" data-lightbox="gallery" data-title="Local Community Engagement">
                <img src="{{asset("img/gallery/7.jpg")}}"  class="img-fluid gallery-img" alt="Community Engagement">
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="img/gallery/8.jpg" data-lightbox="gallery" data-title="Local Community Engagement">
                <img src="{{asset("img/gallery/8.jpg")}}"  class="img-fluid gallery-img" alt="Community Engagement">
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="img/gallery/9.jpg" data-lightbox="gallery" data-title="Local Community Engagement">
                <img src="{{asset("img/gallery/9.jpg")}}"  class="img-fluid gallery-img" alt="Community Engagement">
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="img/gallery/10.jpg" data-lightbox="gallery" data-title="Local Community Engagement">
                <img src="{{asset("img/gallery/10.jpg")}}"  class="img-fluid gallery-img" alt="Community Engagement">
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="img/gallery/25.jpg" data-lightbox="gallery" data-title="Local Community Engagement">
                <img src="{{asset("img/gallery/25.jpg")}}"  class="img-fluid gallery-img" alt="Community Engagement">
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="img/gallery/26.jpg" data-lightbox="gallery" data-title="Local Community Engagement">
                <img src="{{asset("img/gallery/26.jpg")}}"  class="img-fluid gallery-img" alt="Community Engagement">
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="img/gallery/27.jpg" data-lightbox="gallery" data-title="Local Community Engagement">
                <img src="{{asset("img/gallery/27.jpg")}}"  class="img-fluid gallery-img" alt="Community Engagement">
            </a>
        </div>
    </div>
</div>

@endsection