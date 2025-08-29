<?php
// Obtener el título de la sección y los botones
$section_title    = get_field('catering_section_title') ?: 'Catering Menu';
$primary_button   = get_field('catering_primary_button');
$secondary_button = get_field('catering_secondary_button');
?>

<section id="catering-menu" class="py-5" style="background-color: #101010">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold text-uppercase" style="color: var(--primary)">
            <?php echo esc_html($section_title); ?>
        </h2>

        <div class="row g-4">
            <?php // BUCLE EXTERIOR: Comprobar y recorrer las CATEGORÍAS
            if (have_rows('category_catering')) :
                while (have_rows('category_catering')) : the_row();

                    // Obtener el título de la categoría actual
                    $category_title = get_sub_field('category_title');
            ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-gold">
                                    <?php echo esc_html($category_title); ?>
                                </h5>

                                <?php // BUCLE INTERIOR: Comprobar y recorrer los PLATOS de esta categoría
                                if (have_rows('menu_list_item')) : ?>
                                    <ul class="list-unstyled mb-0">
                                        <?php while (have_rows('menu_list_item')) : the_row();
                                            // Obtener el nombre y precio del plato actual
                                            $item_name   = get_sub_field('item_name');
                                            $item_prices = get_sub_field('item_prices');
                                        ?>
                                            <li><?php echo esc_html($item_name); ?> <span class="text-gold"><?php echo esc_html($item_prices); ?></span></li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; // Fin del bucle interior de platos 
                                ?>

                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
            else :
                // Mensaje de respaldo si no hay categorías
                ?>
                <div class="col-12">
                    <p class="text-center text-white">El menú de catering se mostrará aquí.</p>
                </div>
            <?php endif; // Fin del bucle exterior de categorías 
            ?>
        </div>

        <div class="text-center mt-5">
            <?php // Botón Principal
            if ($primary_button && $primary_button['url'] && $primary_button['title']) :
                $btn_url    = esc_url($primary_button['url']);
                $btn_title  = esc_html($primary_button['title']);
                $btn_target = $primary_button['target'] ? 'target="' . esc_attr($primary_button['target']) . '"' : '';
            ?>
                <a href="<?php echo $btn_url; ?>" class="btn btn-gold m-2" <?php echo $btn_target; ?>><?php echo $btn_title; ?></a>
            <?php endif; ?>

            <?php // Botón Secundario
            if ($secondary_button && $secondary_button['url'] && $secondary_button['title']) :
                $btn_url    = esc_url($secondary_button['url']);
                $btn_title  = esc_html($secondary_button['title']);
                $btn_target = $secondary_button['target'] ? 'target="' . esc_attr($secondary_button['target']) . '"' : '';
            ?>
                <a href="<?php echo $btn_url; ?>" class="btn btn-outline-gold m-2" <?php echo $btn_target; ?>><?php echo $btn_title; ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>