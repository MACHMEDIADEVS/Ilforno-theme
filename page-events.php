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

<?php
// Get the data from the ACF fields for the Events Hero section
$background_image_url = get_field('events_hero_background')['url'] ?? get_template_directory_uri() . '/assets/img/event-hero.png';
$title                = get_field('events_hero_title') ?: 'Venue';
$subtitle             = get_field('events_hero_subtitle') ?: 'Celebrate your special moments with IL Forno where food, ambiance, and service make every event unforgettable.';
?>

<section class="hero-events-section" style="background-image: url('<?php echo esc_url($background_image_url); ?>')">
    <div class="overlay"></div>
    <div class="container">
        <h1 class="display-4 fw-bold"><?php echo esc_html($title); ?></h1>
        <p class="lead">
            <?php // nl2br() ensures line breaks from the textarea are displayed
            echo nl2br(esc_html($subtitle)); ?>
        </p>
    </div>
</section>

<?php
// Obtener los datos de los campos ACF para la sección de introducción
$title       = get_field('intro_title') ?: 'Host Your Event at IL Forno a Legna';
$description = get_field('intro_description');
$image_url   = get_field('intro_image') ?: get_template_directory_uri() . '/assets/img/events.jpg';

// Contenido de respaldo para la descripción
$description_fallback = 'At IL Forno a Legna, we offer a one-of-a-kind Italian dining
experience that’s perfect for any event, from birthdays to
corporate gatherings. Whether you’re hosting an intimate dinner or
a larger celebration, our team will work with you to make your
event truly memorable.

Enjoy our signature wood-fired pizzas, fresh pasta, and
traditional Italian dishes in the heart of Rahway, NJ. Let us help
you create the perfect setting for your special occasion, with
flexible packages and personalized service to ensure everything
goes smoothly.';
?>

<section id="event-introduction" class="py-5 bg-black text-light">
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
            </div>

            <div class="col-lg-6">
                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>" class="img-fluid rounded shadow" />
            </div>
        </div>
    </div>
</section>

<section id="event-services" class="py-5 text-light">
    <div class="container">
        <h2 class="text-center text-gold fw-bold mb-5">
            Event Services at IL Forno a Legna
        </h2>

        <div class="row g-4">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-card text-center p-4 h-100">
                    <i class="fas fa-chair fa-3x text-gold mb-3"></i>
                    <h5 class="fw-bold text-gold">Private Dining Space</h5>
                    <p class="service-text">
                        Host your event in our cozy yet elegant dining room with seating
                        for small or large groups.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-card text-center p-4 h-100">
                    <i class="fas fa-utensils fa-3x text-gold mb-3"></i>
                    <h5 class="fw-bold text-gold">Catering</h5>
                    <p class="service-text">
                        Enjoy IL Forno’s delicious food at your location with our
                        pizzas, pastas, salads, and desserts.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-card text-center p-4 h-100">
                    <i class="fas fa-truck fa-3x text-gold mb-3"></i>
                    <h5 class="fw-bold text-gold">Wood-Fired Pizza Truck</h5>
                    <p class="service-text">
                        Bring our pizza trailer to your outdoor event and watch pizzas
                        bake in our custom oven.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-card text-center p-4 h-100">
                    <i class="fas fa-concierge-bell fa-3x text-gold mb-3"></i>
                    <h5 class="fw-bold text-gold">Full Event Support</h5>
                    <p class="service-text">
                        From setup to cleanup, our team ensures your event runs smoothly
                        with personalized menus.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Obtener los datos de los campos principales de la sección
$background_image_url = get_field('packages_bg_image') ?: get_template_directory_uri() . '/assets/img/events-intro.png';
$section_title        = get_field('packages_section_title') ?: 'Event Packages';
$primary_button       = get_field('packages_primary_button');
$secondary_button     = get_field('packages_secondary_button');
?>

<section id="event-packages" class="py-5" style="
        background-image: url('<?php echo esc_url($background_image_url); ?>');
        background-size: cover;
        background-position: center;
        position: relative;
      ">
    <div class="overlay"></div>

    <div class="container position-relative">
        <h2 class="text-center fw-bold text-gold mb-5"><?php echo esc_html($section_title); ?></h2>

        <div class="row g-4">
            <?php // Comprobar si existen paquetes en el repetidor
            if (have_rows('packages_repeater')) :
                // Iniciar el bucle para recorrer cada paquete
                while (have_rows('packages_repeater')) : the_row();

                    // Obtener los datos de los sub-campos para este paquete
                    $package_title        = get_sub_field('package_title');
                    $package_price        = get_sub_field('package_price');
                    $package_price_unit   = get_sub_field('package_price_unit');
                    $package_details      = get_sub_field('package_details'); // Contenido del editor WYSIWYG
                    $package_footer_notes = get_sub_field('package_footer_notes');
            ?>
                    <div class="col-md-4 d-flex">
                        <div class="package-card w-100 rounded-3 p-4 d-flex flex-column gap-2">
                            <h5 class="fw-bold text-gold mb-1 text-center"><?php echo esc_html($package_title); ?></h5>
                            <p class="price text-gold fw-bold fs-4 mb-3 text-center">
                                <?php echo esc_html($package_price); ?>
                                <span class="fs-6"><?php echo esc_html($package_price_unit); ?></span>
                            </p>

                            <?php // Imprimimos el contenido del editor WYSIWYG
                            if ($package_details) {
                                // Envolvemos el contenido del WYSIWYG para mantener el estilo del diseño original
                                echo '<div class="package-details-content lh-sm mb-4 text-start mx-auto" style="max-width: 300px;">' . $package_details . '</div>';
                            }
                            ?>

                            <div class="text-gold small mb-0 text-center">
                                <?php // Usamos nl2br para los saltos de línea en las notas al pie
                                if ($package_footer_notes) {
                                    echo nl2br(esc_html($package_footer_notes));
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
            else :
                // Mensaje de respaldo si el repetidor está vacío
                ?>
                <div class="col-12">
                    <p class="text-center text-white">Los paquetes de eventos se mostrarán aquí.</p>
                </div>
            <?php endif; ?>
        </div>

        <div class="text-center mt-5">
            <?php // Botón Principal
            if ($primary_button && $primary_button['url'] && $primary_button['title']) :
                $btn_url    = esc_url($primary_button['url']);
                $btn_title  = esc_html($primary_button['title']);
                $btn_target = $primary_button['target'] ? 'target="' . esc_attr($primary_button['target']) . '"' : '';
            ?>
                <a href="<?php echo $btn_url; ?>" class="btn btn-gold m-2" <?php echo $btn_target; ?>><?php echo $btn_title; ?></a>
            <?php endif; ?>

            <?php // Botón Secundario
            if ($secondary_button && $secondary_button['url'] && $secondary_button['title']) :
                $btn_url    = esc_url($secondary_button['url']);
                $btn_title  = esc_html($secondary_button['title']);
                $btn_target = $secondary_button['target'] ? 'target="' . esc_attr($secondary_button['target']) . '"' : '';
            ?>
                <a href="<?php echo $btn_url; ?>" class="btn btn-outline-gold m-2" <?php echo $btn_target; ?>><?php echo $btn_title; ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php
// Obtener los datos de los campos ACF
$image_url = get_field('booking_image') ?: get_template_directory_uri() . '/assets/img/eventoil.png';
$shortcode = get_field('booking_form_shortcode') ?: '[contact-form-7 id="e369c04" title="Events"]';
?>

<section id="booking-form" class="py-5">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <img src="<?php echo esc_url($image_url); ?>" alt="Formulario de Reserva de Eventos" class="img-fluid rounded shadow" />
            </div>

            <div class="col-lg-6">
                <div class="booking-card p-4 shadow">
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
// Obtener los datos de los campos ACF para la sección
$title      = get_field('why_choose_title') ?: 'Why Choose IL Forno a Legna for Your Event?';
$image_url  = get_field('why_choose_image') ?: get_template_directory_uri() . '/assets/img/event2.png';
$cta_title  = get_field('why_choose_cta_title') ?: 'Ready to plan your unforgettable event?';
$cta_button = get_field('why_choose_cta_button');
?>

<section id="why-choose-us" class="py-5 bg-dark text-light">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <h2 class="fw-bold text-gold mb-4">
                    <?php echo esc_html($title); ?>
                </h2>

                <?php // Comprobar si hay razones en el repetidor
                if (have_rows('why_choose_reasons')) : ?>
                    <ul class="mb-4">
                        <?php // Iniciar el bucle para mostrar cada razón
                        while (have_rows('why_choose_reasons')) : the_row();
                            $reason_text = get_sub_field('reason_text');
                        ?>
                            <li class="mb-3"><?php echo esc_html($reason_text); ?></li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="col-lg-6">
                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>" class="img-fluid rounded shadow" />
            </div>
        </div>

        <div class="text-center mt-5">
            <h3 class="fw-bold text-gold mb-3">
                <?php echo esc_html($cta_title); ?>
            </h3>
            <?php
            if ($cta_button && $cta_button['url'] && $cta_button['title']) :
                $btn_url    = esc_url($cta_button['url']);
                $btn_title  = esc_html($cta_button['title']);
                $btn_target = $cta_button['target'] ? 'target="' . esc_attr($cta_button['target']) . '"' : '';
            ?>
                <a href="<?php echo $btn_url; ?>" class="btn btn-gold px-5 py-2" <?php echo $btn_target; ?>><?php echo $btn_title; ?></a>
            <?php else: // Botón de respaldo 
            ?>
                <a href="#booking-form" class="btn btn-gold px-5 py-2">Book venue</a>
            <?php endif; ?>
        </div>
    </div>
</section>

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

<?php
// Obtener el título de la sección
$section_title = get_field('faq_section_title') ?: 'Frequently Asked Questions';
?>

<section id="faqs" class="py-5 text-light">
    <div class="container">
        <h2 class="text-center text-gold fw-bold mb-5">
            <?php echo esc_html($section_title); ?>
        </h2>
        
        <div class="modern-accordion">
            <?php // Comprobar si hay preguntas en el repetidor
            if (have_rows('faq_list')) :
                // Iniciar el bucle para recorrer cada pregunta
                while (have_rows('faq_list')) : the_row();
                    
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
                            <?php echo $answer; // El contenido del WYSIWYG se imprime directamente ?>
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