@extends('layout.app')
@section('quality')

 <!-- Header Start -->
 <div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Factory</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active text-primary">Our Factory</li>
        </ol>
    </div>
</div>
<!-- Header End -->


@include('includes.quality')
<!-- feature Start -->
<div class="container-fluid feature bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-uppercase text-primary">Our Factory</h4>
            <h1 class="display-3 text-capitalize mb-3">A Trusted Name In Bottled Water Industry</h1>
        </div>
        <div class="row g-4">
            <div class=" col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item p-4">
                    <div class="feature-icon mb-3"><i class="fas fa-hand-holding-water text-white fa-3x"></i></div>
                    <a href="#" class="h4 mb-3">Pollution Free Source of Spring Water</a>
                    <p class="mb-3">The mountains streams contain clean water which further requires filtration and testing to ensure safety. The natural springs are protected from industrial pollution and agricultural runoff, helping maintain water quality.</p>
                    <a href="{{route("quality")}}" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature-item p-4">
                    <div class="feature-icon mb-3"><i class="fas fa-filter text-white fa-3x"></i></div>
                    <a href="#" class="h4 mb-3">State of the Art Technology Employed</a>
                    <p class="mb-3">Our bottled water with a brand name Dinsho Natural Spring Water is processed in a fully automated and modern manufacturing facility utilizing innovative processing technologies and using state-of-art machines. </p>
                    <a href="{{route("quality")}}" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon mb-3"><i class="fas fa-recycle text-white fa-3x"></i></div>
                    <a href="#" class="h4 mb-3">Unique & Balanced Production</a>
                    <p class="mb-3">The unique mineral composition (e.g., calcium, magnesium, bicarbonate) contributes to the taste and health benefits of spring water, with each spring having its distinct profile based on its geological surroundings.</p>
                    <a href="{{route("quality")}}" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="feature-item p-4">
                    <div class="feature-icon mb-3"><i class="fas fa-microscope text-white fa-3x"></i></div>
                    <a href="#" class="h4 mb-3">Lab Control</a>
                    <p class="mb-3">The natural processes help maintain a well-balanced pH level, making the water more palatable and beneficial for health.</p>
                    <a href="{{route("quality")}}" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- feature End -->

@endsection
