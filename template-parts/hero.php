<?php
$info_group           = get_field('info');
$background_image_url = get_field('background_hero');

if ($info_group) {
    $title    = $info_group['ttl_heroh1'];
    $subtitle = $info_group['subttl_hero'];
}
?>

<style>
    .hero-bg {
        position: relative;
        color: white;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 60vh;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        background-image: url('<?php echo esc_url($background_image_url); ?>');

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.55);
            z-index: 1;
        }

        .container {
            position: relative;
            z-index: 2;
        }
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .hero-bg {
            height: 70vh;
        }
    }
</style>

<section class="hero-bg">
    <div class="overlay"></div>
    <div class="container">
        <h1 class="display-4 fw-bold"><?php echo esc_html($title); ?></h1>
        <p class="lead">
            <?php echo nl2br(esc_html($subtitle)); ?>
        </p>
    </div>
</section>