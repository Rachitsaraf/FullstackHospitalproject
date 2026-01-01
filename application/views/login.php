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

               <!-- LOGIN FORM -->
               <form method="post" action="<?php echo base_url('welcome/login_check'); ?>">
                  <h4>Welcome Back</h4>
                  <p class="mb-3">Login by entering the information below</p>

                  <div class="mt-2">
                     <input type="email" name="email" class="my-width" placeholder="Email*" required>
                  </div>

                  <div class="mt-2">
                     <input type="password" name="password" class="my-width" placeholder="Password*" required>
                  </div>

                  <ul>
                     <li>
                        <input type="checkbox" name="remember" id="confirm">
                        <label for="confirm">Remember me</label>
                     </li>
                     <li><a href="javascript:;">Forgot Password?</a></li>
                  </ul>

                  <div class="d-flex align-items-baseline">
                     <button type="submit" class="button-btn mt-4 text-capitalize">
                        Login
                        <span><i class="fas fa-angle-double-right"></i></span>
                     </button>

                     <a href="<?php echo base_url('welcome/register'); ?>" class="ms-4 form-resp-display">
                        Create Account
                     </a>
                  </div>

                  <p class="mt-3">Or you can join with</p>
                  <ul class="form-media">
                     <li><a href="javascript:;"><i class="fab fa-facebook"></i></a></li>
                     <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="javascript:;"><i class="fab fa-google"></i></a></li>
                  </ul>
               </form>

            </div>
         </div>

      </div>
   </div>
</div>
