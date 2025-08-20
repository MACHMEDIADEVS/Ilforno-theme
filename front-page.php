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

    /* Hero Section */
    .hero-section {
        color: white;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .hero-section .display-4 {
        font-size: 3rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
    }

    .hero-section .lead {
        font-size: 1.25rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
    }

    /* Ajustes específicos para móviles */
    @media (max-width: 576px) {
        .hero-section .display-4 {
            font-size: 2rem;
        }

        .hero-buttons {
            flex-direction: column !important;
            align-items: center !important;
            gap: 16px !important;
        }

        .hero-buttons a {
            width: 100%;
            max-width: 260px;
        }

        .hero-section .ms-3 {
            margin-left: 0 !important;
            /* Elimina el margen entre botones */
        }
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

    /* Hero Section */
    .hero-section {
        position: relative;
        color: white;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Capa de superposición oscura */
    .hero-section .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        /* Color negro con opacidad */
        z-index: 1;
        /* Coloca la capa de superposición por encima de la imagen */
    }

    /* Asegura que el contenido de la sección esté sobre la superposición */
    .hero-section .container {
        position: relative;
        z-index: 2;
        /* Contenido por encima de la superposición */
    }

    .hero-section h1 {
        font-size: 3rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
        /* Sombra para mejorar la legibilidad */
    }

    .hero-section .lead {
        font-size: 1.25rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
        /* Sombra para mejorar la legibilidad */
    }

    /* Ajuste para la responsividad en pantallas pequeñas */
    @media (max-width: 768px) {
        .hero-section h1 {
            font-size: 2rem;
        }

        .hero-section .lead {
            font-size: 1rem;
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

    /* Hero ABOUT US */
    .hero-section {
        background-color: #171717;
        color: white;
        padding: 0;
        /* Elimina el padding para que quede pegado al hero */
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

    .hero-section .btn {
        font-size: 18px;
        padding: 12px 30px;
        background-color: #bf9861;
        color: #1a1a1a;
        border: none;
        border-radius: 10px;
        text-transform: uppercase;
    }

    .hero-section .btn:hover {
        background-color: #dacfbd;
        color: #fff;
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

<?php
/**
 * Obtener los datos de los campos personalizados (ACF) para la sección Hero.
 * Usamos el contenido estático original como valores por defecto en caso de que los campos estén vacíos.
 */
$video_url = get_field('hero_video_bg') ?: get_template_directory_uri() . '/assets/img/ilforno.webm';
$title     = get_field('hero_title_h1') ?: 'The Pizza Spot of Rahway, NJ Since 2018';
$subtitle  = get_field('hero_subtitle_h2') ?: 'New Jersey’s Best Chicken Parm We Made the List!';
?>

<section class="hero-section position-relative overflow-hidden" style="height: 100vh">

    <?php // Imprimimos la URL del video de forma segura 
    ?>
    <video autoplay muted loop playsinline class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover">
        <source src="<?php echo esc_url($video_url); ?>" type="video/webm" />
        Tu navegador no soporta la etiqueta de video.
    </video>

    <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.5); z-index: 1"></div>

    <div class="container text-center text-white d-flex flex-column justify-content-center align-items-center h-100 position-relative" style="z-index: 2">

        <?php // Imprimimos el título y subtítulo de forma segura 
        ?>
        <h1 class="display-4"><?php echo esc_html($title); ?></h1>
        <p class="lead"><?php echo esc_html($subtitle); ?></p>

        <?php // Verificamos si el campo repetidor 'hero_buttons' tiene filas (botones) 
        ?>
        <?php if (have_rows('hero_buttons')) : ?>
            <div class="hero-buttons d-flex flex-column flex-md-row justify-content-center align-items-center gap-2">

                <?php
                $button_count = 0; // Inicializamos un contador para el estilo del primer botón
                // Iniciamos el bucle para recorrer cada botón
                while (have_rows('hero_buttons')) : the_row();

                    // Obtenemos los datos de los sub-campos para este botón específico
                    $button_text = get_sub_field('text_button_hero');
                    $button_link = get_sub_field('link_button_hero');

                    // Lógica para asignar la clase 'btn-outline-light' solo al primer botón
                    $btn_class = ($button_count === 0) ? 'btn-outline-light' : '';
                ?>
                    <a href="<?php echo esc_url($button_link); ?>" class="btn btn-lg <?php echo $btn_class; ?> custom-btn">
                        <?php echo esc_html($button_text); ?>
                    </a>
                <?php
                    $button_count++; // Incrementamos el contador
                endwhile;
                ?>
            </div>
        <?php endif; ?>

    </div>
</section>

<section class="info-section">
    <div class="container-fluid p-0">
        <div class="row gx-0 text-center">

            <?php
            // Comprobamos si el repetidor 'secciones_informacion_hero' tiene contenido
            if (have_rows('secciones_informacion_hero')) :
                // Creamos un array con las clases de los iconos para mantenerlos en orden
                $icons = ['bi-telephone-fill', 'bi-geo-alt-fill', 'bi-clock'];
                $icon_index = 0;

                // Iniciamos el bucle para recorrer cada sección de información
                while (have_rows('secciones_informacion_hero')) : the_row();

                    // Obtenemos los valores de los sub-campos (ahora ambos son texto)
                    $title = get_sub_field('title_sectionbar_p');
                    $description = get_sub_field('description_sectionbar_p');
            ?>
                    <div class="col-md-3 info-box bg-dark text-white">

                        <i class="bi <?php echo esc_attr($icons[$icon_index]); ?> big-icon"></i>

                        <div class="info-text">
                            <h4><?php echo esc_html($title); ?></h4>
                            <p><?php echo esc_html($description); ?></p>
                        </div>
                    </div>
                <?php
                    $icon_index++;
                endwhile;
            else :
                // Contenido de respaldo si el repetidor está vacío
                ?>
                <div class="col-md-3 info-box bg-dark text-white">
                    <i class="bi bi-telephone-fill big-icon"></i>
                    <div class="info-text">
                        <h4>(732) 382-6600</h4>
                        <p>Call us for bookings or questions</p>
                    </div>
                </div>
                <div class="col-md-3 info-box bg-dark text-white">
                    <i class="bi bi-geo-alt-fill big-icon"></i>
                    <div class="info-text">
                        <h4>1464 Main St, Rahway, NJ</h4>
                        <p>Downtown Rahway</p>
                    </div>
                </div>
                <div class="col-md-3 info-box bg-dark text-white">
                    <i class="bi bi-clock big-icon"></i>
                    <div class="info-text">
                        <h4>Open Monday - Sunday</h4>
                        <p>11:00 AM - 9:00 PM</p>
                    </div>
                </div>
            <?php endif; ?>

            <?php // La sección de redes sociales se mantiene estática, como solicitaste 
            ?>
            <div class="col-md-3 info-box social-box">
                <div class="social-icons">
                    <a href="https://www.tiktok.com/@ilfornolegna" aria-label="Síguenos en TikTok">
                        <i class="bi bi-tiktok"></i>
                    </a>
                    <a href="https://www.facebook.com/ilfornolegna" aria-label="Síguenos en Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/ilfornolegna/" aria-label="Síguenos en Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
// Obtener todos los datos de los campos del slider
$gallery_images = get_field('images_slider_promo_');
$title          = get_field('title_slider_h1_');
$description    = get_field('description_slider_p');
$button_text    = get_field('title_button_slider');
$button_link    = get_field('link_button_slider');

// Valores por defecto para el texto y el botón
$title_fallback       = "Authentic Neapolitan Style <br /> Casual Elegant Dining.";
$description_fallback = "Enjoy a relaxed yet refined dining experience with our brick‑oven Neapolitan pizza and Italian classics like Chicken Parm, Spaghetti & Meatballs, and more.";
$button_text_fallback = "Book a Table";
$button_link_fallback = "#reservation";
?>

<section class="promo-banner-slider text-white d-flex align-items-center position-relative">
    <div class="promo-overlay"></div>

    <?php
    // Comprobar si se han añadido imágenes a la galería
    if ($gallery_images) :
        // Recorrer cada imagen de la galería y crear un div para cada una
        foreach ($gallery_images as $image_url) :
    ?>
            <div class="promo-bg" style="background-image: url('<?php echo esc_url($image_url); ?>')"></div>
        <?php
        endforeach;
    else :
        // Si la galería está vacía, mostrar las imágenes por defecto para no romper el diseño
        ?>
        <div class="promo-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/promo-banner-2.png')"></div>
        <div class="promo-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/promo-banner.png')"></div>
    <?php endif; ?>

    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-6">
                <div class="promo-text p-4">
                    <h2 class="fw-bold mb-3">
                        <?php // Usamos wp_kses_post para permitir etiquetas como <br> de forma segura 
                        ?>
                        <?php echo wp_kses_post($title ?: $title_fallback); ?>
                    </h2>
                    <p class="mb-4">
                        <?php echo esc_html($description ?: $description_fallback); ?>
                    </p>
                    <a href="<?php echo esc_url($button_link ?: $button_link_fallback); ?>" class="btn btn-gold fw-bold">
                        <?php echo esc_html($button_text ?: $button_text_fallback); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-section py-5 section-with-bg position-relative" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/servi-fondo.png')">
    <div class="overlay-bg"></div>
    <div class="container mb-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-white">Our Services</h2>
            <p class="text-green">
                We do more than serve pizza. Explore our full list of services
                designed for all occasions.
            </p>
        </div>

        <ul class="nav nav-tabs justify-content-center services-tabs mb-4" id="servicesTab" role="tablist">
            <li class="nav-item d-inline-block" role="presentation">
                <button class="nav-link active" id="dinein-tab" data-bs-toggle="tab" data-bs-target="#dinein" type="button" role="tab">
                    Dine-In
                </button>
            </li>
            <li class="nav-item d-inline-block" role="presentation">
                <button class="nav-link" id="takeout-tab" data-bs-toggle="tab" data-bs-target="#takeout" type="button" role="tab">
                    Takeout
                </button>
            </li>
            <li class="nav-item d-inline-block" role="presentation">
                <button class="nav-link" id="catering-tab" data-bs-toggle="tab" data-bs-target="#catering" type="button" role="tab">
                    Catering
                </button>
            </li>
            <li class="w-100 d-block d-md-none"></li>
            <li class="nav-item d-inline-block" role="presentation">
                <button class="nav-link" id="truck-tab" data-bs-toggle="tab" data-bs-target="#truck" type="button" role="tab">
                    Pizza Truck
                </button>
            </li>
            <li class="nav-item d-inline-block" role="presentation">
                <button class="nav-link" id="private-tab" data-bs-toggle="tab" data-bs-target="#private" type="button" role="tab">
                    Private Events
                </button>
            </li>
        </ul>

        <div class="tab-content" id="servicesTabContent">
            <div class="tab-pane fade show active" id="dinein" role="tabpanel">
                <div class="service-card row g-0 align-items-center">
                    <div class="col-lg-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dine-in.png" class="img-fluid rounded-start w-100" alt="Dine-In" />
                    </div>
                    <div class="col-lg-6 p-4">
                        <h3 class="text-light fw-bold">Dine-In</h3>
                        <p class="text-light">
                            Enjoy a cozy, casual dining experience right on Main Street.
                            Our family-friendly restaurant offers freshly prepared
                            wood-fired pizzas, pasta, and Italian comfort food served hot
                            from our kitchen..
                        </p>
                        <a href="#" class="btn-service">Reserve Now</a>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="takeout" role="tabpanel">
                <div class="service-card row g-0 align-items-center">
                    <div class="col-lg-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/take.png" class="img-fluid rounded-start w-100" alt="Takeout" />
                    </div>
                    <div class="col-lg-6 p-4">
                        <h3 class="text-light fw-bold">Takeout</h3>
                        <p class="text-light">
                            Craving Italian at home? Call ahead or order online for fast
                            and reliable takeout. Your favorite pizza, pasta, and
                            appetizers ready when you are.
                        </p>
                        <a href="#" class="btn-service">Order Online</a>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="catering" role="tabpanel">
                <div class="service-card row g-0 align-items-center">
                    <div class="col-lg-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/catering 2.png" class="img-fluid rounded-start w-100" alt="Catering" />
                    </div>
                    <div class="col-lg-6 p-4">
                        <h3 class="text-light fw-bold">Catering</h3>
                        <p class="text-light">
                            From office lunches to weddings, our catering service brings
                            the flavor of Italy to your event. Choose from customizable
                            packages featuring trays of pasta, salads, entrees, and more.
                        </p>
                        <a href="#" class="btn-service">Call Now</a>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="truck" role="tabpanel">
                <div class="service-card row g-0 align-items-center">
                    <div class="col-lg-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/truck-party.png" class="img-fluid rounded-start w-100" alt="Truck Party" />
                    </div>
                    <div class="col-lg-6 p-4">
                        <h3 class="text-light fw-bold">Pizza Truck Service</h3>
                        <p class="text-light">
                            Elevate your event with our mobile pizza oven truck! Perfect
                            for birthdays, festivals, and private parties serving hot,
                            wood-fired pizzas on the spot.
                        </p>
                        <a href="#" class="btn-service">Call Now</a>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="private" role="tabpanel">
                <div class="service-card row g-0 align-items-center">
                    <div class="col-lg-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/private-events.png" class="img-fluid rounded-start w-100" alt="Private Events" />
                    </div>
                    <div class="col-lg-6 p-4">
                        <h3 class="text-light fw-bold">Private Events</h3>
                        <p class="text-light">
                            Celebrate your special moments with us. Our space is available
                            for birthdays, corporate gatherings, and family celebrations.
                            We’ll help you plan the perfect Italian-inspired event.
                        </p>
                        <a href="#" class="btn-service">Call Now</a>
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="pizza-welcome-section">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-6">
                <div class="pizza-image bg-cover h-100" style="
                background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/horno.png');
                min-height: 600px;
              "></div>
            </div>

            <div class="col-lg-6 position-relative text-side">
                <div class="text-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-dark-pizza.png')"></div>
                <div class="text-overlay"></div>

                <div class="d-flex align-items-center h-100 text-white px-5 py-5 position-relative" style="z-index: 2">
                    <div>
                        <h2 class="fw-bold mb-4">
                            Wood-fired <span class="text-warning">PIZZA</span> & <br />
                            Traditional Italian Dishes in Rahway, NJ
                        </h2>
                        <p class="text-light">
                            At IL Forno a Legna, we serve artisan wood‑fired pizzas,
                            handcrafted pastas, and timeless Italian favorites in a warm,
                            inviting setting. Join us for an elegant yet relaxed dining
                            experience, order online, or let us host your next special
                            event.
                        </p>
                        <a href="#" class="btn-menu mt-4">View Menu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="promo-hero text-white d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/events-intro.png')">
    <div class="promo-overlay"></div>
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <h2 class="fw-bold display-5">
                    Voted Best Chicken Parm in the City
                </h2>
                <p class="lead mt-3">
                    Come see why everyone’s talking about it. Our signature Chicken
                    Parm is made with tender, breaded chicken cutlets, house‑made
                    marinara, and layers of melted mozzarella, baked to perfection.
                    It’s an award‑winning favorite that’s become a local legend.
                </p>
                <p class="lead met-3">
                    Visit us and taste the best Chicken Parm you’ve ever had.
                </p>
                <a href="#reservation" class="btn btn-gold mt-4">View Full Menu</a>
            </div>
        </div>
    </div>
</section>

<section class="special-dish-section">
    <div class="container-fluid">
        <div class="row align-items-center g-0">
            <div class="col-lg-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/napolitana.png" alt="Pizza Napolitana" class="img-fluid w-100 h-100 object-fit-cover full-mobile-img" />
            </div>

            <div class="col-lg-6 p-5 text-white">
                <p class="text-uppercase small letter-spacing text-gold mb-2">
                    House Specialty
                </p>
                <h2 class="display-6 fw-bold mb-3">
                    Authentic Neapolitan, Wood‑Fired to Perfection
                </h2>
                <p class="fs-6">
                    Our Neapolitan pizza is where tradition meets flavor. Crafted with
                    thin, airy dough, San Marzano tomato sauce, creamy fresh
                    mozzarella, and fragrant basil, each pie is baked to perfection in
                    our wood‑fired oven.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="testimonials-section text-white">
    <div class="container text-center">
        <h2 class="fw-bold mb-5">What Our Guests Say</h2>

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

<section class="blog-section">
    <div class="container">
        <h2 class="text-center fw-bold text-dark mb-5">
            Fresh News & Happenings
        </h2>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog1.png" alt="Blog 1" class="img-fluid rounded-top" />
                    <div class="p-4">
                        <h5 class="fw-bold text-dark">Bring Your Own Bottle <br> Just Add Pizza</h5>
                        <p class="text-muted">
                            Yes, we’re BYOB! Pair your favorite wine or beer with our wood-fired pizzas...
                        </p>
                        <a href="#" class="btn-read">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog2.png" alt="Blog 2" class="img-fluid rounded-top" />
                    <div class="p-4">
                        <h5 class="fw-bold text-dark">Ranked Among New Jersey’s Best Chicken Parm</h5>
                        <p class="text-muted">
                            IL Forno a Legna’s Pollo Parmigiana made NJ.com’s list of the 21 best...
                        </p>
                        <a href="#" class="btn-read">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog3.png" alt="Blog 3" class="img-fluid rounded-top" />
                    <div class="p-4">
                        <h5 class="fw-bold text-dark">Wood-Fired Pizza on Wheels Bringing the Heat to You</h5>
                        <p class="text-muted">
                            IL Forno a Legna delivers authentic wood-fired pizza straight from their...
                        </p>
                        <a href="#" class="btn-read">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

<?php
// Inline scripts from the original HTML file.
// For best practices, this code should be moved to a dedicated .js file and enqueued.
// However, per the instructions, we are keeping it as-is for a direct conversion.
?>
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