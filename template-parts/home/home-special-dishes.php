<?php
// Obtener los datos de los campos de la sección del plato especial
$image_url   = get_field('specialty_image') ?: get_template_directory_uri() . '/assets/img/napolitana.png';
$pre_title   = get_field('specialty_pre_title') ?: 'House Specialty';
$title       = get_field('specialty_title') ?: 'Authentic Neapolitan, Wood‑Fired to Perfection';
$description = get_field('specialty_description') ?: 'Our Neapolitan pizza is where tradition meets flavor. Crafted with thin, airy dough, San Marzano tomato sauce, creamy fresh mozzarella, and fragrant basil, each pie is baked to perfection in our wood‑fired oven.';
?>

<section class="special-dish-section">
    <div class="container-fluid">
        <div class="row align-items-center g-0">
            <div class="col-lg-6">
                <?php // La imagen y su 'alt' ahora son dinámicos 
                ?>
                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>" class="img-fluid w-100 h-100 object-fit-cover full-mobile-img" />
            </div>

            <div class="col-lg-6 p-5 text-white">
                <p class="text-uppercase small letter-spacing text-gold mb-2">
                    <?php echo esc_html($pre_title); ?>
                </p>
                <h2 class="display-6 fw-bold mb-3">
                    <?php echo esc_html($title); ?>
                </h2>
                <p class="fs-6">
                    <?php // Usamos nl2br para respetar los saltos de línea del Área de Texto 
                    ?>
                    <?php echo nl2br(esc_html($description)); ?>
                </p>
            </div>
        </div>
    </div>
</section>