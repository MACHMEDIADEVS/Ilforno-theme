<?php

/**
 * Template Name: Contact Page
 *
 * @package IL_Forno_a_Legna
 */

get_header();
?>

<style>
    .hero-section {
        position: relative;
        background-size: cover;
        background-position: center;
        color: #fff;
        text-align: center;
        padding: 120px 20px;
    }

    .hero-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        /* Superposición oscura */
        z-index: 0;
    }

    .hero-section .container {
        position: relative;
        z-index: 1;
    }

    .hero-section h1 {
        font-size: 48px;
        font-weight: 700;
    }

    .hero-section p {
        font-size: 24px;
        font-weight: 600;
        margin-top: 20px;
    }

    /* Formulario seccion estilo */
    .contact-section {
        background-color: #101010;
        padding: 60px 0;
    }

    .contact-form {
        background-color: #dacfbd;
    }

    .contact-info {
        background-color: #dacfbd;
        color: #1a1a1a;
    }

    .contact-info .text-accent {
        color: #1a1a1a;
    }

    .contact-section .form-control {
        background-color: transparent;
        border: none;
        border-bottom: 2px solid #1a1a1a;
        border-radius: 0;
        color: #1a1a1a;
    }

    .contact-section .form-control:focus {
        box-shadow: none;
        color: #1a1a1a;
        background-color: transparent;
    }

    .contact-section .btn-dark:hover {
        background-color: #dacfbd;
        color: #1a1a1a;
    }

    .map-wrapper {
        overflow: hidden;
        border-radius: 0.75rem;
    }

    .social-icons {
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .social-icon {
        font-size: 24px;
        color: #7f1100;
        transition: color 0.3s ease;
    }

    .social-icon:hover {
        color: #bf9861;
    }


    /* Estilos Corregidos para el Botón de la Sección de Contacto */

    /* Estilo para el estado normal del botón */
    .contact-section .btn-dark {
        background-color: #212529;
        color: #ffffff;
        border: 2px solid transparent;
        /* Borde transparente para evitar que el botón "salte" en hover */
        padding: 1rem 2rem;
        /* <-- 1. AUMENTAMOS LA ALTURA AQUÍ */
        border-radius: 6px;
        font-weight: 500;
        text-transform: none;
        transition: all 0.3s ease;
    }

    /* Estilo para hover (cuando el mouse pasa por encima) */
    .contact-section .btn-dark:hover {
        background-color: #dacfbd;
        color: #1a1a1a;
        border: 2px solid #1a1a1a;
        /* <-- 2. AÑADIMOS EL BORDE NEGRO AQUÍ */
    }
</style>

<?php
// Obtener los datos de los campos ACF
$background_image = get_field('contact_hero_image_bg');
$title            = get_field('contact_hero_title') ?: 'Contact IL Forno a Legna';
$subtitle         = get_field('contact_hero_subtitle') ?: 'We’d Love to Hear from You.';

// Preparar la URL de la imagen para el script
$background_image_url = $background_image ? $background_image['url'] : get_template_directory_uri() . '/assets/img/hero-image.png';
?>

<section class="hero-section" id="hero-section">
    <div class="container">
        <h1><?php echo esc_html($title); ?></h1>
        <p><?php echo esc_html($subtitle); ?></p>
    </div>
</section>

<?php
// Obtener los datos de los campos ACF
$form_title  = get_field('form_column_title') ?: 'Get in Touch';
$shortcode   = get_field('form_shortcode') ?: '[contact-form-7 id="d525695" title="Contact"]';
$info_title  = get_field('info_column_title') ?: 'IL FORNO A LEGNA LLC';
$info_details = get_field('info_column_details');

// Contenido de respaldo para el editor WYSIWYG
$info_details_fallback = '
<p>
    <strong>Address:</strong><br />123 Main Street, Rahway, NJ
</p>
<p><strong>Phone:</strong><br />(123) 456-7890</p>
<p><strong>Email:</strong><br />contact@ilforno.com</p>
<p>
    <strong>Hours:</strong><br />Sunday - Saturday, 9:00am -
    11:00pm
</p>';
?>

<section class="contact-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="contact-form p-5 rounded-4 shadow-lg h-100">
                    <h2 class="fw-bold mb-4"><?php echo esc_html($form_title); ?></h2>

                    <?php // Shortcode dinámico
                    if ($shortcode) {
                        echo do_shortcode($shortcode);
                    }
                    ?>

                    <?php // Iconos sociales estáticos, como se solicitó ?>
                    <div class="social-icons mt-5 text-center">
                        <a href="https://www.instagram.com/ilfornolegna/" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/ilfornolegna" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.tiktok.com/@ilfornolegna" class="social-icon"><i class="fab fa-tiktok"></i></a>
                        <a href="https://youtube.com/@ilfornolegna?si=TysJH8hQCmR3CK1W" class="social-icon"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact-info p-5 rounded-4 shadow-lg h-100 d-flex flex-column justify-content-between">
                    <div>
                        <h4 class="fw-bold mb-4 text-accent"><?php echo esc_html($info_title); ?></h4>
                        
                        <?php // Contenido del editor WYSIWYG
                        if ($info_details) {
                            echo $info_details;
                        } else {
                            echo $info_details_fallback;
                        }
                        ?>
                    </div>
                    <?php // Mapa estático, como se solicitó ?>
                    <div class="map-wrapper mt-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3032.422283084218!2d-74.27978388459955!3d40.61289197934288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3b3a3db3a3e63%3A0x8e8a3a3d3a3e63!2s1464%20Main%20St%2C%20Rahway%2C%20NJ%2007065%2C%20USA!5e0!3m2!1sen!2s!4v1620831303005!5m2!1sen!2s" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Asignar la URL de la imagen de fondo de forma dinámica desde ACF
    document.addEventListener("DOMContentLoaded", function() {
        const heroSection = document.getElementById("hero-section");
        <?php // Solo aplicar la imagen si la variable no está vacía ?>
        <?php if (!empty($background_image_url)) : ?>
            heroSection.style.backgroundImage = "url('<?php echo esc_url($background_image_url); ?>')";
        <?php endif; ?>
    });
</script>

<?php
get_footer();
?>