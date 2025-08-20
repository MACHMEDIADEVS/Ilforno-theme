<?php

/**
 * Template Name: Menu Page
 *
 * @package IL_Forno_a_Legna
 */

get_header();
?>

<style>
    /* Header transparente por defecto */
    #main-header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1030;
        background-color: transparent !important;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        padding: 15px 0;
    }

    /* Al hacer scroll: overlay oscuro uniforme */
    #main-header.scrolled {
        background-color: rgba(0, 0, 0, 0.55) !important;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    }

    /* HERO MENU ESTILO */
    .hero-menu-section {
        position: relative;
        color: white;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 60vh;
        /* un poco más alto que 50vh */
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    /* Overlay oscuro uniforme */
    .hero-menu-section .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.55);
        z-index: 1;
    }

    /* Contenido sobre overlay */
    .hero-menu-section .container {
        position: relative;
        z-index: 2;
    }

    @media (max-width: 768px) {
        .hero-menu-section {
            height: 70vh;
            /* más alto en mobile para que no quede pegado */
        }
    }

    /* SECCION MAIN MENU */
    #main-menu {
        background-color: #1a1a1a;
    }

    #main-menu h2 {
        color: #bf9861;
    }

    .menu-card {
        border: 2px solid rgba(191, 152, 97, 0.5);
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    .menu-card:hover {
        transform: translateY(-5px);
        /* Mantiene leve movimiento sin luz */
    }

    .menu-img {
        position: relative;
        height: 250px;
        overflow: hidden;
    }

    .menu-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .menu-card:hover .menu-img img {
        transform: scale(1.05);
        /* Solo zoom, sin luminosidad */
    }

    .menu-img .overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.4);
    }

    .category-title {
        position: absolute;
        bottom: 15px;
        left: 15px;
        font-size: 1.6rem;
        font-weight: bold;
        color: #dacfbd;
    }

    .menu-items {
        padding: 15px;
    }

    .menu-item {
        display: flex;
        justify-content: space-between;
        padding: 8px 0;
        border-bottom: 1px solid rgba(191, 152, 97, 0.2);
    }

    .menu-item:last-child {
        border-bottom: none;
    }

    .price {
        color: #bf9861;
        font-weight: bold;
    }

    /* ===== Menu catering ===== */
    /* ===== Menu catering elegante ===== */
    #catering-menu {
        background-color: #dacfbd;
        /* Fondo de la sección */
        padding-top: 60px;
        padding-bottom: 60px;
    }

    #catering-menu .card {
        background-color: #dacfbd;
        /* Fondo de las cards */
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid rgba(191, 152, 97, 0.3);
        /* Borde dorado suave */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    #catering-menu .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    #catering-menu .card-title {
        font-size: 1.2rem;
        color: #bf9861;
        /* Color de títulos */
        border-bottom: 2px solid #bf9861;
        display: inline-block;
        padding-bottom: 5px;
        margin-bottom: 15px;
    }

    #catering-menu ul li {
        padding: 6px 0;
        font-size: 0.95rem;
        color: #1a1a1a;
        /* Color del texto de la información */
        display: flex;
        justify-content: space-between;
    }

    #catering-menu ul li span {
        color: #bf9861;
        /* Color de los precios */
        font-weight: bold;
    }

    #catering-menu img {
        height: 180px;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    #catering-menu .card:hover img {
        transform: scale(1.05);
    }

    /* Botón dorado */
    /* Botón dorado */
    .btn-gold {
        background-color: #bf9861;
        color: #1a1a1a;
        font-weight: bold;
        padding: 10px 25px;
        border: 2px solid #bf9861;
        /* Borde visible siempre */
        border-radius: 8px;
        text-transform: uppercase;
        transition: all 0.3s ease;
    }

    .btn-gold:hover {
        background-color: transparent;
        /* Fondo transparente en hover */
        color: #bf9861;
        /* Texto dorado */
        border-color: #bf9861;
        /* Mantener borde dorado */
    }

    /* Botón contorno dorado */
    .btn-outline-gold {
        background-color: transparent;
        color: #bf9861;
        border: 2px solid #bf9861;
        font-weight: bold;
        padding: 10px 25px;
        border-radius: 8px;
        text-transform: uppercase;
        transition: all 0.3s ease;
    }

    .btn-outline-gold:hover {
        background-color: #bf9861;
        color: #1a1a1a;
        border-color: #bf9861;
    }

    /* ====== Event Packages ====== */
    /* Overlay oscuro */
    #event-packages .overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.6);
    }

    /* Color título */
    .text-gold {
        color: #bf9861;
    }

    /* Cards uniformes */
    .package-card {
        background-color: rgba(17, 17, 17, 0.95);
        border: 2px solid #bf9861;
        border-radius: 8px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .package-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 20px rgba(191, 152, 97, 0.4);
    }

    /* Lista */
    .package-card ul li {
        color: #dacfbd;
        font-size: 0.95rem;
        padding: 4px 0;
    }

    /* Badge */
    .badge-popular {
        background-color: #bf9861;
        color: #1a1a1a;
        font-weight: bold;
        padding: 5px 10px;
        border-radius: 20px;
        display: inline-block;
        margin-bottom: 10px;
    }

    /* Botón */
    .btn-outline-gold {
        background-color: transparent;
        color: #bf9861;
        border: 2px solid #bf9861;
        font-weight: bold;
        padding: 8px 20px;
        border-radius: 8px;
        text-transform: uppercase;
        font-size: 0.85rem;
        transition: all 0.3s ease;
    }

    .btn-outline-gold:hover {
        background-color: #bf9861;
        color: #1a1a1a;
    }

    #event-packages .package-card {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
    }

    /* Responsivo */
    @media (max-width: 991px) {
        .package-card {
            height: auto;
        }
    }

    /* Seccion populares */
    /* Fondo de toda la sección */
    #customer-favorites {
        background-color: #1a1a1a;
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    /* Ajuste del título de la sección */
    #customer-favorites h2 {
        margin-top: 0.5rem;
        /* sube el título */
        margin-bottom: 2rem;
        /* más espacio hacia abajo */
        text-align: center;
        /* centrado horizontal */
    }

    /* Imagen izquierda */
    .favorites-left-img img {
        height: 100%;
        object-fit: cover;
    }

    /* Fondo parte derecha */
    .favorites-right {
        background-color: #111111;
    }

    /* Card de cada ítem */
    .favorite-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        height: 260px;
        /* altura fija */
        text-align: center;
    }

    /* Imagen circular */
    .favorite-img {
        width: 160px;
        height: 160px;
        margin-bottom: 10px;
        overflow: hidden;
        border-radius: 50%;
        border: 1px solid #bf9861;
    }

    .favorite-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Título */
    .favorite-title {
        min-height: 40px;
        /* espacio reservado para títulos largos/cortos */
        display: flex;
        align-items: center;
        justify-content: center;
        color: #bf9861;
        text-align: center;
    }

    /* Botón contorno dorado */
    .btn-outline-gold {
        background-color: transparent;
        color: #bf9861;
        border: 2px solid #bf9861;
        font-weight: bold;
        padding: 6px 15px;
        border-radius: 8px;
        text-transform: uppercase;
        font-size: 0.8rem;
        transition: all 0.3s ease;
    }

    .btn-outline-gold:hover {
        background-color: #bf9861;
        color: #1a1a1a;
    }

    /* Texto dorado */
    .text-gold {
        color: #bf9861;
    }

    /* ✅ Ajuste solo para escritorio para igualar altura columnas */
    @media (min-width: 1200px) {
        #customer-favorites .row {
            display: flex;
            align-items: stretch;
        }

        .favorites-left-img,
        .favorites-right {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .favorites-left-img img {
            height: 100%;
            object-fit: cover;
        }
    }

    /* Ajustes responsive */
    @media (max-width: 991px) {
        .favorites-left-img {
            display: block;
            /* ✅ Asegura que la imagen aparezca */
            width: 100%;
            margin-bottom: 1rem;
        }

        .favorites-left-img img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .favorites-right {
            padding: 2rem 1rem;
            text-align: center;
        }
    }

    @media (max-width: 576px) {
        .favorite-img {
            width: 140px;
            height: 140px;
        }

        .favorite-card {
            height: auto;
            /* en móvil dejamos que crezca */
        }
    }

    .btn-outline-gold {
        padding: 10px 25px !important;
        font-size: 1rem !important;
    }
</style>

<?php
// Obtener los datos de los campos ACF para el hero de la página de menú
$background_image_url = get_field('menu_hero_image_bg') ?: get_template_directory_uri() . '/assets/img/our-menu.png';
$title                = get_field('menu_hero_title') ?: 'Our Menu';
$subtitle             = get_field('menu_hero_subtitle') ?: 'Experience the finest wood-fired pizzas, handcrafted pastas, and authentic Italian flavors.';
?>

<section class="hero-menu-section" style="background-image: url('<?php echo esc_url($background_image_url); ?>')">
    <div class="overlay"></div>
    <div class="container">
        <h1 class="display-4 fw-bold"><?php echo esc_html($title); ?></h1>
        <p class="lead">
            <?php // Usamos nl2br para respetar los saltos de línea del Área de Texto ?>
            <?php echo nl2br(esc_html($subtitle)); ?>
        </p>
    </div>
</section>

<?php
// Obtener los datos de los campos principales de la sección
$main_image_url = get_field('favorites_main_image') ?: get_template_directory_uri() . '/assets/img/popular.png';
$section_title  = get_field('favorites_section_title') ?: 'Customer Favorites';
?>

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
                        color: #bf9861;
                        border: 2px solid #bf9861;
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
                    <?php // Comprobar si existen elementos en el repetidor 'favorites_list'
                    if (have_rows('favorites_list')) :
                        // Iniciar el bucle para recorrer cada elemento
                        while (have_rows('favorites_list')) : the_row();
                            // Obtener los datos de los sub-campos para este elemento
                            $item_image_url = get_sub_field('favorite_item_image');
                            $item_name      = get_sub_field('favorite_item_name');
                            $item_button    = get_sub_field('favorite_item_button');
                    ?>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="favorite-card">
                                    <div class="favorite-img">
                                        <img src="<?php echo esc_url($item_image_url); ?>" alt="<?php echo esc_attr($item_name); ?>" />
                                    </div>
                                    <h5 class="favorite-title"><?php echo esc_html($item_name); ?></h5>
                                    
                                    <?php if ($item_button && $item_button['url'] && $item_button['title']) :
                                        $button_url = esc_url($item_button['url']);
                                        $button_title = esc_html($item_button['title']);
                                        $button_target = $item_button['target'] ? 'target="' . esc_attr($item_button['target']) . '"' : '';
                                    ?>
                                        <a href="<?php echo $button_url; ?>" class="btn btn-outline-golden btn-sm" <?php echo $button_target; ?>><?php echo $button_title; ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    else :
                        // Contenido de respaldo si el repetidor está vacío
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
                        <?php // La etiqueta <a> envuelve toda la tarjeta para hacerla clickeable ?>
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

<?php
// Obtener el título de la sección y los botones
$section_title    = get_field('catering_section_title') ?: 'Catering Menu';
$primary_button   = get_field('catering_primary_button');
$secondary_button = get_field('catering_secondary_button');
?>

<section id="catering-menu" class="py-5" style="background-color: #101010">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold text-uppercase" style="color: #bf9861">
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
                                <?php endif; // Fin del bucle interior de platos ?>

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
            <?php endif; // Fin del bucle exterior de categorías ?>
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

<?php
// Obtener los datos de los campos principales de la sección
$background_image_url = get_field('events_bg_image') ?: get_template_directory_uri() . '/assets/img/events-intro.png';
$section_title        = get_field('events_section_title') ?: 'Event Packages';
$primary_button       = get_field('events_primary_button');
$secondary_button     = get_field('events_secondary_button');
?>

<section id="event-packages" class="py-5" style="
        background-image: url('<?php echo esc_url($background_image_url); ?>');
        background-size: cover;
        background-position: center;
        position: relative;
      ">
    <div class="overlay"></div>

    <div class="container position-relative">
        <h2 class="text-center fw-bold text-gold mb-5"><?php echo esc_html($section_title); ?></h2>

        <div class="row g-4">
            <?php // Comprobar si existen paquetes en el repetidor
            if (have_rows('event_packages')) :
                // Iniciar el bucle para recorrer cada paquete
                while (have_rows('event_packages')) : the_row();
                    
                    // Obtener los datos de los sub-campos para este paquete
                    $package_title       = get_sub_field('package_title');
                    $package_price       = get_sub_field('package_price');
                    $package_price_unit  = get_sub_field('package_price_unit');
                    $package_details     = get_sub_field('package_details'); // Contenido del editor WYSIWYG
                    $package_footer_notes = get_sub_field('package_footer_notes');
            ?>
                    <div class="col-md-4 d-flex">
                        <div class="package-card w-100 rounded-3 p-4 d-flex flex-column gap-2">
                            <h5 class="fw-bold text-gold mb-1 text-center"><?php echo esc_html($package_title); ?></h5>
                            <p class="price text-gold fw-bold fs-4 mb-3 text-center">
                                <?php echo esc_html($package_price); ?> 
                                <span class="fs-6"><?php echo esc_html($package_price_unit); ?></span>
                            </p>

                            <?php // Imprimimos el contenido del editor WYSIWYG
                            if ($package_details) {
                                echo '<div class="package-details-content lh-sm mb-4 text-start mx-auto" style="max-width: 300px;">' . $package_details . '</div>';
                            }
                            ?>

                            <div class="text-gold small mb-0 text-center">
                                <?php // Usamos nl2br para los saltos de línea en las notas al pie
                                if ($package_footer_notes) {
                                    echo nl2br(esc_html($package_footer_notes));
                                }
                                ?>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            else :
                // Mensaje de respaldo si el repetidor está vacío
            ?>
                <div class="col-12">
                    <p class="text-center text-white">Los paquetes de eventos se mostrarán aquí.</p>
                </div>
            <?php endif; ?>
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

<?php
// Script para el header, mantenido aquí para una conversión 1:1.
?>
<script>
    document.addEventListener("scroll", function() {
        const header = document.getElementById("main-header");
        if (window.scrollY > 50) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });
</script>

<?php
get_footer();
?>