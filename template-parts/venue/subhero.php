<?php
$title       = get_field('intro_title') ?: 'Host Your Event at IL Forno a Legna';
$description = get_field('intro_description');
$image_url   = get_field('intro_image') ?: get_template_directory_uri() . '/assets/img/events.jpg';

$description_fallback = 'At IL Forno a Legna, we offer a one-of-a-kind Italian dining
experience that’s perfect for any event, from birthdays to
corporate gatherings. Whether you’re hosting an intimate dinner or
a larger celebration, our team will work with you to make your
event truly memorable.

Enjoy our signature wood-fired pizzas, fresh pasta, and
traditional Italian dishes in the heart of Rahway, NJ. Let us help
you create the perfect setting for your special occasion, with
flexible packages and personalized service to ensure everything
goes smoothly.';
?>

<section id="event-introduction" class="py-5 bg-black text-light">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <h2 class="fw-bold text-gold mb-4">
                    <?php echo esc_html($title); ?>
                </h2>

                <?php
                // Usamos wpautop para convertir el texto del Área de Texto en párrafos
                if ($description) {
                    echo wpautop(esc_html($description));
                } else {
                    echo wpautop(esc_html($description_fallback));
                }
                ?>
            </div>

            <div class="col-lg-6">
                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>" class="img-fluid rounded shadow" />
            </div>
        </div>
    </div>
</section>

<section id="event-services" class="py-5 text-light">
    <div class="container">
        <h2 class="text-center text-gold fw-bold mb-5">
            Event Services at IL Forno a Legna
        </h2>

        <div class="row g-4">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-card text-center p-4 h-100">
                    <i class="fas fa-chair fa-3x text-gold mb-3"></i>
                    <h5 class="fw-bold text-gold">Private Dining Space</h5>
                    <p class="service-text">
                        Host your event in our cozy yet elegant dining room with seating
                        for small or large groups.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-card text-center p-4 h-100">
                    <i class="fas fa-utensils fa-3x text-gold mb-3"></i>
                    <h5 class="fw-bold text-gold">Catering</h5>
                    <p class="service-text">
                        Enjoy IL Forno’s delicious food at your location with our
                        pizzas, pastas, salads, and desserts.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-card text-center p-4 h-100">
                    <i class="fas fa-truck fa-3x text-gold mb-3"></i>
                    <h5 class="fw-bold text-gold">Wood-Fired Pizza Truck</h5>
                    <p class="service-text">
                        Bring our pizza trailer to your outdoor event and watch pizzas
                        bake in our custom oven.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-card text-center p-4 h-100">
                    <i class="fas fa-concierge-bell fa-3x text-gold mb-3"></i>
                    <h5 class="fw-bold text-gold">Full Event Support</h5>
                    <p class="service-text">
                        From setup to cleanup, our team ensures your event runs smoothly
                        with personalized menus.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>