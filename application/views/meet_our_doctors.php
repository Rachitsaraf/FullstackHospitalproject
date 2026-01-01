<section class="hero-banner-section" style="background-image: url('assets/images/banner-new.jpg');">
    <div class="overlay-dark"></div>
    <div class="container">
        <div class="hero-content text-center">
            <h1 class="page-title">Meet Our Expert Doctors</h1>

            <ul class="modern-breadcrumb-list">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li>Meet Our Expert Doctors</li>
            </ul>
        </div>
    </div>
</section>


---

<div class="founder-main-wrapper team-dr" style="padding: 60px 0;">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="page-2-heading text-center" style="margin-bottom: 50px;">
                    <h2 style="font-weight: 600; color: #333;">Our Dedicated Team of Specialists</h2>
                    <p style="color: #666;">Committed to excellence in patient care and surgical outcomes.</p>
                </div>
            </div>

            <?php
            // Array of doctor data for cleaner iteration (optional but recommended for a dynamic page)
            $doctors = [
                ['name' => 'Dr. Mohit Bhandari', 'title' => 'Bariatric Surgeon', 'image' => 'assets/images/IMGL1371-1024x683.jpg', 'url' => 'doctor_single', 'alt' => 'Dr Mohit Bhandari'],
                ['name' => 'Dr. Mahak Bhandari', 'title' => 'Laparoscopic Surgeon', 'image' => 'assets/images/mahak-bhandari.jpg', 'url' => 'dr-mahak-bhandari', 'alt' => 'Dr Mahak Bhandari'],
                ['name' => 'Dr. Manoel Galvao Neto', 'title' => 'Bariatric Surgeon', 'image' => 'assets/images/galvao.jpeg', 'url' => 'dr-manoel-galvao-neto', 'alt' => 'Dr Manoel Galvao Neto'],
                ['name' => 'Dr. Mathias A. Fobi', 'title' => 'Bariatric Surgeon', 'image' => 'assets/images/fobi.jpeg', 'url' => 'dr-mathias-fobi', 'alt' => 'Dr Mathias A. Fobi'],
                ['name' => 'Dr. Alexander Harvard', 'title' => 'Pathologists', 'image' => 'assets/images/founder-img5.png', 'url' => 'dr-single.html', 'alt' => 'Dr. Alexander Harvard'],
                ['name' => 'Dr. Jhon Parker', 'title' => 'Psychiatrist', 'image' => 'assets/images/founder-img6.png', 'url' => 'dr-single.html', 'alt' => 'Dr. Jhon Parker'],
            ];

            foreach ($doctors as $doctor) {
                ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="doctor-card sb-founder-section" style="
                    border: 1px solid #eee;
                    border-radius: 8px;
                    overflow: hidden;
                    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                    transition: transform 0.3s, box-shadow 0.3s;
                " onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0, 0, 0, 0.1)';">

                        <div class="doctor-image-wrapper" style="height: 450px; overflow: hidden;">
                            <img src="<?php echo base_url($doctor['image']); ?>" alt="<?php echo $doctor['alt']; ?>"
                                class="img-fluid"
                                style="width: 100%; height: 100%; object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                        </div>

                        <section>
                            <div class="sb-service-section2 bg-change2 text-center"
                                style="padding: 15px 10px; background-color: #f8f9fa;">
                                <h5 style="margin-bottom: 5px; font-weight: 700;">
                                    <a href="<?php echo base_url($doctor['url']); ?>"
                                        style="color: #007bff; text-decoration: none;"><?php echo $doctor['name']; ?></a>
                                </h5>
                                <p style="margin: 0; color: #555; font-size: 1rem;"><?php echo $doctor['title']; ?></p>
                            </div>
                            <div class="hover-type">
                                <a href="appointment" class="d-inline-block w-100 text-center">
                                    Book an Appointment <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>

                        </section>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>

        ---

       
    </div>
</div>