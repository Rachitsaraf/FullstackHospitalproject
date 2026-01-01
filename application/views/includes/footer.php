<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- ...existing code... (page content above footer) ... -->

<!-- footer section start - redesigned to match requested layout -->
<footer class="footer-main-wrapper site-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row align-items-start">

                <div class="col-lg-3 col-md-6 footer-column">
                    <div class="sb-footer-section footer-about">

                        <div class="footer-logo">
                            <img src="<?php echo base_url('assets/images/mohak-cropped.jpg'); ?>" alt="footer logo"
                                class="footer-logo-img">
                        </div>

                        <h6 class="footer-desc">
                            Using advanced robotic tools and modern laparoscopic techniques, our experienced medical
                            team offers safer procedures with greater precision, faster recovery, and more effective
                            treatment results for patients
                        </h6>


                    </div>
                </div>

                <!-- MIDDLE: Useful Links (now col-lg-3) -->
                <div class="col-lg-3 col-md-6 footer-column">
                    <div class="links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="<?php echo base_url('about_us'); ?>"><i class="fas fa-angle-right"></i>
                                    About Us</a></li>
                            <li><a href="<?php echo base_url('meet-our-doctors'); ?>"><i class="fas fa-angle-right"></i>
                                    Meet Our Doctors</a></li>
                            <li><a href="<?php echo base_url('contact-us'); ?>"><i class="fas fa-angle-right"></i>
                                    Contact Us</a></li>
                            <li><a href="<?php echo base_url('blog'); ?>"><i class="fas fa-angle-right"></i>
                                    Blog</a></li>
                            <li><a href="<?php echo base_url('why-us'); ?>"><i class="fas fa-angle-right"></i>
                                    Why Choose Us</a></li>
                        </ul>
                    </div>
                </div>

                <!-- MIDDLE: Treatments (now col-lg-3) -->
                <div class="col-lg-3 col-md-6 footer-column">
                    <div class="links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><a href="<?php echo base_url('services/bariatric-surgery'); ?>"><i
                                        class="fas fa-angle-right"></i> Bariatric Surgery</a></li>
                            <li><a href="<?php echo base_url('services/bariatric-endoscopy'); ?>"><i
                                        class="fas fa-angle-right"></i>
                                    Bariatric Endoscopy
                                </a></li>
                            <li><a href="<?php echo base_url('services/reconstructive-surgery'); ?>"><i
                                        class="fas fa-angle-right"></i>
                                    Reconstructive Surgery
                                </a></li>
                            <li><a href="<?php echo base_url('services/diabetes-surgery'); ?>"><i
                                        class="fas fa-angle-right"></i>
                                    Diabetes Surgery
                                </a></li>
                            <li><a href="<?php echo base_url('services/bariatric-fellowship'); ?>"><i
                                        class="fas fa-angle-right"></i> Bariatric Fellowship</a></li>
                        </ul>
                    </div>
                </div>

                <!-- RIGHT: Quick Contact (col-lg-3) -->
                <div class="col-lg-3 col-md-6 footer-column">
                    <div class="quick-contact">
                        <h4>Quick Contact</h4>
                        <ul class="contact-list">
                            <li><i class="fas fa-map-marker-alt"></i>
                                <div>
                                    Mohak hi-tech Speciality Hospital Sri Aurobindo Medical College Campus Indore-Ujjain
                                    State Highway, Sanwer Rd, Indore, Madhya Pradesh 452007
                                </div>
                            </li>
                            <li><i class="fas fa-phone"></i>
                                <div><a href="tel:+917869916282">+91 7869916282</a></div>
                            </li>
                            <li><i class="fas fa-envelope"></i>
                                <div><a href="mailto:mohakbariatric@gmail.com">mohakbariatric@gmail.com</a></div>
                            </li>
                        </ul>
                        <div class="quick-social">
                            <a href="https://www.facebook.com/IndiaObesity" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="https://x.com/mohakbariatrics" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/mohakbariatrics/" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/c/indiaobesity" target="_blank"><i
                                    class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- thin divider to match screenshot -->
    <div class="footer-divider" role="presentation">
        <div class="footer-disclaimer-wrapper" style="background-color:#5e2004;color:#ccc;">
            <div class="container">
                <p class="mb-0 text-center footer-disclaimer-text" style="font-size: 0.95rem; padding: 0 15px;">
                    Disclaimer: The surgeries and medical procedures listed on the website are not for every patient.
                    Treatment is prescribed differently to every patient after consultation with surgeon and results may
                    vary from patient to patient
                </p>
            </div>

            <!-- bottom bar -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-bottom-line"></div> <!-- Correct placement -->

                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <p class="mb-0">Mohak Hi-Tech Speciality Hospital © Copyright 2023. All Rights Reserved.</p>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <p class="mb-0">
                                <a href="<?php echo base_url('privacy-policy.html'); ?>">Privacy Policy</a> |
                                <a href="<?php echo base_url('terms.html'); ?>">Terms &amp; Conditions</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</footer>
<!-- footer section end -->

<!-- custom js (inline initializers) -->
<script>
wow = new WOW({
    animateClass: 'animated',
    offset: 100,
    callback: function(box) {
        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
    }
});
wow.init();
</script>
<script>
function actionToggleOne() {
    let action = document.querySelector('.contact-action');
    if (action) action.classList.toggle('open1');
}

function actionToggleTwo() {
    let action = document.querySelector('.action-1');
    if (action) action.classList.toggle('open2');
}

function actionToggleThree() {
    let action = document.querySelector('.action-2');
    if (action) action.classList.toggle('open3');
}

function actionToggleFour() {
    let action = document.querySelector('.action-3');
    if (action) action.classList.toggle('open4');
}
</script>

<!-- JavaScript Files -->
<script src="<?php echo base_url('assets/js/jquery-3.6.0.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/wow.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.magnific-popup.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/contact_form.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>

<script>
let videoModal = document.getElementById('videoModal');
let videoIframe = document.getElementById('videoIframe');
let videoSrc = videoIframe.src;

// Stop YouTube video when modal closes
videoModal.addEventListener('hidden.bs.modal', function() {
    videoIframe.src = "";
    videoIframe.src = videoSrc;
});
</script>
<script>
$(document).ready(function() {

    $("#insurance-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        smartSpeed: 600,

        responsive: {
            0: {
                items: 2
            },
            500: {
                items: 3
            },
            768: {
                items: 4
            },
            992: {
                items: 5
            },
            1024: {
                items: 6
            }, // FORCE 6 ITEMS ON LAPTOP SCREEN
            1300: {
                items: 6
            },
            1600: {
                items: 6
            }
        }
    });

});
</script>






<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Animation On Click -->
<script>
$(document).ready(function() {
    $('.testimonial-slider .item').on('click', function() {
        $('.testimonial-slider .item').removeClass('clicked');
        $(this).addClass('clicked');
    });
});
</script>



<script>
document.addEventListener("DOMContentLoaded", function() {

    const playBtn = document.querySelector(".play-btn");
    const iframe = document.querySelector(".surgeon-video");

    playBtn.addEventListener("click", function() {

        playBtn.style.opacity = "0";
        playBtn.style.pointerEvents = "none";

        iframe.src += (iframe.src.includes("?") ? "&" : "?") + "autoplay=1";

        setTimeout(() => {
            iframe.style.pointerEvents = "auto";
        }, 300);
    });

});
</script>

<script>
// STOP the script if the gallery slider does NOT exist
document.addEventListener("DOMContentLoaded", function() {

    const slides = document.querySelectorAll('.mohak-slide');

    // If no gallery slides found → DO NOT RUN THIS SCRIPT (fixes homepage slider)
    if (slides.length === 0) {
        return;
    }

    let slideIndex = 1;
    showMohakSlides(slideIndex);

    function changeSlide(n) {
        showMohakSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showMohakSlides(slideIndex = n);
    }

    function showMohakSlides(n) {
        const thumbs = document.querySelectorAll('.mohak-thumb');
        const caption = document.getElementById('mohak-caption-text');

        if (n > slides.length) slideIndex = 1;
        if (n < 1) slideIndex = slides.length;

        slides.forEach(s => s.style.display = "none");
        thumbs.forEach(t => t.classList.remove("active"));

        slides[slideIndex - 1].style.display = "block";
        thumbs[slideIndex - 1].classList.add("active");

        if (caption) caption.innerHTML = thumbs[slideIndex - 1].alt;
    }
});
</script>

<!-- GLightbox CDN -->
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

<!-- Initialization -->
<script>
const lightbox = GLightbox({
    selector: ".glightbox",
    loop: true,
    zoomable: true
});
</script>
<script>
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate');
        }
    });
});

document.querySelectorAll('.facility-card').forEach(card => {
    observer.observe(card);
});
</script>
<script>
// DRAG TO SCROLL FUNCTIONALITY
const slider = document.querySelector(".gallery-track");
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener("mousedown", (e) => {
    isDown = true;
    slider.classList.add("active");
    startX = e.pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
});

slider.addEventListener("mouseleave", () => {
    isDown = false;
});

slider.addEventListener("mouseup", () => {
    isDown = false;
});

slider.addEventListener("mousemove", (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - slider.offsetLeft;
    const walk = (x - startX) * 2;
    slider.scrollLeft = scrollLeft - walk;
});

// TOUCH SUPPORT FOR MOBILE
slider.addEventListener("touchstart", (e) => {
    startX = e.touches[0].pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
});

slider.addEventListener("touchmove", (e) => {
    const x = e.touches[0].pageX - slider.offsetLeft;
    const walk = (x - startX) * 2;
    slider.scrollLeft = scrollLeft - walk;
});
</script>


<!-- SCRIPT -->
<script>
function showFullAbout() {
    document.getElementById("fullAboutSection").style.display = "block";
    document.getElementById("readMoreBtn").style.display = "none";
}

function hideFullAbout() {
    document.getElementById("fullAboutSection").style.display = "none";
    document.getElementById("readMoreBtn").style.display = "inline-block";
    window.scrollTo({
        top: document.querySelector('.about-page-section').offsetTop - 80,
        behavior: 'smooth'
    });
}
</script>



<script>
document.addEventListener("DOMContentLoaded", function() {

    let currentSlide = 0;

    const slides = document.querySelectorAll('.reshape-slide');
    const dots = document.querySelectorAll('.reshape-dots .dot');
    const nextBtn = document.querySelector('.reshape-next');
    const prevBtn = document.querySelector('.reshape-prev');

    if (slides.length === 0) {
        console.error("❌ Slider elements not found.");
        return;
    }

    function showSlide(index) {
        slides.forEach(s => s.classList.remove('active'));
        dots.forEach(d => d.classList.remove('active'));

        slides[index].classList.add('active');
        dots[index].classList.add('active');
    }

    // NEXT
    nextBtn.addEventListener("click", function() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    });

    // PREV
    prevBtn.addEventListener("click", function() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    });

    // DOTS
    dots.forEach((dot, i) => {
        dot.addEventListener("click", function() {
            currentSlide = i;
            showSlide(currentSlide);
        });
    });

    // AUTO SLIDE
    setInterval(() => {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }, 4000);

});
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const headers = document.querySelectorAll('.fellowship-accordion .acc-header');
    if (!headers.length) return;

    function closeAll() {
        document.querySelectorAll('.fellowship-accordion .acc-item').forEach(function(it) {
            const h = it.querySelector('.acc-header');
            const b = it.querySelector('.acc-body');
            it.classList.remove('open');
            if (h) h.setAttribute('aria-expanded', 'false');
            if (b) b.style.maxHeight = null;
        });
    }

    headers.forEach(function(btn) {
        btn.addEventListener('click', function() {
            const item = btn.closest('.acc-item');
            const body = item.querySelector('.acc-body');
            const isOpen = btn.getAttribute('aria-expanded') === 'true';

            // Single-open behaviour: close all then open clicked (comment out closeAll() to allow multiple open)
            closeAll();

            if (!isOpen) {
                item.classList.add('open');
                btn.setAttribute('aria-expanded', 'true');
                // set maxHeight to enable transition
                body.style.maxHeight = body.scrollHeight + 'px';
            } else {
                item.classList.remove('open');
                btn.setAttribute('aria-expanded', 'false');
                body.style.maxHeight = null;
            }
        }, {
            passive: true
        });
    });

    // initialize any pre-open panels
    document.querySelectorAll('.fellowship-accordion .acc-item').forEach(function(it) {
        const h = it.querySelector('.acc-header');
        const b = it.querySelector('.acc-body');
        if (h && h.getAttribute('aria-expanded') === 'true' && b) {
            it.classList.add('open');
            b.style.maxHeight = b.scrollHeight + 'px';
        }
    });
});
</script>
<!-- RIGHT SLIDE-IN BMI PANEL -->
<!-- BMI POPUP OVERLAY -->
<div id="bmiPopupOverlay" class="bmi-popup-overlay" onclick="closeBmiPopup()"></div>

<div id="bmiPopup" class="bmi-popup">

    <button class="bmi-popup-close" onclick="closeBmiPopup()">×</button>

    <div class="bmi-box shadow-lg border rounded-3 p-4 bg-white">

        <h5 class="bmi-box-title text-center mb-4 p-2 bg-primary text-white rounded">
            <i class="fas fa-calculator me-2"></i> BMI CALCULATOR
        </h5>

        <!-- BMI IFRAME -->
        <iframe
            src="https://www.calculator.net/bmi-calculator.html?ctype=standard&cheightfeet=5&cheightinch=4&cpound=160&x=Calculate"
            width="100%" height="380" style="border:0; border-radius: 4px;"></iframe>

        <!-- KNOW MORE BUTTON (This is the missing part) -->
        <div class="text-center mt-4">
            <a href="https://newsite.mohakbariatrics.in/bmi-calculator" class="btn btn-primary btn-lg know-more-btn"
                target="_blank">
                Know More
            </a>
        </div>

    </div>
</div>


<script>
function openBmiPopup() {
    document.getElementById("bmiPopupOverlay").style.display = "block";
    document.getElementById("bmiPopup").style.display = "block";

    // Smooth zoom effect
    setTimeout(() => {
        document.getElementById("bmiPopup").style.transform = "translate(-50%, -50%) scale(1)";
    }, 50);
}

function closeBmiPopup() {
    document.getElementById("bmiPopupOverlay").style.display = "none";
    document.getElementById("bmiPopup").style.display = "none";
    document.getElementById("bmiPopup").style.transform = "translate(-50%, -50%) scale(0.8)";
}
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {

    const slider = document.querySelector(".gallery-track");
    if (!slider) return;

    let isDown = false;
    let startX;
    let scrollLeft;
    let isDragging = false;

    /* ====== CLONE IMAGES FOR INFINITE LOOP ====== */
    const images = Array.from(slider.children);
    images.forEach(img => {
        const clone = img.cloneNode(true);
        slider.appendChild(clone);
    });

    const maxScroll = slider.scrollWidth / 2;

    /* ====== DRAG SCROLL ====== */
    slider.addEventListener("mousedown", (e) => {
        isDown = true;
        isDragging = false;
        startX = e.pageX;
        scrollLeft = slider.scrollLeft;
        slider.style.cursor = "grabbing";
    });

    slider.addEventListener("mousemove", (e) => {
        if (!isDown) return;
        e.preventDefault();

        const walk = (e.pageX - startX) * 1.8;
        if (Math.abs(walk) > 5) isDragging = true;

        slider.scrollLeft = scrollLeft - walk;

        /* LOOP RESET */
        if (slider.scrollLeft >= maxScroll) {
            slider.scrollLeft -= maxScroll;
        }
        if (slider.scrollLeft <= 0) {
            slider.scrollLeft += maxScroll;
        }
    });

    slider.addEventListener("mouseup", () => {
        isDown = false;
        slider.style.cursor = "grab";
    });

    slider.addEventListener("mouseleave", () => {
        isDown = false;
        slider.style.cursor = "grab";
    });

    /* BLOCK CLICK WHILE DRAGGING */
    slider.querySelectorAll("img").forEach(img => {
        img.addEventListener("click", (e) => {
            if (isDragging) {
                e.preventDefault();
                e.stopImmediatePropagation();
            }
        });
    });

    /* ====== AUTO SCROLL (OPTIONAL) ====== */
    let autoScrollSpeed = 0.4;

    function autoScroll() {
        slider.scrollLeft += autoScrollSpeed;

        if (slider.scrollLeft >= maxScroll) {
            slider.scrollLeft -= maxScroll;
        }

        requestAnimationFrame(autoScroll);
    }
    autoScroll();

    /* PAUSE AUTO SCROLL ON HOVER */
    slider.addEventListener("mouseenter", () => autoScrollSpeed = 0);
    slider.addEventListener("mouseleave", () => autoScrollSpeed = 0.4);

});
</script>
<div id="imagePopup" class="image-popup">
    <span class="popup-close" onclick="closePopup()">×</span>
    <span class="popup-prev" onclick="changeImage(-1)">❮</span>

    <img id="popupImage" src="" alt="Gallery Image">

    <span class="popup-next" onclick="changeImage(1)">❯</span>
</div>
<script>
let currentIndex = 0;
let galleryImages = [];

document.addEventListener("DOMContentLoaded", function() {

    galleryImages = Array.from(document.querySelectorAll(".gallery-track img"));

    galleryImages.forEach((img, index) => {
        img.addEventListener("click", () => {
            openPopup(index);
        });
    });

});

function openPopup(index) {
    currentIndex = index;
    document.getElementById("popupImage").src = galleryImages[currentIndex].src;
    document.getElementById("imagePopup").style.display = "flex";
    document.body.style.overflow = "hidden";
}

function closePopup() {
    document.getElementById("imagePopup").style.display = "none";
    document.body.style.overflow = "";
}

function changeImage(direction) {
    currentIndex += direction;

    if (currentIndex < 0) currentIndex = galleryImages.length - 1;
    if (currentIndex >= galleryImages.length) currentIndex = 0;

    document.getElementById("popupImage").src = galleryImages[currentIndex].src;
}

/* KEYBOARD SUPPORT */
document.addEventListener("keydown", function(e) {
    if (document.getElementById("imagePopup").style.display === "flex") {
        if (e.key === "ArrowRight") changeImage(1);
        if (e.key === "ArrowLeft") changeImage(-1);
        if (e.key === "Escape") closePopup();
    }
});
</script>

<!-- IMAGE POPUP (ADD ONCE IN FOOTER) -->


</body>

</html>