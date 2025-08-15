<?php

/**
 * Template Name: Community Page
 *
 * @package IL_Forno_a_Legna
 */

get_header();
?>


<style>
    /* HERO Community */
    .hero-community-section {
        position: relative;
        color: white;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 60vh;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .hero-community-section .overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.55);
        z-index: 1;
    }

    .hero-community-section .container {
        position: relative;
        z-index: 2;
    }

    @media (max-width: 768px) {
        .hero-community-section {
            height: 70vh;
        }
    }

    /* Contenido principal */
    .community-content-section h2 {
        font-size: 1.75rem;
        font-weight: bold;
    }

    .community-content-section p {
        font-size: 1rem;
        line-height: 1.6;
    }


    /* INTRO */
    #community-intro {
        background-color: #1a1a1a;
        padding: 5rem 0;
    }

    #community-intro h2 {
        color: #bf9861;
    }

    #community-intro p {
        color: #dacfbd;
        text-align: center;
    }




    /* SUPPORTING LOCAL  */
    #support-local {
        background-color: #dacfbd;
        /* Fondo beige claro */
        padding: 5rem 0;
    }

    /* Títulos H3 y H5 en color oscuro */
    #support-local h3,
    #support-local h5 {
        color: #bf9861;
    }

    /* Párrafos en color oscuro para que sean legibles */
    #support-local p {
        color: #333333;
        /* Un gris oscuro para que sea legible pero no tan fuerte como el título */
    }

    /* Aseguramos que la imagen tenga los bordes redondeados */
    #support-local img {
        border-radius: 0.5rem;
    }




    /* PIZZA TRAILER / COMMUNITY EVENTS */
    #pizza-trailer {
        background-color: #1a1a1a;
        padding: 5rem 0;
    }

    #pizza-trailer h3 {
        color: #bf9861;
    }

    .pizza-trailer-card {
        background-color: #111111;
        border: 2px solid #bf9861;
        border-radius: 0.5rem;
        padding: 1.5rem;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .pizza-trailer-card h5 {
        color: #bf9861;
    }

    .pizza-trailer-card p {
        color: #dacfbd;
    }

    /* NUEVO: Esta es la regla clave que lo soluciona */
    .card-content-wrapper {
        flex-grow: 1;
        /* Hace que este contenedor crezca para ocupar el espacio */
    }

    /* Estilos del botón que ya teníamos */
    .pizza-trailer-card .btn-outline-gold {
        color: #bf9861;
        border: 2px solid #bf9861;
        transition: all 0.3s ease;
    }

    .pizza-trailer-card .btn-outline-gold:hover {
        color: #1a1a1a;
        background-color: #bf9861;
    }



    /* TESTIMONIALS */
    #testimonials {
        background-color: #1a1a1a;
        padding: 5rem 0;
    }

    #testimonials h3 {
        color: #bf9861;
    }

    .testimonial-card {
        background-color: #111111;
        /* Gris oscuro secundario */
        border: 1px solid rgba(191, 150, 97, 0.35);
        /* Borde dorado sutil */
        border-radius: 0.5rem;
        padding: 1.5rem;
        height: 100%;
    }

    .testimonial-card .quote {
        color: white;
        /* Color blanco para la cita */
        font-style: italic;
    }

    /* Estilo para el nombre del autor */
    .testimonial-card p:not(.quote) {
        color: #bf9861;
    }



    /* CTA: GET INVOLVED */
    #get-involved {
        background-color: #121212;
        /* Fondo oscuro sólido */
        padding: 5rem 0;
    }

    #get-involved h3 {
        color: #fff;
    }

    #get-involved p {
        color: #dacfbd;
        /* Color de párrafo estándar */
    }

    /* Caja de contacto a la derecha */
    .cta-contact-box {
        background-color: #111111;
        border: 1px solid rgba(191, 150, 97, 0.35);
        border-radius: 0.5rem;
        padding: 1.5rem;
    }

    .cta-contact-box h5 {
        color: #bf9861;
    }

    .cta-contact-box p,
    .cta-contact-box li {
        color: #dacfbd;
    }

    .cta-contact-box a {
        color: #fff;
        text-decoration: none;
        transition: text-decoration 0.3s ease;
    }

    .cta-contact-box a:hover {
        text-decoration: underline;
    }

    /* Estilos de botones que ya deberías tener definidos */
    /* Botón Dorado (Ej: Book Pizza Trailer) */
    .btn-gold {
        background-color: #bf9861;
        color: #1a1a1a;
        border-radius: 10px;
        font-weight: bold;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-gold:hover {
        background-color: #a87d3d;
        /* Tono más oscuro */
        color: #1a1a1a;
    }

    /* Botón con Borde Dorado (Ej: Redes Sociales) */
    .btn-outline-gold {
        background-color: transparent;
        color: #bf9861;
        border: 1px solid #bf9861;
        border-radius: 5px;
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .btn-outline-gold:hover {
        background-color: #bf9861;
        color: #1a1a1a;
    }

    /* Botón Verde (Ej: Contact Us) */
    .btn-green {
        background-color: #02332d;
        color: #fff;
        border-radius: 10px;
        font-weight: bold;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-green:hover {
        background-color: #012621;
        color: #fff;
    }
</style>

<section class="hero-community-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero-image.png');">
    <div class="overlay"></div>
    <div class="container">
        <h1 class="display-4 fw-bold">Community</h1>
        <p class="lead">Our commitment to Rahway goes beyond serving pizza because we’re here to make a difference.</p>
    </div>
</section>

<section id="community-intro" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h2 class="fw-bold mb-3">
                    Our Commitment to the Community
                </h2>
                <p class="mb-0">
                    At IL Forno a Legna, we believe that a great restaurant is built not
                    just on delicious food, but also on a deep connection to the
                    community. As a family-owned business in the heart of Rahway, NJ,
                    we’re committed to creating lasting relationships, giving back, and
                    making a positive impact wherever we can. Here’s how we approach our
                    community involvement and the ways we continue <br> to make a difference.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="support-local" class="py-5">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/popular.png" alt="Ingredientes frescos y locales para pizza" class="img-fluid rounded-3" />
            </div>

            <div class="col-lg-6">
                <h3 class="fw-bold mb-3">Supporting Local Businesses</h3>
                <p>
                    IL Forno a Legna values collaboration with other local businesses. From
                    sourcing the freshest ingredients from nearby farms and markets to
                    collaborating with neighboring shops, we aim to strengthen the Rahway
                    economy by supporting our local suppliers and fellow entrepreneurs.
                </p>
                <div class="mt-3">
                    <h5 class="fw-bold">Partnering with Local Farms & Vendors</h5>
                    <p class="mb-2">
                        We support New Jersey farmers and suppliers for seasonal produce,
                        meats, and dairy. Our tomatoes, mozzarella, and fresh herbs are
                        locally sourced to ensure quality in every dish.
                    </p>
                    <h5 class="fw-bold mt-3">Collaborations with Local Businesses</h5>
                    <p class="mb-0">
                        From wine pairings with local vineyards to craft beer nights with
                        nearby breweries, we team up to create experiences that benefit our
                        guests and our community.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pizza-trailer" class="py-5">
    <div class="container">
        <h3 class="fw-bold text-center mb-4">
            Community Events & The Il Forno Pizza Trailer
        </h3>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="pizza-trailer-card">
                    <h5 class="fw-bold text-center">Food Truck & Music Festivals</h5>
                    <div class="card-content-wrapper">
                        <p class="mb-0 text-center">
                            We fire pies at festivals across NJ like Rahway’s Hot Rods &
                            Harleys and the West Milford Food Truck Festival.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="pizza-trailer-card">
                    <h5 class="fw-bold text-center">Farmers Markets & Street Fairs</h5>
                    <div class="card-content-wrapper">
                        <p class="mb-0 text-center">
                            We serve fresh, wood-fired pizza while genuinely connecting with families and supporting small businesses.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="pizza-trailer-card">
                    <h5 class="fw-bold text-center">Private Event Catering</h5>
                    <div class="card-content-wrapper">
                        <p class="mb-3 text-center">
                            Weddings, corporate parties, charity galas you name it. We bring
                            the oven and the fun.
                        </p>
                    </div>
                    <div class="text-center">
                        <a href="#get-involved" class="btn fw-bold btn-outline-gold">Inquiry Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="testimonials" class="py-5">
    <div class="container">
        <h3 class="fw-bold text-center mb-4">What Our Community Says</h3>
        <div class="row g-4">
            <div class="col-md-6 d-flex">
                <div class="testimonial-card">
                    <p class="mb-2 quote">
                        “Il Forno a Legna isn’t just a pizza place it’s a vital part of
                        Rahway’s downtown scene. The pizza is incredible, but it’s the
                        heart behind the business that makes it truly special.”
                    </p>
                    <p class="mb-0">– Emily T., Rahway Resident</p>
                </div>
            </div>
            <div class="col-md-6 d-flex">
                <div class="testimonial-card">
                    <p class="mb-2 quote">
                        “We’ve catered our school’s fundraising events with Il Forno for
                        years generous, reliable, and always delicious. Our community
                        loves them.”
                    </p>
                    <p class="mb-0">– Mark H., Rahway School Board Member</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="get-involved" class="py-5">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <h3 class="fw-bold">Get Involved with Us!</h3>
                <p class="mb-3">
                    Follow our events, book our pizza trailer, or just stop by for a
                    meal we’d love to see you.
                </p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="#pizza-trailer" class="btn btn-gold">Book Pizza Trailer</a>
                    <a href="https://www.instagram.com/ilfornolegna/" class="btn btn-outline-gold" target="_blank" rel="noopener">Instagram</a>
                    <a href="https://www.facebook.com/ilfornolegna" class="btn btn-outline-gold" target="_blank" rel="noopener">Facebook</a>
                    <a href="https://www.tiktok.com/@ilfornolegna" class="btn btn-outline-gold" target="_blank" rel="noopener">TikTok</a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="cta-contact-box">
                    <h5 class="fw-bold mb-2">Join Us in Giving Back</h5>
                    <p class="mb-2">
                        Interested in partnering or supporting our initiatives?
                    </p>
                    <ul class="mb-3 ps-3">
                        <li>Email: <a href="mailto:fornoalegna@yahoo.com">fornoalegna@yahoo.com</a></li>
                        <li>Phone: <a href="tel:+17323826600">(732) 382-6600</a></li>
                    </ul>
                    <a href="mailto:fornoalegna@yahoo.com" class="btn w-100 btn-green">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Script para el header, mantenido aquí para una conversión 1:1.
?>
<script>
    document.addEventListener('scroll', function() {
        const header = document.getElementById('main-header');
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
</script>

<?php
get_footer();
?>