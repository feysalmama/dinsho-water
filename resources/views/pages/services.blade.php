@extends('layout.app')


@section('services')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Service</li>
        </ol>    
    </div>
</div>
<!-- Header End -->
@include('includes.services')
@endsection

@section('teams')
@include('includes.fact-counter')
@endsection


@section('testimonials')
@include('includes.testimonials')
@endsection