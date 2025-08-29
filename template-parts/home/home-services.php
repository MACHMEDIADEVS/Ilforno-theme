<?php
$background_image_url = get_field('image_service_bg') ?: get_template_directory_uri() . '/assets/img/servi-fondo.png';
$section_title        = get_field('services_section_title') ?: 'Our Services';
$section_subtitle     = get_field('services_section_subtitle') ?: 'We do more than serve pizza. Explore our full list of services designed for all occasions.';
?>

<style>
    .services-section {
        background-color: var(--primary);
        margin-bottom: 60px;
        margin-top: 60px;
    }

    .section-with-bg {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        z-index: 1;

        .overlay-bg {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(39, 38, 38, 0.712);
            z-index: 1;
        }

        .container {
            position: relative;
            z-index: 2;

            .services-tabs {
                gap: 15px;
                border-bottom: none;
            }

            .services-tabs .nav-link {
                background-color: transparent;
                color: var(--light-cream);
                border: 1px solid rgba(218, 207, 189, 0.4);
                border-radius: 5px;
                font-weight: bold;
                font-size: 1.1rem;
                padding: 12px 20px;
                transition: all 0.3s ease-in-out;
            }

            .services-tabs .nav-link.active {
                background-color: var(--primary);
                color: var(--white);
                border-color: var(--primary);
            }

            .services-tabs .nav-link:hover {
                background-color: rgba(255, 255, 255, 0.05);
                color: var(--white);
                border-color: rgba(218, 207, 189, 0.7);
            }
        }

        .service-card {
            background-color: #1a1a1a;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
            margin-top: 30px;
        }
    }
</style>

<section class="services-section py-5 section-with-bg position-relative" style="background-image: url('<?php echo esc_url($background_image_url); ?>')">
    <div class="overlay-bg"></div>
    <div class="container mb-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-white"><?php echo esc_html($section_title); ?></h2>
            <p class="text-white fw-bold"><?php echo esc_html($section_subtitle); ?></p>
        </div>

        <?php
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
                                <p class="text-light pb-4"><?php echo esc_html($description); ?></p>
                                <?php if ($button && $button['url'] && $button['title']) :
                                    $button_url = esc_url($button['url']);
                                    $button_title = esc_html($button['title']);
                                    $button_target = $button['target'] ? 'target="' . esc_attr($button['target']) . '"' : '';
                                ?>
                                    <a href="<?php echo $button_url; ?>" class="btn btn-primary" <?php echo $button_target; ?>><?php echo $button_title; ?></a>
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