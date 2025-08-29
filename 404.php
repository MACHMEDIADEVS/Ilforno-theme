<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package IL_Forno_a_Legna
 */

get_header();
?>

<style>
    /* Estilos para la sección 404 */
    .error-404-section {
        background-color: #1a1a1a; /* Fondo oscuro consistente con tu marca */
        color: var(--white);
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        min-height: 70vh; /* Altura considerable para ocupar la pantalla */
        padding: 60px 20px;
    }
    .error-404-content .error-title {
        font-size: 8rem; /* Número 404 grande y llamativo */
        font-weight: bold;
        color: var(--primary); /* Color dorado de tu marca */
        line-height: 1;
    }
    .error-404-content .page-title {
        font-size: 2.5rem;
        font-weight: bold;
        margin-top: 0;
        margin-bottom: 20px;
    }
    .error-404-content .message {
        font-size: 1.2rem;
        max-width: 500px;
        margin: 0 auto 30px; /* Centrar y añadir espacio inferior */
    }
    .error-404-content .btn-home {
        background-color: var(--primary);
        color: #1a1a1a;
        font-weight: bold;
        padding: 12px 30px;
        border-radius: 8px;
        text-transform: uppercase;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    .error-404-content .btn-home:hover {
        background-color: #d1aa6e;
    }
</style>

<main id="primary" class="site-main">

    <section class="error-404-section">
        <div class="container">

            <div class="error-404-content">
                <h1 class="error-title">404</h1>
                <h2 class="page-title"><?php esc_html_e( 'Page Not Found', 'il-forno-a-legna' ); ?></h2>
                <p class="message"><?php esc_html_e( 'Sorry, the page you are looking for does not exist or has been moved.', 'il-forno-a-legna' ); ?></p>
                <a class="btn-home" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Return to Home', 'il-forno-a-legna' ); ?></a>
            </div></div>
    </section></main><?php
get_footer();
?>