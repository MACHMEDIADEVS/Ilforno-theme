<?php
// Obtener el título de la sección de menú
$main_menu_title = get_field('main_menu_title') ?: 'Main Menu';
?>

<section id="main-menu" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold text-uppercase"><?php echo esc_html($main_menu_title); ?></h2>

        <div class="row g-4">
            <?php // Comprobar si existen categorías en el repetidor
            if (have_rows('menu_categories')) :
                // Iniciar el bucle para recorrer cada categoría
                while (have_rows('menu_categories')) : the_row();

                    // Obtener los datos de los sub-campos
                    $image_url = get_sub_field('category_image');
                    $name      = get_sub_field('category_name');
                    $link_url  = get_sub_field('category_url');
            ?>
                    <div class="col-md-6 col-lg-4">
                        <?php // La etiqueta <a> envuelve toda la tarjeta para hacerla clickeable 
                        ?>
                        <a href="<?php echo esc_url($link_url); ?>" class="menu-card-link">
                            <div class="menu-card">
                                <div class="menu-img">
                                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($name); ?>" />
                                    <div class="overlay"></div>
                                    <h3 class="category-title"><?php echo esc_html($name); ?></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                endwhile;
            else :
                // Mensaje de respaldo si el repetidor está vacío
                ?>
                <div class="col-12">
                    <p class="text-center">Las categorías del menú se mostrarán aquí.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>