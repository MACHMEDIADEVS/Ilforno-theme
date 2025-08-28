<?php
// Obtener datos de los campos personalizados para la sección 'hero'
$video_url = get_field('hero_video_bg');
$title     = get_field('hero_title_h1');
$subtitle  = get_field('hero_subtitle_h2');
?>

<style>
    .hero-section {
        position: relative;
        color: white;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .container {
            position: relative;
            z-index: 2;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .hero-content {
            h1 {
                font-size: 3rem;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
            }

            .lead {
                font-size: 1.25rem;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
            }

            .hero-buttons {
                gap: 1rem;
            }


        }
    }

    /* Sección de Información
    ----------------------
    Barra de iconos y texto al final del hero.
    */
    .info-section {
        .info-box {
            background-color: #171717;
            color: white;
            padding: 1rem 0;

            &.social-box {
                background-color: #bf9861;

                .social-icons {
                    i {
                        color: white;
                        font-size: 1.5rem;
                    }
                }
            }
        }
    }


    /* Ajustes de responsividad
    ----------------------
    Se aplican para tamaños de pantalla específicos.
    */
    @media (max-width: 991.98px) {
        .info-section .info-box {
            padding: 1.5rem;
        }
    }

    @media (max-width: 768px) {
        .hero-section {
            .container {
                h1 {
                    font-size: 2rem;
                }

                .lead {
                    font-size: 1rem;
                }
            }
        }

        .hero-buttons {
            flex-direction: column !important;
            align-items: center !important;


        }
    }
</style>

<section class="hero-section">
    <?php if ($video_url) : ?>
        <video autoplay muted loop playsinline class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover">
            <source src="<?php echo esc_url($video_url); ?>" type="video/webm" />
            Tu navegador no soporta la etiqueta de video.
        </video>
    <?php endif; ?>

    <div class="overlay"></div>

    <div class="container text-center text-white d-flex flex-column justify-content-center align-items-center">
        <?php if ($title || $subtitle) : ?>
            <div class="hero-content">
                <?php if ($title) : ?>
                    <h1 class="display-4"><?php echo esc_html($title); ?></h1>
                <?php endif; ?>
                <?php if ($subtitle) : ?>
                    <p class="lead"><?php echo esc_html($subtitle); ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if (have_rows('hero_buttons')) : ?>
            <div class="hero-buttons d-flex flex-column flex-md-row justify-content-center align-items-center gap-2">
                <?php
                while (have_rows('hero_buttons')) : the_row();
                    $button_text = get_sub_field('text_button_hero');
                    $button_link = get_sub_field('link_button_hero');
                ?>
                    <a href="<?php echo esc_url($button_link); ?>" class="btn btn-lg btn-primary flex-fill">
                        <?php echo esc_html($button_text); ?>
                    </a>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<section class="info-section">
    <div class="container-fluid p-0">
        <div class="row gx-0 text-center">
            <?php
            // Verifica si hay filas en el repetidor 'secciones_informacion_hero'
            if (have_rows('secciones_informacion_hero')) :
                while (have_rows('secciones_informacion_hero')) : the_row();
                    // Obtiene los datos de los sub-campos
                    $icon        = get_sub_field('icon_sectionbar'); // Campo nuevo para la clase del icono
                    $title       = get_sub_field('title_sectionbar_p');
                    $description = get_sub_field('description_sectionbar_p');
            ?>
                    <div class="col-md-3 info-box">
                        <i class="bi <?php echo esc_attr($icon); ?> big-icon"></i>
                        <div class="info-text">
                            <h4><?php echo esc_html($title); ?></h4>
                            <p><?php echo esc_html($description); ?></p>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>

            <?php
            // Verifica si hay filas en el nuevo repetidor 'secciones_sociales_hero'
            if (have_rows('secciones_sociales_hero')) :
            ?>
                <div class="col-md-3 info-box social-box">
                    <div class="social-icons">
                        <?php
                        while (have_rows('secciones_sociales_hero')) : the_row();
                            // Obtiene los datos de los sub-campos para redes sociales
                            $social_link = get_sub_field('link_social');
                            $social_icon = get_sub_field('icon_social');
                        ?>
                            <a href="<?php echo esc_url($social_link); ?>" aria-label="Síguenos en nuestras redes sociales">
                                <i class="bi <?php echo esc_attr($social_icon); ?>"></i>
                            </a>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>