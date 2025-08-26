<?php
// Obtener todos los datos de los campos para la sección de bienvenida
$main_image_url = get_field('welcome_main_image') ?: get_template_directory_uri() . '/assets/img/horno.png';

$text_bg_image_array = get_field('welcome_image_bg');
$text_bg_image_url   = $text_bg_image_array ? $text_bg_image_array['url'] : get_template_directory_uri() . '/assets/img/bg-dark-pizza.png';

$title       = get_field('welcome_title');
$description = get_field('welcome_description');
$button      = get_field('welcome_button');

// Fallbacks para el contenido de texto
$title_fallback = 'Wood-fired <span class="text-warning">PIZZA</span> & <br /> Traditional Italian Dishes in Rahway, NJ';
$description_fallback = 'At IL Forno a Legna, we serve artisan wood‑fired pizzas, handcrafted pastas, and timeless Italian favorites in a warm, inviting setting. Join us for an elegant yet relaxed dining experience, order online, or let us host your next special event.';
?>

<section class="pizza-welcome-section">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-6">
                <div class="pizza-image bg-cover h-100" style="
                background-image: url('<?php echo esc_url($main_image_url); ?>');
                min-height: 600px;
              "></div>
            </div>

            <div class="col-lg-6 position-relative text-side">
                <div class="text-bg" style="background-image: url('<?php echo esc_url($text_bg_image_url); ?>')"></div>
                <div class="text-overlay"></div>

                <div class="d-flex align-items-center h-100 text-white px-5 py-5 position-relative" style="z-index: 2">
                    <div>
                        <h2 class="fw-bold mb-4">
                            <?php // Usamos wp_kses_post para permitir de forma segura etiquetas como <span> y <br> 
                            ?>
                            <?php echo wp_kses_post($title ?: $title_fallback); ?>
                        </h2>
                        <p class="text-light">
                            <?php // Usamos nl2br para convertir saltos de línea del textarea en <br> 
                            ?>
                            <?php echo nl2br(esc_html($description ?: $description_fallback)); ?>
                        </p>

                        <?php // Comprobar y mostrar el botón del campo Enlace 
                        ?>
                        <?php if ($button && $button['url'] && $button['title']) :
                            $button_url    = esc_url($button['url']);
                            $button_title  = esc_html($button['title']);
                            $button_target = $button['target'] ? 'target="' . esc_attr($button['target']) . '"' : '';
                        ?>
                            <a href="<?php echo $button_url; ?>" class="btn-menu mt-4" <?php echo $button_target; ?>><?php echo $button_title; ?></a>
                        <?php else: // Botón de respaldo si el campo ACF está vacío 
                        ?>
                            <a href="#" class="btn-menu mt-4">View Menu</a>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>