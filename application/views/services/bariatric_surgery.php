<section class="hero-banner-section" style="background-image: url('<?php echo base_url("assets/images/banner-new.jpg"); ?>');">
    <div class="banner-overlay"></div>
    <div class="container position-relative z-10 py-5">
        <div class="inner-hero-content text-center text-white">
            <h1 class="display-5 fw-bold mb-2">Advanced Bariatric Surgery
</h1>
            <p class="lead fw-light mb-4">Body Contouring: Completing Your Transformation Journey.</p>

            <ul class="breadcrumb-list justify-content-center mt-3">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="separator"><i class="fas fa-chevron-right"></i></li>
                <li>Services</li>
                <li class="separator"><i class="fas fa-chevron-right"></i></li>
                <li>Advanced Bariatric Surgery</li>
            </ul>
        </div>
    </div>
</section>


<div class="page-main-wrapper py-5 py-lg-7">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-md-12 order-lg-1 order-2">

                <article>
<h2 class="fw-bold text-primary mb-4 bariatric-title">
    Comprehensive Bariatric Care
</h2>
                    <div class="card p-4 shadow-sm mb-5 bg-light-blue border-0">
                        <p class="lead mb-3">
                            Bariatric surgery is an effective procedure that offers profound weight loss and often helps
                            treat many diseases related to obesity, including diabetes, high blood pressure, heart
                            diseases, high cholesterol, and sleep apnea.
                        </p>
                        <p>
                            It is primarily recommended for patients with a Body Mass Index (BMI) of 40 and above,
                            or a BMI of 35 with co-existing medical conditions (co-morbidities).
                        </p>
                    </div>

                    <h3 class="section-subtitle mt-5 mb-3 text-secondary">
                        <i class="fas fa-chart-bar me-2"></i> BMI Classification
                    </h3>
                    <div class="bmi-table-wrapper mb-5 p-3 rounded shadow-sm">
                        <div class="row text-center fw-bold text-white bg-primary py-2 rounded-top">
                            <div class="col">BMI Range</div>
                            <div class="col">Obesity Class</div>
                            <div class="col">Risk Level</div>
                        </div>
                        <div class="row text-center py-2 border-bottom">
                            <div class="col">30–34.9</div>
                            <div class="col">Class I</div>
                            <div class="col text-success">Low-risk</div>
                        </div>
                        <div class="row text-center py-2 border-bottom">
                            <div class="col">35–39.9</div>
                            <div class="col">Class II</div>
                            <div class="col text-warning">Moderate-risk</div>
                        </div>
                        <div class="row text-center py-2">
                            <div class="col">40+</div>
                            <div class="col">Class III</div>
                            <div class="col text-danger fw-bold">High-risk</div>
                        </div>
                    </div>


                    <p class="section-text mb-5">
                        Bariatric surgery is a powerful tool, helping patients lose 30–50% of excess weight in the
                        first 6 months and up to 77% after 12 months. This is achieved by expertly reducing stomach
                        capacity and/or altering the digestive pathway for long-term metabolic improvement.
                    </p>

                    <section class="procedure-section mb-5">
                        <h3 class="section-subtitle mt-5 mb-4 text-secondary">
                            <i class="fas fa-microscope me-2"></i> Minimally Invasive Laparoscopic Procedures
                        </h3>

                        <div class="row">
                            <?php 
                            $laparo = [
                                ["Roux-En-Y Gastric Bypass", "Creation of a small stomach pouch and rerouting the intestine for effective weight loss.", "fa-route"],
                                ["Sleeve Gastrectomy", "Significantly reduces stomach size to induce weight loss and hormonal change.", "fa-stomach"],
                                ["Mini-Gastric Bypass (OAGB)", "A highly effective, simplified bypass procedure with excellent long-term results.", "fa-arrow-down-short-wide"],
                                ["Single Anastomosis Duodeno-Ileal Bypass (SADI-S)", "Highly powerful procedure requiring only one surgical connection.", "fa-link"],
                                ["Banded Gastric Bypass", "Bypass combined with laparoscopic band support for controlled results.", "fa-band-aid"],
                                ["Banded Sleeve", "Sleeve gastrectomy with a supporting ring to reduce long-term weight regain.", "fa-ring"],
                                ["Adjustable Gastric Banding", "A non-invasive, reversible, and adjustable weight loss surgery option.", "fa-gauge-simple"],
                                ["Complex Bariatric Revision", "Expert correction of previous bariatric surgeries that may have failed or had complications.", "fa-undo"],
                                ["Ileal Interposition (Metabolic)", "A specialized metabolic surgery highly effective for severe, hard-to-control diabetes.", "fa-lungs"],
                                ["Biliopancreatic Diversion / Duodenal Switch", "Reserved for very high BMI patients, offering the highest potential for weight loss.", "fa-scale-balanced"],
                            ];

                            foreach (array_slice($laparo, 0, 6) as $item): // Show top 6 prominently
                                $icon = $item[2] ?? 'fa-check-circle';
                            ?>
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="surgery-card shadow-sm p-4 rounded border-left-primary h-100">
                                    <h4 class="fw-bold text-dark-blue mb-2"><i class="fas <?= $icon; ?> me-2"></i>
                                        <?= $item[0]; ?>
                                    </h4>
                                    <p class="text-muted small mb-0">
                                        <?= $item[1]; ?>
                                    </p>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="text-center mt-3">
                            <button class="btn btn-outline-primary btn-sm" type="button" data-bs-toggle="collapse"
                                data-bs-target="#moreProcedures" aria-expanded="false" aria-controls="moreProcedures">
                                View More Procedures <i class="fas fa-caret-down ms-1"></i>
                            </button>
                        </div>
                        <div class="collapse mt-3" id="moreProcedures">
                            <div class="row">
                                <?php foreach (array_slice($laparo, 6) as $item): 
                                    $icon = $item[2] ?? 'fa-check-circle';
                                ?>
                                <div class="col-lg-6 col-md-6 mb-4">
                                    <div class="surgery-card shadow-sm p-4 rounded border-left-primary h-100">
                                        <h4 class="fw-bold text-dark-blue mb-2"><i class="fas <?= $icon; ?> me-2"></i>
                                            <?= $item[0]; ?>
                                        </h4>
                                        <p class="text-muted small mb-0">
                                            <?= $item[1]; ?>
                                        </p>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </section>


                    <section class="procedure-section mb-5 bg-light p-4 rounded">
                        <h3 class="section-subtitle mt-2 mb-4 text-secondary">
                            <i class="fas fa-magic me-2"></i> Single Incision Laparoscopic Surgery (SILS) - The
                            Scarless Approach
                        </h3>

                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="surgery-card small text-center p-3 h-100 border-0 bg-white shadow-sm">
                                    <i class="fas fa-scar me-2 display-5 text-success mb-2"></i>
                                    <h4 class="fw-bold mb-1">Scarless Gastric Sleeve</h4>
                                    <p class="text-muted small mb-0">A no-visible-scar alternative for sleeve surgery,
                                        enhancing post-operative body image.</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="surgery-card small text-center p-3 h-100 border-0 bg-white shadow-sm">
                                    <i class="fas fa-scar me-2 display-5 text-success mb-2"></i>
                                    <h4 class="fw-bold mb-1">Scarless Gastric Bypass</h4>
                                    <p class="text-muted small mb-0">Advanced bypass technique utilizing a single,
                                        hidden incision.</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="surgery-card small text-center p-3 h-100 border-0 bg-white shadow-sm">
                                    <i class="fas fa-scar me-2 display-5 text-success mb-2"></i>
                                    <h4 class="fw-bold mb-1">Scarless Mini-Gastric Bypass</h4>
                                    <p class="text-muted small mb-0">Achieving excellent clinical outcomes with minimal
                                        invasion and superior aesthetics.</p>
                                </div>
                            </div>
                        </div>
                    </section>


                    <section class="procedure-section mb-5">
                        <h3 class="section-subtitle mt-5 mb-4 text-secondary">
                            <i class="fas fa-robot me-2"></i> Robotic Bariatric Surgery - Precision & Control
                        </h3>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="surgery-card p-4 rounded border-left-secondary h-100 bg-white shadow-sm">
                                    <h4 class="fw-bold text-dark-blue mb-2"><i class="fas fa-cogs me-2"></i> Robotic
                                        Sleeve & Bypass</h4>
                                    <p class="text-muted small mb-0">Performed with unparalleled robotic precision,
                                        offering enhanced dexterity and visualization for the surgeon.</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="surgery-card p-4 rounded border-left-secondary h-100 bg-white shadow-sm">
                                    <h4 class="fw-bold text-dark-blue mb-2"><i class="fas fa-wrench me-2"></i> Robotic
                                        Mini Gastric Bypass & Revision</h4>
                                    <p class="text-muted small mb-0">Utilizing robotic technology for complex procedures
                                        and accurate revision surgeries, minimizing patient trauma.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </article>

            </div>

            <div class="col-lg-4 col-md-12 order-lg-2 order-1 mb-5 mb-lg-0">
                <div class="right-section2 sticky-top pt-2">

                    <!-- Open Hours -->
                    <div class="sidebar-card">
                        <h3 class="card-title"><i class="far fa-clock"></i> Clinic Hours</h3>
                        <ul class="open-hours-list">
                            <li><span>Monday - Saturday:</span> 08:00 AM - 10:00 AM</li>
                            <li><span>Sunday:</span> Closed</li>
                        </ul>
                    </div>


                    <!-- Consult -->
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

                    <!-- Location -->

                    <div class="sidebar-card map-card">
                        <h3 class="card-title"><i class="fas fa-map-marker-alt"></i> Our Location</h3>
                        <iframe height="250" src="https://maps.google.com/maps?q=Indore%20India&output=embed"
                            style="width: 100%; border:0;" loading="lazy"></iframe>
                    </div>

                    <!-- Social -->
                    <div class="sidebar-card social-card">
                        <h3 class="card-title"><i class="fas fa-share-alt"></i> Follow Us</h3>
                        <ul class="social-links-list">
                            <li><a href="https://www.facebook.com/IndiaObesity" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://x.com/mohakbariatrics" target="_blank"><i
                                        class="fab fa-twitter"></i></a>
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
    </div>
</div>