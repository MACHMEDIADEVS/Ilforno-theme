<?php
// Obtener los datos de los campos de la sección
$background_image_url = get_field('image_service_bg') ?: get_template_directory_uri() . '/assets/img/servi-fondo.png';
$section_title        = get_field('services_section_title') ?: 'Our Services';
$section_subtitle     = get_field('services_section_subtitle') ?: 'We do more than serve pizza. Explore our full list of services designed for all occasions.';
?>

<section class="services-section py-5 section-with-bg position-relative" style="background-image: url('<?php echo esc_url($background_image_url); ?>')">
    <div class="overlay-bg"></div>
    <div class="container mb-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-white"><?php echo esc_html($section_title); ?></h2>
            <p class="text-green"><?php echo esc_html($section_subtitle); ?></p>
        </div>

        <?php // Comprobamos si existen servicios en el repetidor
        if (have_rows('pestanas_servicios')) : ?>

            <ul class="nav nav-tabs justify-content-center services-tabs mb-4" id="servicesTab" role="tablist">
                <?php
                $tab_index = 0;
                while (have_rows('pestanas_servicios')) : the_row();
                    $service_name = get_sub_field('service_name');
                    $slug = sanitize_title($service_name);
                    $active_class = ($tab_index === 0) ? 'active' : '';
                ?>
                    <li class="nav-item d-inline-block" role="presentation">
                        <button class="nav-link <?php echo $active_class; ?>" id="<?php echo $slug; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $slug; ?>" type="button" role="tab" aria-controls="<?php echo $slug; ?>" aria-selected="<?php echo ($tab_index === 0) ? 'true' : 'false'; ?>">
                            <?php echo esc_html($service_name); ?>
                        </button>
                    </li>
                <?php
                    $tab_index++;
                endwhile;
                ?>
            </ul>

            <div class="tab-content" id="servicesTabContent">
                <?php
                $content_index = 0;
                while (have_rows('pestanas_servicios')) : the_row();
                    $service_name = get_sub_field('service_name');
                    $slug = sanitize_title($service_name);

                    $image_url     = get_sub_field('service_image');
                    $content_title = get_sub_field('service_content_title') ?: $service_name;
                    $description   = get_sub_field('service_description');
                    $button        = get_sub_field('service_button');

                    $active_class = ($content_index === 0) ? 'show active' : '';
                ?>
                    <div class="tab-pane fade <?php echo $active_class; ?>" id="<?php echo $slug; ?>" role="tabpanel" aria-labelledby="<?php echo $slug; ?>-tab">
                        <div class="service-card row g-0 align-items-center">
                            <div class="col-lg-6">
                                <?php if ($image_url): ?>
                                    <img src="<?php echo esc_url($image_url); ?>" class="img-fluid rounded-start w-100" alt="<?php echo esc_attr($content_title); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="col-lg-6 p-4">
                                <h3 class="text-light fw-bold"><?php echo esc_html($content_title); ?></h3>
                                <p class="text-light"><?php echo esc_html($description); ?></p>
                                <?php if ($button && $button['url'] && $button['title']) :
                                    $button_url = esc_url($button['url']);
                                    $button_title = esc_html($button['title']);
                                    $button_target = $button['target'] ? 'target="' . esc_attr($button['target']) . '"' : '';
                                ?>
                                    <a href="<?php echo $button_url; ?>" class="btn-service" <?php echo $button_target; ?>><?php echo $button_title; ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php
                    $content_index++;
                endwhile;
                ?>
            </div>

        <?php else : ?>
            <p class="text-center text-white">No hay servicios para mostrar en este momento.</p>
        <?php endif; ?>
    </div>
</section>