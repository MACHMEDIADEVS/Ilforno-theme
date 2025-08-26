<?php
// Get the data from the ACF fields for the Events Hero section
$background_image_url = get_field('events_hero_background')['url'] ?? get_template_directory_uri() . '/assets/img/event-hero.png';
$title                = get_field('events_hero_title') ?: 'Venue';
$subtitle             = get_field('events_hero_subtitle') ?: 'Celebrate your special moments with IL Forno where food, ambiance, and service make every event unforgettable.';
?>

<style>
    /* HERO */
    .hero-events-section {
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
    }

    .hero-events-section .overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.55);
        z-index: 1;
    }

    .hero-events-section .container {
        position: relative;
        z-index: 2;
    }

    @media (max-width: 768px) {
        .hero-events-section {
            height: 70vh;
        }
    }
</style>

<section class="hero-events-section" style="background-image: url('<?php echo esc_url($background_image_url); ?>')">
    <div class="overlay"></div>
    <div class="container">
        <h1 class="display-4 fw-bold"><?php echo esc_html($title); ?></h1>
        <p class="lead">
            <?php
            echo nl2br(esc_html($subtitle)); ?>
        </p>
    </div>
</section>