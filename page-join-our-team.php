<?php

/**
 * Template Name: Join Our Team Page
 *
 * @package IL_Forno_a_Legna
 */

get_header();
?>

<style>
    /* hero sitlo */
    .hero-join-section {
        background-size: cover;
        background-position: center;
        height: 50vh;
        position: relative;
    }

    .hero-join-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        /* efecto oscuro */
        z-index: 1;
    }

    .hero-join-section .container {
        position: relative;
        z-index: 2;
    }

    /* Seccion trabajo */
    .why-work-section {
        background-color: #1a1a1a;
        color: #1a1a1a;
    }

    .why-work-section h2 {
        color: #bf9861;
        font-size: 2.3rem;
    }

    .custom-bg {
        background-color: #dacfbd;
    }

    .why-work-section i {
        color: #1a1a1a;
        /* cambia a oscuro para contrastar con el fondo dorado */
    }

    .why-work-section h5 {
        color: #1a1a1a;
        font-size: 1.1rem;
        margin-bottom: 0.5rem;
    }

    .why-work-section p {
        color: #1a1a1a;
        /* mejora legibilidad sobre fondo dorado */
        font-size: 0.95rem;
        line-height: 1.6;
    }

    /* seccion aplicar */
    .how-to-apply-modern .info-box {
        background-color: #dacfbd;
        color: #1a1a1a;
        padding: 2rem;
        border-radius: 15px;
        box-shadow: 0 0.1rem 0.1rem rgba(0, 0, 0, 0.15);
    }

    .col-lg-6 h2 {
        color: #bf9861;
    }

    .col-lg-6 p {
        color: #dacfbd;
    }

    .how-to-apply-modern .info-box h2 {
        font-size: 1.8rem;
        font-weight: 700;
    }

    .how-to-apply-modern .info-box p {
        font-size: 1rem;
        margin-bottom: 1.2rem;
    }

    .how-to-apply-modern .info-box a.btn {
        background-color: #1a1a1a;
        color: #fff;
        font-weight: 600;
        border-radius: 8px;
    }

    .how-to-apply-modern .info-box a.btn:hover {
        background-color: #7f1100;
        color: #fff;
    }

    .with-bg-overlay {
        position: relative;
        background-image: url("../img/bg-services.png");
        /* Cambia por tu imagen */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        z-index: 1;
    }

    .with-bg-overlay::before {
        content: "";
        position: absolute;
        inset: 0;
        background-color: #85808049;
        /* efecto oscuro encima de la imagen */
        z-index: 2;
    }

    .with-bg-overlay .container {
        position: relative;
        z-index: 3;
    }

    .btn-golden {
        background-color: #bf9861;
        color: #1a1a1a;
        border: none;
        padding: 0.6rem 1.2rem;
        transition: background-color 0.3s ease;
    }

    .btn-golden:hover {
        background-color: #a87f47;
        color: #ffffff;
    }

    /* formulario de aplicacion */
    .application-form-section {
        background-color: #141414;
        padding-top: 4rem;
        padding-bottom: 4rem;
    }

    .application-form-section h2 {
        font-size: 2rem;
        color: #ffffff;
    }

    .application-form-section .form-wrapper {
        max-width: 100%;
    }

    .application-form-section .form-control {
        border-radius: 0.375rem;
        border: 1px solid #ccc;
        padding: 0.75rem;
        font-size: 0.95rem;
    }

    .application-form-section .btn-golden {
        background-color: #bf9861;
        color: #1a1a1a;
        border: none;
        padding: 0.6rem 1.4rem;
        transition: background-color 0.3s ease;
    }

    .application-form-section .btn-golden:hover {
        background-color: #a87f47;
        color: #ffffff;
    }

    .btn-gold {
        background-color: #bf9861;
        color: #1a1a1a;
        font-weight: 600;
        border: none;
    }

    .btn-gold:hover {
        background-color: #a87f3d;
        color: #fff;
    }
</style>

<section class="hero-join-section d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero-image.png')">
    <div class="container text-center text-white">
        <h1 class="display-4 fw-bold">Join Our Team</h1>
        <p class="lead">
            At IL Forno a Legna, we’re not just passionate about our food – we’re
            passionate about creating a team that feels like family.
        </p>
    </div>
</section>

<section class="why-work-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Why Work at IL Forno a Legna?</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 text-center">
                <div class="p-4 custom-bg rounded shadow-sm h-100">
                    <div class="mb-3">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                    <h5 class="fw-bold">Great Team Culture</h5>
                    <p class="small">
                        We foster a collaborative, team-first atmosphere where everyone
                        is valued and supported.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 text-center">
                <div class="p-4 custom-bg rounded shadow-sm h-100">
                    <div class="mb-3">
                        <i class="fas fa-dollar-sign fa-2x"></i>
                    </div>
                    <h5 class="fw-bold">Competitive Pay</h5>
                    <p class="small">
                        Earn great wages and tips that reflect your dedication and hard
                        work.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 text-center">
                <div class="p-4 custom-bg rounded shadow-sm h-100">
                    <div class="mb-3">
                        <i class="fas fa-chart-line fa-2x"></i>
                    </div>
                    <h5 class="fw-bold">Training & Growth</h5>
                    <p class="small">
                        Develop your skills with hands-on training and grow with a team
                        that invests in your future.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 text-center">
                <div class="p-4 custom-bg rounded shadow-sm h-100">
                    <div class="mb-3">
                        <i class="fas fa-gift fa-2x"></i>
                    </div>
                    <h5 class="fw-bold">Employee Perks</h5>
                    <p class="small">
                        Enjoy staff meals, flexible schedules, and being part of a
                        lively, passionate environment.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="how-to-apply-modern dark-style-section with-bg-overlay">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aplicar.png" alt="Il Forno Restaurant Interior" class="img-fluid rounded shadow" />
            </div>

            <div class="col-lg-6">
                <div class="bg-dark p-5 rounded-2 shadow-sm">
                    <h2 class="fw-bold mb-3">How to Apply</h2>
                    <p class="mb-4">
                        Ready to be part of our team? We’d love to hear from you! Fill
                        out the contact form below or send your resume to
                        <strong>fornoalegna@yahoo.com</strong>. We’re excited to see how
                        you can contribute to the Il Forno a Legna family!
                    </p>
                    <a href="#application-form" class="btn btn-golden fw-bold">Submit Application</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="application-form-section py-5" id="application-form">
    <div class="container">
        <div class="row justify-content-center align-items-center g-5">
            <div class="col-lg-6 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/horno-join.png" alt="Join Our Team" class="img-fluid rounded shadow" />
            </div>

            <div class="col-lg-6">
                <div class="form-wrapper bg-dark text-white p-4 rounded shadow-sm">
                    <h2 class="fw-bold mb-4">Join the IL Forno Family</h2>
                    <form>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Full Name *" required />
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Phone Number" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email Address *" required />
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Position Applying For *" required />
                        </div>
                        <div class="mb-3">
                            <input type="file" class="form-control" required />
                        </div>
                        <div class="mb-4">
                            <textarea class="form-control" rows="4" placeholder="Cover Letter or Message (Optional)"></textarea>
                        </div>
                        <button type="submit" class="btn btn-golden">
                            Submit Application
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>