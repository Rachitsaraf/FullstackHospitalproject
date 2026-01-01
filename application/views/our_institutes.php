<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="hero-banner-section institute-hero"
    style="background-image: url('<?php echo base_url("assets/images/banner-new.jpg"); ?>');">
    <div class="overlay-dark"></div>
    <div class="container">
        <div class="hero-content text-center">
            <h1 class="page-title">Our Institutes</h1>

            <ul class="modern-breadcrumb-list">
                <li><a href="<?php echo base_url(); ?>">Mohak hi-tech Speciality Hospital, Indore</a></li>
                <li>Our Institutes</li>
            </ul>
        </div>
    </div>
</section>

<section class="main-content-area-institutes py-5">
    <div class="container">

        <h2 class="section-heading text-center">
            Our Associated Institutes
        </h2>
        <p class="section-lead-text text-center">Collaborating with leading institutions to advance healthcare and
            education.</p>

        <div class="row institutes-grid-container">

            <div class="col-lg-12">
                <div class="row">

                    <?php
                    $institutes = [
                        ['logo' => 'logo11.jpg', 'name' => 'Sri Aurobindo Institute of Management & Science'],
                        ['logo' => 'logo12.jpg', 'name' => 'Sri Aurobindo College of Dentistry'],
                        ['logo' => 'logo13.jpg', 'name' => 'Indore Institute of Medical Science'],
                        ['logo' => 'logo14.jpg', 'name' => 'Bhandari Hospital & Research Center'],
                        ['logo' => 'logo15.jpg', 'name' => 'Mohak Hi-Tech Speciality Hospital'],
                        ['logo' => 'logo16.jpg', 'name' => 'Sri Aurobindo Medical College & Hospital'],
                        ['logo' => 'logo17.jpg', 'name' => 'Bhandari Group of Hospitals & Institutions'],
                        ['logo' => 'logo18.jpg', 'name' => 'BHRC School of Nursing']
                    ];

                    foreach ($institutes as $institute) { ?>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="institute-card-modern">
                                <img src="<?php echo base_url('assets/images/' . $institute['logo']); ?>"
                                    alt="<?php echo $institute['name']; ?>" class="institute-logo-rect">
                                <span class="institute-name"><?php echo $institute['name']; ?></span>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>

        </div>

        <hr class="mt-5 mb-5 institute-divider">

        <div class="row mt-5">

            <div class="col-lg-8">
                <h3 class="section-sub-heading">
                    The Journey: Our Milestones
                </h3>

                <div class="timeline-modern">

                    <div class="timeline-item-modern">
                        <span class="timeline-year-modern">1980</span>
                        <p class="timeline-text">A dispensary / clinic at Pardeshipura, Indore</p>
                    </div>

                    <div class="timeline-item-modern">
                        <span class="timeline-year-modern">1986</span>
                        <p class="timeline-text">30 Beded Bhandari Hospital at Pardeshipura, Indore</p>
                    </div>

                    <div class="timeline-item-modern">
                        <span class="timeline-year-modern">1993</span>
                        <p class="timeline-text">100 Beded Bhandari Hospital & Research Center, Indore</p>
                    </div>

                    <div class="timeline-item-modern">
                        <span class="timeline-year-modern">1995</span>
                        <p class="timeline-text">Health Wizards India</p>
                    </div>

                    <div class="timeline-item-modern">
                        <span class="timeline-year-modern">1997</span>
                        <p class="timeline-text">Indore Institute of Paramedical Science</p>
                    </div>

                    <div class="timeline-item-modern">
                        <span class="timeline-year-modern">1998</span>
                        <p class="timeline-text">Indore Institute of Medical Sciences</p>
                    </div>

                    <div class="timeline-item-modern">
                        <span class="timeline-year-modern">1999</span>
                        <p class="timeline-text">Mohit Blood Bank Services with Component Separation facility</p>
                    </div>

                    <div class="timeline-item-modern">
                        <span class="timeline-year-modern">2000</span>
                        <p class="timeline-text">Super Speciality Clinics in all Superspecialities</p>
                    </div>

                    <div class="timeline-item-modern">
                        <span class="timeline-year-modern">2001</span>
                        <p class="timeline-text">Open Heart Unit</p>
                    </div>

                    <div class="timeline-item-modern">
                        <span class="timeline-year-modern">2002</span>
                        <p class="timeline-text">BHRC School of Nursing</p>
                    </div>

                    <div class="timeline-item-modern">
                        <span class="timeline-year-modern">2003</span>
                        <p class="timeline-text">Sri Aurobindo Institute of Medical Sciences, SAIMS Hospital (400 beded)
                        </p>
                    </div>

                    <div class="timeline-item-modern">
                        <span class="timeline-year-modern">2004</span>
                        <p class="timeline-text">Sri Aurobindo Medical College</p>
                    </div>

                    <div class="timeline-item-modern">
                        <span class="timeline-year-modern">2005</span>
                        <p class="timeline-text">Sri Aurobindo College of Nursing</p>
                    </div>

                    <div class="timeline-item-modern">
                        <span class="timeline-year-modern">2006</span>
                        <p class="timeline-text">Sri Aurobindo College of Dentistry</p>
                    </div>

                    <div class="timeline-item-modern">
                        <span class="timeline-year-modern">2009</span>
                        <p class="timeline-text">Sri Aurobindo Institute of Management & Science</p>
                    </div>

                    <div class="timeline-item-modern">
                        <span class="timeline-year-modern">2009</span>
                        <p class="timeline-text">Sri Aurobindo Institute Pharmacy & Technology</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-12">

                <div class="sidebar-card">
                    <h3 class="card-title"><i class="far fa-clock"></i> Clinic Hours</h3>
                    <ul class="open-hours-list">
                        <li><span>Monday - Saturday:</span> **08:00 AM - 10:00 AM**</li>
                        <li><span>Sunday:</span> Closed</li>
                    </ul>
                </div>

                <div class="sidebar-card contact-card">
                    <h3 class="card-title"><i class="fas fa-headset"></i> Get In Touch</h3>
                    <div class="consult-info">
                        <div class="consult-item">
                            <i class="fas fa-phone contact-icon"></i>
                            <div>
                                <span class="label">Call Us 24/7</span>
                                <a href="tel:+917869916282" class="value">+91 7869916282</a>
                            </div>
                        </div>
                        <div class="consult-item">
                            <i class="fas fa-envelope contact-icon"></i>
                            <div>
                                <span class="label">Email Us</span>
                                <a href="mailto:info@mohakbariatrics.com" class="value">info@mohakbariatrics.com</a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="primary-button-lg">
                        Book an Appointment <i class="fas fa-chevron-right ml-2"></i>
                    </a>
                </div>

                <div class="sidebar-card map-card">
                    <h3 class="card-title"><i class="fas fa-map-marker-alt"></i> Our Location</h3>
                    <iframe height="250" src="https://maps.google.com/maps?q=Indore%20India&output=embed"
                        style="width: 100%; border:0;" loading="lazy"></iframe>
                </div>

                <div class="sidebar-card social-card">
                    <h3 class="card-title"><i class="fas fa-share-alt"></i> Follow Us</h3>
                    <ul class="social-links-list">
                        <li><a href="https://www.facebook.com/IndiaObesity" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://x.com/mohakbariatrics" target="_blank"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/mohakbariatrics/" target="_blank"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.youtube.com/c/indiaobesity" target="_blank"><i
                                    class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>