<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!-- HERO SECTION -->
<section class="hero-banner-section" style="background-image: url('assets/images/banner-new.jpg');">
    <div class="overlay-dark"></div>
    <div class="container">
        <div class="hero-content text-center">
            <h1 class="page-title">About Us</h1>

            <ul class="modern-breadcrumb-list">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>


<!-- ABOUT PAGE SECTION -->
<section class="about-page-section py-5">
    <div class="container">

        <!-- GRID SECTION (IMAGE LEFT + SHORT TEXT RIGHT) -->
        <div class="row align-items-center">

            <!-- LEFT IMAGE -->
            <div class="col-lg-6 col-md-12 mb-4">
                <img src="<?= base_url('assets/images/about-1.jpg'); ?>" class="img-fluid rounded" alt="About Mohak">
            </div>

            <!-- RIGHT SHORT TEXT -->
            <div class="col-lg-6 col-md-12">
                <h4 class="section-title mb-3">WHAT WE DO</h4>

                <p>
                    Mohak hi-tech Speciality Hospital is India's leading and most advanced bariatric & minimal
                    access surgery center, ranked No.1 for 7 consecutive years.
                </p>

                <p>
                    We specialize in obesity, diabetes, and laparoscopic/robotic surgeries with
                    world-class infrastructure and highly experienced surgeons.
                </p>

                <p>
                    With 21000+ bariatric surgeries performed and 6000+ type-2 diabetic patients benefitted,
                    Mohak remains one of the top centers in India & Asia Pacific.
                </p>

                <!-- READ MORE BUTTON -->
                <button id="readMoreBtn" class="page2-btn bg-change mt-3" onclick="showFullAbout()">
                    Read More
                </button>
            </div>
        </div>


        <!-- FULL ABOUT CONTENT (HIDDEN + FULL WIDTH) -->
        <div id="fullAboutSection" style="display:none; margin-top:40px;">

            <p>
                The center comprises of surgeons who specialize in various areas of surgery and are dedicated to performing surgical procedures with a special
                emphasis on the utilization of minimal access techniques (Laparoscopic Surgery) so that patients reap the benefits of faster recovery,
                lesser post-operative pain, and minimal post-surgical complications. Center has also benefited 6000+ type 2 diabetic patients with bariatric
                surgery by resolving it completely. Mohak hi-tech Speciality Hospital is one of the leading bariatric surgery hospitals in India and the Asia Pacific
                region, with a serious focus on managing morbid obesity.
            </p>

            <p>
                Bariatric surgery (or weight loss surgery) includes a variety of procedures performed on people who have excess body weight. Procedures are based on either restrictive, mal-absorptive, or a combination of both methods. Weight loss is achieved by reducing the size of the stomach with a gastric band or through the removal of a portion of the stomach or by resecting and re-routing the small intestine to a small stomach pouch. Sleeve Gastrectomy, Roux-en-Y Gastric Bypass, Mini Gastric Bypass, Single Incision Lap Sleeve, Banded Gastric Bypass, Duodenal Jejunal Bypass, and Endoscopic Sleeve Gastroplasty are the commonly performed procedures at Mohak hi-tech Speciality Hospital.
            </p>

            <p>
           Mohak hi-tech Speciality Hospital is well equipped for bariatric surgery and metabolic surgery through laparoscopic & robotic procedure. It is the first centre to begin diabetes surgery for morbidly obese and low BMI diabetics.
            </p>

            <p>
Roofing whenan unknown printer took a galley of type and scrambled itte tomake a type specimen book. It has Roofing whenan unknow near printer a took area galley of type and scrambled it to make.Roofing whena near unknown printer took galley of type and scrambled it to make are type specimen book. It has Roofing.            </p>

            <!-- READ LESS BUTTON -->
            <button id="readLessBtn" class="page2-btn bg-change mt-3" onclick="hideFullAbout()">
                Read Less
            </button>
        </div>
    </div>
    <!-- ETHOS SECTION -->
    <div class="container about-ethos-wrapper pt-5">
        <h3 class="section-title mb-4 text-center">OUR ETHOS</h3>

        <div class="row">

            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="ethos-card">
                    <i class="fas fa-hospital-alt ethos-icon"></i>
                    <h4 class="ethos-title">Our Vision</h4>
                    <p class="ethos-text">
                        To be a world-class medical services provider turning distant possibilities into today’s realities.
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="ethos-card">
                    <i class="fas fa-hand-holding-heart ethos-icon"></i>
                    <h4 class="ethos-title">Our Values</h4>
                    <p class="ethos-text">
                        Innovation, quality healthcare, and compassionate service for every patient.
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="ethos-card">
                    <i class="fas fa-stethoscope ethos-icon"></i>
                    <h4 class="ethos-title">Patient Care</h4>
                    <p class="ethos-text">
                        We create a personal and effective partnership across the entire continuum of care.
                    </p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="ethos-card">
                    <i class="fas fa-shield-alt ethos-icon"></i>
                    <h4 class="ethos-title">Integrity</h4>
                    <p class="ethos-text">
                        Honest communication, trust-building, and the highest ethical standards.
                    </p>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="ethos-card">
                    <i class="fas fa-balance-scale ethos-icon"></i>
                    <h4 class="ethos-title">Organizational Ethics</h4>
                    <p class="ethos-text">
                        We practice honesty, fairness, dignity, and respect in everything we do.
                    </p>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="ethos-card">
                    <i class="fas fa-users ethos-icon"></i>
                    <h4 class="ethos-title">Teamwork</h4>
                    <p class="ethos-text">
                        Success is built on collaboration, communication, and mutual respect.
                    </p>
                </div>
            </div>

        </div>
    </div>

    </div>

</section>

<!-- SCRIPT -->