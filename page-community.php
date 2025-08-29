<?php

/**
 * Template Name: Community Page
 *
 * @package IL_Forno_a_Legna
 */

get_header();
?>


<style>
    /* HERO Community */
    .hero-community-section {
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

    .hero-community-section .overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.55);
        z-index: 1;
    }

    .hero-community-section .container {
        position: relative;
        z-index: 2;
    }

    @media (max-width: 768px) {
        .hero-community-section {
            height: 70vh;
        }
    }

    /* Contenido principal */
    .community-content-section h2 {
        font-size: 1.75rem;
        font-weight: bold;
    }

    .community-content-section p {
        font-size: 1rem;
        line-height: 1.6;
    }


    /* INTRO */
    #community-intro {
        background-color: #1a1a1a;
        padding: 5rem 0;
    }

    #community-intro h2 {
        color: var(--primary);
    }

    #community-intro p {
        color: var(--light-cream);
        text-align: center;
    }




    /* SUPPORTING LOCAL  */
    #support-local {
        background-color: var(--light-cream);
        /* Fondo beige claro */
        padding: 5rem 0;
    }

    /* Títulos H3 y H5 en color oscuro */
    #support-local h3,
    #support-local h5 {
        color: var(--primary);
    }

    /* Párrafos en color oscuro para que sean legibles */
    #support-local p {
        color: #333333;
        /* Un gris oscuro para que sea legible pero no tan fuerte como el título */
    }

    /* Aseguramos que la imagen tenga los bordes redondeados */
    #support-local img {
        border-radius: 0.5rem;
    }




    /* PIZZA TRAILER / COMMUNITY EVENTS */
    #pizza-trailer {
        background-color: #1a1a1a;
        padding: 5rem 0;
    }

    #pizza-trailer h3 {
        color: var(--primary);
    }

    .pizza-trailer-card {
        background-color: #111111;
        border: 2px solid var(--primary);
        border-radius: 0.5rem;
        padding: 1.5rem;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .pizza-trailer-card h5 {
        color: var(--primary);
    }

    .pizza-trailer-card p {
        color: var(--light-cream);
    }

    /* NUEVO: Esta es la regla clave que lo soluciona */
    .card-content-wrapper {
        flex-grow: 1;
        /* Hace que este contenedor crezca para ocupar el espacio */
    }

    /* Estilos del botón que ya teníamos */
    .pizza-trailer-card .btn-outline-gold {
        color: var(--primary);
        border: 2px solid var(--primary);
        transition: all 0.3s ease;
    }

    .pizza-trailer-card .btn-outline-gold:hover {
        color: #1a1a1a;
        background-color: var(--primary);
    }



    /* TESTIMONIALS */
    #testimonials {
        background-color: #1a1a1a;
        padding: 5rem 0;
    }

    #testimonials h3 {
        color: var(--primary);
    }

    .testimonial-card {
        background-color: #111111;
        /* Gris oscuro secundario */
        border: 1px solid rgba(191, 150, 97, 0.35);
        /* Borde dorado sutil */
        border-radius: 0.5rem;
        padding: 1.5rem;
        height: 100%;
    }

    .testimonial-card .quote {
        color: white;
        /* Color blanco para la cita */
        font-style: italic;
    }

    /* Estilo para el nombre del autor */
    .testimonial-card p:not(.quote) {
        color: var(--primary);
    }



    /* CTA: GET INVOLVED */
    #get-involved {
        background-color: #121212;
        /* Fondo oscuro sólido */
        padding: 5rem 0;
    }

    #get-involved h3 {
        color: var(--white);
    }

    #get-involved p {
        color: var(--light-cream);
        /* Color de párrafo estándar */
    }

    /* Caja de contacto a la derecha */
    .cta-contact-box {
        background-color: #111111;
        border: 1px solid rgba(191, 150, 97, 0.35);
        border-radius: 0.5rem;
        padding: 1.5rem;
    }

    .cta-contact-box h5 {
        color: var(--primary);
    }

    .cta-contact-box p,
    .cta-contact-box li {
        color: var(--light-cream);
    }

    .cta-contact-box a {
        color: var(--white);
        text-decoration: none;
        transition: text-decoration 0.3s ease;
    }

    .cta-contact-box a:hover {
        text-decoration: underline;
    }

    /* Estilos de botones que ya deberías tener definidos */
    /* Botón Dorado (Ej: Book Pizza Trailer) */
    .btn-gold {
        background-color: var(--primary);
        color: #1a1a1a;
        border-radius: 10px;
        font-weight: bold;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-gold:hover {
        background-color: var(--primary-hover);
        /* Tono más oscuro */
        color: #1a1a1a;
    }

    /* Botón con Borde Dorado (Ej: Redes Sociales) */
    .btn-outline-gold {
        background-color: transparent;
        color: var(--primary);
        border: 1px solid var(--primary);
        border-radius: 5px;
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .btn-outline-gold:hover {
        background-color: var(--primary);
        color: #1a1a1a;
    }

    /* Botón Verde (Ej: Contact Us) */
    .btn-green {
        background-color: #02332d;
        color: var(--white);
        border-radius: 10px;
        font-weight: bold;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-green:hover {
        background-color: var(--dark-green);
        color: var(--white);
    }
</style>

<!-- HERO -->
<?php get_template_part('template-parts/hero'); ?>


<?php
// Obtener los datos de los campos ACF
$title       = get_field('community_intro_title') ?: 'Our Commitment to the Community';
$description = get_field('community_intro_description') ?: 'At IL Forno a Legna, we believe that a great restaurant is built not just on delicious food, but also on a deep connection to the community. As a family-owned business in the heart of Rahway, NJ, we’re committed to creating lasting relationships, giving back, and making a positive impact wherever we can. Here’s how we approach our community involvement and the ways we continue <br> to make a difference.';
?>

<section id="community-intro" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h2 class="fw-bold mb-3">
                    <?php echo esc_html($title); ?>
                </h2>
                <p class="mb-0">
                    <?php // Usamos nl2br para convertir los saltos de línea del Área de Texto en <br>
                    echo nl2br(esc_html($description)); ?>
                </p>
            </div>
        </div>
    </div>
</section>

<?php
// Obtener los datos de los campos ACF
$image_url = get_field('support_local_image') ?: get_template_directory_uri() . '/assets/img/popular.png';
$content   = get_field('support_local_content');

// Contenido de respaldo para el editor WYSIWYG
$content_fallback = '
<h3 class="fw-bold mb-3">Supporting Local Businesses</h3>
<p>
    IL Forno a Legna values collaboration with other local businesses. From
    sourcing the freshest ingredients from nearby farms and markets to
    collaborating with neighboring shops, we aim to strengthen the Rahway
    economy by supporting our local suppliers and fellow entrepreneurs.
</p>
<div class="mt-3">
    <h5 class="fw-bold">Partnering with Local Farms & Vendors</h5>
    <p class="mb-2">
        We support New Jersey farmers and suppliers for seasonal produce,
        meats, and dairy. Our tomatoes, mozzarella, and fresh herbs are
        locally sourced to ensure quality in every dish.
    </p>
    <h5 class="fw-bold mt-3">Collaborations with Local Businesses</h5>
    <p class="mb-0">
        From wine pairings with local vineyards to craft beer nights with
        nearby breweries, we team up to create experiences that benefit our
        guests and our community.
    </p>
</div>';
?>

<section id="support-local" class="py-5">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <img src="<?php echo esc_url($image_url); ?>" alt="Supporting local businesses" class="img-fluid rounded-3" />
            </div>

            <div class="col-lg-6">
                <?php
                // Imprimir el contenido del editor WYSIWYG
                if ($content) {
                    echo $content;
                } else {
                    echo $content_fallback;
                }
                ?>
            </div>
        </div>
    </div>
</section>

<?php
// Obtener el título de la sección
$section_title = get_field('trailer_section_title') ?: 'Community Events & The Il Forno Pizza Trailer';
?>

<section id="pizza-trailer" class="py-5">
    <div class="container">
        <h3 class="fw-bold text-center mb-4">
            <?php echo esc_html($section_title); ?>
        </h3>
        <div class="row g-4 justify-content-center">
            <?php // Comprobar si hay tarjetas en el repetidor
            if (have_rows('trailer_cards')) :
                // Iniciar el bucle para recorrer cada tarjeta
                while (have_rows('trailer_cards')) : the_row();

                    // Obtener los datos de los sub-campos
                    $card_title       = get_sub_field('card_title');
                    $card_description = get_sub_field('card_description');
                    $card_button      = get_sub_field('card_button');
            ?>
                    <div class="col-md-6 col-lg-4 d-flex">
                        <div class="pizza-trailer-card">
                            <h5 class="fw-bold text-center"><?php echo esc_html($card_title); ?></h5>
                            <div class="card-content-wrapper">
                                <p class="mb-3 text-center"> <?php // mb-3 para dar espacio al botón si aparece 
                                                                ?>
                                    <?php echo nl2br(esc_html($card_description)); ?>
                                </p>
                            </div>

                            <?php // Comprobar si esta tarjeta tiene un botón
                            if ($card_button && $card_button['url'] && $card_button['title']) :
                                $btn_url    = esc_url($card_button['url']);
                                $btn_title  = esc_html($card_button['title']);
                                $btn_target = $card_button['target'] ? 'target="' . esc_attr($card_button['target']) . '"' : '';
                            ?>
                                <div class="text-center">
                                    <a href="<?php echo $btn_url; ?>" class="btn fw-bold btn-outline-gold" <?php echo $btn_target; ?>><?php echo $btn_title; ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
            <?php
                endwhile;
            endif; // Fin del bucle del repetidor
            ?>
        </div>
    </div>
</section>

<?php
// Obtener el título de la sección
$section_title = get_field('testimonials_section_title') ?: 'What Our Community Says';
?>

<section id="testimonials" class="py-5">
    <div class="container">
        <h3 class="fw-bold text-center mb-4"><?php echo esc_html($section_title); ?></h3>

        <div class="row g-4">
            <?php // Comprobar si hay testimonios en el repetidor
            if (have_rows('testimonials_list')) :
                // Iniciar el bucle para recorrer cada testimonio
                while (have_rows('testimonials_list')) : the_row();

                    // Obtener los datos de los sub-campos
                    $quote  = get_sub_field('testimonial_quote');
                    $author = get_sub_field('testimonial_author');
            ?>
                    <div class="col-md-6 d-flex">
                        <div class="testimonial-card">
                            <p class="mb-2 quote">
                                <?php echo esc_html($quote); ?>
                            </p>
                            <p class="mb-0"><?php echo esc_html($author); ?></p>
                        </div>
                    </div>
            <?php
                endwhile;
            endif; // Fin del bucle del repetidor
            ?>
        </div>
    </div>
</section>

<?php
// Obtener datos para la columna izquierda
$left_title       = get_field('get_involved_title') ?: 'Get Involved with Us!';
$left_description = get_field('get_involved_description') ?: 'Follow our events, book our pizza trailer, or just stop by for a meal we’d love to see you.';

// Obtener datos para la columna derecha (caja de contacto)
$right_title   = get_field('contact_box_title') ?: 'Join Us in Giving Back';
$right_content = get_field('contact_box_content');
$right_button  = get_field('contact_box_button');

// Contenido de respaldo para el WYSIWYG de la derecha
$right_content_fallback = '
<p class="mb-2">
    Interested in partnering or supporting our initiatives?
</p>
<ul class="mb-3 ps-3">
    <li>Email: <a href="mailto:fornoalegna@yahoo.com">fornoalegna@yahoo.com</a></li>
    <li>Phone: <a href="tel:+17323826600">(732) 382-6600</a></li>
</ul>';
?>

<section id="get-involved" class="py-5">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <h3 class="fw-bold"><?php echo esc_html($left_title); ?></h3>
                <p class="mb-3">
                    <?php echo nl2br(esc_html($left_description)); ?>
                </p>
                <div class="d-flex flex-wrap gap-2">
                    <?php // Bucle para los botones de la izquierda
                    if (have_rows('bet_involved_buttons')) :
                        $button_index = 0;
                        while (have_rows('bet_involved_buttons')) : the_row();
                            $button = get_sub_field('us_button');
                            if ($button) :
                                $btn_class = ($button_index === 0) ? 'btn-gold' : 'btn-outline-gold';
                                $btn_url    = esc_url($button['url']);
                                $btn_title  = esc_html($button['title']);
                                $btn_target = $button['target'] ? 'target="' . esc_attr($button['target']) . '"' : '';
                    ?>
                                <a href="<?php echo $btn_url; ?>" class="btn <?php echo $btn_class; ?>" <?php echo $btn_target; ?>><?php echo $btn_title; ?></a>
                    <?php
                                $button_index++;
                            endif;
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="cta-contact-box">
                    <h5 class="fw-bold mb-2"><?php echo esc_html($right_title); ?></h5>

                    <?php // Contenido del editor WYSIWYG
                    if ($right_content) {
                        echo $right_content;
                    } else {
                        echo $right_content_fallback;
                    }
                    ?>

                    <?php // Botón final de la caja de contacto
                    if ($right_button && $right_button['url'] && $right_button['title']) :
                        $btn_url    = esc_url($right_button['url']);
                        $btn_title  = esc_html($right_button['title']);
                        $btn_target = $right_button['target'] ? 'target="' . esc_attr($right_button['target']) . '"' : '';
                    ?>
                        <a href="<?php echo $btn_url; ?>" class="btn w-100 btn-green" <?php echo $btn_target; ?>><?php echo $btn_title; ?></a>
                    <?php endif; ?>
                </div>
            </div>
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