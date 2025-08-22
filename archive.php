<style>
    /* ==========================================================================
   Estilos para Tarjetas de Post (Estilo como en la Home)
   ========================================================================== */

.archive .post-card-home-style {
    background-color: #dacfbd; /* Color de fondo de la tarjeta */
    border: none;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.archive .post-card-home-style:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
}

.archive .post-card-home-style .card-title a {
    color: #1a1a1a; /* Texto oscuro para el título */
    font-weight: bold;
}

.archive .post-card-home-style .card-text {
    color: #333; /* Texto un poco más claro para la descripción */
}

.archive .post-card-home-style .btn-read-more {
    background-color: #1a1a1a;
    color: #ffffff;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 8px;
    font-weight: 600;
    display: inline-block;
    transition: background-color 0.3s ease-in-out;
}

.archive .post-card-home-style .btn-read-more:hover {
    background-color: #333;
    color: #ffffff;
}

.archive .post-card-home-style .card-img-top {
  height: 200px;
  object-fit: cover;
  width: 100%;
}



/* ==========================================================================
   Estilos para el Hero de la Página de Archivo
   ========================================================================== */
.hero-archive-section {
    position: relative;
    background-size: cover;
    background-position: center;
    color: #fff;
    text-align: center;
    padding: 120px 20px;
}

.hero-archive-section .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.6); /* Superposición oscura */
}

.hero-archive-section .container {
    position: relative; /* Para que el texto esté sobre la superposición */
}
</style>



<?php
/**
 * The template for displaying archive pages
 *
 * @package IL_Forno_a_Legna
 */

get_header();
?>

<section class="hero-archive-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero-image.png');">
    <div class="overlay"></div>
    <div class="container">
        <?php
        the_archive_title( '<h1 class="display-4 fw-bold">', '</h1>' );
        the_archive_description( '<p class="lead">', '</p>' );
        ?>
    </div>
</section>
<main id="primary" class="site-main py-5" style="background-color: #f0f0f0;">
    <div class="container">

        <?php if ( have_posts() ) : ?>

            <div class="row">
                <?php
                /* Iniciar el Bucle */
                while ( have_posts() ) :
                    the_post();
                ?>
                    <div class="col-md-6 col-lg-4 mb-4 d-flex">
                        
                        <div class="card h-100 post-card-home-style">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'medium_large', ['class' => 'card-img-top'] ); ?>
                                </a>
                            <?php endif; ?>
                            <div class="card-body d-flex flex-column">
                                <?php the_title( '<h5 class="card-title"><a href="' . esc_url( get_permalink() ) . '" class="text-decoration-none">', '</a></h5>' ); ?>
                                <div class="card-text small mb-3">
                                    <?php the_excerpt(); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="btn-read-more mt-auto align-self-start">Read More</a>
                            </div>
                        </div>

                    </div>
                <?php
                endwhile;
                ?>
            </div><?php
            // Navegación de la paginación
            the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => '‹ Previous',
                'next_text' => 'Next ›',
                'screen_reader_text' => ' ', 
            ) );

        else :
        ?>
            <div class="text-center">
                <h2 class="text-dark fw-bold">Nothing Found</h2>
                <p>Sorry, no content was found in this archive.</p>
            </div>
        <?php
        endif;
        ?>

    </div></main><?php
get_footer();
?>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Seleccionamos el header por su ID
    const header = document.getElementById('main-header');

    // Comprobamos que el header existe antes de continuar
    if (header) {
        // Función para manejar el cambio de clase al hacer scroll
        function handleScroll() {
            // Si el scroll vertical es mayor a 50 píxeles...
            if (window.scrollY > 50) {
                // ...añadimos la clase .scrolled
                header.classList.add('scrolled');
            } else {
                // ...si no, la quitamos
                header.classList.remove('scrolled');
            }
        }
        // Escuchamos el evento de scroll en la ventana
        window.addEventListener('scroll', handleScroll);
    }
});
</script>