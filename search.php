


<style>
	/* ==========================================================================
   Estilos para la Página de Búsqueda Sin Resultados
   ========================================================================== */
.no-results-content {
    background-color: #212529; /* Fondo de tarjeta oscuro */
    color: var(--light-cream);
    padding: 2.5rem;
    border-radius: 8px;
    border: 1px solid rgba(191, 152, 97, 0.2);
    text-align: center;
}

.no-results-content .no-results-icon {
    font-size: 3rem;
    color: var(--primary);
    margin-bottom: 1.5rem;
    display: block;
}

.no-results-content h2 {
    color: var(--white);
    font-weight: bold;
}

/* Estilos para el formulario de búsqueda dentro de la caja */
.no-results-content .search-form {
    display: flex;
    max-width: 400px;
    margin: 1.5rem auto 0;
}

.no-results-content .search-field {
    flex-grow: 1;
    background-color: #1a1a1a;
    border: 1px solid #555;
    color: var(--white);
    padding: 10px 15px;
    border-radius: 4px 0 0 4px; /* Esquinas izquierdas redondeadas */
}

.no-results-content .search-submit {
    background-color: var(--primary);
    color: #1a1a1a;
    font-weight: bold;
    border: none;
    padding: 10px 20px;
    border-radius: 0 4px 4px 0; /* Esquinas derechas redondeadas */
    cursor: pointer;
}

/* ==========================================================================
   Solución para Sticky Footer
   ========================================================================== */
body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

#primary.site-main {
    flex-grow: 1;
}
</style>

<?php
/**
 * The template for displaying search results pages
 *
 * @package IL_Forno_a_Legna
 */

get_header();
?>

<main id="primary" class="site-main py-5" style="background-color: #f0f0f0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">

                <header class="page-header mb-5 text-center">
                    <h1 class="page-title text-dark fw-bold">
                        <?php
                        /* translators: %s: search query. */
                        printf( esc_html__( 'Search Results for: %s', 'il-forno-a-legna' ), '<span>' . get_search_query() . '</span>' );
                        ?>
                    </h1>
                </header><?php if ( have_posts() ) : ?>

                    <?php
                    /* Iniciar el Bucle */
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content', 'search' );

                    endwhile;

                    the_posts_pagination( array(
                        'mid_size'  => 2,
                        'prev_text' => '‹ Previous',
                        'next_text' => 'Next ›',
                    ) );

                else : ?>
                    
                    <div class="no-results-content">
                        <i class="fas fa-search-minus no-results-icon"></i>
                        <h2 class="text-white">Nothing Found</h2>
                        <p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
                        <?php get_search_form(); ?>
                    </div>
                    <?php endif; ?>

            </div>
        </div>
    </div>
</main><?php
get_footer();
?>