<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    // =======================
    // HOME PAGE
    // =======================
    public function index()
    {
        $this->load->view('includes/header');
        $this->load->view('website_home');   // your main homepage
        $this->load->view('includes/footer');
    }

    // =======================
    // ABOUT US PAGE
    // =======================
    public function about_us()
    {
        $this->load->view('includes/header');
        $this->load->view('about_us');
        $this->load->view('includes/footer');
    }

    // =======================
    // DOCTORS PAGE
    // =======================
    public function doctors()
    {
        $this->load->view('includes/header');
        $this->load->view('doctors');
        $this->load->view('includes/footer');
    }

    // =======================
    // SINGLE DOCTOR PAGE
    // =======================
  public function doctor_mohit()
{
    $this->load->view('includes/header');
    $this->load->view('doctor_mohit');
    $this->load->view('includes/footer');
}

    // =======================
    // APPOINTMENT PAGE
    // =======================
    public function appointment()
    {
        $this->load->view('includes/header');
        $this->load->view('appointment');
        $this->load->view('includes/footer');
    }

    // =======================
    // GALLERY PAGES
    // =======================
    public function gallery()
    {
        $this->load->view('includes/header');
        $this->load->view('gallery');
        $this->load->view('includes/footer');
    }

    public function gallery2()
    {
        $this->load->view('includes/header');
        $this->load->view('gallery2');
        $this->load->view('includes/footer');
    }

    public function gallery3()
    {
        $this->load->view('includes/header');
        $this->load->view('gallery3');
        $this->load->view('includes/footer');
    }

    // =======================
    // CONTACT PAGE
    // =======================
    public function contact_us()
    {
        $this->load->view('includes/header');
        $this->load->view('contact_us');
        $this->load->view('includes/footer');
    }

    // =======================
    // 404 PAGE
    // =======================
    public function error404()
    {
        $this->load->view('includes/header');
        $this->load->view('404');
        $this->load->view('includes/footer');
    }
   public function dr_mathias_fobi()
{
    $this->load->view('includes/header');
    $this->load->view('dr_mathias_fobi'); // ← NO folder, file is directly inside views
    $this->load->view('includes/footer');
}
public function dr_manoel_galvao()
{
    $this->load->view('includes/header');
    $this->load->view('dr_manoel_galvao');
    $this->load->view('includes/footer');
}
public function sleeve_gastrectomy()
{
    $this->load->view('includes/header');
    $this->load->view('sleeve_gastrectomy');  // your view file
    $this->load->view('includes/footer');
}
public function banded_gastric_bypass()
{
    $this->load->view('includes/header');
    $this->load->view('banded_gastric_bypass');
    $this->load->view('includes/footer');
}
public function roux_en_y_gastric_bypass()
{
    $this->load->view('includes/header');
    $this->load->view('roux_en_y_gastric_bypass');
    $this->load->view('includes/footer');
}
public function duodenal_jejunal_bypass()
{
    $this->load->view('includes/header');
    $this->load->view('duodenal_jejunal_bypass');
    $this->load->view('includes/footer');
}
public function mini_gastric_bypass()
{
    $this->load->view('includes/header');
    $this->load->view('mini_gastric_bypass');
    $this->load->view('includes/footer');
}
public function obesity_covid()
{
    $this->load->view('includes/header');
    $this->load->view('obesity_covid');
    $this->load->view('includes/footer');
}
public function single_incision_lap_sleeve()
{
    $this->load->view('includes/header');
    $this->load->view('single_incision_lap_sleeve');
    $this->load->view('includes/footer');
}
public function reconstructive_surgery()
{
    $this->load->view('includes/header');
    $this->load->view('reconstructive_surgery');
    $this->load->view('includes/footer');
}
public function contact_uss()
{
    $this->load->view('includes/header');
    $this->load->view('contact_uss');  // Correct file name
    $this->load->view('includes/footer');
}
public function why_us()
{
    $this->load->view('includes/header');
    $this->load->view('why_us');
    $this->load->view('includes/footer');
}
public function training_center()
{
    $this->load->view('includes/header');
    $this->load->view('training_center');
    $this->load->view('includes/footer');
}

    public function bariatric_surgery() {
        $this->load->view('includes/header');
        $this->load->view('services/bariatric_surgery');
        $this->load->view('includes/footer');
    }
    public function bariatric_endoscopy()
{
    $this->load->view('includes/header');
    $this->load->view('services/bariatric_endoscopy');
    $this->load->view('includes/footer');
}
public function reconstructive_surgery_page()
{
    $this->load->view('includes/header');
    $this->load->view('services/reconstructive_surgery');
    $this->load->view('includes/footer');
}
public function allurion()
{
    $this->load->view('includes/header');
    $this->load->view('allurion');
    $this->load->view('includes/footer');
}
public function medical_weight_loss_program()
{
    $this->load->view('includes/header');
    $this->load->view('medical_weight_loss_program'); // renamed view
    $this->load->view('includes/footer');
}
public function bmi_calculator()
{
    $this->load->view('includes/header');
    $this->load->view('bmi_calculator'); // bmi_calculator.php
    $this->load->view('includes/footer');
}
public function our_institutes()
{
    $this->load->view('includes/header');
    $this->load->view('our_institutes'); // our_institutes.php
    $this->load->view('includes/footer');
}
public function dr_mahak_bhandari()
{
    $this->load->view('includes/header');
    $this->load->view('dr_mahak_bhandari'); // view file
    $this->load->view('includes/footer');
}
public function dipesh_pachani()
{
    $this->load->view('includes/header');
    $this->load->view('dipesh_pachani'); 
    $this->load->view('includes/footer');
}
public function santosh_singh()
{
    $this->load->view('includes/header');
    $this->load->view('santosh_singh');  // santosh_singh.php
    $this->load->view('includes/footer');
}
public function amit_lamba()
{
    $this->load->view('includes/header');
    $this->load->view('amit_lamba');
    $this->load->view('includes/footer');
}
public function mohammad_saleem()
{
    $this->load->view('includes/header');
    $this->load->view('mohammad_saleem');
    $this->load->view('includes/footer');
}
public function blog()
{
    $this->load->view('includes/header');
    $this->load->view('blog');
    $this->load->view('includes/footer');
}
public function testimonials()
{
    $this->load->view('includes/header');
    $this->load->view('testimonials');
    $this->load->view('includes/footer');
}
public function meet_our_doctors()
{
    $this->load->view('includes/header');
    $this->load->view('meet_our_doctors'); 
    $this->load->view('includes/footer');
}
public function diabetes_surgery()
{
    $this->load->view('includes/header');
    $this->load->view('services/diabetes_surgery');  // view file
    $this->load->view('includes/footer');
}
public function bariatric_fellowship()
{
    $this->load->view('includes/header');
    $this->load->view('services/bariatric-fellowship');
    $this->load->view('includes/footer');
}

public function delhi()
{
    
    $this->load->view('delhi');   // view file name
   
}



}
