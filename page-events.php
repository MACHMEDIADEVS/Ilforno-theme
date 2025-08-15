<?php

/**
 * Template Name: Events Page
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

    /* seccion introduccion */
    /* Colores personalizados */
    .text-gold {
        color: #bf9861;
    }

    /* Imagen con efecto */
    #event-introduction img {
        border: 0px solid #bf9861;
        transition: transform 0.3s ease;
    }

    #event-introduction img:hover {
        transform: scale(1.03);
    }

    /* Fondo */
    .bg-black {
        background-color: #1a1a1a !important;
    }

    /* Texto */
    #event-introduction p {
        color: #dacfbd;
    }

    /* ====== Event Services ====== */
    #event-services {
        background-color: #02332d;
        /* Fondo controlado solo desde CSS */
    }

    /* Colores */
    .text-gold {
        color: #bf9861;
    }

    /* Cards de servicios */
    .service-card {
        border: 2px solid #bf9861;
        background-color: #111111;
        border-radius: 5px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 20px rgba(191, 152, 97, 0.4);
    }

    /* Texto */
    .service-text {
        color: #dacfbd;
        font-size: 0.95rem;
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

    /* ====== Sección Reserva ====== */
    #booking-form {
        background-color: #1a1a1a;
    }

    .text-gold {
        color: #bf9861;
    }

    .btn-gold {
        background-color: #bf9861;
        color: #1a1a1a;
        font-weight: bold;
        padding: 10px 25px;
        border-radius: 8px;
        text-transform: uppercase;
        transition: all 0.3s ease;
        border: none;
    }

    .btn-gold:hover {
        background-color: #b0844f;
        color: #fff;
    }

    .booking-card {
        background-color: #1f1f1f;
        border-radius: 10px;
        color: #fff;
    }

    /* Inputs y Selects */
    .booking-card .form-control,
    .booking-card .form-select {
        border-radius: 6px;
        border: 1px solid #444;
        background-color: #fff;
        color: #000;
    }

    /* Responsivo */
    @media (max-width: 991px) {
        #booking-form .row {
            text-align: center;
        }

        .booking-card {
            margin-top: 20px;
        }
    }

    /* seccion contacus */
    .text-gold {
        color: #bf9861;
    }

    .bg-black {
        background-color: #1a1a1a !important;
    }

    .btn-gold {
        background-color: #bf9861;
        color: #1a1a1a;
        font-weight: bold;
        padding: 10px 25px;
        border-radius: 8px;
        text-transform: uppercase;
        transition: all 0.3s ease;
    }

    .btn-gold:hover {
        background-color: #b0844f;
        color: #fff;
    }

    #why-choose-us ul li {
        color: #dacfbd;
        font-size: 1rem;
    }

    section {
        padding: 0px;
    }
</style>

<section class="hero-events-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/event-hero.png')">
    <div class="overlay"></div>
    <div class="container">
        <h1 class="display-4 fw-bold">Venue</h1>
        <p class="lead">
            Celebrate your special moments with IL Forno where food, ambiance, and
            service make every event unforgettable.
        </p>
    </div>
</section>

<section id="event-introduction" class="py-5 bg-black text-light">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <h2 class="fw-bold text-gold mb-4">
                    Host Your Event at IL Forno a Legna
                </h2>
                <p class="mb-3">
                    At IL Forno a Legna, we offer a one-of-a-kind Italian dining
                    experience that’s perfect for any event, from birthdays to
                    corporate gatherings. Whether you’re hosting an intimate dinner or
                    a larger celebration, our team will work with you to make your
                    event truly memorable.
                </p>
                <p>
                    Enjoy our signature wood-fired pizzas, fresh pasta, and
                    traditional Italian dishes in the heart of Rahway, NJ. Let us help
                    you create the perfect setting for your special occasion, with
                    flexible packages and personalized service to ensure everything
                    goes smoothly.
                </p>
            </div>

            <div class="col-lg-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/events.jpg" alt="Il Forno Event" class="img-fluid rounded shadow" />
            </div>
        </div>
    </div>
</section>

<section id="event-services" class="py-5 text-light">
    <div class="container">
        <h2 class="text-center text-gold fw-bold mb-5">
            Event Services at IL Forno a Legna
        </h2>

        <div class="row g-4">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-card text-center p-4 h-100">
                    <i class="fas fa-chair fa-3x text-gold mb-3"></i>
                    <h5 class="fw-bold text-gold">Private Dining Space</h5>
                    <p class="service-text">
                        Host your event in our cozy yet elegant dining room with seating
                        for small or large groups.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-card text-center p-4 h-100">
                    <i class="fas fa-utensils fa-3x text-gold mb-3"></i>
                    <h5 class="fw-bold text-gold">Catering</h5>
                    <p class="service-text">
                        Enjoy IL Forno’s delicious food at your location with our
                        pizzas, pastas, salads, and desserts.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-card text-center p-4 h-100">
                    <i class="fas fa-truck fa-3x text-gold mb-3"></i>
                    <h5 class="fw-bold text-gold">Wood-Fired Pizza Truck</h5>
                    <p class="service-text">
                        Bring our pizza trailer to your outdoor event and watch pizzas
                        bake in our custom oven.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-card text-center p-4 h-100">
                    <i class="fas fa-concierge-bell fa-3x text-gold mb-3"></i>
                    <h5 class="fw-bold text-gold">Full Event Support</h5>
                    <p class="service-text">
                        From setup to cleanup, our team ensures your event runs smoothly
                        with personalized menus.
                    </p>
                </div>
            </div>
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

<section id="booking-form" class="py-5">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/eventoil.png" alt="Event Booking" class="img-fluid rounded shadow" />
            </div>

            <div class="col-lg-6">
                <div class="booking-card p-4 shadow">
                    <h3 class="fw-bold text-gold mb-4">Book Your Event</h3>
                    <form>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Full Name *" required />
                            </div>
                            <div class="col">
                                <input type="tel" class="form-control" placeholder="Phone Number" required />
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email Address *" required />
                        </div>
                        <div class="mb-3">
                            <select class="form-select">
                                <option value="">Preferred Package</option>
                                <option>Classic Italian Experience</option>
                                <option>Premium Italian Feast</option>
                                <option>Ultimate Italian Celebration</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="date" class="form-control" required />
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Event Type (Birthday, Corporate, Wedding, etc.)" />
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" placeholder="Number of Guests *" required />
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Special Requests / Notes"></textarea>
                        </div>
                        <button type="submit" class="btn btn-gold w-100">
                            Submit Event Request
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="why-choose-us" class="py-5 bg-dark text-light">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <h2 class="fw-bold text-gold mb-4">
                    Why Choose IL Forno a Legna for Your Event?
                </h2>
                <ul class="mb-4">
                    <li class="mb-3">Best Italian food in Rahway, NJ</li>
                    <li class="mb-3">Personalized event service</li>
                    <li class="mb-3">Flexible packages for all occasions</li>
                    <li class="mb-3">Elegant and cozy dining atmosphere</li>
                    <li class="mb-3">Wood-fired pizza truck available</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event2.png" alt="Why Choose Us" class="img-fluid rounded shadow" />
            </div>
        </div>
        <div class="text-center mt-5">
            <h3 class="fw-bold text-gold mb-3">
                Ready to plan your unforgettable event?
            </h3>
            <a href="#booking-form" class="btn btn-gold px-5 py-2">Book venue</a>
        </div>
    </div>
</section>

<style>
    #faqs {
        background-color: #0f0f0f;
    }

    .modern-accordion {
        max-width: 900px;
        margin: 0 auto;
    }

    .accordion-item {
        background: #121212;
        border-left: 4px solid #bf9861;
        margin-bottom: 1.25rem;
        border-radius: 6px;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .accordion-title {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 1.2rem;
        background-color: #1a1a1a;
        color: #bf9861;
        font-weight: bold;
        font-size: 1rem;
        cursor: pointer;
        position: relative;
    }

    .accordion-title i {
        transition: transform 0.3s ease;
    }

    .accordion-item input:checked+.accordion-title i {
        transform: rotate(180deg);
    }

    .accordion-content {
        max-height: 0;
        overflow: hidden;
        background-color: #191919;
        color: #dacfbd;
        font-size: 0.95rem;
        padding: 0 1.2rem;
        transition: max-height 0.4s ease, padding 0.4s ease;
    }

    .accordion-item input:checked~.accordion-content {
        max-height: 500px;
        padding: 1rem 1.2rem;
    }
</style>

<section id="faqs" class="py-5 text-light">
    <div class="container">
        <h2 class="text-center text-gold fw-bold mb-5">
            Frequently Asked Questions
        </h2>
        <div class="modern-accordion">
            <div class="accordion-item">
                <input type="checkbox" id="faq1" hidden />
                <label for="faq1" class="accordion-title">
                    <span>What types of events can I host at IL Forno a Legna?</span>
                    <i class="fas fa-chevron-down"></i>
                </label>
                <div class="accordion-content">
                    At IL Forno a Legna, we welcome a variety of events, including:
                    <ul>
                        <li>Private parties (birthdays, anniversaries, etc.)</li>
                        <li>Corporate events (meetings, celebrations, team building)</li>
                        <li>Family gatherings (reunions, graduations)</li>
                        <li>Weddings and receptions</li>
                    </ul>
                    We also offer off-site catering services for events held at
                    other locations, and our mobile pizza trailer is available for
                    outdoor festivals and private events.
                </div>
            </div>
            <div class="accordion-item">
                <input type="checkbox" id="faq2" hidden />
                <label for="faq2" class="accordion-title">
                    <span>Can I customize the event menu?</span>
                    <i class="fas fa-chevron-down"></i>
                </label>
                <div class="accordion-content">
                    Yes! We offer customized menus for all events. Whether you want
                    to add special dishes, dietary accommodations (such as
                    vegetarian or gluten-free options), or request specific items
                    for your event, we’ll work closely with you to create the
                    perfect menu for your occasion.
                </div>
            </div>
            <div class="accordion-item">
                <input type="checkbox" id="faq3" hidden />
                <label for="faq3" class="accordion-title">
                    <span>How far in advance should I book my event?</span>
                    <i class="fas fa-chevron-down"></i>
                </label>
                <div class="accordion-content">
                    We recommend booking your event at least 4-6 weeks in advance to
                    ensure availability, especially for larger gatherings or events
                    requiring catering. However, we’ll do our best to accommodate
                    last-minute bookings, so feel free to reach out to us for more
                    urgent requests.
                </div>
            </div>
            <div class="accordion-item">
                <input type="checkbox" id="faq4" hidden />
                <label for="faq4" class="accordion-title">
                    <span>What is included in the event packages?</span>
                    <i class="fas fa-chevron-down"></i>
                </label>
                <div class="accordion-content">
                    Our event packages include everything you need for a memorable
                    celebration:
                    <ul>
                        <li><strong>Food:</strong> Wood-fired pizzas, pastas, salads, and desserts based on the package you choose.</li>
                        <li><strong>Service:</strong> Full-service staff to set up, serve, and clean up.</li>
                        <li><strong>Seating and Table Setup:</strong> If hosting the event in our restaurant, we’ll arrange seating and table settings for your guests.</li>
                    </ul>
                    Additional services like wine pairings, full bar service, and
                    personalized menu options are also available.
                </div>
            </div>
            <div class="accordion-item">
                <input type="checkbox" id="faq5" hidden />
                <label for="faq5" class="accordion-title">
                    <span>Can I bring my own drinks to the event?</span>
                    <i class="fas fa-chevron-down"></i>
                </label>
                <div class="accordion-content">
                    Yes, IL Forno a Legna is a BYOB (Bring Your Own Bottle)
                    establishment. You’re welcome to bring your favorite wine or
                    beer to enjoy with your meal. If you prefer, we can also assist
                    you with recommendations for wine pairings, or you can take
                    advantage of our full bar services for larger events.
                </div>
            </div>
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