<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="hero-banner-section" style="background-image: url('assets/images/banner-new.jpg');">
    <div class="overlay-dark"></div>
    <div class="container">
        <div class="hero-content text-center">
            <h1 class="page-title">BMI Calculator
            </h1>

            <ul class="modern-breadcrumb-list">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li>BMI Calculator
                </li>
            </ul>
        </div>
    </div>
</section>


<main class="bmi-main-content py-5">
    <div class="container">

        <section class="row g-5 mb-5 align-items-center">
            
            <div class="col-lg-7">
                <h2 class="bmi-section-title mb-4"><i class="fas fa-chart-line text-primary me-2"></i> Time to check the BMI.</h2>
                <p class="lead bmi-subtitle text-secondary mb-4">Fill the details to check your fitness level and understand what your results mean.</p>

                <h3 class="h4 fw-bold mb-3">Body Mass Index Explained</h3>

                <p class="mb-3">
                    <i class="fas fa-info-circle text-info me-2"></i>
                    To work on solutions, let’s first understand the term Body Mass Index or BMI, which is commonly used as a factor to decide if a person is obese, overweight, or underweight.
                </p>

                <p class="mb-3">
                    <i class="fas fa-ruler-vertical text-danger me-2"></i>
                    BMI is the measurement of a person’s weight with respect to his/her height. If the BMI score is more, you generally have more fat stored in the body.
                </p>

                <p class="mb-3 p-3 bg-light border-start border-4 border-success">
                    <i class="fas fa-check-circle text-success me-2"></i>
                    A normal BMI score is between 18.5 and 24.9. If you have a BMI that falls in this range, your weight is considered normal for your height.
                </p>

                <p class="mt-4">Check your BMI now and get fitness tips from experts on mail.</p>
            </div>

            <div class="col-lg-5">
                <div class="bmi-box shadow-lg border rounded-3 p-4 bg-white">
                    <h5 class="bmi-box-title text-center mb-4 p-2 bg-primary text-white rounded"><i class="fas fa-calculator me-2"></i> BMI CALCULATOR</h5>
                    
                    <iframe src="https://www.calculator.net/bmi-calculator.html?ctype=standard&cheightfeet=5&cheightinch=4&cpound=160&x=Calculate"
                            title="BMI Calculator Widget"
                            width="100%" height="380" style="border:0; border-radius: 4px;"></iframe>
                </div>
            </div>
        </section>

        <section class="my-5 py-4">
            <h2 class="bmi-section-title mb-4"><i class="fas fa-list-alt text-primary me-2"></i> BMI Ranges and Classification</h2>
            <p class="lead">Here is what your BMI range says about your health:</p>

            <div class="bmi-table-wrapper table-responsive shadow-sm mt-4">
                <table class="table table-striped table-hover align-middle bmi-table">
                    <thead class="table-primary">
                        <tr>
                            <th class="text-center"><i class="fas fa-sort-down"></i> BMI Range</th>
                            <th><i class="fas fa-tag me-1"></i> Classification</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center text-danger">&lt; 18.5</td>
                            <td><i class="fas fa-weight-low text-danger me-2"></i> Underweight</td>
                        </tr>
                        <tr class="table-success">
                            <td class="text-center fw-bold">18.5 – 24.9</td>
                            <td><i class="fas fa-heartbeat text-success me-2"></i> Normal Weight (Healthy Range)</td>
                        </tr>
                        <tr>
                            <td class="text-center text-warning">25 – 29.9</td>
                            <td><i class="fas fa-weight-hanging text-warning me-2"></i> Overweight</td>
                        </tr>
                        <tr>
                            <td class="text-center text-danger">30 – 34.9</td>
                            <td><i class="fas fa-exclamation-triangle text-danger me-2"></i> Obesity (Class 1)</td>
                        </tr>
                        <tr>
                            <td class="text-center text-danger">35 – 39.9</td>
                            <td><i class="fas fa-thermometer-three-quarters text-danger me-2"></i> Obesity (Class 2)</td>
                        </tr>
                        <tr>
                            <td class="text-center text-danger">40+</td>
                            <td><i class="fas fa-skull-crossbones text-dark me-2"></i> Extreme Obesity (Class 3)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            



        </section>

        <section class="my-5 py-4">
            <h2 class="bmi-section-title mb-5 text-center"><i class="fas fa-flask me-2"></i> Understanding and Calculating Your BMI</h2>

            <div class="row g-4">
                
                <div class="col-lg-6">
                    <div class="card p-4 h-100 shadow-sm border-0">
                        <h3 class="h4 card-title fw-bold mb-3 border-bottom pb-2"><i class="fas fa-square-root-alt me-2"></i> How to Calculate BMI</h3>
                        <p class="card-text lead">It's a simple formula requiring only your height and weight. Use the following:</p>

                        <ul class="list-unstyled mt-3 bmi-formula-list">
                            <li class="mb-3 p-2 bg-light rounded"><i class="fas fa-angle-right me-2 text-primary"></i> Imperial Formula: Weight (LBS) $\times$ 703 $\div$ Height (Inches$^2$)</li>
                            <li class="mb-3 p-2 bg-light rounded"><i class="fas fa-angle-right me-2 text-primary"></i> Metric Formula:   Weight (KG) $\div$ Height (Metres$^2$)</li>
                        </ul>
                        
                        <p class="mt-3 fw-bold">Conversion figures (for Imperial system):</p>
                        <div class="d-flex flex-wrap">
                            <span class="badge bg-secondary p-2 me-2 mb-2"><i class="fas fa-exchange-alt me-1"></i> 1 kg = 2.2 lbs</span>
                            <span class="badge bg-secondary p-2 me-2 mb-2"><i class="fas fa-exchange-alt me-1"></i> 1 ft = 12 inches</span>
                            <span class="badge bg-secondary p-2 me-2 mb-2"><i class="fas fa-exchange-alt me-1"></i> 1 inch = 2.54 cm</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card p-4 h-100 shadow-sm border-0">
                        <h3 class="h4 card-title fw-bold mb-3 border-bottom pb-2"><i class="fas fa-user-md me-2"></i> Use of Calculating BMI</h3>
                        <p class="card-text lead">BMI is a reliable, 150-year-old indicator trusted by major health organizations.</p>
                        
                        <div class="mt-3 custom-bmi-features-grid">
                            <div class="feature-item p-3 border rounded">
                                <i class="fas fa-chart-bar fa-2x text-info mb-2"></i>
                                <h4 class="h6 fw-bold">Public Health</h4>
                                <p class="text-muted small">National measure for obesity rates and tracking comorbidity risks.</p>
                            </div>
                            <div class="feature-item p-3 border rounded">
                                <i class="fas fa-heartbeat fa-2x text-danger mb-2"></i>
                                <h4 class="h6 fw-bold">Health Risk Screening</h4>
                                <p class="text-muted small">Physicians use it as the first step to assess the risk of chronic health problems.</p>
                            </div>
                            <div class="feature-item p-3 border rounded">
                                <i class="fas fa-weight fa-2x text-warning mb-2"></i>
                                <h4 class="h6 fw-bold">Weight Analysis</h4>
                                <p class="text-muted small">Provides a simple, accurate measure of weight classification regardless of gender.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5 py-4">
            <h2 class="bmi-section-title mb-4 text-center"><i class="fas fa-globe-asia me-2"></i> BMI Data for India</h2>

            <div class="row row-cols-1 row-cols-md-3 g-4 text-center">
                <div class="col">
                    <div class="p-4 border rounded-3 h-100 bg-light">
                        <i class="fas fa-male fa-3x text-primary mb-3"></i>
                        <h3 class="h5 fw-bold">Indian Men</h3>
                        <p class="lead mb-0">Average BMI value of 22, higher than about 20 countries globally.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="p-4 border rounded-3 h-100 bg-light">
                        <i class="fas fa-female fa-3x text-danger mb-3"></i>
                        <h3 class="h5 fw-bold">Indian Women</h3>
                        <p class="lead mb-0">Average BMI value of 21.4.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="p-4 border rounded-3 h-100 bg-light">
                        <i class="fas fa-child fa-3x text-success mb-3"></i>
                        <h3 class="h5 fw-bold">Indian Children</h3>
                        <p class="lead mb-0">Measurement uses percentiles (e.g., 95th percentile is classified as overweight).</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-form-section my-5 py-5 border-top">
            <h2 class="bmi-section-title mb-4 text-center"><i class="fas fa-envelope-open-text me-2"></i> Connect with Our Experts</h2>
            <p class="lead text-center mb-5">Share your details for a personalized consultation and fitness tips.</p>

            <form class="custom-contact-form-grid mx-auto p-4 shadow-lg rounded-3 bg-light">

                <div class="form-group mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text" class="form-control bmi-input" placeholder="First Name*" required>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text" class="form-control bmi-input" placeholder="Last Name*" required>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        <input type="tel" class="form-control bmi-input" placeholder="Mobile Phone Number*" required>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-weight-scale"></i></span>
                        <input type="text" class="form-control bmi-input" placeholder="What's Your Weight?*" required>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-city"></i></span>
                        <input type="text" class="form-control bmi-input" placeholder="City*" required>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                        <input type="email" class="form-control bmi-input" placeholder="Email*" required>
                    </div>
                </div>

                <div class="form-group form-group-full-width mt-4 text-center">
                    <button type="submit" class="btn btn-primary btn-lg bmi-submit-btn"><i class="fas fa-paper-plane me-2"></i> Submit Details</button>
                </div>

            </form>
        </section>

        <section class="mt-5 pt-3 border-top text-center">
            <h4 class="fw-bold mb-3"><i class="fas fa-share-alt me-2"></i> Share with someone</h4>
            <p>Ask them to check their BMI too and take the first step toward a healthier life.</p>
            <div class="d-flex justify-content-center gap-3 mt-4">
                <a href="#" class="btn btn-outline-primary rounded-circle"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="btn btn-outline-info rounded-circle"><i class="fab fa-twitter"></i></a>
                <a href="#" class="btn btn-outline-success rounded-circle"><i class="fab fa-whatsapp"></i></a>
                <a href="#" class="btn btn-outline-danger rounded-circle"><i class="fas fa-envelope"></i></a>
            </div>
        </section>

    </div>
</main>