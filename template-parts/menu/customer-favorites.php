<?php
$main_image_url = get_field('favorites_main_image') ?: get_template_directory_uri() . '/assets/img/popular.png';
$section_title  = get_field('favorites_section_title') ?: 'Customer Favorites';
?>

<style>
    .favorite-img {
        width: 8.5em;
        height: 8.5em;
        margin-bottom: 0.625em;
        overflow: hidden;
        border-radius: 50%;
        border: 0.0625em solid var(--primary);
        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    }
</style>

<section id="customer-favorites" class="">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-5 favorites-left-img">
                <img src="<?php echo esc_url($main_image_url); ?>" alt="<?php echo esc_attr($section_title); ?>" class="img-fluid w-100 h-100" />
            </div>

            <div class="col-lg-7 p-5 favorites-right">
                <style>
                    .btn-outline-golden {
                        background-color: transparent;
                        color: var(--primary);
                        border: 2px solid var(--primary);
                        font-weight: bold;
                        padding: 10px 5px;
                        border-radius: 8px;
                        text-transform: uppercase;
                        transition: all 0.3s ease;
                    }
                </style>
                <h2 class="text-gold fw-bold text-uppercase mb-4 text-center text-lg-start">
                    <?php echo esc_html($section_title); ?>
                </h2>

                <div class="row g-4">
                    <?php
                    if (have_rows('favorites_list')) :
                        while (have_rows('favorites_list')) : the_row();
                            $item_image_url = get_sub_field('favorite_item_image');
                            $item_name      = get_sub_field('favorite_item_name');
                            $item_button    = get_sub_field('favorite_item_button');
                    ?>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="favorite-card">
                                    <div class="favorite-img">
                                        <img src="<?php echo esc_url($item_image_url); ?>" alt="<?php echo esc_attr($item_name); ?>" />
                                    </div>
                                    <h5 class="text-gold"><?php echo esc_html($item_name); ?></h5>

                                    <?php if ($item_button && $item_button['url'] && $item_button['title']) :
                                        $button_url = esc_url($item_button['url']);
                                        $button_title = esc_html($item_button['title']);
                                        $button_target = $item_button['target'] ? 'target="' . esc_attr($item_button['target']) . '"' : '';
                                    ?>
                                        <a href="<?php echo $button_url; ?>" class="btn btn-outline-primary" <?php echo $button_target; ?>><?php echo $button_title; ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php
                        endwhile;
                    else :
                        ?>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <p class="text-white">Añade platos favoritos desde el editor.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>