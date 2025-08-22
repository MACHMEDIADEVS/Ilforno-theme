<?php
/**
 * The template for displaying all single posts
 *
 * @package IL_Forno_a_Legna
 */

get_header();
?>

<div class="bg-dark text-light">
    <main id="primary" class="site-main py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">

                    <?php
                    while ( have_posts() ) :
                        the_post();
                    ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="entry-header text-center mb-5">
                                <?php the_title( '<h1 class="entry-title text-gold fw-bold">', '</h1>' ); ?>
                                <div class="entry-meta text-muted small mt-2">
                                    <span>Publicado el <?php echo get_the_date(); ?></span>
                                    <span class="mx-2">|</span>
                                    <span>Categoría: <?php the_category(', '); ?></span>
                                </div>
                            </header>

                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="post-thumbnail mb-4 text-center">
                                    <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid rounded shadow-sm' ) ); ?>
                                </div>
                            <?php endif; ?>

                            <div class="entry-content">
                                <?php
                                the_content();

                                wp_link_pages( array(
                                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'il-forno-a-legna' ),
                                    'after'  => '</div>',
                                ) );
                                ?>
                            </div><footer class="entry-footer mt-5">
                                <div class="post-tags">
                                    <?php the_tags('<span class="badge bg-secondary me-1">', '</span><span class="badge bg-secondary me-1">', '</span>'); ?>
                                </div>
                            </footer></article><?php
                        // Navegación -> Siguiente/Anterior Post
                        the_post_navigation( array(
                            'prev_text' => '<span class="nav-title text-gold">‹ Artículo Anterior</span><p class="text-light mb-0">%title</p>',
                            'next_text' => '<span class="nav-title text-gold">Siguiente Artículo ›</span><p class="text-light mb-0">%title</p>',
                        ) );

                        // Si los comentarios están abiertos, mostrar el formulario de comentarios.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // Fin del bucle.
                    ?>

                </div>
            </div>
        </div>
    </main></div>

<?php
get_footer();
?>