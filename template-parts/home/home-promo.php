<?php
// Obtener todos los datos de los campos del slider
$gallery_images = get_field('images_slider_promo_');
$title          = get_field('title_slider_h1_');
$description    = get_field('description_slider_p');
$button_text    = get_field('title_button_slider');
$button_link    = get_field('link_button_slider');
?>

<style>
    
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
                    <a href="<?php echo esc_url($button_link); ?>" class="btn btn-gold fw-bold">
                        <?php echo esc_html($button_text); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>