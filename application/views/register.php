<div class="login-main-wrapper">
   <div class="container-fluid">
      <div class="row align-items-center">

         <!-- LEFT SECTION -->
         <div class="col-lg-6 col-md-12 col-12 p-0">
            <div class="form-sidebar">
               <div class="logo-section">
                  <img src="<?php echo base_url('images/logo3.png'); ?>" alt="img">
               </div>
               <div class="form-image d-xl-block d-lg-block d-none">
                  <img src="<?php echo base_url('images/form-img.png'); ?>" alt="img">
               </div>
            </div>
         </div>

         <!-- RIGHT SECTION -->
         <div class="col-lg-6 col-md-12 col-12 p-0">
            <div class="login-main">

               <!-- REGISTER FORM -->
               <form method="post" action="<?php echo base_url('welcome/register_save'); ?>">
                  <h4>Register Now</h4>
                  <p class="mb-3">Register by entering the information below</p>

                  <div class="mt-2">
                     <input type="text" name="name" class="my-width" placeholder="Name*" required>
                  </div>

                  <div class="mt-2">
                     <input type="email" name="email" class="my-width" placeholder="Email*" required>
                  </div>

                  <div class="mt-2">
                     <input type="password" name="password" class="my-width" placeholder="Password*" required>
                  </div>

                  <div class="mt-2">
                     <input type="password" name="confirm_password" class="my-width" placeholder="Confirm Password*" required>
                  </div>

                  <div class="mt-2">
                     <input type="checkbox" id="accept" class="me-2" required>
                     <label for="accept">
                        Yes, I understand and agree to 
                        <a href="javascript:;" class="text-color-pink">Terms & Conditions</a>.
                     </label>
                  </div>

                  <button type="submit" class="button-btn mt-4 text-capitalize">
                     Register
                     <span><i class="fas fa-angle-double-right"></i></span>
                  </button>

                  <p class="mt-2">
                     Already have an account? 
                     <a href="<?php echo base_url('welcome/login'); ?>" class="text-color-pink">Login Now</a>
                  </p>
               </form>

            </div>
         </div>

      </div>
   </div>
</div>
