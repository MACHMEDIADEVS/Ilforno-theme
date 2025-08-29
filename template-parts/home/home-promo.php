<?php
// Obtener todos los datos de los campos del slider
$gallery_images = get_field('images_slider_promo_');
$title          = get_field('title_slider_h1_');
$description    = get_field('description_slider_p');
$button_text    = get_field('title_button_slider');
$button_link    = get_field('link_button_slider');
?>

<style>
    .promo-banner-slider {
        position: relative;
        height: 80vh;
        overflow: hidden;
        display: flex;
        align-items: center;

        .promo-overlay {
            position: absolute;
            inset: 0;
            background-color: rgba(27, 27, 27, 0.55);
            /* oscurecer fondo */
            z-index: 1;
        }

        .promo-bg {
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center;
            opacity: 0;
            animation: fadeSlider 15s infinite ease-in-out;
            z-index: 0;
            transition: opacity 1s ease-in-out;
        }

        .promo-bg:nth-child(2) {
            animation-delay: 0s;
        }

        .promo-bg:nth-child(3) {
            animation-delay: 7.5s;
        }

        .container {
            position: relative;
            z-index: 2;
        }
    }
    @keyframes fadeSlider {
        0% {
            opacity: 0;
        }

        10% {
            opacity: 1;
        }

        25% {
            opacity: 1;
        }

        45% {
            opacity: 1;
        }

        55% {
            opacity: 1;
        }

        75% {
            opacity: 1;
        }

        90% {
            opacity: 0;
        }

        100% {
            opacity: 0;
        }
    }
</style>

<section class="promo-banner-slider text-white d-flex align-items-center position-relative">
    <div class="promo-overlay"></div>

    <?php
    if ($gallery_images) :
        foreach ($gallery_images as $image_url) :
    ?>
            <div class="promo-bg" style="background-image: url('<?php echo esc_url($image_url); ?>')"></div>
    <?php
        endforeach;
    endif;
    ?>

    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-6">
                <div class="promo-text p-4">
                    <h2 class="fw-bold mb-3">
                        <?php echo wp_kses_post($title); ?>
                    </h2>
                    <p class="mb-4">
                        <?php echo esc_html($description); ?>
                    </p>
                    <a href="<?php echo esc_url($button_link); ?>" class="btn btn-primary fw-bold">
                        <?php echo esc_html($button_text); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>