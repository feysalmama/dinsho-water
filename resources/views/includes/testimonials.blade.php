    <!-- Testimonial Section -->
    <div class="container-fluid testimonial pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Testimonials</h4>
                <h1 class="display-3 text-capitalize mb-3">What Our Clients Say</h1>
            </div>

            <!-- Swiper Container -->
            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">
                    <!-- Testimonial Item 1 -->
                    <div class="swiper-slide testimonial-item text-center">
                        <p>"This platform exceeded my expectations. The service was top-notch and the team was highly professional."</p>
                        <h4 class="text-dark mt-3">-Client Name</h4>
                        <p class="text-muted">CEO, Example Company</p>
                       
                    </div>

                    <!-- Testimonial Item 2 -->
                    <div class="swiper-slide testimonial-item text-center">
                        <p>"The professionalism and timely delivery were impressive. We’re looking forward to future collaborations."</p>
                        <h4 class="text-dark mt-3">- Client Name</h4>
                        <p class="text-muted">CTO, Innovators Hub</p>
                        
                    </div>

                    <!-- Testimonial Item 3 -->
                    <div class="swiper-slide testimonial-item text-center">
                        <p>"I highly recommend this team for any software project. Their attention to detail is exceptional."</p>
                        <h4 class="text-dark mt-3">- Client Name</h4>
                        <p class="text-muted">Manager, Tech Solutions</p>
                       
                    </div>
                </div>
<br>
                <!-- Swiper Pagination & Navigation -->
                <div class="swiper-pagination mt-3"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
        // Initialize Swiper
        const swiper = new Swiper('.testimonial-swiper', {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>