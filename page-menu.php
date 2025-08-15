<?php

/**
 * Template Name: Menu Page
 *
 * @package IL_Forno_a_Legna
 */

get_header();
?>

<style>
    /* Header transparente por defecto */
    #main-header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1030;
        background-color: transparent !important;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        padding: 15px 0;
    }

    /* Al hacer scroll: overlay oscuro uniforme */
    #main-header.scrolled {
        background-color: rgba(0, 0, 0, 0.55) !important;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    }

    /* HERO MENU ESTILO */
    .hero-menu-section {
        position: relative;
        color: white;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 60vh;
        /* un poco más alto que 50vh */
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    /* Overlay oscuro uniforme */
    .hero-menu-section .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.55);
        z-index: 1;
    }

    /* Contenido sobre overlay */
    .hero-menu-section .container {
        position: relative;
        z-index: 2;
    }

    @media (max-width: 768px) {
        .hero-menu-section {
            height: 70vh;
            /* más alto en mobile para que no quede pegado */
        }
    }

    /* SECCION MAIN MENU */
    #main-menu {
        background-color: #1a1a1a;
    }

    #main-menu h2 {
        color: #bf9861;
    }

    .menu-card {
        border: 2px solid rgba(191, 152, 97, 0.5);
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    .menu-card:hover {
        transform: translateY(-5px);
        /* Mantiene leve movimiento sin luz */
    }

    .menu-img {
        position: relative;
        height: 250px;
        overflow: hidden;
    }

    .menu-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .menu-card:hover .menu-img img {
        transform: scale(1.05);
        /* Solo zoom, sin luminosidad */
    }

    .menu-img .overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.4);
    }

    .category-title {
        position: absolute;
        bottom: 15px;
        left: 15px;
        font-size: 1.6rem;
        font-weight: bold;
        color: #dacfbd;
    }

    .menu-items {
        padding: 15px;
    }

    .menu-item {
        display: flex;
        justify-content: space-between;
        padding: 8px 0;
        border-bottom: 1px solid rgba(191, 152, 97, 0.2);
    }

    .menu-item:last-child {
        border-bottom: none;
    }

    .price {
        color: #bf9861;
        font-weight: bold;
    }

    /* ===== Menu catering ===== */
    /* ===== Menu catering elegante ===== */
    #catering-menu {
        background-color: #dacfbd;
        /* Fondo de la sección */
        padding-top: 60px;
        padding-bottom: 60px;
    }

    #catering-menu .card {
        background-color: #dacfbd;
        /* Fondo de las cards */
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid rgba(191, 152, 97, 0.3);
        /* Borde dorado suave */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    #catering-menu .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    #catering-menu .card-title {
        font-size: 1.2rem;
        color: #bf9861;
        /* Color de títulos */
        border-bottom: 2px solid #bf9861;
        display: inline-block;
        padding-bottom: 5px;
        margin-bottom: 15px;
    }

    #catering-menu ul li {
        padding: 6px 0;
        font-size: 0.95rem;
        color: #1a1a1a;
        /* Color del texto de la información */
        display: flex;
        justify-content: space-between;
    }

    #catering-menu ul li span {
        color: #bf9861;
        /* Color de los precios */
        font-weight: bold;
    }

    #catering-menu img {
        height: 180px;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    #catering-menu .card:hover img {
        transform: scale(1.05);
    }

    /* Botón dorado */
    /* Botón dorado */
    .btn-gold {
        background-color: #bf9861;
        color: #1a1a1a;
        font-weight: bold;
        padding: 10px 25px;
        border: 2px solid #bf9861;
        /* Borde visible siempre */
        border-radius: 8px;
        text-transform: uppercase;
        transition: all 0.3s ease;
    }

    .btn-gold:hover {
        background-color: transparent;
        /* Fondo transparente en hover */
        color: #bf9861;
        /* Texto dorado */
        border-color: #bf9861;
        /* Mantener borde dorado */
    }

    /* Botón contorno dorado */
    .btn-outline-gold {
        background-color: transparent;
        color: #bf9861;
        border: 2px solid #bf9861;
        font-weight: bold;
        padding: 10px 25px;
        border-radius: 8px;
        text-transform: uppercase;
        transition: all 0.3s ease;
    }

    .btn-outline-gold:hover {
        background-color: #bf9861;
        color: #1a1a1a;
        border-color: #bf9861;
    }

    /* ====== Event Packages ====== */
    /* Overlay oscuro */
    #event-packages .overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.6);
    }

    /* Color título */
    .text-gold {
        color: #bf9861;
    }

    /* Cards uniformes */
    .package-card {
        background-color: rgba(17, 17, 17, 0.95);
        border: 2px solid #bf9861;
        border-radius: 8px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .package-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 20px rgba(191, 152, 97, 0.4);
    }

    /* Lista */
    .package-card ul li {
        color: #dacfbd;
        font-size: 0.95rem;
        padding: 4px 0;
    }

    /* Badge */
    .badge-popular {
        background-color: #bf9861;
        color: #1a1a1a;
        font-weight: bold;
        padding: 5px 10px;
        border-radius: 20px;
        display: inline-block;
        margin-bottom: 10px;
    }

    /* Botón */
    .btn-outline-gold {
        background-color: transparent;
        color: #bf9861;
        border: 2px solid #bf9861;
        font-weight: bold;
        padding: 8px 20px;
        border-radius: 8px;
        text-transform: uppercase;
        font-size: 0.85rem;
        transition: all 0.3s ease;
    }

    .btn-outline-gold:hover {
        background-color: #bf9861;
        color: #1a1a1a;
    }

    #event-packages .package-card {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
    }

    /* Responsivo */
    @media (max-width: 991px) {
        .package-card {
            height: auto;
        }
    }

    /* Seccion populares */
    /* Fondo de toda la sección */
    #customer-favorites {
        background-color: #1a1a1a;
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    /* Ajuste del título de la sección */
    #customer-favorites h2 {
        margin-top: 0.5rem;
        /* sube el título */
        margin-bottom: 2rem;
        /* más espacio hacia abajo */
        text-align: center;
        /* centrado horizontal */
    }

    /* Imagen izquierda */
    .favorites-left-img img {
        height: 100%;
        object-fit: cover;
    }

    /* Fondo parte derecha */
    .favorites-right {
        background-color: #111111;
    }

    /* Card de cada ítem */
    .favorite-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        height: 260px;
        /* altura fija */
        text-align: center;
    }

    /* Imagen circular */
    .favorite-img {
        width: 160px;
        height: 160px;
        margin-bottom: 10px;
        overflow: hidden;
        border-radius: 50%;
        border: 1px solid #bf9861;
    }

    .favorite-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Título */
    .favorite-title {
        min-height: 40px;
        /* espacio reservado para títulos largos/cortos */
        display: flex;
        align-items: center;
        justify-content: center;
        color: #bf9861;
        text-align: center;
    }

    /* Botón contorno dorado */
    .btn-outline-gold {
        background-color: transparent;
        color: #bf9861;
        border: 2px solid #bf9861;
        font-weight: bold;
        padding: 6px 15px;
        border-radius: 8px;
        text-transform: uppercase;
        font-size: 0.8rem;
        transition: all 0.3s ease;
    }

    .btn-outline-gold:hover {
        background-color: #bf9861;
        color: #1a1a1a;
    }

    /* Texto dorado */
    .text-gold {
        color: #bf9861;
    }

    /* ✅ Ajuste solo para escritorio para igualar altura columnas */
    @media (min-width: 1200px) {
        #customer-favorites .row {
            display: flex;
            align-items: stretch;
        }

        .favorites-left-img,
        .favorites-right {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .favorites-left-img img {
            height: 100%;
            object-fit: cover;
        }
    }

    /* Ajustes responsive */
    @media (max-width: 991px) {
        .favorites-left-img {
            display: block;
            /* ✅ Asegura que la imagen aparezca */
            width: 100%;
            margin-bottom: 1rem;
        }

        .favorites-left-img img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .favorites-right {
            padding: 2rem 1rem;
            text-align: center;
        }
    }

    @media (max-width: 576px) {
        .favorite-img {
            width: 140px;
            height: 140px;
        }

        .favorite-card {
            height: auto;
            /* en móvil dejamos que crezca */
        }
    }

    .btn-outline-gold {
        padding: 10px 25px !important;
        font-size: 1rem !important;
    }
</style>

<section class="hero-menu-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/our-menu.png')">
    <div class="overlay"></div>
    <div class="container">
        <h1 class="display-4 fw-bold">Our Menu</h1>
        <p class="lead">
            Experience the finest wood-fired pizzas, handcrafted pastas, and
            authentic Italian flavors.
        </p>
    </div>
</section>

<section id="customer-favorites" class="">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-5 favorites-left-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/popular.png" alt="Restaurant Interior" class="img-fluid w-100 h-100" />
            </div>

            <div class="col-lg-7 p-5 favorites-right">
                <style>
                    .btn-outline-golden {
                        background-color: transparent;
                        color: #bf9861;
                        border: 2px solid #bf9861;
                        font-weight: bold;
                        padding: 10px 5px;
                        border-radius: 8px;
                        text-transform: uppercase;
                        transition: all 0.3s ease;
                    }
                </style>
                <h2 class="text-gold fw-bold text-uppercase mb-4 text-center text-lg-start">
                    Customer Favorites
                </h2>
                <div class="row g-4">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="favorite-card">
                            <div class="favorite-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pizza.png" alt="BBQ Pizza" />
                            </div>
                            <h5 class="favorite-title">Half Cheese Half Chicken</h5>
                            <a href="#" class="btn btn-outline-golden btn-sm">Order Online</a>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="favorite-card">
                            <div class="favorite-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pizza2.png" alt="Four Cheese Pizza" />
                            </div>
                            <h5 class="favorite-title">Classic Cheese Pizza</h5>
                            <a href="#" class="btn btn-outline-golden btn-sm">Order Online</a>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="favorite-card">
                            <div class="favorite-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pizza3.png" alt="Marinara Pizza" />
                            </div>
                            <h5 class="favorite-title">Meat Lover’s Pizza</h5>
                            <a href="#" class="btn btn-outline-golden btn-sm">Order Online</a>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="favorite-card">
                            <div class="favorite-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pizza4.png" alt="Seafood Pizza" />
                            </div>
                            <h5 class="favorite-title">Vegetable Pizza</h5>
                            <a href="#" class="btn btn-outline-golden btn-sm">Order Online</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="main-menu" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold text-uppercase">Main Menu</h2>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="menu-card">
                    <div class="menu-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/apeti.png" alt="Appetizers" />
                        <div class="overlay"></div>
                        <h3 class="category-title">Appetizers</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="menu-card">
                    <div class="menu-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/salad.png" alt="Salads" />
                        <div class="overlay"></div>
                        <h3 class="category-title">Salads</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="menu-card">
                    <div class="menu-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/entree.png" alt="Entrees" />
                        <div class="overlay"></div>
                        <h3 class="category-title">Entrees</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="menu-card">
                    <div class="menu-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pasta.png" alt="Pastas" />
                        <div class="overlay"></div>
                        <h3 class="category-title">Pastas</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="menu-card">
                    <div class="menu-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pies.png" alt="Pies" />
                        <div class="overlay"></div>
                        <h3 class="category-title">Pies</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="menu-card">
                    <div class="menu-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/panini.png" alt="Subs and Paninis" />
                        <div class="overlay"></div>
                        <h3 class="category-title">Subs and Paninis</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="menu-card">
                    <div class="menu-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/drink.png" alt="Drinks" />
                        <div class="overlay"></div>
                        <h3 class="category-title">Drinks</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="menu-card">
                    <div class="menu-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sides.png" alt="Sides" />
                        <div class="overlay"></div>
                        <h3 class="category-title">Sides</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="menu-card">
                    <div class="menu-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kids.png" alt="Kids Menu" />
                        <div class="overlay"></div>
                        <h3 class="category-title">Kids Menu</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="catering-menu" class="py-5" style="background-color: #101010">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold text-uppercase" style="color: #bf9861">
            Catering Menu
        </h2>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-gold">
                            Appetizer Half / Full Tray
                        </h5>
                        <ul class="list-unstyled mb-0">
                            <li>Calamari <span class="text-gold">$80 / $110</span></li>
                            <li>Dumplings <span class="text-gold">$70 / $110</span></li>
                            <li>
                                Mussels AL FORNO <span class="text-gold">$80 / $110</span>
                            </li>
                            <li>
                                Wood Fire Wings <span class="text-gold">$70 / $105</span>
                            </li>
                            <li>
                                Meatballs Al Forno <span class="text-gold">$85 / $115</span>
                            </li>
                            <li>
                                Eggplant Rollatini <span class="text-gold">$65 / $95</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-gold">
                            Entrees Half / Full Tray
                        </h5>
                        <ul class="list-unstyled mb-0">
                            <li>
                                Pollo Parmigiana <span class="text-gold">$80 / $120</span>
                            </li>
                            <li>
                                Pollo Francese <span class="text-gold">$70 / $105</span>
                            </li>
                            <li>
                                Pollo Picatta <span class="text-gold">$60 / $110</span>
                            </li>
                            <li>
                                Pollo Marsala <span class="text-gold">$60 / $110</span>
                            </li>
                            <li>
                                Pollo Martini <span class="text-gold">$70 / $115</span>
                            </li>
                            <li>Salmon <span class="text-gold">$85 / $150</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-gold">
                            Salad Half Tray / Full Tray
                        </h5>
                        <ul class="list-unstyled mb-0">
                            <li>House <span class="text-gold">$45 / $55</span></li>
                            <li>Greek <span class="text-gold">$50 / $60</span></li>
                            <li>
                                Caesar
                                <span class="text-gold">$45 / $60</span>
                            </li>
                            <li>Baby Spinach <span class="text-gold">$50 / $65</span></li>
                            <li>Arugula <span class="text-gold">$45 / $60</span></li>
                            <li>Caprese <span class="text-gold">$70 / $110</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-gold">Pizza Menu</h5>
                        <ul class="list-unstyled mb-0">
                            <li>Plain <span class="text-gold">$12 / $17</span></li>
                            <li>
                                Margherita
                                <span class="text-gold">$15 / $21</span>
                            </li>
                            <li>
                                Carne
                                <span class="text-gold">$15 / $21</span>
                            </li>
                            <li>Napoli <span class="text-gold">$14 / $19</span></li>
                            <li>
                                Buffalo Chicken <span class="text-gold">$14 / $18</span>
                            </li>
                            <li>
                                Marinara (No Cheese)
                                <span class="text-gold">$12 / $18</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="#" class="btn btn-gold m-2">INQUIRY NOW</a>
            <a href="#" class="btn btn-outline-gold m-2">DOWNLOAD MENU</a>
        </div>
    </div>
</section>

<section id="event-packages" class="py-5" style="
        background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/events-intro.png');
        background-size: cover;
        background-position: center;
        position: relative;
      ">
    <div class="overlay"></div>

    <div class="container position-relative">
        <h2 class="text-center fw-bold text-gold mb-5">Event Packages</h2>

        <div class="row g-4">
            <div class="col-md-4 d-flex">
                <div class="package-card w-100 rounded-3 p-4 d-flex flex-column gap-2">
                    <h5 class="fw-bold text-gold mb-1 text-center">Option #1</h5>
                    <p class="price text-gold fw-bold fs-4 mb-3 text-center">
                        $38 <span class="fs-6">per person</span>
                    </p>

                    <ul class="list-unstyled lh-sm mb-4 text-start mx-auto" style="max-width: 300px">
                        <li>
                            <strong>Appetizer:</strong> Rollatini or Meatballs<br /><em>Shared, family style</em>
                        </li>
                        <li class="mt-2">
                            <strong>Salad:</strong> House or Caesar<br /><em>Single serving</em>
                        </li>
                        <li class="mt-2">
                            <strong>Pasta:</strong> Vodka or Bolognese<br /><em>Single serving</em>
                        </li>
                        <li class="mt-2">
                            <strong>Entrée:</strong> Piccata, Marsala, or Scarpariello<br /><em>Single serving</em>
                        </li>
                        <li class="mt-2">Includes soft drinks</li>
                    </ul>

                    <div class="text-gold small mb-0 text-center">
                        <p class="mb-1">Sun–Thu: 30 guest minimum</p>
                        <p class="mb-1">Fri–Sat: 40 guest minimum</p>
                        <p class="mb-0">No room rental fees</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="package-card w-100 rounded-3 p-4 d-flex flex-column gap-2">
                    <h5 class="fw-bold text-gold mb-1 text-center">Option #2</h5>
                    <p class="price text-gold fw-bold fs-4 mb-3 text-center">
                        $45 <span class="fs-6">per person</span>
                    </p>

                    <ul class="list-unstyled lh-sm mb-4 text-start mx-auto" style="max-width: 300px">
                        <li>
                            <strong>Appetizer:</strong> Caprese, Calamari, or Rollatini<br /><em>Shared, family style</em>
                        </li>
                        <li class="mt-2">
                            <strong>Salad:</strong> Caesar or Greek<br /><em>Single serving</em>
                        </li>
                        <li class="mt-2">
                            <strong>Pasta:</strong> Vodka or Bolognese<br /><em>Single serving</em>
                        </li>
                        <li class="mt-2">
                            <strong>Entrée:</strong> Francese, Marsala, Scarpariello, or
                            Parmigiana<br /><em>Single serving</em>
                        </li>
                        <li class="mt-2">Includes soft drinks</li>
                    </ul>

                    <div class="text-gold small mb-0 text-center">
                        <p class="mb-1">Sun–Thu: 30 guest minimum</p>
                        <p class="mb-1">Fri–Sat: 40 guest minimum</p>
                        <p class="mb-0">No room rental fees</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="package-card w-100 rounded-3 p-4 d-flex flex-column gap-2">
                    <h5 class="fw-bold text-gold mb-1 text-center">Option #3</h5>
                    <p class="price text-gold fw-bold fs-4 mb-3 text-center">
                        $54 <span class="fs-6">per person</span>
                    </p>

                    <ul class="list-unstyled lh-sm mb-4 text-start mx-auto" style="max-width: 300px">
                        <li>
                            <strong>Appetizer:</strong> Rollatini, Meatballs, or Shrimp<br /><em>Shared, family style</em>
                        </li>
                        <li class="mt-2">
                            <strong>Salad:</strong> Forno or Arugula<br /><em>Single serving</em>
                        </li>
                        <li class="mt-2">
                            <strong>Pasta:</strong> Vodka or Bolognese<br /><em>Single serving</em>
                        </li>
                        <li class="mt-2">
                            <strong>Entrée:</strong> Martini, Veal, Seafood, or Salmon<br /><em>Single serving</em>
                        </li>
                        <li class="mt-2">Includes soft drinks</li>
                    </ul>

                    <div class="text-gold small mb-0 text-center">
                        <p class="mb-1">Sun–Thu: 30 guest minimum</p>
                        <p class="mb-1">Fri–Sat: 40 guest minimum</p>
                        <p class="mb-0">No room rental fees</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="#" class="btn btn-gold m-2">BOOK VENUE</a>
            <a href="#" class="btn btn-outline-gold m-2">DOWNLOAD MENU</a>
        </div>
    </div>
</section>

<?php
// Script para el header, mantenido aquí para una conversión 1:1.
?>
<script>
    document.addEventListener("scroll", function() {
        const header = document.getElementById("main-header");
        if (window.scrollY > 50) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });
</script>

<?php
get_footer();
?>