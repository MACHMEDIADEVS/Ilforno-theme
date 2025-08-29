<?php

/**
 * Template Name: Join Our Team Page
 *
 * @package IL_Forno_a_Legna
 */

get_header();

$section_title = get_field('why_work_title') ?: 'Why Work at IL Forno a Legna?';

$image       = get_field('apply_section_image');
$title       = get_field('apply_section_title') ?: 'How to Apply';
$description = get_field('apply_section_description');
$button      = get_field('apply_section_button');

$image_url = get_field('form_section_image') ?: get_template_directory_uri() . '/assets/img/horno-join.png';
$title     = get_field('form_section_title') ?: 'Join the IL Forno Family';
$shortcode = get_field('form_section_shortcode') ?: '[contact-form-7 id="985d1dd" title="Join Team"]';

// Fallbacks
if ($image) {
    $image_url = $image['url'];
    $image_alt = $image['alt'] ?: $title;
} else {
    $image_url = get_template_directory_uri() . '/assets/img/aplicar.png';
    $image_alt = 'Il Forno Restaurant Interior';
}

$description_fallback = '<p class="mb-4">
    Ready to be part of our team? We’d love to hear from you! Fill
    out the contact form below or send your resume to
    <strong>fornoalegna@yahoo.com</strong>. We’re excited to see how
    you can contribute to the Il Forno a Legna family!
</p>';
?>

<style>
    /* hero sitlo */
    .hero-join-section {
        background-size: cover;
        background-position: center;
        height: 50vh;
        position: relative;
    }

    .hero-join-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        /* efecto oscuro */
        z-index: 1;
    }

    .hero-join-section .container {
        position: relative;
        z-index: 2;
    }

    /* Seccion trabajo */
    .why-work-section {
        background-color: #1a1a1a;
        color: #1a1a1a;
    }

    .why-work-section h2 {
        color: var(--primary);
        font-size: 2.3rem;
    }

    .custom-bg {
        background-color: var(--light-cream);
    }

    .why-work-section i {
        color: #1a1a1a;
        /* cambia a oscuro para contrastar con el fondo dorado */
    }

    .why-work-section h5 {
        color: #1a1a1a;
        font-size: 1.1rem;
        margin-bottom: 0.5rem;
    }

    .why-work-section p {
        color: #1a1a1a;
        /* mejora legibilidad sobre fondo dorado */
        font-size: 0.95rem;
        line-height: 1.6;
    }

    /* seccion aplicar */
    .how-to-apply-modern .info-box {
        background-color: var(--light-cream);
        color: #1a1a1a;
        padding: 2rem;
        border-radius: 15px;
        box-shadow: 0 0.1rem 0.1rem rgba(0, 0, 0, 0.15);
    }

    .col-lg-6 h2 {
        color: var(--primary);
    }

    .col-lg-6 p {
        color: var(--light-cream);
    }

    .how-to-apply-modern .info-box h2 {
        font-size: 1.8rem;
        font-weight: 700;
    }

    .how-to-apply-modern .info-box p {
        font-size: 1rem;
        margin-bottom: 1.2rem;
    }

    .how-to-apply-modern .info-box a.btn {
        background-color: #1a1a1a;
        color: var(--white);
        font-weight: 600;
        border-radius: 8px;
    }

    .how-to-apply-modern .info-box a.btn:hover {
        background-color: #7f1100;
        color: var(--white);
    }

    .with-bg-overlay {
        position: relative;
        background-image: url("../img/bg-services.png");
        /* Cambia por tu imagen */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        z-index: 1;
    }

    .with-bg-overlay::before {
        content: "";
        position: absolute;
        inset: 0;
        background-color: #85808049;
        /* efecto oscuro encima de la imagen */
        z-index: 2;
    }

    .with-bg-overlay .container {
        position: relative;
        z-index: 3;
    }

    /* Estilos para el botón dorado con tu color personalizado */
    .btn-golden {
        background-color: var(--primary);
        color: #201c21ff;
        /* <--- ¡Aquí está tu color morado de la captura! */
        border: none;
        padding: 0.6rem 1.2rem;
        transition: background-color 0.3s ease;
        font-weight: bold;
    }

    /* También puedes ajustar el color del texto cuando el mouse pasa por encima si lo deseas */
    .btn-golden:hover {
        background-color: #a87f47;
        color: var(--white);
        /* Generalmente se ve bien un color blanco al pasar el mouse */
    }


    /* =========================================
   SOLUCIÓN PARA EL FONDO DE LA SECCIÓN
    ============================================ */

    /* 1. Esta clase crea el espacio vertical arriba y abajo de la tarjeta gris */
    .apply-section-area {
        padding: 80px 0;
        /* Puedes ajustar el 80px si quieres más o menos espacio */
        background-color: var(--light-cream);
    }

    /* 2. Esta es la clase más importante: convierte el contenedor en la tarjeta gris */


    /* 3. Ajuste para que el padding sea menor en dispositivos móviles */
    @media (max-width: 768px) {
        .apply-section-bg {
            padding: 25px;
        }

        h2 {
            font-size: 1.8rem !important;
            padding: 0em 1em !important;
        }
    }

    /* formulario de aplicacion */
    .application-form-section {
        background-color: #141414;
        padding-top: 4rem;
        padding-bottom: 4rem;
    }

    .application-form-section h2 {
        font-size: 2rem;
        color: var(--white);
    }

    .application-form-section .form-wrapper {
        max-width: 100%;
    }

    .application-form-section .form-control {
        border-radius: 0.375rem;
        border: 1px solid #ccc;
        padding: 0.75rem;
        font-size: 0.95rem;
    }

    .application-form-section .btn-golden {
        background-color: var(--primary);
        color: #1a1a1a;
        border: none;
        padding: 0.6rem 1.4rem;
        transition: background-color 0.3s ease;
    }

    .application-form-section .btn-golden:hover {
        background-color: #a87f47;
        color: var(--white);
    }

    .btn-gold {
        background-color: var(--primary);
        color: #1a1a1a;
        font-weight: 600;
        border: none;
    }

    .btn-gold:hover {
        background-color: #a87f3d;
        color: var(--white);
    }



    /* Wrapper oscuro ya existente */
    .application-form-section {
        background-color: #141414;
        padding-top: 4rem;
        padding-bottom: 4rem
    }

    .application-form-section h2 {
        font-size: 2rem;
        color: var(--white)
    }

    .application-form-section .form-wrapper {
        max-width: 100%
    }

    /* Inputs blancos con borde y radio (B5 look) */
    .application-form-section .wpcf7 .form-control,
    .application-form-section .wpcf7 select,
    .application-form-section .wpcf7 textarea,
    .application-form-section .wpcf7 input[type="text"],
    .application-form-section .wpcf7 input[type="email"],
    .application-form-section .wpcf7 input[type="tel"],
    .application-form-section .wpcf7 input[type="file"] {
        background: var(--white);
        color: #1a1a1a;
        border: 1px solid #ccc;
        border-radius: .375rem;
        padding: .75rem;
        font-size: .95rem;
        box-shadow: none;
    }

    .application-form-section .wpcf7 .form-control:focus,
    .application-form-section .wpcf7 textarea:focus,
    .application-form-section .wpcf7 input:focus {
        outline: 0;
        box-shadow: none;
        border-color: #b3b3b3;
    }

    /* File input altura/coherencia */
    .application-form-section .wpcf7 input[type="file"] {
        padding: .55rem .75rem;
        cursor: pointer;
    }

    /* Botón dorado como el diseño */
    .application-form-section .wpcf7 .wpcf7-submit,
    .application-form-section .btn-golden {
        background-color: var(--primary);
        color: #1a1a1a;
        border: 0;
        border-radius: .375rem;
        font-weight: 600;
        padding: .6rem 1.4rem;
        transition: background-color .3s ease, color .3s ease, border-color .3s ease;
        cursor: pointer;
    }

    .application-form-section .wpcf7 .wpcf7-submit:hover,
    .application-form-section .btn-golden:hover {
        background-color: #a87f47;
        color: var(--white);
    }

    /* Ajustes menores en espacios */
    .application-form-section .wpcf7 .row {
        --bs-gutter-x: 1rem
    }

    /* Botón dorado – tamaño y estilo final */
    .application-form-section .wpcf7 .wpcf7-submit,
    .application-form-section .btn-golden {
        background-color: var(--primary);
        color: #1a1a1a;
        border: 0;
        border-radius: .5rem;
        /* similar a tu captura */
        font-weight: 700;
        font-size: 1rem;
        line-height: 1.2;
        /* compacta alto de línea */
        padding: 12px 28px;
        /* alto y ancho del botón */
        min-width: 230px;
        /* ancho mínimo como la maqueta */
        height: 48px;
        /* altura consistente */
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: background-color .3s ease, color .3s ease, border-color .3s ease;
        cursor: pointer;
    }

    .application-form-section .wpcf7 .wpcf7-submit:hover,
    .application-form-section .btn-golden:hover {
        background-color: #a87f47;
        color: var(--white);
    }
</style>

<!-- HERO -->
<?php get_template_part('template-parts/hero'); ?>

<section class="why-work-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold"><?php echo esc_html($section_title); ?></h2>
        </div>
        <div class="row g-4">
            <?php // Comprobar si hay razones en el repetidor
            if (have_rows('why_work_reasons')) :
                // Iniciar el bucle para recorrer cada razón
                while (have_rows('why_work_reasons')) : the_row();

                    // Obtener los datos de los sub-campos
                    $reason_title       = get_sub_field('reason_title');
                    $reason_description = get_sub_field('reason_description');
            ?>
                    <div class="col-md-6 col-lg-3 text-center">
                        <div class="p-4 custom-bg rounded shadow-sm h-100">
                            <?php // El bloque del icono ha sido eliminado, como se solicitó 
                            ?>
                            <h5 class="fw-bold"><?php echo esc_html($reason_title); ?></h5>
                            <p class="small">
                                <?php echo esc_html($reason_description); ?>
                            </p>
                        </div>
                    </div>
            <?php
                endwhile;
            endif; // Fin del bucle del repetidor
            ?>
        </div>
    </div>
</section>

<section class="apply-section-area">
    <div class="container apply-section-bg">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>" class="img-fluid rounded shadow" />
            </div>

            <div class="col-lg-6">
                <div class="bg-dark p-5 rounded-2 shadow-sm">
                    <h2 class="fw-bold mb-3"><?php echo esc_html($title); ?></h2>

                    <?php // Imprimir el contenido del editor WYSIWYG
                    if ($description) {
                        echo $description;
                    } else {
                        echo $description_fallback;
                    }
                    ?>

                    <?php // Comprobar y mostrar el botón del campo Enlace
                    if ($button && $button['url'] && $button['title']) :
                        $btn_url    = esc_url($button['url']);
                        $btn_title  = esc_html($button['title']);
                        $btn_target = $button['target'] ? 'target="' . esc_attr($button['target']) . '"' : '';
                    ?>
                        <a href="<?php echo $btn_url; ?>" class="btn btn-golden fw-bold" <?php echo $btn_target; ?>><?php echo $btn_title; ?></a>
                    <?php else: // Botón de respaldo 
                    ?>
                        <a href="#application-form" class="btn btn-golden fw-bold">Submit Application</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="application-form-section py-5" id="application-form">
    <div class="container">
        <div class="row justify-content-center align-items-center g-5">
            <div class="col-lg-6 text-center">
                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>" class="img-fluid rounded shadow" />
            </div>

            <div class="col-lg-6">
                <div class="form-wrapper bg-dark text-white p-4 rounded shadow-sm">
                    <h2 class="fw-bold mb-4"><?php echo esc_html($title); ?></h2>
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
get_footer();
?>