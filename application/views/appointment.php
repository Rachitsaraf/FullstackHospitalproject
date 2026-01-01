<!-- breadcrumb -->
<!-- BOOK AN APPOINTMENT – HERO BANNER -->
<section class="hero-banner-section" style="background-image: url('<?php echo base_url("assets/images/banner-new.jpg"); ?>');">
    <div class="overlay-dark"></div>
    <div class="container">
        <div class="hero-content text-center">
            <h1 class="page-title">Book an Appointment</h1>

            <ul class="modern-breadcrumb-list">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li>Book an Appointment</li>
            </ul>
        </div>
    </div>
</section>

<!-- form section -->
<div class="form-main-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-section">
                    <h6>Book an Appointment</h6>

                    <!-- FORM START -->
                    <form method="post" action="<?php echo base_url('appointment/submit'); ?>">

                        <div class="form-input plr-15">
                            <div class="row">

                                <!-- Name -->
                                <div class="col-lg-6">
                                    <div class="input-group flex-nowrap">
                                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-lg-6">
                                    <div class="input-group flex-nowrap">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="col-lg-6">
                                    <div class="input-group flex-nowrap">
                                        <input type="tel" class="form-control" name="phone" placeholder="Phone" required>
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                </div>

                                <!-- Date -->
                                <div class="col-lg-6">
                                    <div class="input-group flex-nowrap input-custom">
                                        <input class="form-control" id="date" name="appointment_date" placeholder="MM/DD/YYYY" type="text" required>
                                        <span class="input-group-text"><i class="fas fa-calendar-minus"></i></span>
                                    </div>
                                </div>

                                <!-- Time -->
                                <div class="col-lg-6">
                                    <div class="input-group flex-nowrap">
                                        <input type="time" class="form-control" name="appointment_time" required>
                                    </div>
                                </div>

                                <!-- Appointment Type -->
                                <div class="col-lg-6">
                                    <div class="input-group flex-nowrap">
                                        <select class="form-control" name="appointment_type" required>
                                            <option value="">Select Type</option>
                                            <option value="Covid 19">Covid 19</option>
                                            <option value="Full Stathoscope">Full Stathoscope</option>
                                            <option value="Heart Specialist">Heart Specialist</option>
                                            <option value="Blood Bank">Blood Bank</option>
                                            <option value="For Disable">For Disable</option>
                                            <option value="Psychiatrist">Psychiatrist</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Message -->
                                <div class="col-lg-12">
                                    <textarea class="form-control ps-3" rows="3" name="message" placeholder="Enter Text"></textarea>
                                </div>

                            </div>

                            <!-- Submit Button -->
                            <div class="col-lg-12">
                                <button type="submit" class="button-btn mt-4">
                                    Submit <span><i class="fas fa-angle-double-right"></i></span>
                                </button>
                            </div>

                        </div>
                    </form>
                    <!-- FORM END -->

                </div>
            </div>
        </div>
    </div>
</div>

<!-- scripts -->
<script src="<?php echo base_url('assets/js/bootstrap-datepicker.min.js'); ?>"></script>

<script>
$(document).ready(function () {
    var date_input = $('input[name="appointment_date"]');

    date_input.datepicker({
        format: 'mm/dd/yyyy',
        todayHighlight: true,
        autoclose: true
    });
});
</script>
