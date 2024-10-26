@extends('layout.app')

@section('title', 'Contact')

@section('contact')

  <!-- Header Start -->
  <div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Contact</li>
        </ol>    
    </div>
</div>
<!-- Header End -->
@include('includes.contact')

<div class="container py-5">
    <h2 class="opening-hours-title text-center">Opening Hours</h2>
    <div class="card hours-card mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <table class="hours-table">
                <tr>
                    <th>Day</th>
                    <th>Hours</th>
                </tr>
                <tr>
                    <td>Monday</td>
                    <td>8 am – 5 pm</td>
                </tr>
                <tr>
                    <td>Tuesday</td>
                    <td>8 am – 5 pm</td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td>8 am – 5 pm</td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td>8 am – 5 pm</td>
                </tr>
                <tr>
                    <td>Friday</td>
                    <td>8 am – 5 pm</td>
                </tr>
                <tr>
                    <td>Saturday</td>
                    <td>8 am – 12 pm</td>
                </tr>
                <tr>
                    <td>Sunday</td>
                    <td>Closed</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="contact-info">
        <p>Please feel free to email, call, or stop by for a visit.</p>
    </div>
</div>
@endsection

