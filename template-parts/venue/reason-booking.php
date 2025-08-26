
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