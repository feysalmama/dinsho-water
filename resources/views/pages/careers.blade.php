@extends('layout.app')

@section("careers")
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Open Position</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active text-primary">Vacancy</li>
            </ol>
        </div>
    </div>


    <div class="careers-header">
        <h1>Join Our Team</h1>
        <p>Explore exciting career opportunities at Dinsho Natural Spring Water.</p>
    </div>

    <div class="container py-5">
        <h2 class="text-center mb-4">Current Openings</h2>

        <div class="row">
            <!-- Job Card 1 -->
            <div class="col-md-4">
                <div class="job-card">
                    <h5>Quality Assurance Specialist</h5>
                    <p><strong>Location:</strong> Bale Mountains, Ethiopia</p>
                    <p>Ensure the highest standards of water quality through rigorous testing and adherence to regulatory guidelines.</p>
                    <button class="btn btn-primary apply-button">Apply Now</button>
                </div>
            </div>
            <!-- Job Card 2 -->
            <div class="col-md-4">
                <div class="job-card">
                    <h5>Production Supervisor</h5>
                    <p><strong>Location:</strong> Bale Mountains, Ethiopia</p>
                    <p>Oversee production operations, implement efficient processes, and ensure timely distribution of products.</p>
                    <button class="btn btn-primary apply-button">Apply Now</button>
                </div>
            </div>
            <!-- Job Card 3 -->
            <div class="col-md-4">
                <div class="job-card">
                    <h5>Marketing Executive</h5>
                    <p><strong>Location:</strong> Bale Mountains, Ethiopia</p>
                    <p>Develop marketing strategies and campaigns to promote our natural spring water and increase brand awareness.</p>
                    <button class="btn btn-primary apply-button">Apply Now</button>
                </div>
            </div>
        </div>

        <div class="company-culture">
            <h2>Our Company Culture</h2>
            <p>At Dinsho Natural Spring Water, we believe in a collaborative work environment where creativity thrives. We value sustainability, community engagement, and continuous improvement.</p>
        </div>
    </div>
 @endsection