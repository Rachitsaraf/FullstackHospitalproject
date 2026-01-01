<div class="Error-page-main-wrapper" id="window-height">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="sb-error-section">
               <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="img">
            </div>
         </div>

         <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="resp-text d-xl-none d-lg-none d-md-block d-block">
               <h2>404</h2>
            </div>

            <div class="sb-error-content">
               <h2>Oops! Page Not Found</h2>
               <p class="px-2">
                  The page you are looking for was moved, removed, renamed or might have never existed.
               </p>

               <a href="<?php echo base_url(); ?>" class="button-btn mt-4">
                  Back To Home <span><i class="fas fa-angle-double-right"></i></span>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>

<script>
   function setWindowWH() {
      $("#window-height").css("height", $(window).height() + "px");
   }
   $(window).on("load resize", function () {
      setWindowWH();
   });
</script>
