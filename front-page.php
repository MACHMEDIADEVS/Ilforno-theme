<?php

/**
 * The template for displaying the homepage.
 *
 * @package IL_Forno_a_Legna
 */

get_header();
?>

<style>
    body {
        font-family: Arial, sans-serif;
        color: #333;
        background-color: #1a1a1a;
        margin: 0;
        padding: 0;
    }



    /* Info Section */
    /* Sección Info */
    .info-section {
        background-color: #bf9861;
    }

    .row.gx-0 {
        margin: 0;
    }

    .info-box {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        height: 100%;
        text-align: left;
        gap: 15px;
    }

    .info-box.bg-dark {
        background-color: #1a1a1a !important;
    }

    .big-icon {
        font-size: 1.4rem;
        color: #bf9861;
        flex-shrink: 0;
    }

    .info-text h4 {
        margin: 0;
        font-size: 1rem;
        font-weight: 600;
        color: white;
    }

    .info-text p {
        margin: 0;
        font-size: 0.85rem;
        color: #ccc;
    }

    /* Caja social */
    .social-box {
        justify-content: center;
        background-color: #bf9861;
    }

    .social-icons {
        display: flex;
        justify-content: center;
        gap: 35px;
        width: 100%;
    }

    .social-icons i {
        font-size: 2.2rem;
        color: #1a1a1a;
    }

    /* Responsive */
    @media (max-width: 767px) {
        .info-box {
            flex-direction: row;
            justify-content: flex-start;
            text-align: left;
            padding: 20px 15px;
        }

        .social-box {
            justify-content: center;
            text-align: center;
        }

        .social-icons {
            justify-content: center;
            gap: 30px;
        }
    }

    

    /* Estilo personalizado para el botón "View Menu" */
    .custom-btn {
        background-color: #bf9861;
        /* Color de fondo dorado */
        color: #000;
        /* Texto en color negro */
        border: none;
        padding: 12px 30px;
        border-radius: 10px;
        font-size: 18px;
        text-transform: uppercase;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    /* Efecto al pasar el ratón por encima */
    .custom-btn:hover {
        background-color: #dacfbd;
        /* Rojo oscuro al hacer hover */
        color: #fff;
        /* Texto blanco al hacer hover */
    }

    /* Estilo para las columnas */
    .info-section .info-box {
        padding: 30px 15px;
        /* Añadimos más padding (espaciado) dentro de las columnas */
        border-radius: 0px;
    }

    /* Eliminar márgenes laterales de las columnas */
    .no-gutters {
        margin-left: 0;
        margin-right: 0;
    }

    /* Iconos de redes sociales */
    .social-icons {
        display: flex;
        justify-content: center;
        width: 100%;
    }

    .social-icons i {
        margin: 0 15px;
        font-size: 1.5rem;
    }

    

    .hero-image img {
        object-fit: cover;
        height: 100%;
        width: 100%;
    }

    .hero-text {
        padding: 50px;
        background-color: rgba(0, 0, 0, 0.5);
        /* Fondo oscuro para el texto */
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
        /* Aciento amarillo */
    }



    @media (max-width: 768px) {
        .hero-text h1 {
            font-size: 35px;
        }

        .hero-text p {
            font-size: 16px;
        }
    }

    .pizza-image {
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 100%;
        width: 100%;
    }

    @media (max-width: 768px) {
        .pizza-image {
            min-height: 300px;
            /* o ajusta según lo que quieras mostrar */
            background-position: center top;
            /* o prueba center center si prefieres */
        }
    }

    @media (max-width: 575.98px) {
        .pizza-welcome-section .col-lg-6.d-flex {
            padding-left: 12px !important;
            padding-right: 12px !important;
        }

        .pizza-welcome-section .px-5 {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .pizza-welcome-section .col-lg-6.d-flex {
            padding-left: 12px;
            padding-right: 12px;
        }
    }

    /* Ajustar la imagen de fondo en versión móvil */
    @media (max-width: 576px) {
        .pizza-image {
            min-height: 300px;
            /* Ajustar altura */
            background-position: center center;
            /* Centrado */
        }

        .pizza-welcome-section .text-side {
            padding: 0 15px;
            /* Ajuste en el padding */
        }
    }

    .text-side {
        overflow: hidden;
    }

    .text-side .text-bg {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center center;
        z-index: 0;
    }

    .text-side .text-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to right,
                rgba(0, 0, 0, 0.75) 0%,
                rgba(0, 0, 0, 0.4) 50%,
                rgba(0, 0, 0, 0) 100%);
        z-index: 1;
    }

    /* estilo boton */
    .btn-menu {
        background-color: #bf9861;
        color: #dacfbd;
        border-radius: 10px;
        padding: 12px 30px;
        font-weight: 600;
        display: inline-block;
        transition: all 0.3s ease-in-out;
        text-decoration: none;
    }

    .btn-menu:hover {
        background-color: #dacfbd;
        color: #1a1a1a;
        text-decoration: none;
    }



    /* Seccion servicios */

    .services-section {
        background-color: #bf9861;
    }

    .services-section {
        margin-bottom: 60px;
        margin-top: 60px;
    }


    .text-green {
        color: #ffffff;
        font-weight: 500;
    }

    /* MODIFICADO: Selector más específico para asegurar que el título sea dorado */
    .services-section h2.text-dark {
        font-size: 2.5rem;
        color: #bf9861;
    }

    /* AÑADIDO: Espacio entre los botones para la vista de escritorio */
    .services-tabs {
        gap: 15px;
        border-bottom: none;
        /* <-- AÑADE ESTA LÍNEA PARA QUITAR LA LÍNEA */
    }

    .services-tabs .nav-link {
        background-color: transparent;
        color: #dacfbd;
        border: 1px solid rgba(218, 207, 189, 0.4);
        border-radius: 5px;
        font-weight: bold;
        font-size: 1.1rem;
        padding: 12px 20px;
        transition: all 0.3s ease-in-out;
    }

    .services-tabs .nav-link.active {
        background-color: #bf9861;
        color: #ffffff;
        border-color: #bf9861;
    }

    .services-tabs .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.05);
        color: #ffffff;
        border-color: rgba(218, 207, 189, 0.7);
    }

    /* --- El resto del código permanece igual --- */

    .service-card {
        background-color: #1a1a1a;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
        margin-top: 30px;
    }

    .btn-service {
        background-color: #dacfbd;
        color: #1a1a1a;
        border-radius: 10px;
        padding: 12px 30px;
        font-weight: 600;
        display: inline-block;
        margin-top: 20px;
        text-decoration: none;
        transition: all 0.3s ease-in-out;
    }

    .btn-service:hover {
        background-color: #bf9861;
        color: #ffffff;
    }

    /* VERSIÓN MÓVIL (SIN CAMBIOS EN LA ESTRUCTURA) */
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

    .section-with-bg {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        z-index: 1;
    }

    .section-with-bg .overlay-bg {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(39, 38, 38, 0.712);
        z-index: 1;
    }

    .section-with-bg .container {
        position: relative;
        z-index: 2;
    }


    /* Seccion ordenar */
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
        background-color: #bf9861;
        color: #1a1a1a;
    }

    .card-order:hover {
        background-color: #dacfbd;
        color: #1a1a1a;
    }

    .card-reserve {
        background-color: #02332d;
        color: #ffffff;
    }

    .card-reserve:hover {
        background-color: #035245;
        color: #ffffff;
    }

    .order-section h2 {
        font-size: 2.5rem;
        /* Ajusta según prefieras: 2.5rem, 3rem, etc */
    }

    .order-section p {
        font-size: 1.1rem;
        /* Más grande y legible */
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

    /* Ajuste móvil para botones */
    @media (max-width: 575.98px) {
        .card-option {
            padding: 12px 16px;
            font-size: 0.95rem;
            border-radius: 8px;
        }
    }




    /* seccion blog stilos */
    .blog-section {
        background-color: #dacfbd;
    }

    .blog-section {
        padding-top: 3rem;
        padding-bottom: 8rem;
    }

    .blog-card {
        background-color: #bf9861;
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
        /* Puedes ajustar: 180px, 220px, etc. */
        object-fit: cover;
        width: 100%;
        display: block;
    }

    /* botones stilo read more */
    .btn-read {
        background-color: #1a1a1a;
        color: #ffffff;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 10px;
        font-weight: 600;
        display: inline-block;
        transition: background-color 0.3s ease-in-out;
    }

    .btn-read:hover {
        background-color: #1a1a1a;
        color: #ffffff;
    }

    /* seccion social y newlatters */
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
        background-color: #bf9861;
        color: #1a1a1a;
        font-weight: 600;
        border-radius: 50px;
        padding: 12px 30px;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-newsletter:hover {
        background-color: #dacfbd;
        color: #1a1a1a;
    }

    .footer-icon {
        font-size: 1.5rem;
        color: #dacfbd;
        transition: color 0.3s ease;
    }

    .footer-icon:hover {
        color: #bf9861;
    }






    /* Seccion pizza napolitana */
    .special-dish-section {
        background-color: #000000;
    }

    .special-dish-section {
        margin-top: 60px;
    }

    .special-dish-section .text-gold {
        color: #bf9861;
    }

    .special-dish-section .letter-spacing {
        letter-spacing: 0.15em;
    }

    .special-dish-section h2 {
        color: #ffffff;
    }

    .special-dish-section p {
        color: #dacfbd;
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

    /* seccion reviews */
    .testimonials-section {
        background-color: #101010;
        color: #ffffff;
    }

    .testimonials-section {
        margin-bottom: 60px;
        margin-top: 60px;
        padding-bottom: 8rem;
        padding-top: 3rem;
    }



    .testimonials-section h2 {
        color: #ffffff;
        font-size: 2rem;
        margin-bottom: 2rem;
    }

    .testimonial-card {
        background-color: #dacfbd;
        /* antes era bg-secondary */
        color: #1a1a1a;
        /* texto más oscuro para mejor contraste */
        border: 1px solid #bf9861;
    }

    .testimonial-card:hover {
        transform: translateY(-5px);
    }

    .testimonial-card img {
        border: 2px solid #bf9861;
        object-fit: cover;
    }

    .testimonial-card p.fst-italic {
        font-size: 0.95rem;
        color: #000000;
    }

    .testimonial-card .text-warning {
        color: #bf9861 !important;
        font-size: 1.1rem;
    }

    .testimonial-card .fw-bold {
        color: #bf9861;
    }

    .testimonial-stars {
        color: #e2890d;
    }

    /* subhero slinder banner */
    .promo-banner-slider {
        position: relative;
        height: 80vh;
        overflow: hidden;
        display: flex;
        align-items: center;
    }

    .promo-banner-slider .promo-overlay {
        position: absolute;
        inset: 0;
        background-color: rgba(27, 27, 27, 0.55);
        /* oscurecer fondo */
        z-index: 1;
    }

    .promo-banner-slider .promo-bg {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
        opacity: 0;
        animation: fadeSlider 15s infinite ease-in-out;
        z-index: 0;
        transition: opacity 1s ease-in-out;
    }

    /* Imagen 1 */
    .promo-banner-slider .promo-bg:nth-child(2) {
        animation-delay: 0s;
    }

    /* Imagen 2 */
    .promo-banner-slider .promo-bg:nth-child(3) {
        animation-delay: 7.5s;
    }

    @keyframes fadeSlider {
        0% {
            opacity: 0;
        }

        10% {
            opacity: 1;
        }

        25% {
            opacity: 1;
        }

        45% {
            opacity: 1;
        }

        55% {
            opacity: 1;
        }

        75% {
            opacity: 1;
        }

        90% {
            opacity: 0;
        }

        100% {
            opacity: 0;
        }
    }

    .promo-banner-slider .container {
        position: relative;
        z-index: 2;
    }

    .btn-gold {
        background-color: #bf9861;
        color: #000;
        border: none;
        padding: 0.75rem 1.5rem;
        font-weight: bold;
        border-radius: 4px;
    }

    .btn-gold:hover {
        background-color: #a87d3d;
        color: #fff;
    }

    /* Hero de promoción */
    .promo-hero {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 100px 0;
        position: relative;
        z-index: 1;
        overflow: hidden;
    }

    /* Gradiente oscuro desde la izquierda */
    .promo-overlay {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to right,
                rgba(0, 0, 0, 0.9) 0%,
                rgba(0, 0, 0, 0.6) 40%,
                rgba(0, 0, 0, 0) 100%);
        z-index: 0;
    }

    /* Texto sobre el overlay */
    .promo-hero .container {
        position: relative;
        z-index: 1;
    }

    /* Botón dorado */
    .btn-gold {
        background-color: #bf9861;
        color: #1a1a1a;
        font-weight: bold;
        padding: 10px 25px;
        border-radius: 8px;
        text-transform: uppercase;
        transition: all 0.3s ease;
    }

    .btn-gold:hover {
        background-color: #b0844f;
        color: #fff;
    }

    /* Ajustes de texto para la sección promo-hero */
    .promo-hero h2 {
        font-size: 2.5rem;
        font-weight: bold;
        color: #fff;
        margin-bottom: 1rem;
    }

    .promo-hero p {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #f5f5f5;
        margin-bottom: 1rem;
    }

    /* Responsive para móvil */
    @media (max-width: 768px) {
        .promo-hero {
            padding: 60px 0;
        }

        .promo-overlay {
            background: rgba(0, 0, 0, 0.7);
            /* oscuro completo en mobile */
        }

        .promo-hero h2 {
            font-size: 1.5rem;
        }

        .promo-hero p {
            font-size: 0.95rem;
        }

        .promo-hero .container {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
    }

    .swiper-button-next,
    .swiper-button-prev {
        color: rgba(0, 0, 0, 0.174) !important;
        font-size: 0.5rem !important;
        width: 10px !important;
        height: 10px !important;
    }

    .btn-read {
        color: white !important;
    }

    .promo-hero {
        margin-bottom: 60px;
        margin-top: 60px;
    }

    #event-packages {
        margin-top: 5px;
    }
</style>

<style>
    .swiper-slide {
        .testimonial-card {
            a {
                color: #333 !important;
            }
        }
    }

    .swiper-pagination-bullet-active {
        opacity: var(--swiper-pagination-bullet-opacity, 0);
        background: var(--swiper-pagination-color, rgba(174, 129, 129, 0));
    }

    .swiper-pagination {
        margin-top: 5em !important;
        display: none;
    }

    .testimonial-card {
        height: 220px;
        /* Ajusta esta altura según tu preferencia */
    }

    /* O usa min-height si prefieres que la tarjeta crezca con el contenido */
    .testimonial-card {
        min-height: 27dvh !important;
        /* Ajusta esta altura según tu preferencia */
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