<?php
/**
 * Template part for displaying results in search pages
 *
 * @package IL_Forno_a_Legna
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('mb-4'); ?>>
    <div class="card h-100 post-card-home-style">
        <div class="row g-0">
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="col-md-4">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( 'medium', ['class' => 'img-fluid rounded-start h-100', 'style' => 'object-fit: cover;'] ); ?>
                    </a>
                </div>
            <?php endif; ?>
            
            <div class="col-md-8">
                <div class="card-body">
                    <header class="entry-header">
                        <?php the_title( sprintf( '<h2 class="card-title h5 fw-bold"><a href="%s" rel="bookmark" class="text-decoration-none">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                    </header>
                    
                    <div class="entry-summary card-text small">
                        <?php the_excerpt(); ?>
                    </div></div>
            </div>
        </div>
    </div></article>```

### Explicación de las Mejoras
* **Eliminación de Errores**: He reemplazado todas las funciones personalizadas (`il_forno_a_legna_*`) por sus equivalentes estándar de WordPress (`the_title`, `the_excerpt`, `the_post_thumbnail`), lo que elimina la fuente de los errores.
* **Diseño Consistente**: Ahora, cada resultado de búsqueda se mostrará en una "tarjeta" con un diseño horizontal. He usado la clase `post-card-home-style` que ya definimos, por lo que debería tomar los mismos colores y estilos que en tu página de archivo, creando una experiencia coherente.
* **Más Informativo**: La tarjeta ahora muestra la imagen destacada (si existe) junto al título y el extracto, lo que facilita al usuario identificar el contenido que busca.

**Importante:** Este archivo (`content-search.php`) es solo una parte del rompecabezas. Necesita un archivo principal `search.php` que lo llame.

¿Quieres que creemos también el archivo `search.php` ahora?