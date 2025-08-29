<?php

/**
 * The template for displaying the homepage.
 *
 * @package IL_Forno_a_Legna
 */

get_header();
?>

<style>
    .custom-btn {
        background-color: var(--primary);
        color: #000;
        border: none;
        padding: 12px 30px;
        border-radius: 10px;
        font-size: 18px;
        text-transform: uppercase;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }
    .custom-btn:hover {
        background-color: var(--light-cream);
        color: var(--white);
    }
    .info-section .info-box {
        padding: 30px 15px;
        border-radius: 0px;
    }
    .no-gutters {
        margin-left: 0;
        margin-right: 0;
    }
    .hero-image img {
        object-fit: cover;
        height: 100%;
        width: 100%;
    }
    .hero-text {
        padding: 50px;
        background-color: rgba(0, 0, 0, 0.5);
    }
    .hero-text h1 {
        font-size: 50px;
        font-weight: bold;
        margin-bottom: 20px;
    }
    .hero-text p {
        font-size: 18px;
        margin-bottom: 20px;
    }
    .hero-text .highlight {
        color: #ff9900;
    }
    @media (max-width: 768px) {
        .hero-text h1 {
            font-size: 35px;
        }

        .hero-text p {
            font-size: 16px;
        }
    }
    .btn-menu {
        background-color: var(--primary);
        color: var(--light-cream);
        border-radius: 10px;
        padding: 12px 30px;
        font-weight: 600;
        display: inline-block;
        transition: all 0.3s ease-in-out;
        text-decoration: none;
    }
    .btn-menu:hover {
        background-color: var(--light-cream);
        color: #1a1a1a;
        text-decoration: none;
    }
    @media (max-width: 768px) {
        .services-tabs {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px 15px;
        }

        .services-tabs .nav-item {
            flex: 0 0 30%;
            text-align: center;
        }

        .services-tabs .nav-item:nth-child(4) {
            flex-basis: 100%;
            height: 0;
            margin: 0;
        }

        .services-tabs .nav-item:nth-child(5),
        .services-tabs .nav-item:nth-child(6) {
            flex: 0 0 40%;
        }

        .services-tabs .nav-link {
            width: 100%;
            white-space: nowrap;
        }
    }
   .order-section {
        background-color: #1a1a1a;
    }
    .card-option {
        display: block;
        text-align: center;
        padding: 40px 20px;
        border-radius: 12px;
        font-size: 1.25rem;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    }
    .card-order {
        background-color: var(--primary);
        color: #1a1a1a;
    }
    .card-order:hover {
        background-color: var(--light-cream);
        color: #1a1a1a;
    }
    .card-reserve {
        background-color: #02332d;
        color: var(--white);
    }
    .card-reserve:hover {
        background-color: #035245;
        color: var(--white);
    }
    .order-section h2 {
        font-size: 2.5rem;
    }
    .order-section p {
        font-size: 1.1rem;
        max-width: 700px;
        margin: 0 auto;
    }
    @media (min-width: 768px) {
        .card-option {
            padding: 20px 28px;
            font-size: 1.1rem;
            border-radius: 10px;
        }
    }

    @media (max-width: 575.98px) {
        .card-option {
            padding: 12px 16px;
            font-size: 0.95rem;
            border-radius: 8px;
        }
    }
    .blog-section {
        background-color: var(--light-cream);
    }

    .blog-section {
        padding-top: 3rem;
        padding-bottom: 8rem;
    }

    .blog-card {
        background-color: var(--primary);
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .blog-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 24px rgba(63, 62, 62, 0.12);
    }

    .blog-card h5 {
        font-size: 1.25rem;
        margin-bottom: 10px;
    }

    .blog-card p {
        font-size: 1rem;
        margin-bottom: 10px;
    }

    .read-more {
        text-decoration: none;
        font-weight: 600;
        color: #1a1a1a;
        transition: color 0.3s ease;
    }

    .read-more:hover {
        color: #1a1a1a;
    }

    .blog-card img {
        height: 300px;
        object-fit: cover;
        width: 100%;
        display: block;
    }



    .social-newsletter-section {
        background-color: #1a1a1a;
    }

    .newsletter-form input[type="email"] {
        border-radius: 50px;
        padding: 12px 20px;
        border: none;
        flex: 1;
    }

    .btn-newsletter {
        background-color: var(--primary);
        color: #1a1a1a;
        font-weight: 600;
        border-radius: 50px;
        padding: 12px 30px;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-newsletter:hover {
        background-color: var(--light-cream);
        color: #1a1a1a;
    }

    .footer-icon {
        font-size: 1.5rem;
        color: var(--light-cream);
        transition: color 0.3s ease;
    }

    .footer-icon:hover {
        color: var(--primary);
    }
    .special-dish-section {
        background-color: #000000;
    }

    .special-dish-section {
        margin-top: 60px;
    }

    .special-dish-section .text-gold {
        color: var(--primary);
    }

    .special-dish-section .letter-spacing {
        letter-spacing: 0.15em;
    }

    .special-dish-section h2 {
        color: var(--white);
    }

    .special-dish-section p {
        color: var(--light-cream);
    }

    .special-dish-section .object-fit-cover {
        object-fit: cover;
        height: 100%;
    }

    @media (max-width: 575.98px) {
        .special-dish-section .container-fluid {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .special-dish-section .img-fluid.full-mobile-img {
            width: 100vw;
            height: 400px !important;
            object-fit: cover;
            margin-left: 0;
            margin-right: 0;
            display: block;
        }

        .special-dish-section .col-lg-6.p-5 {
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        .special-dish-section .col-lg-6.p-5 {
            padding-left: 1rem !important;
            padding-right: 1rem !important;
            padding-top: 1.5rem !important;
            padding-bottom: 2rem !important;
        }
    }
    .testimonial-card {
        background-color: var(--light-cream);
        color: #1a1a1a;
        border: 1px solid var(--primary);
    }

    .testimonial-card:hover {
        transform: translateY(-5px);
    }

    .testimonial-card img {
        border: 2px solid var(--primary);
        object-fit: cover;
    }

    .testimonial-card p.fst-italic {
        font-size: 0.95rem;
        color: #000000;
    }

    .testimonial-card .text-warning {
        color: var(--primary) !important;
        font-size: 1.1rem;
    }

    .testimonial-card .fw-bold {
        color: var(--primary);
    }

    .testimonial-stars {
        color: #e2890d;
    }

    #event-packages {
        margin-top: 5px;
    }
</style>



<!-- HERO -->
<?php get_template_part('template-parts/home/home', 'hero'); ?>

<!-- SUB-HERO -->
<?php get_template_part('template-parts/home/home', 'promo'); ?>

<!-- OUR SERVICES -->
<?php get_template_part('template-parts/home/home', 'services'); ?>

<!-- SUB-HERO WELCOME -->
<?php get_template_part('template-parts/home/home', 'welcome'); ?>

<!-- SUB-HERO PROMO 2 -->
<?php get_template_part('template-parts/home/home', 'promo-2'); ?>

<!-- SPECIAL DISHES -->
<?php get_template_part('template-parts/home/home', 'special-dishes'); ?>

<!-- REVIEWS -->
<?php get_template_part('template-parts/home/home', 'reviews'); ?>

<!-- BLOGS SECTION -->
<?php get_template_part('template-parts/home/home', 'blogs'); ?>

<section class="social-newsletter-section py-5">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-md-7">
                <h4 class="text-light fw-bold mb-3">Subscribe to our newsletter</h4>
                <form class="newsletter-form d-flex flex-column flex-sm-row gap-2">
                    <input type="email" class="form-control" placeholder="Enter your email address" required />
                    <button type="submit" class="btn-newsletter">Subscribe</button>
                </form>
                <small class="text-light d-block mt-2">
                    Get the latest updates in your inbox. No spam, we promise.
                </small>
            </div>

            <div class="col-md-5 text-center text-md-end">
                <div class="d-flex justify-content-center justify-content-md-end gap-3">
                    <a href="https://www.tiktok.com/@ilfornolegna" aria-label="TikTok" class="text-decoration-none">
                        <i class="bi bi-tiktok fs-3 text-light"></i>
                    </a>
                    <a href="https://www.facebook.com/ilfornolegna" aria-label="Facebook" class="text-decoration-none">
                        <i class="bi bi-facebook fs-3 text-light"></i>
                    </a>
                    <a href="https://www.instagram.com/ilfornolegna/" aria-label="Instagram" class="text-decoration-none">
                        <i class="bi bi-instagram fs-3 text-light"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    window.addEventListener("scroll", function() {
        const header = document.getElementById("main-header");

        if (window.innerWidth >= 992) {
            // Solo aplica si es desktop
            if (window.scrollY > 50) {
                header.classList.add("scrolled");
            } else {
                header.classList.remove("scrolled");
            }
        } else {
            // En mobile, el header no cambia con el scroll
            header.classList.remove("scrolled");
        }
    });

    document.addEventListener("DOMContentLoaded", function() {
        // Inicializa el carrusel de reseñas
        new Swiper(".reviews-swiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    slidesPerGroup: 1,
                },
                992: {
                    slidesPerView: 3,
                    slidesPerGroup: 1,
                },
            },
        });
    });
</script>

<?php
get_footer();
?>