<?php
// Obtener los datos de los campos ACF
$image_url = get_field('booking_image') ?: get_template_directory_uri() . '/assets/img/eventoil.png';
$shortcode = get_field('booking_form_shortcode') ?: '[contact-form-7 id="e369c04" title="Events"]';
?>

<section id="booking-form" class="py-5">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <img src="<?php echo esc_url($image_url); ?>" alt="Formulario de Reserva de Eventos" class="img-fluid rounded shadow" />
            </div>

            <div class="col-lg-6">
                <div class="booking-card p-4 shadow">
                    <?php
                    // Comprobar si hay un shortcode antes de ejecutarlo
                    if ($shortcode) {
                        echo do_shortcode($shortcode);
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>