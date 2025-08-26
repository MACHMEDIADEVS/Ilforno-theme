<?php
// Obtener el título de la sección de blog
$blog_section_title = get_field('blog_section_title') ?: 'Fresh News & Happenings';
?>

<section class="blog-section">
    <div class="container">
        <h2 class="text-center fw-bold text-dark mb-5">
            <?php echo esc_html($blog_section_title); ?>
        </h2>

        <?php // El resto del contenido permanece estático, como se solicitó 
        ?>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog1.png" alt="Blog 1" class="img-fluid rounded-top" />
                    <div class="p-4">
                        <h5 class="fw-bold text-dark">Bring Your Own Bottle <br> Just Add Pizza</h5>
                        <p class="text-muted">
                            Yes, we’re BYOB! Pair your favorite wine or beer with our wood-fired pizzas...
                        </p>
                        <a href="#" class="btn-read">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog2.png" alt="Blog 2" class="img-fluid rounded-top" />
                    <div class="p-4">
                        <h5 class="fw-bold text-dark">Ranked Among New Jersey’s Best Chicken Parm</h5>
                        <p class="text-muted">
                            IL Forno a Legna’s Pollo Parmigiana made NJ.com’s list of the 21 best...
                        </p>
                        <a href="#" class="btn-read">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog3.png" alt="Blog 3" class="img-fluid rounded-top" />
                    <div class="p-4">
                        <h5 class="fw-bold text-dark">Wood-Fired Pizza on Wheels Bringing the Heat to You</h5>
                        <p class="text-muted">
                            IL Forno a Legna delivers authentic wood-fired pizza straight from their...
                        </p>
                        <a href="#" class="btn-read">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>