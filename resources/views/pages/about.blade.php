@extends('layout.app')


@section('about')
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
    @include('includes.about')

    <div class="container py-5">
        <div class="about-section mx-auto">
            <div class="row align-items-center g-4">
                <!-- Image Section -->
                <div class="col-md-6">
                    <img src="{{asset("img/more-about1.jpg")}}" alt="Bale Mountains" class="about-image">
                </div>

                <!-- Text Section -->
                <div class="col-md-6">
                    <h2 class="text-primary mb-4">More About Dinsho Natural Spring Water</h2>
                    <p>Dinsho Bottling's water is derived from <span class="highlight-text">Dinsho Park</span>, located in the heart of the Bale Mountains. It offers a refreshing flavor that reflects water sourced from some of the rarest highland areas, enriched with natural minerals and nutrients from the surrounding environment.</p>
                    <p>We utilize top-quality <span class="highlight-text">HDP pipe installations</span> for extracting and producing our water, ensuring the highest standard.</p>

                    <!-- Job Info Section -->
                    <div class="job-info">
                        <h5 class="text-center text-success">Job Creation and Impact</h5>
                        <p>The establishment and growth of the Dinsho Natural Spring Water Bottling Factory are expected to generate:</p>
                        <ul class="list-unstyled">
                            <li><strong>150+ Permanent Jobs</strong> for local residents</li>
                            <li><strong>250+ Temporary Jobs</strong> during various stages of operation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="content-wrapper mx-auto">
            <div class="text-center mb-5">
                <h1 class="display-4 text-primary">Our Foundation</h1>
                <p class="lead">Discover our vision, mission, strategic plan, and who we are.</p>
            </div>

            <div class="row g-4">
                <!-- Vision Card -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <div class="icon-wrapper mb-3">
                                <i class="fas fa-eye"></i>
                            </div>
                            <h4 class="card-title">Vision</h4>
                            <p class="card-text">
                                Dinsho Natural Spring Water Bottling Factory aspires to be the leader in bottled water from protected underground aquifers while emphasizing sustainability and environmental responsibility offerings through state-of-the-art bottling facilities in East Africa by exceeding customers’ and other stakeholder’s expectations. 
                            </p>
                        </div>
                        <div class="card-footer text-muted">
                            Our long-term perspective
                        </div>
                    </div>
                </div>

                <!-- Mission Card -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <div class="icon-wrapper mb-3">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <h4 class="card-title">Mission</h4>
                            <p class="card-text">
                                The Mission of Dinsho Natural Spring Water Bottling Factory is to provide the purest, healthiest, and most affordable drinking water to customers, focusing on natural bottled spring mineral water that is rich in nutrients.
                            </p>
                        </div>
                        <div class="card-footer text-muted">
                            Our day-to-day commitment
                        </div>
                    </div>
                </div>

                <!-- Plan Card -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <div class="icon-wrapper mb-3">
                                <i class="fas fa-road"></i>
                            </div>
                            <h4 class="card-title">Plant</h4>
                            <p class="card-text">
                                The plant is situated in the southern region of Ethiopia, specifically in the Bale zone near Mount Dinsho. This area is remarkably adorned with lush, evergreen forests and is blessed with plentiful and sustainable water resources. The bottling facility is thoughtfully integrated into the mountainous landscape.
                            </p>
                        </div>
                        <div class="card-footer text-muted">
                            where we located
                        </div>
                    </div>
                </div>

                <!-- The Company Card -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <div class="icon-wrapper mb-3">
                                <i class="fas fa-building"></i>
                            </div>
                            <h4 class="card-title">The Company</h4>
                            <p class="card-text">
                                Dinsho Natural Spring Water Bottling Factory is a company that specializes in the bottling and distribution of natural spring water in Ethiopia. Following the successful setup of its bottling machinery, the company began producing and distributing its bottled natural spring water under the brand name DINSHO Spring to both local and international markets.
                            </p>
                        </div>
                        <div class="card-footer text-muted">
                            Who we are
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- principles --}}
    <div class="container py-5">
        <div class="principles-section mx-auto">
            <div class="text-center mb-5">
                <h1 class="display-4 text-primary">Our Principles</h1>
                <p class="lead">We are committed to delivering the best quality natural spring water while ensuring sustainability, safety, and customer satisfaction.</p>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <!-- Principle 1: Quality Assurance -->
                <div class="col">
                    <div class="principle-card text-center">
                        <div class="principle-icon"><i class="fas fa-check-circle"></i></div>
                        <h4 class="principle-title">Quality Assurance</h4>
                        <p class="principle-text">Ensuring the highest standards for water quality through rigorous testing and regulatory compliance.</p>
                    </div>
                </div>

                <!-- Principle 2: Sustainability -->
                <div class="col">
                    <div class="principle-card text-center">
                        <div class="principle-icon"><i class="fas fa-leaf"></i></div>
                        <h4 class="principle-title">Sustainability</h4>
                        <p class="principle-text">Using environmentally friendly practices to protect natural resources and minimize waste.</p>
                    </div>
                </div>

                <!-- Principle 3: Hygiene and Safety -->
                <div class="col">
                    <div class="principle-card text-center">
                        <div class="principle-icon"><i class="fas fa-hand-sparkles"></i></div>
                        <h4 class="principle-title">Hygiene & Safety</h4>
                        <p class="principle-text">Maintaining strict sanitation protocols to ensure safe and uncontaminated water.</p>
                    </div>
                </div>

                <!-- Principle 4: Efficiency -->
                <div class="col">
                    <div class="principle-card text-center">
                        <div class="principle-icon"><i class="fas fa-cogs"></i></div>
                        <h4 class="principle-title">Efficiency</h4>
                        <p class="principle-text">Optimizing production processes to reduce costs and ensure timely delivery.</p>
                    </div>
                </div>

                <!-- Principle 5: Customer Focus -->
                <div class="col">
                    <div class="principle-card text-center">
                        <div class="principle-icon"><i class="fas fa-users"></i></div>
                        <h4 class="principle-title">Customer Focus</h4>
                        <p class="principle-text">Providing high-quality products and excellent service to ensure customer satisfaction.</p>
                    </div>
                </div>

                <!-- Principle 6: Innovation -->
                <div class="col">
                    <div class="principle-card text-center">
                        <div class="principle-icon"><i class="fas fa-lightbulb"></i></div>
                        <h4 class="principle-title">Innovation</h4>
                        <p class="principle-text">Pursuing continuous improvements in technology and production processes.</p>
                    </div>
                </div>

                <!-- Principle 7: Traceability -->
                <div class="col">
                    <div class="principle-card text-center">
                        <div class="principle-icon"><i class="fas fa-search-location"></i></div>
                        <h4 class="principle-title">Traceability</h4>
                        <p class="principle-text">Maintaining transparency through detailed records of water sources and processing.</p>
                    </div>
                </div>

                <!-- Principle 8: Compliance -->
                <div class="col">
                    <div class="principle-card text-center">
                        <div class="principle-icon"><i class="fas fa-gavel"></i></div>
                        <h4 class="principle-title">Compliance</h4>
                        <p class="principle-text">Adhering to local and international regulations for water quality and environmental impact.</p>
                    </div>
                </div>

                <!-- Principle 9: Community Engagement -->
                <div class="col">
                    <div class="principle-card text-center">
                        <div class="principle-icon"><i class="fas fa-handshake"></i></div>
                        <h4 class="principle-title">Community Engagement</h4>
                        <p class="principle-text">Supporting sustainable practices and contributing to local development.</p>
                    </div>
                </div>

                <!-- Principle 10: Employee Training -->
                <div class="col">
                    <div class="principle-card text-center">
                        <div class="principle-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                        <h4 class="principle-title">Employee Training</h4>
                        <p class="principle-text">Investing in employee development to ensure best practices in production and safety.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('facts')
    @include('includes.fact-counter')
@endsection


@section('services')
    @include('includes.quality')
@endsection
