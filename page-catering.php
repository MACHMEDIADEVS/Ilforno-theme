<?php

/**
 * Template Name: Catering Page
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
        color: #bf9861;
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
        color: #dacfbd;
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
        color: #bf9861;
    }

    #why-catering-icons .why-card {
        background-color: #dacfbd;
        /* fondo beige claro */
        border: 2px solid #bf9861;
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
        color: #bf9861;
    }

    #why-catering-icons .why-card p {
        font-size: 0.95rem;
        color: #1a1a1a;
        /* contraste con fondo claro */
    }

    /* ====== CATERING PAGE STYLES ====== */

    /* General Text Styling */
    .text-gold {
        color: #bf9861;
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
        color: #bf9861;
        font-weight: bold;
        margin-bottom: 2rem;
    }

    /* Why Choose Section */
    .why-choose {
        background-color: #111;
        color: #fff;
        padding: 60px 0;
    }

    .why-choose ul {
        list-style: none;
        padding: 0;
    }

    .why-choose li::before {
        content: "\\2022";
        color: #bf9861;
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
        color: #bf9861;
    }

    .package-card {
        background-color: rgba(17, 17, 17, 0.95);
        border: 2px solid #bf9861;
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
        color: #bf9861;
    }

    .package-card ul {
        padding: 0;
        list-style: none;
        margin-bottom: 1.5rem;
    }

    .package-card ul li {
        color: #dacfbd;
        font-size: 0.95rem;
        padding: 4px 0;
        text-align: center;
    }

    .package-card .btn {
        margin-top: auto;
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

    .package-card .btn:hover {
        background-color: #bf9861;
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
        color: #bf9861;
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
        background-color: #bf9861;
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
        border: 1px solid #bf9861 !important;
        color: #ffffff !important;
        padding: 1em !important;
        margin-top: 1.5rem !important;
        border-radius: 8px !important;
        text-align: center !important;
    }

    /* EXTRA: Estilo para los mensajes de ERROR */
    #book-event .wpcf7-validation-errors {
        background-color: rgba(220, 53, 69, 0.1) !important;
        border: 1px solid #dc3545 !important;
        color: #ffffff !important;
        padding: 1em !important;
        margin-top: 1.5rem !important;
        border-radius: 8px !important;
        text-align: center !important;
    }


    /* ====== Modern Accordion Style ====== */
    .modern-accordion {
        max-width: 900px;
        margin: 0 auto;
    }

    #faqs {
        background-color: #0f0f0f;
        /* Cambia este valor por el color que desees */
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

    /* Responsive */
    @media (max-width: 575px) {
        .accordion-title {
            font-size: 0.95rem;
            padding: 0.85rem 1rem;
        }

        .accordion-content {
            font-size: 0.9rem;
        }
    }
</style>

<!-- HERO -->
<?php get_template_part('template-parts/hero'); ?>

<?php
// Obtener los datos de los campos ACF
$title       = get_field('catering_intro_title') ?: 'IL Forno a Legna Catering Authentic Italian Cuisine Delivered to Your Event';
$description = get_field('catering_intro_description');
$button      = get_field('catering_intro_button');
$image_url   = get_field('catering_intro_image') ?: get_template_directory_uri() . '/assets/img/catering 2.png';

// Contenido de respaldo para la descripción
$description_fallback = 'At IL Forno a Legna, we bring the flavors of Italy directly to
your event with our catering services. Whether you\'re hosting a
corporate event, a wedding, or a private party, we offer a variety
of menu options to suit every occasion.

From our signature wood-fired pizzas to our freshly prepared
pastas, each dish is made with the finest ingredients, ensuring
your event is both delicious and memorable. Let us take care of
the food, so you can focus on enjoying your celebration!';
?>

<section id="catering-introduction" class="py-5 bg-black text-light">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <h2 class="fw-bold text-gold mb-4">
                    <?php echo esc_html($title); ?>
                </h2>
                
                <?php 
                // Usamos wpautop para convertir el texto del Área de Texto en párrafos
                if ($description) {
                    echo wpautop(esc_html($description));
                } else {
                    echo wpautop(esc_html($description_fallback));
                }
                ?>

                <div class="d-grid">
                    <style>
                        /* Button */
                        .btn-golden {
                            background-color: #bf9861;
                            color: #1a1a1a;
                            border: none;
                            padding: 0.7rem 1.5rem;
                            border-radius: 8px;
                            font-size: 0.95rem;
                            text-transform: uppercase;
                            transition: all 0.3s ease;
                        }

                        .btn-golden:hover {
                            background-color: #d1aa6e;
                            color: #111;
                        }
                    </style>

                    <?php // Comprobar y mostrar el botón del campo Enlace
                    if ($button && $button['url'] && $button['title']) :
                        $btn_url    = esc_url($button['url']);
                        $btn_title  = esc_html($button['title']);
                        $btn_target = $button['target'] ? 'target="' . esc_attr($button['target']) . '"' : '';
                    ?>
                        <a href="<?php echo $btn_url; ?>" class="btn btn-golden" role="button" <?php echo $btn_target; ?>><?php echo $btn_title; ?></a>
                    <?php else: // Botón de respaldo ?>
                        <a href="#book-event" class="btn btn-golden" role="button">Inquiry Now</a>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-lg-6">
                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>" class="img-fluid rounded shadow" />
            </div>
        </div>
    </div>
</section>

<?php
// Obtener el título de la sección
$section_title = get_field('why_catering_title') ?: 'Why Choose IL Forno a Legna Catering?';

// Array con la configuración estática (iconos y clases de columna)
$reasons_layout = [
    ['icon' => 'fas fa-fire',         'col' => 'col-lg-4'],
    ['icon' => 'fas fa-cogs',         'col' => 'col-lg-4'],
    ['icon' => 'fas fa-truck-moving', 'col' => 'col-lg-4'],
    ['icon' => 'fas fa-dollar-sign',  'col' => 'col-lg-6'],
    ['icon' => 'fas fa-user-tie',     'col' => 'col-lg-6']
];
?>

<section id="why-catering-icons" class="py-5">
    <div class="container position-relative">
        <h2 class="text-center fw-bold text-gold mb-5">
            <?php echo esc_html($section_title); ?>
        </h2>

        <div class="row g-4 justify-content-center">
            <?php // Comprobar si hay razones en el repetidor
            if (have_rows('why_catering_reasons')) :
                $reason_index = 0; // Inicializar contador
                // Iniciar el bucle para recorrer cada razón
                while (have_rows('why_catering_reasons')) : the_row();
                    
                    // Obtener los datos de los sub-campos
                    $reason_title       = get_sub_field('reason_title');
                    $reason_description = get_sub_field('reason_description');
                    
                    // Obtener la configuración de layout (icono y columna) del array
                    $layout = isset($reasons_layout[$reason_index]) ? $reasons_layout[$reason_index] : ['icon' => '', 'col' => 'col-lg-4'];
            ?>
                    <div class="col-12 col-sm-6 <?php echo esc_attr($layout['col']); ?>">
                        <div class="why-card text-center p-4 rounded h-100">
                            <i class="<?php echo esc_attr($layout['icon']); ?> fa-2x mb-3"></i>
                            <h5 class="fw-bold text-gold"><?php echo esc_html($reason_title); ?></h5>
                            <p class="small">
                                <?php echo esc_html($reason_description); ?>
                            </p>
                        </div>
                    </div>
            <?php
                    $reason_index++; // Incrementar el contador
                endwhile;
            else:
            ?>
                <div class="col-12">
                    <p class="text-center">Las razones se mostrarán aquí.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php
// Obtener los datos de los campos principales de la sección
$background_image_url = get_field('packages_image_bg') ?: get_template_directory_uri() . '/assets/img/events-intro.png';
$section_title        = get_field('packages_section_title') ?: 'Catering Menu';
?>

<section id="catering-packages" class="py-5" style="
        background-image: url('<?php echo esc_url($background_image_url); ?>');
        background-size: cover;
        background-position: center;
        position: relative;
      ">
    <div class="overlay-dark"></div>

    <div class="container position-relative">
        <h2 class="text-center fw-bold text-gold mb-5"><?php echo esc_html($section_title); ?></h2>

        <div class="row g-4 justify-content-center">
            <?php // BUCLE EXTERIOR: Comprobar y recorrer los PAQUETES
            if (have_rows('catering_packages')) :
                while (have_rows('catering_packages')) : the_row();
                    
                    // Obtener el título y subtítulo del paquete actual
                    $package_title    = get_sub_field('package_title');
                    $package_subtitle = get_sub_field('package_subtitle');
            ?>
                    <div class="col-md-6 col-lg-4 d-flex">
                        <div class="package-card text-center p-4 flex-fill">
                            <div>
                                <h5 class="fw-bold text-gold mb-0"><?php echo esc_html($package_title); ?></h5>
                                <p class="text-gold fw-bold mb-3"><?php echo esc_html($package_subtitle); ?></p>
                            </div>
                            
                            <?php // BUCLE INTERIOR: Comprobar y recorrer los PLATOS de este paquete
                            if (have_rows('package_items')) : ?>
                                <ul class="list-unstyled text-start mb-4">
                                    <?php while (have_rows('package_items')) : the_row();
                                        // Obtener el nombre y precio del plato actual
                                        $item_name   = get_sub_field('item_name');
                                        $item_prices = get_sub_field('item_prices');
                                    ?>
                                        <li class="d-flex justify-content-between">
                                            <span><?php echo esc_html($item_name); ?></span><span><?php echo esc_html($item_prices); ?></span>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; // Fin del bucle interior de platos ?>
                        </div>
                    </div>
            <?php
                endwhile;
            else :
                // Mensaje de respaldo si no hay paquetes
            ?>
                <div class="col-12">
                    <p class="text-center text-light">Los paquetes de catering se mostrarán aquí.</p>
                </div>
            <?php endif; // Fin del bucle exterior de paquetes ?>
        </div>
    </div>
</section>

<?php
// Obtener los datos de los campos ACF para la sección del formulario
$title     = get_field('form_section_title') ?: 'Catering Request Form';
$subtitle  = get_field('form_section_subtitle') ?: 'Please fill out the form below to request more information or to book catering for your event.';
$image_url = get_field('form_image') ?: get_template_directory_uri() . '/assets/img/blog3.png';
$shortcode = get_field('form_shortcode') ?: '[contact-form-7 id="98c8a5c" title="Catering"]';
?>

<section id="book-event" class="py-5">
    <div class="container">
        <h3 class="text-center fw-bold text-gold mb-4">
            <?php echo esc_html($title); ?>
        </h3>
        <p class="text-center text-light mb-5">
            <?php echo esc_html($subtitle); ?>
        </p>
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>" class="img-fluid rounded shadow" />
            </div>

            <div class="col-lg-6">
                <div class="bg-black p-4 shadow rounded">
                    <?php
                    // Comprobar si hay un shortcode antes de ejecutarlo
                    if ($shortcode) {
                        echo do_shortcode($shortcode);
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Obtener el título de la sección
$section_title = get_field('catering_faq_title') ?: 'Frequently Asked Questions';
?>

<section id="faqs" class="py-5">
    <div class="container">
        <h2 class="text-center text-gold fw-bold mb-5">
            <?php echo esc_html($section_title); ?>
        </h2>

        <div class="modern-accordion">
            <?php // Comprobar si hay preguntas en el repetidor
            if (have_rows('catering_faq_list')) :
                // Iniciar el bucle para recorrer cada pregunta
                while (have_rows('catering_faq_list')) : the_row();
                    
                    // Obtener los datos de los sub-campos
                    $question = get_sub_field('faq_question');
                    $answer   = get_sub_field('faq_answer');
                    
                    // Generar un ID único para cada elemento del acordeón
                    $faq_id = 'faq-' . get_row_index();
            ?>
                    <div class="accordion-item">
                        <input type="checkbox" id="<?php echo esc_attr($faq_id); ?>" hidden />
                        <label for="<?php echo esc_attr($faq_id); ?>" class="accordion-title">
                            <span><?php echo esc_html($question); ?></span>
                            <i class="fas fa-chevron-down"></i>
                        </label>
                        <div class="accordion-content">
                            <?php // Usamos nl2br para los saltos de línea del Área de Texto ?>
                            <?php echo nl2br(esc_html($answer)); ?>
                        </div>
                    </div>
            <?php
                endwhile;
            else :
                // Mensaje de respaldo si el repetidor está vacío
            ?>
                <p class="text-center">Las preguntas frecuentes se mostrarán aquí.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php
// Scripts en línea para el scroll y el carrusel (Swiper)
?>
<script>
    // Script para el header
    document.addEventListener("scroll", function() {
        const header = document.getElementById("main-header");
        if (window.scrollY > 50) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });

    // Script para Swiper (aunque no hay un elemento .cateringSwiper en el HTML)
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
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 3,
                },
            },
        });
    });
</script>

<?php
get_footer();
?>