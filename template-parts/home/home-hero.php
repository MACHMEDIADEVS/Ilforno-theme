<?php
$video_url = get_field('hero_video_bg');
$title     = get_field('hero_title_h1');
$subtitle  = get_field('hero_subtitle_h2');

$telefono    = get_field('phone_ilforno', 'option');
$direccion   = get_field('address_ilforno', 'option');
$instagram   = get_field('insta_ilforno', 'option');
$facebook    = get_field('fb_ilforno', 'option');
$tiktok      = get_field('tiktok_ilforno', 'option');
?>

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
                    <h1 class=""><?php echo esc_html($title); ?></h1>
                <?php endif; ?>
                <?php if ($subtitle) : ?>
                    <p class="lead"><?php echo esc_html($subtitle); ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if (have_rows('hero_buttons')) : ?>
            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-2">
                <?php
                while (have_rows('hero_buttons')) : the_row();
                    $button_text = get_sub_field('text_button_hero');
                    $button_link = get_sub_field('link_button_hero');
                ?>
                    <a href="<?php echo esc_url($button_link); ?>" class="btn btn-lg btn-primary flex-fill">
                        <?php echo esc_html($button_text); ?>
                    </a>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<section class="info-section">
    <div class="container-fluid p-0">
        <div class="row gx-0 text-center">

            <?php if ($telefono) : ?>
                <div class="col-md-3 info-box">
                    <i class="bi bi-telephone-fill big-icon"></i>
                    <div class="info-text">
                        <h4><?php echo esc_html($telefono); ?></h4>
                        <p>Call us for bookings or questions</p>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ($direccion) : ?>
                <div class="col-md-3 info-box">
                    <i class="bi bi-geo-alt-fill big-icon"></i>
                    <div class="info-text">
                        <h4><?php echo esc_html($direccion); ?></h4>
                        <p>Downtown Rahway</p>
                    </div>
                </div>
            <?php endif; ?>

            <div class="col-md-3 info-box">
                <i class="bi bi-clock big-icon"></i>
                <div class="info-text">
                    <h4>Open Monday - Sunday</h4>
                    <p>11:00 AM - 9:00 PM</p>
                </div>
            </div>

            <div class="col-md-3 info-box social-box">
                <div class="social-icons">
                    <?php if ($tiktok) : ?>
                        <a href="<?php echo esc_url($tiktok); ?>" aria-label="Follow us TikTok" target="_blank">
                            <i class="bi bi-tiktok"></i>
                        </a>
                    <?php endif; ?>

                    <?php if ($facebook) : ?>
                        <a href="<?php echo esc_url($facebook); ?>" aria-label="Follow us Facebook" target="_blank">
                            <i class="bi bi-facebook"></i>
                        </a>
                    <?php endif; ?>

                    <?php if ($instagram) : ?>
                        <a href="<?php echo esc_url($instagram); ?>" aria-label="Follow us Instagram" target="_blank">
                            <i class="bi bi-instagram"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</section>