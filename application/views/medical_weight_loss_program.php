<section class="hero-banner-section" style="background-image: url('assets/images/banner-new.jpg'); padding: 10px 0 !important;">
    <div class="overlay-dark"></div>
    <div class="container">
        <div class="hero-content text-center" style="padding-top: 0; padding-bottom: 0;">
            <h1 class="page-title" style="margin-top: 0; margin-bottom: 5px;">Medical Weight Loss Program

            </h1>

            <ul class="modern-breadcrumb-list" style="margin-top: 0; margin-bottom: 0;">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li>Medical Weight Loss Program

                </li>
            </ul>
        </div>
    </div>
</section>


<section class="features-conditions-full-width" style="padding: 0 !important; margin: 0 !important;">
    <div class="container">
        <div class="row">
    
            <div class="col-lg-8">
<div class="features-box p-4 rounded" style="background: #fdf3ef;">
                    <h2 class="section-title fw-bold mb-3 color-primary">
                        India’s Leading Centre for
                        <span class="color-accent">Medically Supervised GLP-1–Based Weight Loss</span>
                    </h2>

                    <h4 class="subtitle mb-4">
                        <i class="fas fa-trophy color-accent me-2"></i>
                        India's Best Medical Weight Loss Program
                    </h4>

                    <div class="row">
                        <?php
                        $features = [
                            ['title' => 'GLP-1–Based Therapies', 'icon' => 'fas fa-pills'],
                            ['title' => 'Doctor-Monitored Approach', 'icon' => 'fas fa-stethoscope'],
                            ['title' => 'Whole-Body Strategy', 'icon' => 'fas fa-heartbeat'],
                            ['title' => 'No Disruption to Daily Life', 'icon' => 'fas fa-running'],
                            ['title' => 'USFDA Approved', 'icon' => 'fas fa-certificate'],
                            ['title' => 'Personalized Care', 'icon' => 'fas fa-user-check'],
                        ];
                        foreach ($features as $feature):
                            ?>
                            <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                                <div class="feature-card-small shadow-sm text-center p-3 rounded"
                                    style="background:#fff;">
                                    <i class="<?php echo $feature['icon']; ?> fa-2x color-primary mb-2"></i>
                                    <h6 class="fw-bold"><?php echo $feature['title']; ?></h6>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="conditions-box p-4 rounded"
                    style="background: rgba(253, 243, 239, 0.8); color:#fff; height:100%;">

                    <h3 class="fw-bold mb-3" style="font-size:22px;">
                        Conditions That Improve with <br>
                        <span class="color-primary">Medically Supervised Weight Loss</span>
                    </h3>

                    <p class="lead" style="color:#b0bec5; font-size:14px;">
                        <i class="fas fa-chart-line color-accent me-2"></i>
                        GLP-1 therapy helps reverse major metabolic conditions.
                    </p>

                    <div class="row mt-3">
                        <?php
                        $conditions = [
                            ['name' => 'Joint Problems', 'fa_icon' => 'fas fa-bone'],
                            ['name' => 'Asthma', 'fa_icon' => 'fas fa-lungs'],
                            ['name' => 'GERD', 'fa_icon' => 'fas fa-stomach'],
                            ['name' => 'Heart Disease', 'fa_icon' => 'fas fa-heart'],
                            ['name' => 'High BP', 'fa_icon' => 'fas fa-tachometer-alt'],
                            ['name' => 'High Cholesterol', 'fa_icon' => 'fas fa-cheese'],
                            ['name' => 'Sleep Apnea', 'fa_icon' => 'fas fa-bed'],
                            ['name' => 'Type 2 Diabetes', 'fa_icon' => 'fas fa-tint'],
                        ];
                        foreach ($conditions as $condition):
                            ?>
                            <div class="col-6 mb-3">
                                <div class="text-center">
                                    <i class="<?php echo $condition['fa_icon']; ?> fa-2x color-accent"></i>
                                    <p class="mt-2 mb-0 fw-bold" style="font-size:14px;">
                                        <?php echo $condition['name']; ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="main-page-content" style="padding: 0 !important; margin: 0 !important;">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">

                <div class="medical-weight-hero mb-5">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h1 class="hero-title fw-bold">
                                <span class="color-accent">Transform Your Life</span> with Our
                                <span class="color-primary">Medical Weight Loss Program</span>
                            </h1>

                            <h3 class="hero-subtitle lead mt-4">
                                <span class="d-block mb-2">
                                    <i class="fas fa-syringe color-accent me-2"></i>
                                    <strong>GLP-1–based therapy</strong>
                                </span>
                                <span class="d-block">
                                    <i class="fas fa-user-md color-primary me-2"></i>
                                    <strong>Medically Supervised Approach</strong>
                                </span>
                            </h3>

                            <a href="#" class="btn btn-lg btn-warning hero-btn mt-4 shadow-sm">
                                <i class="fas fa-arrow-circle-right me-2"></i> Know More
                            </a>
                        </div>

                        <div class="col-lg-12 mt-4">
                            <div class="shadow-lg rounded-3 overflow-hidden">
                                <iframe class="hero-video w-100" style="aspect-ratio: 16/9;"
                                    src="https://www.youtube.com/embed/qrHFshouyoA"
                                    title="Medical Weight Loss Program Video" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <section style="margin-top: 0 !important; margin-bottom: 0 !important;">
                    <div class="row align-items-center">
                        <div class="col-lg-5 text-center mb-4 mb-lg-0">
                            <img src="<?php echo base_url('assets/images/mohitsir-mohak-.jpeg'); ?>"
                                class="img-fluid shadow-lg"
                                style="width:300px; border-radius:50%; border:8px solid #aaa;">
<h3 class="mt-4 fw-bold color-primary" style="font-size: 1.5rem;">Dr. Mohit Bhandari</h3>
<a href="#" class="btn btn-lg btn-warning hero-btn mt-4 shadow-sm">
                                <i class="fas fa-arrow-circle-right me-2"></i> Know More
                            </a>
                        </div>

                        <div class="col-lg-7">
                            <h2 class="display-6 fw-bold">
                                Asia Pacific’s Foremost Authority in
                                <span class="color-primary">Weight Loss & Metabolic Surgery</span>
                            </h2>
                            <p class="lead mt-3 mb-4">
                                <i class="fas fa-graduation-cap color-accent me-2"></i>
                                Leading the way in safe and effective bariatric and metabolic care.
                            </p>
                            <ul style="line-height:2.2; list-style:none; padding-left:0;">
                                <li><i class="fas fa-medal color-primary me-2"></i> India’s most awarded bariatric
                                    surgeon (21,000+ surgeries)</li>
                                <li><i class="fas fa-clipboard-check color-primary me-2"></i> Expert in diabetes, PCOD,
                                    fatty liver, sleep apnea</li>
                                <li><i class="fas fa-robot color-primary me-2"></i> Pioneer in robotic surgery &
                                    swallowable gastric balloon</li>
                                <li><i class="fas fa-prescription color-primary me-2"></i> GLP-1–based medical weight
                                    loss therapies</li>
                            </ul>
                        </div>
                    </div>
                </section>


                <section style="margin-top: 0 !important; margin-bottom: 0 !important;">
                    <div class="text-center">

                        <h2 class="display-4 fw-bold color-primary mb-5">
                            <i class="fas fa-handshake color-accent me-2"></i>
                            Why Patients Trust Mohak Bariatrics
                        </h2>

                        <div class="row justify-content-center">

                            <?php
                            $stats = [
                                ['icon' => 'fas fa-award', 'value' => '100+', 'text' => 'Clinical Awards'],
                                ['icon' => 'fas fa-hospital', 'value' => '30,000+', 'text' => 'Surgeries Performed'],
                                ['icon' => 'fas fa-star', 'value' => '#1', 'text' => 'Ranked by Times of India'],
                                ['icon' => 'fas fa-check-circle', 'value' => 'Comprehensive Center', 'text' => 'for Weight Loss'],
                            ];
                            foreach ($stats as $stat):
                                ?>
                                <div class="col-lg-6 col-md-6 mb-4">
                                    <div class="stat-box shadow-sm p-4 text-center rounded">
                                        <i class="<?php echo $stat['icon']; ?> fa-3x mb-3"></i>
                                        <h1><?php echo $stat['value']; ?></h1>
                                        <p class="h5"><?php echo $stat['text']; ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </section>
                
            </div>
            
            <div class="col-lg-4">
                <div class="sidebar-card shadow-sm mb-4">
                    <h3 class="card-title color-primary">
                        <i class="far fa-clock me-2"></i> Clinic Hours
                    </h3>
                    <ul class="open-hours-list list-unstyled m-0">
                        <li><span>Monday - Saturday:</span> <strong>08:00 AM - 10:00 AM</strong></li>
                        <li><span>Sunday:</span> <strong class="text-danger">Closed</strong></li>
                    </ul>
                </div>

                <div class="sidebar-card contact-card shadow-sm mb-4">
                    <h3 class="card-title color-primary">
                        <i class="fas fa-headset me-2"></i> Get In Touch
                    </h3>
                    <div class="consult-info">
                        <div class="consult-item d-flex align-items-center mb-3">
                            <i class="fas fa-phone fa-2x color-accent me-3"></i>
                            <div>
                                <span class="label text-muted d-block">Call Us 24/7</span>
                                <a href="tel:+917869916282" class="fw-bold text-dark">+91 7869916282</a>
                            </div>
                        </div>
                        <div class="consult-item d-flex align-items-center mb-4">
                            <i class="fas fa-envelope fa-2x color-accent me-3"></i>
                            <div>
                                <span class="label text-muted d-block">Email Us</span>
                                <a href="mailto:info@mohakbariatrics.com"
                                    class="fw-bold text-dark">info@mohakbariatrics.com</a>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="btn btn-warning w-100 fw-bold">
                        Book an Appointment <i class="fas fa-chevron-right ms-2"></i>
                    </a>
                </div>

                <div class="sidebar-card map-card shadow-sm mb-4">
                    <h3 class="card-title color-primary">
                        <i class="fas fa-map-marker-alt me-2"></i> Our Location
                    </h3>
                    <iframe height="250" src="https://maps.google.com/maps?q=Indore%20India&output=embed"
                        style="width: 100%; border:0;" allowfullscreen loading="lazy" class="rounded-3"></iframe>
                </div>

                <div class="sidebar-card social-card shadow-sm mb-4">
                    <h3 class="card-title color-primary">
                        <i class="fas fa-share-alt me-2"></i> Follow Us
                    </h3>
                    <ul class="social-links-list d-flex justify-content-around p-0 m-0">
                        <li><a href="https://www.facebook.com/IndiaObesity" target="_blank"><i
                                        class="fab fa-facebook-f fa-2x"></i></a></li>
                        <li><a href="https://x.com/mohakbariatrics" target="_blank"><i
                                        class="fab fa-twitter fa-2x"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/mohakbariatrics/" target="_blank"><i
                                        class="fab fa-instagram fa-2x"></i></a></li>
                        <li><a href="https://www.youtube.com/c/indiaobesity" target="_blank"><i
                                        class="fab fa-youtube fa-2x"></i></a></li>
                    </ul>
                </div>
            </div>
            </div>
    </div>
</section>