<?php

/**
 * Template Name: Catering Page
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

    /* SECCION INTRODUCCION */
    /* Texto en dorado */
    .text-gold {
        color: #bf9861;
    }

    /* Imagen con efecto */
    #catering-introduction img {
        transition: transform 0.3s ease;
    }

    #catering-introduction img:hover {
        transform: scale(1.03);
    }

    /* Fondo negro */
    .bg-black {
        background-color: #1a1a1a !important;
    }

    /* Color de texto */
    #catering-introduction p {
        color: #dacfbd;
    }

    /* ====== Why Choose Catering Section ====== */
    #why-catering-icons {
        background-color: #02332d;
        position: relative;
        z-index: 1;
    }

    #why-catering-icons .container {
        position: relative;
        z-index: 2;
    }

    #why-catering-icons h2 {
        color: #bf9861;
    }

    #why-catering-icons .why-card {
        background-color: #dacfbd;
        /* fondo beige claro */
        border: 2px solid #bf9861;
        /* borde dorado */
        transition: all 0.3s ease;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    }

    #why-catering-icons .why-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
    }

    #why-catering-icons .why-card i,
    #why-catering-icons .why-card h5 {
        color: #bf9861;
    }

    #why-catering-icons .why-card p {
        font-size: 0.95rem;
        color: #1a1a1a;
        /* contraste con fondo claro */
    }

    /* ====== CATERING PAGE STYLES ====== */

    /* General Text Styling */
    .text-gold {
        color: #bf9861;
    }

    /* Hero Section */
    .catering-hero {
        background-image: url("img/catering-hero.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        padding: 100px 0;
        color: white;
    }

    .catering-hero::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        z-index: 0;
    }

    .catering-hero .container {
        position: relative;
        z-index: 1;
    }

    /* Section Titles */
    .section-title {
        color: #bf9861;
        font-weight: bold;
        margin-bottom: 2rem;
    }

    /* Why Choose Section */
    .why-choose {
        background-color: #111;
        color: #fff;
        padding: 60px 0;
    }

    .why-choose ul {
        list-style: none;
        padding: 0;
    }

    .why-choose li::before {
        content: "\\2022";
        color: #bf9861;
        font-weight: bold;
        display: inline-block;
        width: 1em;
        margin-left: -1em;
    }

    /* Catering Packages */
    /* ====== Catering Packages Grid Style ====== */
    #catering-packages .overlay-dark {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.6);
        z-index: 1;
    }

    #catering-packages .container {
        position: relative;
        z-index: 2;
    }

    .text-gold {
        color: #bf9861;
    }

    .package-card {
        background-color: rgba(17, 17, 17, 0.95);
        border: 2px solid #bf9861;
        border-radius: 8px;
        display: flex;
        flex-direction: column;
        justify-content: start;
        height: 100%;
        padding: 1.5rem 1.2rem;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.4);
        transition: none;
        /* 🔒 sin efecto hover */
    }

    .package-card h5,
    .package-card .price,
    .package-card p {
        color: #bf9861;
    }

    .package-card ul {
        padding: 0;
        list-style: none;
        margin-bottom: 1.5rem;
    }

    .package-card ul li {
        color: #dacfbd;
        font-size: 0.95rem;
        padding: 4px 0;
        text-align: center;
    }

    .package-card .btn {
        margin-top: auto;
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

    .package-card .btn:hover {
        background-color: #bf9861;
        color: #1a1a1a;
    }

    /* Responsive */
    @media (max-width: 991px) {
        .package-card {
            height: auto;
        }
    }

    /* ========== BOOK EVENT: Mobile-Friendly ========== */
    #book-event {
        background-color: #1a1a1a;
    }

    #book-event h3 {
        color: #bf9861;
    }

    /* Form container */
    #book-event .bg-black {
        background-color: #111;
        border-radius: 8px;
        padding: 2rem;
    }

    /* Form fields */
    #book-event .form-control,
    #book-event .form-select {
        border-radius: 8px;
        border: none;
        padding: 0.6rem 1rem;
        font-size: 1rem;
    }

    #book-event .form-control:focus,
    #book-event .form-select:focus {
        box-shadow: 0 0 0 0.2rem rgba(191, 152, 97, 0.3);
        border: none;
    }

    /* Button */
    #book-event .btn-gold {
        background-color: #bf9861;
        color: #1a1a1a;
        border: none;
        padding: 0.7rem 1.5rem;
        border-radius: 8px;
        font-size: 0.95rem;
        text-transform: uppercase;
        transition: all 0.3s ease;
    }

    #book-event .btn-gold:hover {
        background-color: #d1aa6e;
        color: #111;
    }

    /* Image styling */
    #book-event img {
        border-radius: 8px;
        width: 100%;
        height: auto;
    }

    /* Responsive tweaks */
    @media (max-width: 767px) {
        #book-event .bg-black {
            padding: 1.5rem 1rem;
        }

        #book-event .btn-gold {
            font-size: 0.9rem;
            padding: 0.65rem;
        }

        #book-event input,
        #book-event select,
        #book-event textarea {
            font-size: 0.95rem;
        }
    }

    /* ====== Modern Accordion Style ====== */
    .modern-accordion {
        max-width: 900px;
        margin: 0 auto;
    }

    #faqs {
        background-color: #0f0f0f;
        /* Cambia este valor por el color que desees */
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

    /* Responsive */
    @media (max-width: 575px) {
        .accordion-title {
            font-size: 0.95rem;
            padding: 0.85rem 1rem;
        }

        .accordion-content {
            font-size: 0.9rem;
        }
    }
</style>

<section class="hero-events-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero-image.png')">
    <div class="overlay"></div>
    <div class="container">
        <h1 class="display-4 fw-bold">Catering</h1>
        <p class="lead">
            Let us bring the flavors of Italy to your home, office, or
            celebration.
        </p>
    </div>
</section>

<section id="catering-introduction" class="py-5 bg-black text-light">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <h2 class="fw-bold text-gold mb-4">
                    IL Forno a Legna Catering Authentic Italian Cuisine Delivered to
                    Your Event
                </h2>
                <p class="mb-3">
                    At IL Forno a Legna, we bring the flavors of Italy directly to
                    your event with our catering services. Whether you're hosting a
                    corporate event, a wedding, or a private party, we offer a variety
                    of menu options to suit every occasion.
                </p>
                <p>
                    From our signature wood-fired pizzas to our freshly prepared
                    pastas, each dish is made with the finest ingredients, ensuring
                    your event is both delicious and memorable. Let us take care of
                    the food, so you can focus on enjoying your celebration!
                </p>

                <div class="d-grid">
                    <style>
                        /* Button */
                        .btn-golden {
                            background-color: #bf9861;
                            color: #1a1a1a;
                            border: none;
                            padding: 0.7rem 1.5rem;
                            border-radius: 8px;
                            font-size: 0.95rem;
                            text-transform: uppercase;
                            transition: all 0.3s ease;
                        }

                        .btn-golden:hover {
                            background-color: #d1aa6e;
                            color: #111;
                        }
                    </style>

                    <a href="#book-event" class="btn btn-golden" role="button">Inquiry Now</a>
                </div>
            </div>

            <div class="col-lg-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/catering 2.png" alt="Catering Il Forno" class="img-fluid rounded shadow" />
            </div>
        </div>
    </div>
</section>

<section id="why-catering-icons" class="py-5">
    <div class="container position-relative">
        <h2 class="text-center fw-bold text-gold mb-5">
            Why Choose IL Forno a Legna Catering?
        </h2>

        <div class="row g-4 justify-content-center">
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="why-card text-center p-4 rounded h-100">
                    <i class="fas fa-fire fa-2x mb-3"></i>
                    <h5 class="fw-bold text-gold">Authentic Flavors</h5>
                    <p class="small">
                        Wood-fired pizza, handmade pastas, and classic recipes from
                        Italy.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="why-card text-center p-4 rounded h-100">
                    <i class="fas fa-cogs fa-2x mb-3"></i>
                    <h5 class="fw-bold text-gold">Custom Menus</h5>
                    <p class="small">
                        Menus tailored to your event, preferences, and dietary needs.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="why-card text-center p-4 rounded h-100">
                    <i class="fas fa-truck-moving fa-2x mb-3"></i>
                    <h5 class="fw-bold text-gold">On-Site Catering</h5>
                    <p class="small">
                        Live pizza-making at your event with our mobile oven trailer.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-6">
                <div class="why-card text-center p-4 rounded h-100">
                    <i class="fas fa-dollar-sign fa-2x mb-3"></i>
                    <h5 class="fw-bold text-gold">Affordable Packages</h5>
                    <p class="small">
                        Budget-friendly options — from small parties to weddings.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-6">
                <div class="why-card text-center p-4 rounded h-100">
                    <i class="fas fa-user-tie fa-2x mb-3"></i>
                    <h5 class="fw-bold text-gold">Experienced Team</h5>
                    <p class="small">
                        Years of trusted catering for events across New Jersey.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="catering-packages" class="py-5" style="
        background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/events-intro.png');
        background-size: cover;
        background-position: center;
        position: relative;
      ">
    <div class="overlay-dark"></div>

    <div class="container position-relative">
        <h2 class="text-center fw-bold text-gold mb-5">Catering Menu</h2>

        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="package-card text-center p-4 flex-fill">
                    <div>
                        <h5 class="fw-bold text-gold mb-0">Appetizers</h5>
                        <p class="text-gold fw-bold mb-3">Half Tray / Full Tray</p>
                    </div>
                    <ul class="list-unstyled text-start mb-4">
                        <li class="d-flex justify-content-between">
                            <span>Calamari</span><span>$80 / $110</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Eggplant Rollatini</span><span>$65 / $95</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Meatballs al Forno</span><span>$85 / $115</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Spinach & Cheese Dumplings</span><span>$70 / $110</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Wood Fire Wings</span><span>$70 / $105</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Mussels al Forno</span><span>$80 / $110</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex">
                <div class="package-card text-center p-4 flex-fill">
                    <div>
                        <h5 class="fw-bold text-gold mb-0">Pastas</h5>
                        <p class="text-gold fw-bold mb-3">Half Tray / Full Tray</p>
                    </div>
                    <ul class="list-unstyled text-start mb-4">
                        <li class="d-flex justify-content-between">
                            <span>Penne alla Vodka</span><span>$50 / $70</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Rigatoni Bolognese</span><span>$65 / $95</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Shrimp Scampi</span><span>$75 / $120</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Lasagna</span><span>$70 / $110</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Pasta Salad</span><span>$50 / $70</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex">
                <div class="package-card text-center p-4 flex-fill">
                    <div>
                        <h5 class="fw-bold text-gold mb-0">Salads</h5>
                        <p class="text-gold fw-bold mb-3">Half Tray / Full Tray</p>
                    </div>
                    <ul class="list-unstyled text-start mb-4">
                        <li class="d-flex justify-content-between">
                            <span>House</span><span>$45 / $55</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Caesar</span><span>$45 / $60</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Greek</span><span>$50 / $60</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Forno Salad</span><span>$50 / $70</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Baby Spinach</span><span>$50 / $65</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Arugula</span><span>$45 / $60</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Caprese</span><span>$70 / $110</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Cobb Salad</span><span>$70 / $100</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex">
                <div class="package-card text-center p-4 flex-fill">
                    <div>
                        <h5 class="fw-bold text-gold mb-0">Entrées</h5>
                        <p class="text-gold fw-bold mb-3">Half Tray / Full Tray</p>
                    </div>
                    <ul class="list-unstyled text-start mb-4">
                        <li class="d-flex justify-content-between">
                            <span>Pollo Parmigiana</span><span>$80 / $120</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Pollo Franchese</span><span>$70 / $105</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Pollo Picatta</span><span>$60 / $110</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Pollo Marsala</span><span>$60 / $110</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Pollo Martini</span><span>$70 / $115</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Sausage, Peppers & Onions</span><span>$65 / $95</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Salmon</span><span>$85 / $150</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Veal & Eggplant Parmigiana</span><span>Upon Request</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex">
                <div class="package-card text-center p-4 flex-fill">
                    <div>
                        <h5 class="fw-bold text-gold mb-0">Sides</h5>
                        <p class="text-gold fw-bold mb-3">Half Tray / Full Tray</p>
                    </div>
                    <ul class="list-unstyled text-start mb-4">
                        <li class="d-flex justify-content-between">
                            <span>Roasted Potatoes</span><span>$45 / $60</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Seasonal Vegetables</span><span>$55 / $75</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Pasta (Half Tray)</span><span>$25</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex">
                <div class="package-card text-center p-4 flex-fill">
                    <div>
                        <h5 class="fw-bold text-gold mb-0">Wood-Fired Pizza</h5>
                        <p class="text-gold fw-bold mb-3">Small (12”) / Large (16”)</p>
                    </div>
                    <ul class="list-unstyled text-start mb-4">
                        <li class="d-flex justify-content-between">
                            <span>Plain</span><span>$12 / $17</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Margherita</span><span>$15 / $21</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Carne</span><span>$15 / $21</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Napoli (Veggie)</span><span>$14 / $19</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Buffalo Chicken</span><span>$14 / $18</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Marinara (No Cheese)</span><span>$12 / $18</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Tommy</span><span>$16 / $23</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Bianca (White)</span><span>$16 / $22</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Tri-Color</span><span>$15 / $21</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="book-event" class="py-5">
    <div class="container">
        <h3 class="text-center fw-bold text-gold mb-4">
            Catering Request Form
        </h3>
        <p class="text-center text-light mb-5">
            Please fill out the form below to request more information or to book
            catering for your event.
        </p>
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog3.png" alt="Catering Event" class="img-fluid rounded shadow" />
            </div>

            <div class="col-lg-6">
                <div class="bg-black p-4 shadow rounded">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Full Name *" required />
                            </div>
                            <div class="col-md-6">
                                <input type="tel" class="form-control" placeholder="Phone Number *" required />
                            </div>
                        </div>

                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email Address *" required />
                        </div>

                        <div class="mb-3">
                            <input type="date" class="form-control" placeholder="Event Date *" required />
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Event Location *" required />
                        </div>

                        <div class="mb-3">
                            <input type="number" class="form-control" placeholder="Number of Guests *" required />
                        </div>

                        <div class="mb-3">
                            <select class="form-select" required>
                                <option value="">Select Catering Package *</option>
                                <option>Classic Italian</option>
                                <option>Premium Italian Feast</option>
                                <option>Ultimate Italian Experience</option>
                                <option>Custom Catering</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <textarea class="form-control" rows="4" placeholder="Special Requests / Notes (Optional)"></textarea>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-gold">
                                Submit Catering Request
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="faqs" class="py-5">
    <div class="container">
        <h2 class="text-center text-gold fw-bold mb-5">
            Frequently Asked Questions
        </h2>

        <div class="modern-accordion">
            <div class="accordion-item">
                <input type="checkbox" id="faq1" hidden />
                <label for="faq1" class="accordion-title">
                    <span>Do you provide catering for events outside of Rahway?</span>
                    <i class="fas fa-chevron-down"></i>
                </label>
                <div class="accordion-content">
                    Yes, we cater events throughout New Jersey, including with our
                    pizza trailer for outdoor parties, weddings, and corporate events.
                </div>
            </div>

            <div class="accordion-item">
                <input type="checkbox" id="faq2" hidden />
                <label for="faq2" class="accordion-title">
                    <span>Can I customize the menu for my event?</span>
                    <i class="fas fa-chevron-down"></i>
                </label>
                <div class="accordion-content">
                    Absolutely! We’ll tailor your menu to match your event and dietary
                    needs including vegan and gluten-free.
                </div>
            </div>

            <div class="accordion-item">
                <input type="checkbox" id="faq3" hidden />
                <label for="faq3" class="accordion-title">
                    <span>How far in advance should I book my catering?</span>
                    <i class="fas fa-chevron-down"></i>
                </label>
                <div class="accordion-content">
                    Ideally 2–4 weeks in advance, but we’ll do our best to accommodate
                    last-minute requests.
                </div>
            </div>

            <div class="accordion-item">
                <input type="checkbox" id="faq4" hidden />
                <label for="faq4" class="accordion-title">
                    <span>Do you offer delivery or on-site catering services?</span>
                    <i class="fas fa-chevron-down"></i>
                </label>
                <div class="accordion-content">
                    We offer both — from simple delivery to full on-site cooking with
                    our mobile oven.
                </div>
            </div>

            <div class="accordion-item">
                <input type="checkbox" id="faq5" hidden />
                <label for="faq5" class="accordion-title">
                    <span>Can I bring my own drinks to my catering event?</span>
                    <i class="fas fa-chevron-down"></i>
                </label>
                <div class="accordion-content">
                    Yes! We allow BYOB or can provide full bar service on request.
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Scripts en línea para el scroll y el carrusel (Swiper)
?>
<script>
    // Script para el header
    document.addEventListener("scroll", function() {
        const header = document.getElementById("main-header");
        if (window.scrollY > 50) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });

    // Script para Swiper (aunque no hay un elemento .cateringSwiper en el HTML)
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper(".cateringSwiper", {
            loop: true,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 3,
                },
            },
        });
    });
</script>

<?php
get_footer();
?>