<?php

/**
 * The template for displaying all single posts
 *
 * @package IL_Forno_a_Legna
 */

// LA LLAMADA AL HEADER DEBE SER LO PRIMERO EN EL ARCHIVO
get_header();
?>

<style>
    /* --- Fondo para la Página de Entradas Individuales (Single Post) --- */
    body.single-post {
        background-color: #1a1a1a;
        /* El color negro de tu marca */
    }

    /* ==========================================================================
   Estilos para Single Post (single.php)
   ========================================================================== */

    /* --- Arreglo para el Header Fijo en la página de post --- */
    body.single-post {
        /* Empuja todo el contenido hacia abajo para que no quede oculto por el header fijo */
        padding-top: 120px;
        /* Ajusta este valor si la altura de tu header es diferente */
    }

    /* Espaciado superior para la página de post, SOLO en versión móvil */
    @media (max-width: 767.98px) {
        body.single-post {
            /* Empuja el contenido hacia abajo en móviles para que no quede oculto por el header */
            padding-top: 95px;
        }
    }

    /* --- Contenido Principal del Post --- */
    .single .entry-content p {
        line-height: 1.8;
        font-size: 1.1rem;
        color: #dacfbd;
        /* Texto claro pero no blanco puro, para mejor lectura */
    }

    .single .entry-content a {
        color: #bf9861;
        /* Enlaces en color dorado */
        text-decoration: underline;
    }

    .single .entry-content a:hover {
        color: #d1aa6e;
    }

    /* --- Navegación Entre Posts --- */
    .post-navigation {
        border-top: 1px solid rgba(191, 152, 97, 0.3);
        border-bottom: 1px solid rgba(191, 152, 97, 0.3);
        padding: 1.5rem 0;
        margin-top: 3rem;
        display: flex;
        justify-content: space-between;
    }

    .post-navigation .nav-previous {
        text-align: left;
        width: 48%;
    }

    .post-navigation .nav-next {
        text-align: right;
        width: 48%;
    }

    .post-navigation a {
        text-decoration: none;
    }
</style>

<div class="bg-dark text-light">
    <main id="primary" class="site-main py-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">

                    <?php
                    while (have_posts()) :
                        the_post();
                    ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="entry-header text-center mb-5">
                                <?php the_title('<h1 class="entry-title text-gold fw-bold">', '</h1>'); ?>
                                <div class="entry-meta text-muted small mt-2">
                                    <span>Publicado el <?php echo get_the_date(); ?></span>
                                    <span class="mx-2">|</span>
                                    <span>Categoría: <?php the_category(', '); ?></span>
                                </div>
                            </header>

                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-thumbnail mb-4 text-center">
                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid rounded shadow-sm')); ?>
                                </div>
                            <?php endif; ?>

                            <div class="entry-content">
                                <?php
                                the_content();

                                wp_link_pages(array(
                                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'il-forno-a-legna'),
                                    'after'  => '</div>',
                                ));
                                ?>
                            </div>
                            <footer class="entry-footer mt-5">
                                <div class="post-tags">
                                    <?php the_tags('<span class="badge bg-secondary me-1">', '</span><span class="badge bg-secondary me-1">', '</span>'); ?>
                                </div>
                            </footer>
                        </article>
                    <?php
                        // Navegación -> Siguiente/Anterior Post
                        the_post_navigation(array(
                            'prev_text' => '<span class="nav-title text-gold">‹ Artículo Anterior</span><p class="text-light mb-0">%title</p>',
                            'next_text' => '<span class="nav-title text-gold">Siguiente Artículo ›</span><p class="text-light mb-0">%title</p>',
                        ));

                    endwhile; // Fin del bucle.
                    ?>

                </div><div class="col-lg-4">
                    <?php get_sidebar(); ?>
                </div>

            </div>
        </div>
    </main>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const header = document.getElementById('main-header');
        if (header) {
            function handleScroll() {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            }
            window.addEventListener('scroll', handleScroll);
        }
    });
</script>

<?php
get_footer();
?>