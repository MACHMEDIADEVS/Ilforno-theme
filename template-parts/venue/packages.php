<?php
// Obtener los datos de los campos principales de la sección
$background_image_url = get_field('packages_bg_image') ?: get_template_directory_uri() . '/assets/img/events-intro.png';
$section_title        = get_field('packages_section_title') ?: 'Event Packages';
$primary_button       = get_field('packages_primary_button');
$secondary_button     = get_field('packages_secondary_button');
?>

<section id="event-packages" class="py-5" style="
        background-image: url('<?php echo esc_url($background_image_url); ?>');
        background-size: cover;
        background-position: center;
        position: relative;
      ">
    <div class="overlay"></div>

    <div class="container position-relative">
        <h2 class="text-center fw-bold text-gold mb-5"><?php echo esc_html($section_title); ?></h2>

        <div class="row g-4">
            <?php // Comprobar si existen paquetes en el repetidor
            if (have_rows('packages_repeater')) :
                // Iniciar el bucle para recorrer cada paquete
                while (have_rows('packages_repeater')) : the_row();

                    // Obtener los datos de los sub-campos para este paquete
                    $package_title        = get_sub_field('package_title');
                    $package_price        = get_sub_field('package_price');
                    $package_price_unit   = get_sub_field('package_price_unit');
                    $package_details      = get_sub_field('package_details'); // Contenido del editor WYSIWYG
                    $package_footer_notes = get_sub_field('package_footer_notes');
            ?>
                    <div class="col-md-4 d-flex">
                        <div class="package-card w-100 rounded-3 p-4 d-flex flex-column gap-2">
                            <h5 class="fw-bold text-gold mb-1 text-center"><?php echo esc_html($package_title); ?></h5>
                            <p class="price text-gold fw-bold fs-4 mb-3 text-center">
                                <?php echo esc_html($package_price); ?>
                                <span class="fs-6"><?php echo esc_html($package_price_unit); ?></span>
                            </p>

                            <?php // Imprimimos el contenido del editor WYSIWYG
                            if ($package_details) {
                                // Envolvemos el contenido del WYSIWYG para mantener el estilo del diseño original
                                echo '<div class="package-details-content lh-sm mb-4 text-start mx-auto" style="max-width: 300px;">' . $package_details . '</div>';
                            }
                            ?>

                            <div class="text-gold small mb-0 text-center">
                                <?php // Usamos nl2br para los saltos de línea en las notas al pie
                                if ($package_footer_notes) {
                                    echo nl2br(esc_html($package_footer_notes));
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
            else :
                // Mensaje de respaldo si el repetidor está vacío
                ?>
                <div class="col-12">
                    <p class="text-center text-white">Los paquetes de eventos se mostrarán aquí.</p>
                </div>
            <?php endif; ?>
        </div>

        <div class="text-center mt-5">
            <?php // Botón Principal
            if ($primary_button && $primary_button['url'] && $primary_button['title']) :
                $btn_url    = esc_url($primary_button['url']);
                $btn_title  = esc_html($primary_button['title']);
                $btn_target = $primary_button['target'] ? 'target="' . esc_attr($primary_button['target']) . '"' : '';
            ?>
                <a href="<?php echo $btn_url; ?>" class="btn btn-gold m-2" <?php echo $btn_target; ?>><?php echo $btn_title; ?></a>
            <?php endif; ?>

            <?php // Botón Secundario
            if ($secondary_button && $secondary_button['url'] && $secondary_button['title']) :
                $btn_url    = esc_url($secondary_button['url']);
                $btn_title  = esc_html($secondary_button['title']);
                $btn_target = $secondary_button['target'] ? 'target="' . esc_attr($secondary_button['target']) . '"' : '';
            ?>
                <a href="<?php echo $btn_url; ?>" class="btn btn-outline-gold m-2" <?php echo $btn_target; ?>><?php echo $btn_title; ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>