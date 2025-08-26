<?php
// Obtener los datos de los campos de la sección de promoción
$background_image_url = get_field('promo_background_image') ?: get_template_directory_uri() . '/assets/img/events-intro.png';
$title                = get_field('promo_title') ?: 'Voted Best Chicken Parm in the City';
$description          = get_field('promo_description');
$button               = get_field('promo_button');

// Contenido de respaldo para la descripción
$description_fallback = "Come see why everyone’s talking about it. Our signature Chicken
Parm is made with tender, breaded chicken cutlets, house‑made
marinara, and layers of melted mozzarella, baked to perfection.
It’s an award‑winning favorite that’s become a local legend.

Visit us and taste the best Chicken Parm you’ve ever had.";
?>

<section class="promo-hero text-white d-flex align-items-center" style="background-image: url('<?php echo esc_url($background_image_url); ?>')">
    <div class="promo-overlay"></div>
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <h2 class="fw-bold display-5">
                    <?php echo esc_html($title); ?>
                </h2>

                <?php
                // Usamos wpautop para convertir los saltos de línea del Área de Texto en párrafos <p>
                // También le añadimos las clases CSS a los párrafos generados.
                if ($description) {
                    // Añadimos un filtro para agregar clases a los párrafos generados por wpautop
                    function add_class_to_promo_paragraphs($content)
                    {
                        return str_replace('<p>', '<p class="lead mt-3">', $content);
                    }
                    add_filter('the_content', 'add_class_to_promo_paragraphs');

                    echo wpautop(esc_html($description));

                    remove_filter('the_content', 'add_class_to_promo_paragraphs');
                } else {
                    echo wpautop(esc_html($description_fallback));
                }
                ?>

                <?php // Comprobar y mostrar el botón del campo Enlace
                if ($button && $button['url'] && $button['title']) :
                    $button_url    = esc_url($button['url']);
                    $button_title  = esc_html($button['title']);
                    $button_target = $button['target'] ? 'target="' . esc_attr($button['target']) . '"' : '';
                ?>
                    <a href="<?php echo $button_url; ?>" class="btn btn-gold mt-4" <?php echo $button_target; ?>><?php echo $button_title; ?></a>
                <?php else: // Botón de respaldo si el campo ACF está vacío 
                ?>
                    <a href="#reservation" class="btn btn-gold mt-4">View Full Menu</a>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>