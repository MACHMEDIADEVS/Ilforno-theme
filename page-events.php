<?php

/**
 * Template Name: Events Page
 *
 * @package IL_Forno_a_Legna
 */

get_header();
?>

<style>
    /* HEADER */
    #main-header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1030;
        background-color: transparent !important;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        padding: 15px 0;
    }

    #main-header.scrolled {
        background-color: rgba(0, 0, 0, 0.55) !important;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    }

    

    /* seccion introduccion */
    /* Colores personalizados */
    .text-gold {
        color: #bf9861;
    }

    /* Imagen con efecto */
    #event-introduction img {
        border: 0px solid #bf9861;
        transition: transform 0.3s ease;
    }

    #event-introduction img:hover {
        transform: scale(1.03);
    }

    /* Fondo */
    .bg-black {
        background-color: #1a1a1a !important;
    }

    /* Texto */
    #event-introduction p {
        color: #dacfbd;
    }

    /* ====== Event Services ====== */
    #event-services {
        background-color: #02332d;
        /* Fondo controlado solo desde CSS */
    }

    /* Colores */
    .text-gold {
        color: #bf9861;
    }

    /* Cards de servicios */
    .service-card {
        border: 2px solid #bf9861;
        background-color: #111111;
        border-radius: 5px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 20px rgba(191, 152, 97, 0.4);
    }

    /* Texto */
    .service-text {
        color: #dacfbd;
        font-size: 0.95rem;
    }

    /* ====== Event Packages ====== */
    /* Overlay oscuro */
    #event-packages .overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.6);
    }

    /* Color título */
    .text-gold {
        color: #bf9861;
    }

    /* Cards uniformes */
    .package-card {
        background-color: rgba(17, 17, 17, 0.95);
        border: 2px solid #bf9861;
        border-radius: 8px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .package-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 20px rgba(191, 152, 97, 0.4);
    }

    /* Lista */
    .package-card ul li {
        color: #dacfbd;
        font-size: 0.95rem;
        padding: 4px 0;
    }

    /* Badge */
    .badge-popular {
        background-color: #bf9861;
        color: #1a1a1a;
        font-weight: bold;
        padding: 5px 10px;
        border-radius: 20px;
        display: inline-block;
        margin-bottom: 10px;
    }

    /* Botón */
    .btn-outline-gold {
        background-color: transparent;
        color: #bf9861;
        border: 2px solid #bf9861;
        font-weight: bold;
        padding: 8px 20px;
        border-radius: 8px;
        text-transform: uppercase;
        font-size: 0.85rem;
        transition: all 0.3s ease;
    }

    .btn-outline-gold:hover {
        background-color: #bf9861;
        color: #1a1a1a;
    }

    #event-packages .package-card {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
    }

    /* Responsivo */
    @media (max-width: 991px) {
        .package-card {
            height: auto;
        }
    }

    /* ====== Sección Reserva ====== */
    #booking-form {
        background-color: #1a1a1a;
    }

    .text-gold {
        color: #bf9861;
    }

    #booking-form .btn-gold {
        background-color: #bf9861;
        color: #1a1a1a;
        font-weight: bold;
        padding: 0.9rem 1.5rem;
        /* <-- Ajustado para más altura */
        border-radius: 8px;
        text-transform: uppercase;
        transition: all 0.3s ease;
        border: none;
        width: 100%;
        /* Asegura que ocupe todo el ancho */
    }

    #booking-form .btn-gold:hover {
        background-color: #b0844f;
        color: #fff;
    }

    .booking-card {
        background-color: #1f1f1f;
        border-radius: 10px;
        color: #fff;
        padding: 1.5rem !important;
        /* <-- ¡AÑADIMOS !important PARA FORZAR EL ESTILO! */
    }

    /* Inputs y Selects */
    .booking-card .form-control,
    .booking-card .form-select {
        border-radius: 6px;
        border: 1px solid #444;
        background-color: #fff;
        color: #000;
    }

    /* Responsivo */
    @media (max-width: 991px) {
        #booking-form .row {
            text-align: center;
        }

        .booking-card {
            margin-top: 20px;
        }
    }

    /* seccion contacus */
    .text-gold {
        color: #bf9861;
    }

    .bg-black {
        background-color: #1a1a1a !important;
    }

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

    #why-choose-us ul li {
        color: #dacfbd;
        font-size: 1rem;
    }

    section {
        padding: 0px;
    }
</style>

<style>
    #faqs {
        background-color: #0f0f0f;
    }

    .modern-accordion {
        max-width: 900px;
        margin: 0 auto;
    }

    .accordion-item {
        background: #121212;
        border-left: 4px solid #bf9861;
        margin-bottom: 1.25rem;
        border-radius: 6px;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .accordion-title {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 1.2rem;
        background-color: #1a1a1a;
        color: #bf9861;
        font-weight: bold;
        font-size: 1rem;
        cursor: pointer;
        position: relative;
    }

    .accordion-title i {
        transition: transform 0.3s ease;
    }

    .accordion-item input:checked+.accordion-title i {
        transform: rotate(180deg);
    }

    .accordion-content {
        max-height: 0;
        overflow: hidden;
        background-color: #191919;
        color: #dacfbd;
        font-size: 0.95rem;
        padding: 0 1.2rem;
        transition: max-height 0.4s ease, padding 0.4s ease;
    }

    .accordion-item input:checked~.accordion-content {
        max-height: 500px;
        padding: 1rem 1.2rem;
    }
</style>

<!-- HERO -->
<?php get_template_part('template-parts/hero'); ?>

<!-- SUB-HERO -->
<?php get_template_part('template-parts/venue/subhero'); ?>

<!-- PACKAGES -->
<?php get_template_part('template-parts/venue/packages'); ?>

<!-- BOOK YOUR EVENT -->
<?php get_template_part('template-parts/venue/booking'); ?>

<!-- PACKAGES -->
<?php get_template_part('template-parts/venue/packages'); ?>

<!-- REASON BOOKING -->
 <?php get_template_part('template-parts/venue/reason-booking'); ?>

<!-- FAQs -->
<?php get_template_part('template-parts/venue/faqs'); ?>

<?php
// Script para el header, mantenido aquí para una conversión 1:1.
?>
<script>
    document.addEventListener("scroll", function() {
        const header = document.getElementById("main-header");
        if (window.scrollY > 50) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });
</script>

<?php
get_footer();
?>