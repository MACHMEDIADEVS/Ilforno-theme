<?php
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

            .btn.custom-btn {
                font-size: 18px;
                padding: 12px 30px;
                border-radius: 10px;
                text-transform: uppercase;
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

            .btn {
                width: 100%;
                max-width: 260px;
            }
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
                $button_count = 0;
                while (have_rows('hero_buttons')) : the_row();
                    $button_text = get_sub_field('text_button_hero');
                    $button_link = get_sub_field('link_button_hero');
                    $btn_class   = ($button_count === 0) ? 'btn-outline-light' : '';
                ?>
                    <a href="<?php echo esc_url($button_link); ?>" class="btn btn-lg <?php echo $btn_class; ?> custom-btn">
                        <?php echo esc_html($button_text); ?>
                    </a>
                <?php
                    $button_count++;
                endwhile;
                ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<section class="info-section">
    <div class="container-fluid p-0">
        <div class="row gx-0 text-center">
            <?php
            if (have_rows('secciones_informacion_hero')) :
                $icons = ['bi-telephone-fill', 'bi-geo-alt-fill', 'bi-clock'];
                $icon_index = 0;
                while (have_rows('secciones_informacion_hero')) : the_row();
                    $title       = get_sub_field('title_sectionbar_p');
                    $description = get_sub_field('description_sectionbar_p');
            ?>
                    <div class="col-md-3 info-box">
                        <i class="bi <?php echo esc_attr($icons[$icon_index]); ?> big-icon"></i>
                        <div class="info-text">
                            <h4><?php echo esc_html($title); ?></h4>
                            <p><?php echo esc_html($description); ?></p>
                        </div>
                    </div>
            <?php
                    $icon_index++;
                endwhile;
            endif;
            ?>

            <div class="col-md-3 info-box social-box">
                <div class="social-icons">
                    <a href="https://www.tiktok.com/@ilfornolegna" aria-label="Síguenos en TikTok">
                        <i class="bi bi-tiktok"></i>
                    </a>
                    <a href="https://www.facebook.com/ilfornolegna" aria-label="Síguenos en Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/ilfornolegna/" aria-label="Síguenos en Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>