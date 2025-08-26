<?php
// Obtener el título de la sección de testimonios
$testimonials_title = get_field('testimonials_title') ?: 'What Our Guests Say';
?>

<section class="testimonials-section text-white">
    <div class="container text-center">
        <h2 class="fw-bold mb-5"><?php echo esc_html($testimonials_title); ?></h2>

        <?php // El resto del contenido permanece estático, como se solicitó 
        ?>
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-3 mb-4 mb-md-0 d-flex flex-column align-items-center text-center">
                <div class="google-info-content">
                    <h5 class="text-warning fw-bold">EXCELLENT</h5>
                    <div class="stars-rating text-warning mb-2">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>

                    <h3 class="google-rating-number">4.7</h3>

                    <p class="google-reviews-count">Based on 1631 reviews</p>

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/google-logo.webp" alt="Google Reviews" class="google-logo" width="80" height="auto" />
                </div>
            </div>

            <div class="col-12 col-md-9">
                <div class="swiper reviews-swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-card p-4 rounded h-100 d-flex flex-column">
                                <p class="fst-italic flex-grow-1">
                                    “The service was incredible, and the wood-fired pizza is out of this world. Highly recommend this amazing restaurant Excellent.”
                                </p>
                                <div class="testimonial-stars mb-2">★★★★★</div>
                                <p class="fw-bold text-warning mb-0">– Javier R.</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-card p-4 rounded h-100 d-flex flex-column">
                                <p class="fst-italic flex-grow-1">
                                    “The service was incredible, and the wood-fired pizza is out of this world. Highly recommend this amazing restaurant.”
                                </p>
                                <div class="testimonial-stars mb-2">★★★★★</div>
                                <p class="fw-bold text-warning mb-0">– Sofia M.</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-card p-4 rounded h-100 d-flex flex-column">
                                <p class="fst-italic flex-grow-1">
                                    “The service was incredible, and the wood-fired pizza is out of this world. Highly recommend this amazing restaurant.”
                                </p>
                                <div class="testimonial-stars mb-2">★★★★★</div>
                                <p class="fw-bold text-warning mb-0">– Hector S.</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-card p-4 rounded h-100 d-flex flex-column">
                                <p class="fst-italic flex-grow-1">
                                    “The pizzas are cooked to perfection with fresh ingredients and a crispy crust. We couldn't have been happier.”
                                </p>
                                <div class="testimonial-stars mb-2">★★★★★</div>
                                <p class="fw-bold text-warning mb-0">– Elena G.</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-card p-4 rounded h-100 d-flex flex-column">
                                <p class="fst-italic flex-grow-1">
                                    “Genius! This is my go-to place for pizza. The flavors are so rich and authentic, and the staff is always so welcoming.”
                                </p>
                                <div class="testimonial-stars mb-2">★★★★★</div>
                                <p class="fw-bold text-warning mb-0">– David L.</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-card p-4 rounded h-100 d-flex flex-column">
                                <p class="fst-italic flex-grow-1">
                                    “The pizzas are cooked to perfection with fresh ingredients and a crispy crust. We couldn't have been happier Very delicious Wow!.”
                                </p>
                                <div class="testimonial-stars mb-2">★★★★★</div>
                                <p class="fw-bold text-warning mb-0">– Laura P.</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-card p-4 rounded h-100 d-flex flex-column">
                                <p class="fst-italic flex-grow-1">
                                    “A perfect spot for a casual date night. The ambiance is lovely and the pizzas are consistently delicious. A must-try!”
                                </p>
                                <div class="testimonial-stars mb-2">★★★★★</div>
                                <p class="fw-bold text-warning mb-0">– Alex K.</p>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</section>