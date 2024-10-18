@extends('layout.app')
@section('products')

 <!-- Header Start -->
 <div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Who We Are</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active text-primary">About</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<br>
<br>
<br>
<br>
@include('includes.products')
@endsection
