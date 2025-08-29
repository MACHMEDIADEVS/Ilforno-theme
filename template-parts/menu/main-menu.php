<?php
$main_menu_title = get_field('main_menu_title');
?>

<style>
    .custom-menu-modal .modal-content {
        background-color: black;
        color: var(--light-cream);
        border: 1px solid var(--primary);
    }

    .custom-menu-modal .modal-title {
        color: var(--primary);
    }

    .custom-menu-modal .dish-price {
        color: var(--primary-hover);
    }
</style>

<section id="main-menu" class="py-5">
    <div class="container">
        <?php if ($main_menu_title) : ?>
            <h2 class="text-center mb-5 fw-bold text-uppercase"><?php echo esc_html($main_menu_title); ?></h2>
        <?php endif; ?>

        <div class="row g-4">
            <?php
            $args = array(
                'post_type'      => 'menu',
                'posts_per_page' => -1,
                'orderby'        => 'title',
                'order'          => 'ASC',
            );

            $menu_query = new WP_Query($args);

            if ($menu_query->have_posts()) :
                while ($menu_query->have_posts()) : $menu_query->the_post();
                    $post_id = get_the_ID();
            ?>
                    <div class="col-md-6 col-lg-4">
                        <a href="#" class="menu-card-link" data-bs-toggle="modal" data-bs-target="#menuModal-<?php echo $post_id; ?>">
                            <div class="menu-card">
                                <div class="menu-img">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php echo get_the_post_thumbnail_url($post_id, 'large'); ?>" alt="<?php the_title_attribute(); ?>" />
                                    <?php endif; ?>
                                    <div class="overlay"></div>
                                    <h3 class="category-title"><?php the_title(); ?></h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="modal fade custom-menu-modal" id="menuModal-<?php echo $post_id; ?>" tabindex="-1" aria-labelledby="menuModalLabel-<?php echo $post_id; ?>" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="menuModalLabel-<?php echo $post_id; ?>"><?php the_title(); ?></h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php if (get_field('description_menu')) : ?>
                                        <p class="lead"><?php the_field('description_menu'); ?></p>
                                        <hr>
                                    <?php endif; ?>

                                    <?php if (have_rows('menu_item_list')) : ?>
                                        <ul class="list-unstyled">
                                            <?php while (have_rows('menu_item_list')) : the_row();
                                                $title = get_sub_field('title_dish');
                                                $desc  = get_sub_field('description_dish');
                                                $price = get_sub_field('price_dish');
                                            ?>
                                                <li class="mb-3">
                                                    <div class="d-flex justify-content-between">
                                                        <h6 class="fw-bold mb-0"><?php echo esc_html($title); ?></h6>
                                                        <?php if ($price) : ?>
                                                            <span class="fw-bold dish-price">$<?php echo esc_html($price); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                    <?php if ($desc) : ?>
                                                        <small class="d-block"><?php echo esc_html($desc); ?></small>
                                                    <?php endif; ?>
                                                </li>
                                            <?php endwhile; ?>
                                        </ul>
                                    <?php else : ?>
                                        <p>No hay platillos definidos para este menú.</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <div class="col-12">
                    <p class="text-center">No hay menús disponibles para mostrar.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>