<?php

/**
 * Template Name: Catering Page
 */
get_header();

$intro_title       = get_field('catering_intro_title');
$intro_description = get_field('catering_intro_description');
$intro_button      = get_field('catering_intro_button');
$intro_image_url   = get_field('catering_intro_image');

$why_title = get_field('why_catering_title');

$packages_bg_url   = get_field('packages_image_bg');
$packages_title    = get_field('packages_section_title');

$form_title     = get_field('form_section_title');
$form_subtitle  = get_field('form_section_subtitle');
$form_image_url = get_field('form_image');
$form_shortcode = get_field('form_shortcode');
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

    /* HERO */
    .hero-events-section {
        position: relative;
        color: white;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 60vh;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .hero-events-section .overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.55);
        z-index: 1;
    }

    .hero-events-section .container {
        position: relative;
        z-index: 2;
    }

    @media (max-width: 768px) {
        .hero-events-section {
            height: 70vh;
        }
    }

    /* SECCION INTRODUCCION */
    /* Texto en dorado */
    .text-gold {
        color: var(--primary);
    }

    /* Imagen con efecto */
    #catering-introduction img {
        transition: transform 0.3s ease;
    }

    #catering-introduction img:hover {
        transform: scale(1.03);
    }

    /* Fondo negro */
    .bg-black {
        background-color: #1a1a1a !important;
    }

    /* Color de texto */
    #catering-introduction p {
        color: var(--light-cream);
    }

    /* ====== Why Choose Catering Section ====== */
    #why-catering-icons {
        background-color: #02332d;
        position: relative;
        z-index: 1;
    }

    #why-catering-icons .container {
        position: relative;
        z-index: 2;
    }

    #why-catering-icons h2 {
        color: var(--primary);
    }

    #why-catering-icons .why-card {
        background-color: var(--light-cream);
        /* fondo beige claro */
        border: 2px solid var(--primary);
        /* borde dorado */
        transition: all 0.3s ease;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    }

    #why-catering-icons .why-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
    }

    #why-catering-icons .why-card i,
    #why-catering-icons .why-card h5 {
        color: var(--primary);
    }

    #why-catering-icons .why-card p {
        font-size: 0.95rem;
        color: #1a1a1a;
        /* contraste con fondo claro */
    }

    /* ====== CATERING PAGE STYLES ====== */

    /* General Text Styling */
    .text-gold {
        color: var(--primary);
    }

    /* Hero Section */
    .catering-hero {
        background-image: url("img/catering-hero.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        padding: 100px 0;
        color: white;
    }

    .catering-hero::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        z-index: 0;
    }

    .catering-hero .container {
        position: relative;
        z-index: 1;
    }

    /* Section Titles */
    .section-title {
        color: var(--primary);
        font-weight: bold;
        margin-bottom: 2rem;
    }

    /* Why Choose Section */
    .why-choose {
        background-color: #111;
        color: var(--white);
        padding: 60px 0;
    }

    .why-choose ul {
        list-style: none;
        padding: 0;
    }

    .why-choose li::before {
        content: "\\2022";
        color: var(--primary);
        font-weight: bold;
        display: inline-block;
        width: 1em;
        margin-left: -1em;
    }

    /* Catering Packages */
    /* ====== Catering Packages Grid Style ====== */
    #catering-packages .overlay-dark {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.6);
        z-index: 1;
    }

    #catering-packages .container {
        position: relative;
        z-index: 2;
    }

    .text-gold {
        color: var(--primary);
    }

    .package-card {
        background-color: rgba(17, 17, 17, 0.95);
        border: 2px solid var(--primary);
        border-radius: 8px;
        display: flex;
        flex-direction: column;
        justify-content: start;
        height: 100%;
        padding: 1.5rem 1.2rem;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.4);
        transition: none;
        /* 🔒 sin efecto hover */
    }

    .package-card h5,
    .package-card .price,
    .package-card p {
        color: var(--primary);
    }

    .package-card ul {
        padding: 0;
        list-style: none;
        margin-bottom: 1.5rem;
    }

    .package-card ul li {
        color: var(--light-cream);
        font-size: 0.95rem;
        padding: 4px 0;
        text-align: center;
    }

    .package-card .btn {
        margin-top: auto;
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

    .package-card .btn:hover {
        background-color: var(--primary);
        color: #1a1a1a;
    }

    /* Responsive */
    @media (max-width: 991px) {
        .package-card {
            height: auto;
        }
    }

    /* ========== BOOK EVENT: Mobile-Friendly ========== */
    #book-event {
        background-color: #1a1a1a;
    }

    #book-event h3 {
        color: var(--primary);
    }

    /* Form container */
    #book-event .bg-black {
        background-color: #111;
        border-radius: 8px;
        padding: 2rem;
    }

    /* Form fields */
    #book-event .form-control,
    #book-event .form-select {
        border-radius: 8px;
        border: none;
        padding: 0.6rem 1rem;
        font-size: 1rem;
    }

    #book-event .form-control:focus,
    #book-event .form-select:focus {
        box-shadow: 0 0 0 0.2rem rgba(191, 152, 97, 0.3);
        border: none;
    }

    /* Button */
    #book-event .btn-gold {
        background-color: var(--primary);
        color: #1a1a1a;
        border: none;
        padding: 1rem 1.5rem;
        /* <-- Aumentamos la altura aquí */
        border-radius: 8px;
        font-size: 0.95rem;
        text-transform: uppercase;
        transition: all 0.3s ease;
    }

    #book-event .btn-gold:hover {
        background-color: #d1aa6e;
        color: #111;
    }

    /* Image styling */
    #book-event img {
        border-radius: 8px;
        width: 100%;
        height: auto;
    }

    /* Responsive tweaks */
    @media (max-width: 767px) {
        #book-event .bg-black {
            padding: 1.5rem 1rem;
        }

        #book-event .btn-gold {
            font-size: 0.9rem;
            padding: 0.9rem 1rem;
            /* <-- ¡LÍNEA MODIFICADA! */
        }

        #book-event input,
        #book-event select,
        #book-event textarea {
            font-size: 0.95rem;
        }
    }

    /* ===================================================
    Estilos FORZADOS para Mensajes de Contact Form 7
    ====================================================== */

    /* Estilo para la caja del mensaje de ÉXITO */
    #book-event .wpcf7-mail-sent-ok {
        background-color: rgba(191, 152, 97, 0.1) !important;
        border: 1px solid var(--primary) !important;
        color: var(--white) !important;
        padding: 1em !important;
        margin-top: 1.5rem !important;
        border-radius: 8px !important;
        text-align: center !important;
    }
    #book-event .wpcf7-validation-errors {
        background-color: rgba(220, 53, 69, 0.1) !important;
        border: 1px solid #dc3545 !important;
        color: var(--white) !important;
        padding: 1em !important;
        margin-top: 1.5rem !important;
        border-radius: 8px !important;
        text-align: center !important;
    }
</style>

<?php get_template_part('template-parts/hero'); ?>

<?php if ($intro_title || $intro_image_url) : ?>
    <section id="catering-introduction" class="py-5 bg-black text-light">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <?php if ($intro_title) : ?>
                        <h2 class="fw-bold text-gold mb-4"><?php echo esc_html($intro_title); ?></h2>
                    <?php endif; ?>

                    <?php if ($intro_description) {
                        echo wpautop(esc_html($intro_description));
                    } ?>

                    <div class="d-grid">
                        <?php if ($intro_button && $intro_button['url'] && $intro_button['title']) :
                            $btn_url    = esc_url($intro_button['url']);
                            $btn_title  = esc_html($intro_button['title']);
                            $btn_target = $intro_button['target'] ? 'target="' . esc_attr($intro_button['target']) . '"' : '';
                        ?>
                            <a href="<?php echo $btn_url; ?>" class="btn btn-golden" role="button" <?php echo $btn_target; ?>><?php echo $btn_title; ?></a>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if ($intro_image_url) : ?>
                    <div class="col-lg-6">
                        <img src="<?php echo esc_url($intro_image_url); ?>" alt="<?php echo esc_attr($intro_title); ?>" class="img-fluid rounded shadow" />
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ($why_title) : ?>
    <section id="why-catering-icons" class="py-5">
        <div class="container position-relative">
            <h2 class="text-center fw-bold text-gold mb-5"><?php echo esc_html($why_title); ?></h2>
            <div class="row g-4 justify-content-center">
                <?php if (have_rows('why_catering_reasons')) :
                    while (have_rows('why_catering_reasons')) : the_row();
                        $reason_title = get_sub_field('reason_title');
                        $reason_description = get_sub_field('reason_description');
                        $reason_icon = get_sub_field('reason_icon');
                ?>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="why-card text-center p-4 rounded h-100">
                                <?php if ($reason_icon) : ?>
                                    <i class="<?php echo esc_attr($reason_icon); ?> fa-2x mb-3"></i>
                                <?php endif; ?>
                                <h5 class="fw-bold text-gold"><?php echo esc_html($reason_title); ?></h5>
                                <p class="small"><?php echo esc_html($reason_description); ?></p>
                            </div>
                        </div>
                <?php endwhile;
                endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ($packages_title) : ?>
    <section id="catering-packages" class="py-5" style="background-image: url('<?php echo esc_url($packages_bg_url); ?>'); background-size: cover; background-position: center; position: relative;">
        <div class="overlay-dark"></div>
        <div class="container position-relative">
            <h2 class="text-center fw-bold text-gold mb-5"><?php echo esc_html($packages_title); ?></h2>
            <div class="row g-4 justify-content-center">
                <?php if (have_rows('catering_packages')) :
                    while (have_rows('catering_packages')) : the_row();
                        $package_title    = get_sub_field('package_title');
                        $package_subtitle = get_sub_field('package_subtitle');
                ?>
                        <div class="col-md-6 col-lg-4 d-flex">
                            <div class="package-card text-center p-4 flex-fill">
                                <div>
                                    <h5 class="fw-bold text-gold mb-0"><?php echo esc_html($package_title); ?></h5>
                                    <p class="text-gold fw-bold mb-3"><?php echo esc_html($package_subtitle); ?></p>
                                </div>
                                <?php if (have_rows('package_items')) : ?>
                                    <ul class="list-unstyled text-start mb-4">
                                        <?php while (have_rows('package_items')) : the_row();
                                            $item_name   = get_sub_field('item_name');
                                            $item_prices = get_sub_field('item_prices');
                                        ?>
                                            <li class="d-flex justify-content-between">
                                                <span><?php echo esc_html($item_name); ?></span><span><?php echo esc_html($item_prices); ?></span>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                <?php endwhile;
                endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ($form_shortcode) : ?>
    <section id="book-event" class="py-5">
        <div class="container">
            <h3 class="text-center fw-bold text-gold mb-4"><?php echo esc_html($form_title); ?></h3>
            <p class="text-center text-light mb-5"><?php echo esc_html($form_subtitle); ?></p>
            <div class="row g-4 align-items-center">
                <?php if ($form_image_url) : ?>
                    <div class="col-lg-6">
                        <img src="<?php echo esc_url($form_image_url); ?>" alt="<?php echo esc_attr($form_title); ?>" class="img-fluid rounded shadow" />
                    </div>
                <?php endif; ?>
                <div class="col-lg-6">
                    <div class="bg-black p-4 shadow rounded">
                        <?php echo do_shortcode($form_shortcode); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_template_part('template-parts/faqs'); ?>

<script>
    document.addEventListener("scroll", function() {
        const header = document.getElementById("main-header");
        if (window.scrollY > 50) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper(".cateringSwiper", {
            loop: true,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                992: {
                    slidesPerView: 3
                },
            },
        });
    });
</script>

<?php
get_footer();
?>