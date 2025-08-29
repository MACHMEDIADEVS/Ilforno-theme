<?php

/**
 * Template Name: Menu Page
 *
 * @package IL_Forno_a_Legna
 */

get_header();
?>

<style>
    /* Header transparente por defecto */
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

    /* Al hacer scroll: overlay oscuro uniforme */
    #main-header.scrolled {
        background-color: rgba(0, 0, 0, 0.55) !important;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    }

    

    /* SECCION MAIN MENU */
    #main-menu {
        background-color: #1a1a1a;
    }

    #main-menu h2 {
        color: var(--primary);
    }

    .menu-card {
        border: 2px solid rgba(191, 152, 97, 0.5);
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    .menu-card:hover {
        transform: translateY(-5px);
        /* Mantiene leve movimiento sin luz */
    }

    .menu-img {
        position: relative;
        height: 250px;
        overflow: hidden;
    }

    .menu-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .menu-card:hover .menu-img img {
        transform: scale(1.05);
        /* Solo zoom, sin luminosidad */
    }

    .menu-img .overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.4);
    }

    .category-title {
        position: absolute;
        bottom: 15px;
        left: 15px;
        font-size: 1.6rem;
        font-weight: bold;
        color: var(--light-cream);
    }

    .menu-items {
        padding: 15px;
    }

    .menu-item {
        display: flex;
        justify-content: space-between;
        padding: 8px 0;
        border-bottom: 1px solid rgba(191, 152, 97, 0.2);
    }

    .menu-item:last-child {
        border-bottom: none;
    }

    .price {
        color: var(--primary);
        font-weight: bold;
    }

    /* ===== Menu catering ===== */
    /* ===== Menu catering elegante ===== */
    #catering-menu {
        background-color: var(--light-cream);
        /* Fondo de la sección */
        padding-top: 60px;
        padding-bottom: 60px;
    }

    #catering-menu .card {
        background-color: var(--light-cream);
        /* Fondo de las cards */
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid rgba(191, 152, 97, 0.3);
        /* Borde dorado suave */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    #catering-menu .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    #catering-menu .card-title {
        font-size: 1.2rem;
        color: var(--primary);
        /* Color de títulos */
        border-bottom: 2px solid var(--primary);
        display: inline-block;
        padding-bottom: 5px;
        margin-bottom: 15px;
    }

    #catering-menu ul li {
        padding: 6px 0;
        font-size: 0.95rem;
        color: #1a1a1a;
        /* Color del texto de la información */
        display: flex;
        justify-content: space-between;
    }

    #catering-menu ul li span {
        color: var(--primary);
        /* Color de los precios */
        font-weight: bold;
    }

    #catering-menu img {
        height: 180px;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    #catering-menu .card:hover img {
        transform: scale(1.05);
    }

    /* Botón dorado */
    /* Botón dorado */
    .btn-gold {
        background-color: var(--primary);
        color: #1a1a1a;
        font-weight: bold;
        padding: 10px 25px;
        border: 2px solid var(--primary);
        /* Borde visible siempre */
        border-radius: 8px;
        text-transform: uppercase;
        transition: all 0.3s ease;
    }

    .btn-gold:hover {
        background-color: transparent;
        /* Fondo transparente en hover */
        color: var(--primary);
        /* Texto dorado */
        border-color: var(--primary);
        /* Mantener borde dorado */
    }

    /* Botón contorno dorado */
    .btn-outline-gold {
        background-color: transparent;
        color: var(--primary);
        border: 2px solid var(--primary);
        font-weight: bold;
        padding: 10px 25px;
        border-radius: 8px;
        text-transform: uppercase;
        transition: all 0.3s ease;
    }

    .btn-outline-gold:hover {
        background-color: var(--primary);
        color: #1a1a1a;
        border-color: var(--primary);
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
        color: var(--primary);
    }

    /* Cards uniformes */
    .package-card {
        background-color: rgba(17, 17, 17, 0.95);
        border: 2px solid var(--primary);
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
        color: var(--light-cream);
        font-size: 0.95rem;
        padding: 4px 0;
    }

    /* Badge */
    .badge-popular {
        background-color: var(--primary);
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
        color: var(--primary);
        border: 2px solid var(--primary);
        font-weight: bold;
        padding: 8px 20px;
        border-radius: 8px;
        text-transform: uppercase;
        font-size: 0.85rem;
        transition: all 0.3s ease;
    }

    .btn-outline-gold:hover {
        background-color: var(--primary);
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

    /* Seccion populares */
    /* Fondo de toda la sección */
    #customer-favorites {
        background-color: #1a1a1a;
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    /* Ajuste del título de la sección */
    #customer-favorites h2 {
        margin-top: 0.5rem;
        /* sube el título */
        margin-bottom: 2rem;
        /* más espacio hacia abajo */
        text-align: center;
        /* centrado horizontal */
    }

    /* Imagen izquierda */
    .favorites-left-img img {
        height: 100%;
        object-fit: cover;
    }

    /* Fondo parte derecha */
    .favorites-right {
        background-color: #111111;
    }

    /* Card de cada ítem */
    .favorite-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        height: 260px;
        /* altura fija */
        text-align: center;
    }

    

    /* Botón contorno dorado */
    .btn-outline-gold {
        background-color: transparent;
        color: var(--primary);
        border: 2px solid var(--primary);
        font-weight: bold;
        padding: 6px 15px;
        border-radius: 8px;
        text-transform: uppercase;
        font-size: 0.8rem;
        transition: all 0.3s ease;
    }

    .btn-outline-gold:hover {
        background-color: var(--primary);
        color: #1a1a1a;
    }

    /* Texto dorado */
    .text-gold {
        color: var(--primary);
    }

    /* ✅ Ajuste solo para escritorio para igualar altura columnas */
    @media (min-width: 1200px) {
        #customer-favorites .row {
            display: flex;
            align-items: stretch;
        }

        .favorites-left-img,
        .favorites-right {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .favorites-left-img img {
            height: 100%;
            object-fit: cover;
        }
    }

    /* Ajustes responsive */
    @media (max-width: 991px) {
        .favorites-left-img {
            display: block;
            /* ✅ Asegura que la imagen aparezca */
            width: 100%;
            margin-bottom: 1rem;
        }

        .favorites-left-img img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .favorites-right {
            padding: 2rem 1rem;
            text-align: center;
        }
    }

    @media (max-width: 576px) {
        .favorite-img {
            width: 140px;
            height: 140px;
        }

        .favorite-card {
            height: auto;
            /* en móvil dejamos que crezca */
        }
    }

    .btn-outline-gold {
        padding: 10px 25px !important;
        font-size: 1rem !important;
    }
</style>

<!-- HERO -->
<?php get_template_part('template-parts/hero'); ?>

<!-- CUSTOMER FAVORITES -->
 <?php get_template_part('template-parts/menu/customer-favorites'); ?>

<!-- MAIN MENU -->
<?php get_template_part('template-parts/menu/main-menu'); ?>

<!-- CATERING MENU -->
<?php get_template_part('template-parts/menu/catering-menu'); ?>

<!-- EVENT PACKAGES -->
<?php get_template_part('template-parts/menu/event-packages'); ?>

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