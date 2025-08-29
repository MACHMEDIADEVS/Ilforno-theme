<?php

/**
 * Template Name: History Page
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



    /* ====== About Intro Section ====== */
    #about-intro {
        background-color: #1a1a1a;
    }

    #about-intro p {
        color: var(--light-cream);
        font-size: 1rem;
        line-height: 1.7;
    }

    #about-intro h2 {
        color: var(--primary);
    }


    /* Timeline Cards */
    #about-timeline {
        background-color: var(--light-cream);
    }

    .timeline-box {
        background-color: #212428;
        border: 2px solid var(--primary);
        color: var(--white);
        transition: all 0.3s ease;
    }

    .timeline-box h4 {
        color: var(--primary);
    }

    .timeline-box p {
        color: var(--white);
        font-size: 0.9rem;
        margin-bottom: 0.5rem;
    }

    /* Botón dorado */
    .btn-outline-gold {
        background-color: transparent;
        color: var(--primary);
        border: 1px solid var(--primary);
        font-weight: bold;
        padding: 6px 12px;
        border-radius: 4px;
        text-transform: uppercase;
        font-size: 0.8rem;
        transition: all 0.3s ease;
    }

    .btn-outline-gold:hover {
        background-color: var(--primary);
        color: #1a1a1a;
    }

    #about-timeline h2 {
        color: var(--primary);
    }



    /* SECCION COMMUNITY */
    /* ====== Community Engagement Section ====== */
    #community-engagement {
        background-color: #1a1a1a;
    }

    #community-engagement h2 {
        color: var(--primary);
    }

    .community-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.3);
    }

    .community-card {
        background-color: #111;
        border: 1px solid var(--primary);
        border-radius: 8px;
        padding: 1.5rem;
        color: var(--light-cream);
        height: 100%;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
        transition: transform 0.3s ease;
    }

    .community-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 20px rgba(191, 152, 97, 0.4);
    }

    .community-card h5 {
        color: var(--primary);
        font-weight: bold;
        margin-bottom: 0.5rem;
    }

    .community-card p {
        font-size: 0.95rem;
        margin: 0;
        color: var(--light-cream);
    }

    @media (max-width: 991px) {
        .community-image {
            margin-bottom: 2rem;
            height: auto;
        }
    }

    @media (max-width: 767px) {
        .community-card {
            padding: 1rem;
        }
    }




    /* ====== Press & Recognition Section ====== */
    #press-recognition {
        background-color: #1a1a1a;
    }

    #press-recognition h2 {
        color: var(--primary);
    }

    .press-card {
        background-color: #26292b;
        /* fondo ligeramente más claro que el fondo general */
        border: 1.5px solid var(--primary);
        color: var(--light-cream);
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .press-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
    }

    .press-card h5 {
        color: var(--primary);
        margin-bottom: 0.75rem;
    }

    .press-card p {
        font-size: 0.95rem;
        color: var(--light-cream);
    }

    /* ====== Join Us Today CTA Section ====== */
    #cta-join-us {
        background-color: #111010;
    }

    #cta-join-us h2 {
        color: var(--primary);
    }

    #cta-join-us p {
        font-size: 1rem;
        color: var(--light-cream);
    }

    .btn-gold {
        background-color: var(--primary);
        color: #1a1a1a;
        border: 2px solid var(--primary);
        font-weight: bold;
        border-radius: 8px;
        transition: all 0.3s ease;
        text-transform: uppercase;
        font-size: 0.9rem;
        /* <- AÑADIDO PARA UNIFICAR */
    }

    /* Este es el código que debes modificar */
    .btn-gold:hover {
        background-color: transparent;
        color: var(--primary);
        border: 2px solid var(--primary);
        /* <- AÑADE ESTA LÍNEA */
    }

    .btn-outline-gold {
        background-color: transparent;
        color: var(--primary);
        border: 2px solid var(--primary);
        font-weight: bold;
        border-radius: 8px;
        transition: all 0.3s ease;
        text-transform: uppercase;
        font-size: 0.9rem;
        /* <- AÑADIDO PARA UNIFICAR */
    }


    .btn-outline-gold:hover {
        background-color: rgba(191, 152, 97, 0.15);
        color: var(--primary);
    }

    .text-gold-link {
        color: var(--primary) !important;
        text-decoration: none;
    }

    .text-gold-link:hover {
        text-decoration: underline;
    }
</style>

<!-- HERO -->
<?php get_template_part('template-parts/hero'); ?>


<?php
// Obtener los datos de los campos ACF
$title       = get_field('about_intro_title') ?: 'About IL Forno a Legna';
$description = get_field('about_intro_description');

// Contenido de respaldo para la descripción
$description_fallback = 'IL Forno a Legna is a beloved Italian restaurant located in the heart of Rahway, New Jersey,
known for its authentic wood-fired pizza, hearty pasta dishes, and inviting atmosphere.
Since its opening in 2018, IL Forno a Legna has earned a reputation for its high-quality food
and strong ties to the local community.

Below, we share the story of our restaurant, highlighting key milestones in our journey to
become one of New Jersey\'s favorite dining spots.';
?>

<section id="about-intro" class="py-5 text-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h2 class="text-gold fw-bold mb-4"><?php echo esc_html($title); ?></h2>
                
                <?php 
                // Usamos wpautop para convertir el texto del Área de Texto en párrafos
                if ($description) {
                    echo wpautop(esc_html($description));
                } else {
                    echo wpautop(esc_html($description_fallback));
                }
                ?>
            </div>
        </div>
    </div>
</section>

<?php
// Obtener el título de la sección
$section_title = get_field('timeline_section_title') ?: 'Our Timeline';
?>

<section id="about-timeline" class="py-5">
    <div class="container">
        <h2 class="text-center text-gold fw-bold mb-5"><?php echo esc_html($section_title); ?></h2>

        <?php // Comprobar si hay eventos en el repetidor
        if (have_rows('timeline_events')) : ?>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

                <?php // BUCLE 1: Crear las tarjetas visibles de la línea de tiempo
                while (have_rows('timeline_events')) : the_row();
                    
                    // Obtener datos para la tarjeta
                    $event_year  = get_sub_field('event_year');
                    $event_title = get_sub_field('event_title');
                    
                    // Generar un ID único para enlazar con el modal
                    $modal_id = 'timeline-modal-' . get_row_index();
                ?>
                    <div class="col">
                        <div class="timeline-box p-4 text-center rounded bg-dark h-100 d-flex flex-column justify-content-between">
                            <div>
                                <h4 class="text-gold fw-bold"><?php echo esc_html($event_year); ?></h4>
                                <p class="small text-light mb-3"><?php echo esc_html($event_title); ?></p>
                            </div>
                            <button class="btn btn-outline-gold mt-auto" data-bs-toggle="modal" data-bs-target="#<?php echo esc_attr($modal_id); ?>">View Details</button>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>
        <?php else: ?>
            <p class="text-center text-light">Los hitos de la historia se mostrarán aquí.</p>
        <?php endif; ?>
    </div>
</section>

<?php // BUCLE 2: Crear las ventanas modales ocultas
if (have_rows('timeline_events')) :
    while (have_rows('timeline_events')) : the_row();
        
        // Obtener todos los datos para el modal
        $event_year    = get_sub_field('event_year');
        $event_title   = get_sub_field('event_title');
        $event_details = get_sub_field('event_details'); // Contenido del WYSIWYG
        
        // Generar el MISMO ID único que en el primer bucle
        $modal_id = 'timeline-modal-' . get_row_index();
    ?>
        <div class="modal fade" id="<?php echo esc_attr($modal_id); ?>" tabindex="-1" aria-labelledby="<?php echo esc_attr($modal_id); ?>-label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-dark text-light border-gold">
                    <div class="modal-header border-0">
                        <h5 class="modal-title text-gold fw-bold" id="<?php echo esc_attr($modal_id); ?>-label">
                            <?php echo esc_html($event_year . ' – ' . $event_title); ?>
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <?php echo $event_details; // Imprimir contenido del editor WYSIWYG ?>
                    </div>
                </div>
            </div>
        </div>
<?php
    endwhile;
endif;
?>

<?php
// Obtener los datos de los campos principales
$main_image_url = get_field('community_main_image') ?: get_template_directory_uri() . '/assets/img/comunity.png';
$section_title  = get_field('community_section_title') ?: 'Community Engagement';
?>

<section id="community-engagement" class="py-5">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <img src="<?php echo esc_url($main_image_url); ?>" alt="<?php echo esc_attr($section_title); ?>" class="community-image w-100 rounded">
            </div>

            <div class="col-lg-6">
                <h2 class="text-gold fw-bold mb-4"><?php echo esc_html($section_title); ?></h2>
                
                <div class="row row-cols-1 row-cols-md-2 g-3">
                    <?php // Comprobar si hay eventos en el repetidor
                    if (have_rows('community_events')) :
                        // Iniciar el bucle para recorrer cada evento
                        while (have_rows('community_events')) : the_row();
                            $event_title       = get_sub_field('event_title');
                            $event_description = get_sub_field('event_description');
                    ?>
                            <div class="col">
                                <div class="community-card h-100">
                                    <h5><?php echo esc_html($event_title); ?></h5>
                                    <p><?php echo esc_html($event_description); ?></p>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Obtener el título de la sección
$section_title = get_field('press_section_title') ?: 'Press & Recognition';
?>

<section id="press-recognition" class="py-5 bg-dark">
    <div class="container">
        <h2 class="text-gold fw-bold text-center mb-5"><?php echo esc_html($section_title); ?></h2>
        
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php // Comprobar si hay menciones de prensa en el repetidor
            if (have_rows('press_items')) :
                // Iniciar el bucle para recorrer cada mención
                while (have_rows('press_items')) : the_row();
                    
                    // Obtener los datos de los sub-campos
                    $publication_name = get_sub_field('publication_name');
                    $description      = get_sub_field('recognition_description');
            ?>
                    <div class="col">
                        <div class="press-card p-4 h-100 rounded">
                            <h5 class="fw-bold text-gold"><?php echo esc_html($publication_name); ?></h5>
                            <p class="text-light small mb-0">
                                <?php echo esc_html($description); ?>
                            </p>
                        </div>
                    </div>
            <?php
                endwhile;
            else :
                // Mensaje de respaldo si el repetidor está vacío
            ?>
                <div class="col">
                    <p class="text-light text-center">Las menciones de prensa se mostrarán aquí.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php
// Obtener los datos de los campos ACF
$cta_title       = get_field('cta_title') ?: 'Join Us Today!';
$cta_description = get_field('cta_description');

// Contenido de respaldo para la descripción
$description_fallback = '<p class="text-light mb-4">
    Visit us at <strong>1464 Main Street, Rahway, NJ</strong> or check out our food trailer at local events.<br>
    For reservations, catering, or info, call <a href="tel:+17323826600" class="text-gold-link fw-bold">732-382-6600</a>
    or order online.
</p>';
?>

<section id="cta-join-us" class="py-5">
    <div class="container text-center">
        <h2 class="text-gold fw-bold mb-4"><?php echo esc_html($cta_title); ?></h2>
        
        <?php // Imprimir el contenido del editor WYSIWYG
        if ($cta_description) {
            echo $cta_description;
        } else {
            echo $description_fallback;
        }
        ?>
        
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <?php // Comprobar si hay botones en el repetidor
            if (have_rows('cta_buttons')) :
                $button_index = 0; // Inicializar contador para los estilos
                // Iniciar el bucle para recorrer cada botón
                while (have_rows('cta_buttons')) : the_row();
                    $button = get_sub_field('button');
                    if ($button) :
                        // Determinar el estilo del botón basado en su posición
                        $btn_class = ($button_index === 0) ? 'btn-gold' : 'btn-outline-gold';
                        
                        $btn_url    = esc_url($button['url']);
                        $btn_title  = esc_html($button['title']);
                        $btn_target = $button['target'] ? 'target="' . esc_attr($button['target']) . '"' : '';
                ?>
                        <a href="<?php echo $btn_url; ?>" class="btn <?php echo $btn_class; ?> px-4" <?php echo $btn_target; ?>><?php echo $btn_title; ?></a>
                <?php
                    $button_index++;
                    endif;
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>

<?php
// Script para el header, mantenido aquí para una conversión 1:1.
?>
<script>
    document.addEventListener('scroll', function() {
        const header = document.getElementById('main-header');
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
</script>

<?php
get_footer();
?>