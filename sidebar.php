

<style>
	/* ==========================================================================
   Estilos Mejorados para la Barra Lateral (Sidebar)
   ========================================================================== */

/* Contenedor general de cada widget */
.widget-area .widget {
    background-color: #212529; /* Un color ligeramente distinto al fondo */
    padding: 1.5rem;
    border-radius: 8px;
    margin-bottom: 2rem;
    border: 1px solid rgba(191, 152, 97, 0.1); /* Borde dorado muy sutil */
}

/* Título de cada widget (ej. "Recent Posts") */
.widget-area .widget-title {
    color: var(--primary); /* Color dorado */
    font-weight: bold;
    font-size: 1.25rem;
    margin-bottom: 1rem;
    padding-bottom: 0.75rem;
    border-bottom: 1px solid rgba(191, 152, 97, 0.3);
}

/* Estilos para las listas (Categorías, Archivos, etc.) */
.widget-area ul {
    list-style: none;
    padding-left: 0;
    margin-bottom: 0;
}

.widget-area ul li {
    padding: 0.5rem 0;
    border-bottom: 1px solid #333;
}

.widget-area ul li:last-child {
    border-bottom: none; /* Quitar borde del último elemento */
    padding-bottom: 0;
}

.widget-area ul li a {
    color: var(--light-cream);
    text-decoration: none;
    transition: color 0.3s ease;
}

.widget-area ul li a:hover {
    color: var(--primary); /* Color dorado al pasar el ratón */
}

/* --- Estilos Específicos para el Buscador --- */
.widget_search .search-field {
    background-color: #1a1a1a;
    border: 1px solid #555;
    color: var(--white);
    border-radius: 4px;
    width: 100%;
    padding: 10px;
}

.widget_search .search-field:focus {
    border-color: var(--primary);
    outline: none;
    box-shadow: 0 0 5px rgba(191, 152, 97, 0.5);
}

.widget_search .search-submit {
    background-color: var(--primary);
    color: #1a1a1a;
    font-weight: bold;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 10px;
    width: 100%;
    transition: background-color 0.3s ease;
}

.widget_search .search-submit:hover {
    background-color: #d1aa6e;
}
</style>

<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IL_Forno_a_Legna
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
