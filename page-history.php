<?php

/**
 * Template Name: History Page
 *
 * @package IL_Forno_a_Legna
 */

get_header();
?>


<style>
    /* HEADER */
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

    #main-header.scrolled {
        background-color: rgba(0, 0, 0, 0.55) !important;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    }

    /* HERO */
    .hero-events-section {
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

    .hero-events-section .overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.55);
        z-index: 1;
    }

    .hero-events-section .container {
        position: relative;
        z-index: 2;
    }

    @media (max-width: 768px) {
        .hero-events-section {
            height: 70vh;
        }
    }



    /* ====== About Intro Section ====== */
    #about-intro {
        background-color: #1a1a1a;
    }

    #about-intro p {
        color: #dacfbd;
        font-size: 1rem;
        line-height: 1.7;
    }

    #about-intro h2 {
        color: #bf9861;
    }


    /* Timeline Cards */
    #about-timeline {
        background-color: #dacfbd;
    }

    .timeline-box {
        background-color: #212428;
        border: 2px solid #bf9861;
        color: #ffffff;
        transition: all 0.3s ease;
    }

    .timeline-box h4 {
        color: #bf9861;
    }

    .timeline-box p {
        color: #ffffff;
        font-size: 0.9rem;
        margin-bottom: 0.5rem;
    }

    /* Botón dorado */
    .btn-outline-gold {
        background-color: transparent;
        color: #bf9861;
        border: 1px solid #bf9861;
        font-weight: bold;
        padding: 6px 12px;
        border-radius: 4px;
        text-transform: uppercase;
        font-size: 0.8rem;
        transition: all 0.3s ease;
    }

    .btn-outline-gold:hover {
        background-color: #bf9861;
        color: #1a1a1a;
    }

    #about-timeline h2 {
        color: #bf9861;
    }



    /* SECCION COMMUNITY */
    /* ====== Community Engagement Section ====== */
    #community-engagement {
        background-color: #1a1a1a;
    }

    #community-engagement h2 {
        color: #bf9861;
    }

    .community-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.3);
    }

    .community-card {
        background-color: #111;
        border: 1px solid #bf9861;
        border-radius: 8px;
        padding: 1.5rem;
        color: #dacfbd;
        height: 100%;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
        transition: transform 0.3s ease;
    }

    .community-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 20px rgba(191, 152, 97, 0.4);
    }

    .community-card h5 {
        color: #bf9861;
        font-weight: bold;
        margin-bottom: 0.5rem;
    }

    .community-card p {
        font-size: 0.95rem;
        margin: 0;
        color: #dacfbd;
    }

    @media (max-width: 991px) {
        .community-image {
            margin-bottom: 2rem;
            height: auto;
        }
    }

    @media (max-width: 767px) {
        .community-card {
            padding: 1rem;
        }
    }




    /* ====== Press & Recognition Section ====== */
    #press-recognition {
        background-color: #1a1a1a;
    }

    #press-recognition h2 {
        color: #bf9861;
    }

    .press-card {
        background-color: #26292b;
        /* fondo ligeramente más claro que el fondo general */
        border: 1.5px solid #bf9861;
        color: #dacfbd;
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .press-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
    }

    .press-card h5 {
        color: #bf9861;
        margin-bottom: 0.75rem;
    }

    .press-card p {
        font-size: 0.95rem;
        color: #dacfbd;
    }





    /* ====== Join Us Today CTA Section ====== */
    #cta-join-us {
        background-color: #111010;
    }

    #cta-join-us h2 {
        color: #bf9861;
    }

    #cta-join-us p {
        font-size: 1rem;
        color: #dacfbd;
    }

    .btn-gold {
        background-color: #bf9861;
        color: #1a1a1a;
        border: 2px solid #bf9861;
        font-weight: bold;
        border-radius: 8px;
        transition: all 0.3s ease;
        text-transform: uppercase;
        font-size: 0.9rem;
        /* <- AÑADIDO PARA UNIFICAR */
    }

    /* Este es el código que debes modificar */
    .btn-gold:hover {
        background-color: transparent;
        color: #bf9861;
        border: 2px solid #bf9861;
        /* <- AÑADE ESTA LÍNEA */
    }

    .btn-outline-gold {
        background-color: transparent;
        color: #bf9861;
        border: 2px solid #bf9861;
        font-weight: bold;
        border-radius: 8px;
        transition: all 0.3s ease;
        text-transform: uppercase;
        font-size: 0.9rem;
        /* <- AÑADIDO PARA UNIFICAR */
    }


    .btn-outline-gold:hover {
        background-color: rgba(191, 152, 97, 0.15);
        color: #bf9861;
    }

    .text-gold-link {
        color: #bf9861 !important;
        text-decoration: none;
    }

    .text-gold-link:hover {
        text-decoration: underline;
    }
</style>

<section class="hero-events-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero-image.png');">
    <div class="overlay"></div>
    <div class="container">
        <h1 class="display-4 fw-bold">History</h1>
        <p class="lead">Let us bring the flavors of Italy to your home, office, or celebration.</p>
    </div>
</section>

<section id="about-intro" class="py-5 text-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h2 class="text-gold fw-bold mb-4">About IL Forno a Legna</h2>
                <p>
                    IL Forno a Legna is a beloved Italian restaurant located in the heart of Rahway, New Jersey,
                    known for its authentic wood-fired pizza, hearty pasta dishes, and inviting atmosphere.
                    Since its opening in 2018, IL Forno a Legna has earned a reputation for its high-quality food
                    and strong ties to the local community.
                </p>
                <p>
                    Below, we share the story of our restaurant, highlighting key milestones in our journey to
                    become one of New Jersey's favorite dining spots.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="about-timeline" class="py-5">
    <div class="container">
        <h2 class="text-center text-gold fw-bold mb-5">Our Timeline</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

            <div class="col">
                <div class="timeline-box p-4 text-center rounded bg-dark h-100 d-flex flex-column justify-content-between">
                    <div>
                        <h4 class="text-gold fw-bold">2018</h4>
                        <p class="small text-light mb-3">The Grand Opening</p>
                    </div>
                    <button class="btn btn-outline-gold mt-auto" data-bs-toggle="modal" data-bs-target="#modal2018">View Details</button>
                </div>
            </div>

            <div class="col">
                <div class="timeline-box p-4 text-center rounded bg-dark h-100 d-flex flex-column justify-content-between">
                    <div>
                        <h4 class="text-gold fw-bold">2019–2021</h4>
                        <p class="small text-light mb-3">Growth & Takeout Success</p>
                    </div>
                    <button class="btn btn-outline-gold mt-auto" data-bs-toggle="modal" data-bs-target="#modal2019">View Details</button>
                </div>
            </div>

            <div class="col">
                <div class="timeline-box p-4 text-center rounded bg-dark h-100 d-flex flex-column justify-content-between">
                    <div>
                        <h4 class="text-gold fw-bold">2022</h4>
                        <p class="small text-light mb-3">Mobile Pizza Trailer</p>
                    </div>
                    <button class="btn btn-outline-gold mt-auto" data-bs-toggle="modal" data-bs-target="#modal2022">View Details</button>
                </div>
            </div>

            <div class="col">
                <div class="timeline-box p-4 text-center rounded bg-dark h-100 d-flex flex-column justify-content-between">
                    <div>
                        <h4 class="text-gold fw-bold">2024–2025</h4>
                        <p class="small text-light mb-3">Expansion & Recognition</p>
                    </div>
                    <button class="btn btn-outline-gold mt-auto" data-bs-toggle="modal" data-bs-target="#modal2024">View Details</button>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="modal2018" tabindex="-1" aria-labelledby="modal2018Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-light border-gold">
            <div class="modal-header border-0">
                <h5 class="modal-title text-gold fw-bold" id="modal2018Label">2018 – The Grand Opening</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                On August 24, 2018, Il Forno a Legna officially opened its doors in Rahway. With a focus on wood-fired pizza and traditional Italian cuisine, the restaurant quickly became a local favorite for its fresh ingredients, rustic flavors, and cozy atmosphere.
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal2019" tabindex="-1" aria-labelledby="modal2019Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-light border-gold">
            <div class="modal-header border-0">
                <h5 class="modal-title text-gold fw-bold" id="modal2019Label">2019–2021 – Growth & Takeout</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                Il Forno expanded its offerings and became an essential part of Rahway’s food scene. In 2020, the IlFornoALegnaToGo platform launched, enabling easy online ordering for takeout and delivery, helping the restaurant thrive during the pandemic.
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal2022" tabindex="-1" aria-labelledby="modal2022Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-light border-gold">
            <div class="modal-header border-0">
                <h5 class="modal-title text-gold fw-bold" id="modal2022Label">2022 – Mobile Pizza Trailer</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                In 2022, Il Forno launched its Pizza Trailer with a wood-fired oven, delivering pizza to festivals, breweries, and private parties across New Jersey. A huge hit at local events and wineries!
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal2024" tabindex="-1" aria-labelledby="modal2024Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-light border-gold">
            <div class="modal-header border-0">
                <h5 class="modal-title text-gold fw-bold" id="modal2024Label">2024–2025 – Expansion & Recognition</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                Il Forno opened a second location in Raritan and was featured by Barstool Sports. In March 2025, NJ.com named its chicken parm one of the 21 best in NJ. In June, the restaurant was rebranded with a modern look to mark its 7th anniversary.
            </div>
        </div>
    </div>
</div>

<section id="community-engagement" class="py-5">
    <div class="container">
        <div class="row align-items-center g-4">

            <div class="col-lg-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/comunity.png" alt="Il Forno Community Events" class="community-image w-100 rounded">
            </div>

            <div class="col-lg-6">
                <h2 class="text-gold fw-bold mb-4">Community Engagement</h2>
                <div class="row row-cols-1 row-cols-md-2 g-3">
                    <div class="col">
                        <div class="community-card h-100">
                            <h5>Food Truck & Music Festivals</h5>
                            <p>Serving fresh wood-fired pizza at NJ's best festivals.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="community-card h-100">
                            <h5>Beneduce Vineyards Nights</h5>
                            <p>A regular feature at wine & picnic nights in NJ.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="community-card h-100">
                            <h5>Hot Rods & Harleys</h5>
                            <p>Serving at Rahway’s iconic street festivals annually.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="community-card h-100">
                            <h5>Weddings & Corporate</h5>
                            <p>Full-service catering for private & business events.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="press-recognition" class="py-5 bg-dark">
    <div class="container">
        <h2 class="text-gold fw-bold text-center mb-5">Press & Recognition</h2>
        <div class="row row-cols-1 row-cols-md-2 g-4">

            <div class="col">
                <div class="press-card p-4 h-100 rounded">
                    <h5 class="fw-bold text-gold">NJ.com</h5>
                    <p class="text-light small mb-0">
                        Ranked in New Jersey’s 21 Best Plates of Chicken Parm (March 2025).
                    </p>
                </div>
            </div>

            <div class="col">
                <div class="press-card p-4 h-100 rounded">
                    <h5 class="fw-bold text-gold">Barstool Sports</h5>
                    <p class="text-light small mb-0">
                        Featured in Dave Portnoy’s One Bite Pizza Review.
                    </p>
                </div>
            </div>

            <div class="col">
                <div class="press-card p-4 h-100 rounded">
                    <h5 class="fw-bold text-gold">Home News Tribune</h5>
                    <p class="text-light small mb-0">
                        Voted Best Italian Restaurant in Union County (Multiple years).
                    </p>
                </div>
            </div>

            <div class="col">
                <div class="press-card p-4 h-100 rounded">
                    <h5 class="fw-bold text-gold">Rahway Rising</h5>
                    <p class="text-light small mb-0">
                        Featured in the “New Openings” section in 2018.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="cta-join-us" class="py-5">
    <div class="container text-center">
        <h2 class="text-gold fw-bold mb-4">Join Us Today!</h2>
        <p class="text-light mb-4">
            Visit us at <strong>1464 Main Street, Rahway, NJ</strong> or check out our food trailer at local events.<br>
            For reservations, catering, or info, call <a href="tel:+17323826600" class="text-gold-link fw-bold">732-382-6600</a>
            or order online.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="#order" class="btn btn-gold px-4">Order Now</a>
            <a href="#catering" class="btn btn-outline-gold px-4">Book Catering</a>
            <a href="#contact" class="btn btn-outline-gold px-4">Contact Us</a>
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