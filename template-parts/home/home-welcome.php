<?php
$main_image_url    = get_field('welcome_main_image');
$text_bg_image_url = get_field('welcome_image_bg');
$title             = get_field('welcome_title');
$description       = get_field('welcome_description');
$button            = get_field('welcome_button');
?>

<section class="pizza-welcome-section">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <?php if ($main_image_url) : ?>
                <div class="col-lg-6">
                    <div class="pizza-image bg-cover h-100" style="background-image: url('<?php echo esc_url($main_image_url); ?>'); height: 0dvh;"></div>
                </div>
            <?php endif; ?>

            <div class="col-lg-6 position-relative text-side">
                <?php if ($text_bg_image_url) : ?>
                    <div class="text-bg" style="background-image: url('<?php echo esc_url($text_bg_image_url); ?>')"></div>
                <?php endif; ?>

                <div class="text-overlay"></div>

                <div class="d-flex align-items-center h-100 text-white px-5 py-5 position-relative" style="z-index: 2">
                    <div>
                        <?php if ($title) : ?>
                            <h2 class="fw-bold mb-4">
                                <?php echo wp_kses_post($title); ?>
                            </h2>
                        <?php endif; ?>

                        <?php if ($description) : ?>
                            <p class="text-light">
                                <?php echo nl2br(esc_html($description)); ?>
                            </p>
                        <?php endif; ?>

                        <?php if ($button && $button['url'] && $button['title']) :
                            $button_url    = esc_url($button['url']);
                            $button_title  = esc_html($button['title']);
                            $button_target = $button['target'] ? 'target="' . esc_attr($button['target']) . '"' : '';
                        ?>
                            <a href="<?php echo $button_url; ?>" class="btn btn-primary mt-4" <?php echo $button_target; ?>><?php echo $button_title; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>