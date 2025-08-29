<?php
$background_image_url = get_field('image_service_bg');
$section_title        = get_field('services_section_title');
$section_subtitle     = get_field('services_section_subtitle');
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
    }

    .section-with-bg .overlay-bg {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(39, 38, 38, 0.712);
        z-index: 1;
    }

    .section-with-bg .container {
        position: relative;
        z-index: 2;
    }

    .section-with-bg .services-tabs {
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
        white-space: nowrap;
    }

    .section-with-bg .services-tabs .nav-link.active {
        background-color: var(--primary);
        color: var(--white);
        border-color: var(--primary);
    }

    .section-with-bg .services-tabs .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.05);
        color: var(--white);
        border-color: rgba(218, 207, 189, 0.7);
    }

    .service-card {
        background-color: #1a1a1a;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
        margin-top: 30px;
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
        $tabs = get_field('pestanas_servicios');
        if (!empty($tabs)) :
            $total_tabs = count($tabs);
        ?>
            <div class="d-none d-lg-block">
                <ul class="nav nav-tabs justify-content-center services-tabs mb-4 flex-nowrap" id="servicesTabDesktop" role="tablist">
                    <?php foreach ($tabs as $index => $tab) :
                        $slug = sanitize_title($tab['service_name']);
                        $is_active = ($index === 0);
                    ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link <?php if ($is_active) echo 'active'; ?>" id="<?php echo esc_attr($slug); ?>-tab-desktop" data-bs-toggle="tab" data-bs-target="#<?php echo esc_attr($slug); ?>" type="button" role="tab" aria-controls="<?php echo esc_attr($slug); ?>" aria-selected="<?php echo $is_active ? 'true' : 'false'; ?>">
                                <?php echo esc_html($tab['service_name']); ?>
                            </button>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="d-lg-none">
                <ul class="nav nav-tabs justify-content-center services-tabs mb-2" id="servicesTabMobile" role="tablist">
                    <?php for ($i = 0; $i < min(3, $total_tabs); $i++) :
                        $tab = $tabs[$i];
                        $slug = sanitize_title($tab['service_name']);
                        $is_active = ($i === 0);
                    ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link <?php if ($is_active) echo 'active'; ?>" id="<?php echo esc_attr($slug); ?>-tab-mobile" data-bs-toggle="tab" data-bs-target="#<?php echo esc_attr($slug); ?>" type="button" role="tab" aria-controls="<?php echo esc_attr($slug); ?>" aria-selected="<?php echo $is_active ? 'true' : 'false'; ?>">
                                <?php echo esc_html($tab['service_name']); ?>
                            </button>
                        </li>
                    <?php endfor; ?>
                </ul>

                <?php if ($total_tabs > 3) : ?>
                    <ul class="nav nav-tabs justify-content-center services-tabs mb-4" role="tablist">
                        <?php for ($i = 3; $i < $total_tabs; $i++) :
                            $tab = $tabs[$i];
                            $slug = sanitize_title($tab['service_name']);
                        ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="<?php echo esc_attr($slug); ?>-tab-mobile" data-bs-toggle="tab" data-bs-target="#<?php echo esc_attr($slug); ?>" type="button" role="tab" aria-controls="<?php echo esc_attr($slug); ?>" aria-selected="false">
                                    <?php echo esc_html($tab['service_name']); ?>
                                </button>
                            </li>
                        <?php endfor; ?>
                    </ul>
                <?php endif; ?>
            </div>


            <div class="tab-content" id="servicesTabContent">
                <?php foreach ($tabs as $index => $tab) :
                    $slug = sanitize_title($tab['service_name']);
                    $is_active = ($index === 0);
                    $content_title = $tab['service_content_title'] ?: $tab['service_name'];
                    $button = $tab['service_button'];
                ?>
                    <div class="tab-pane fade <?php if ($is_active) echo 'show active'; ?>" id="<?php echo esc_attr($slug); ?>" role="tabpanel" aria-labelledby="<?php echo esc_attr($slug); ?>-tab">
                        <div class="service-card row g-0 align-items-center">
                            <div class="col-lg-6">
                                <?php if (!empty($tab['service_image'])) : ?>
                                    <img src="<?php echo esc_url($tab['service_image']); ?>" class="img-fluid rounded-start w-100" alt="<?php echo esc_attr($content_title); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="col-lg-6 p-4">
                                <h3 class="text-light fw-bold"><?php echo esc_html($content_title); ?></h3>
                                <p class="text-light pb-4"><?php echo esc_html($tab['service_description']); ?></p>
                                <?php if ($button && !empty($button['url']) && !empty($button['title'])) :
                                    $button_url = esc_url($button['url']);
                                    $button_title = esc_html($button['title']);
                                    $button_target = !empty($button['target']) ? 'target="' . esc_attr($button['target']) . '"' : '';
                                ?>
                                    <a href="<?php echo $button_url; ?>" class="btn btn-primary" <?php echo $button_target; ?>><?php echo $button_title; ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <p class="text-center text-white">No hay servicios para mostrar en este momento.</p>
        <?php endif; ?>
    </div>
</section>