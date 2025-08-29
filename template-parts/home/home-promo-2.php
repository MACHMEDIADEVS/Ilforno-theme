<?php
$background_image_url = get_field('promo_background_image');
$title                = get_field('promo_title');
$description          = get_field('promo_description');
$button               = get_field('promo_button');
?>

<style>
    .promo-hero {
        margin-bottom: 60px;
        margin-top: 60px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 100px 0;
        position: relative;
        z-index: 1;
        overflow: hidden;

        .promo-overlay {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right,
                    rgba(0, 0, 0, 0.9) 0%,
                    rgba(0, 0, 0, 0.6) 40%,
                    rgba(0, 0, 0, 0) 100%);
            z-index: 0;
        }

        .container {
            position: relative;
            z-index: 1;

            h2 {
                font-size: 2.5rem;
                font-weight: bold;
                color: var(--white);
                margin-bottom: 1rem;
            }

            p {
                font-size: 1.1rem;
                line-height: 1.6;
                color: #f5f5f5;
                margin-bottom: 1rem;
            }
        }
    }
</style>

<?php if ($background_image_url || $title) : ?>
    <section class="promo-hero text-white d-flex align-items-center" style="background-image: url('<?php echo esc_url($background_image_url); ?>')">
        <div class="promo-overlay"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <?php if ($title) : ?>
                        <h2 class="fw-bold display-5">
                            <?php echo esc_html($title); ?>
                        </h2>
                    <?php endif; ?>

                    <?php if ($description) :
                        $formatted_description = wpautop(esc_html($description));
                        echo str_replace('<p>', '<p class="lead mt-3">', $formatted_description);
                    endif; ?>

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
    </section>
<?php endif; ?>