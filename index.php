<?php
session_start();

$bookCallStatus = $_SESSION['book_call_status'] ?? null;
unset($_SESSION['book_call_status']);

include 'header.php';
?>
<meta property="og:title" content="Technofra - Expert Web Design, Development &amp; Digital Solutions">
<meta property="og:site_name" content="Technofra">
<meta property="og:url" content="https://technofra.com/">
<meta property="og:description"
    content="Technofra is a leading web design, development, and digital marketing agency . We specialize in websites, apps, hosting, branding & SEO.">
<meta property="og:type" content="website">
<meta property="og:image" content="https://www.instagram.com/p/DEhuxezt1Zn/">
<meta property="og:image:alt"
    content="Ready to take your business to new heights? Our expert website development services will help you stand out in the digital world! From e-commerce solutions to custom websites. Let’s elevate your online presence today!">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-189WWHXLSS"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'G-189WWHXLSS');
</script>
<!-- MS Clarity -->
<script type="text/javascript">
(function(c, l, a, r, i, t, y) {
    c[a] = c[a] || function() {
        (c[a].q = c[a].q || []).push(arguments)
    };
    t = l.createElement(r);
    t.async = 1;
    t.src = "https://www.clarity.ms/tag/" + i;
    y = l.getElementsByTagName(r)[0];
    y.parentNode.insertBefore(t, y);
})(window, document, "clarity", "script", "mxzdn16ndk");
</script>
<!--END MS Clarity -->
<title>Technofra - Expert Web Design, Development & Digital Solutions</title>


<style>
.eep-btn-green:hover {
    color: #036;
    transition: 0.8s ease-in-out;

}

@media (max-width: 576px) {


    .dis-hide {
        visibility: hidden;
    }

    .hero10 .bg {
        min-height: 600px;
    }

    .bannerh {
        font-size: 25px !important;
        font-weight: 600;
    }

    .bannerh1 {
        font-size: 14px !important;
        font-weight: 500;
    }

    .hero10 {
        height: 584px;
    }
}

.mtb-20 {
    margin: 20px 0px;
}

/* Small Devices (Phones, Landscape) */
@media (min-width: 577px) and (max-width: 768px) {

    .navbar>.container,
    .navbar>.container-fluid,
    .navbar>.container-sm,
    .navbar>.container-md,
    .navbar>.container-lg,
    .navbar>.container-xl,
    .navbar>.container-xxl {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: inherit;
        flex-wrap: inherit;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
    }

    .tab-non {
        display: none;
    }

    .single-service {
        border: none !important;
        margin-top: 10px;
    }



    blockquote {
        padding: 10px !important;
    }

    .footer_padding {
        padding: 0px 40px;
    }

    .footer-logo {
        padding-bottom: 20px;
    }

    .dis-hide {
        visibility: hidden;
    }

    .about5 {
        padding: 60px 0px 50px 0px;
    }

    .form-check {
        padding-bottom: 10px;
        margin-right: 60px;
    }
}

.clogo {
    width: 100% !important;
    border: 1px solid #dbdbdb;
    border-radius: 50% !important;
    padding: 5px;

}

.mlp-testimonial-box {
    padding: 24px 14px 10px;
    width: 100%;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}

.mlp-testimonial-card {
    cursor: default;
}



.eep-status-alert {
    max-width: 1180px;
    margin: 24px auto 0;
    padding: 14px 18px;
    border-radius: 14px;
    font-size: 15px;
    line-height: 1.5;
}

.eep-status-alert.success {
    background: #eaf8ef;
    border: 1px solid #b8e2c3;
    color: #146c2e;
}

.eep-status-alert.error {
    background: #fff1f1;
    border: 1px solid #f0b9b9;
    color: #9c1d1d;
}

.eep-calendar-day[disabled],
.eep-time-option[disabled] {
    opacity: 0.35;
    cursor: not-allowed;
    pointer-events: none;
}

.eep-time-option[disabled] {
    text-decoration: line-through;
}

.eep-book-modal {
    position: fixed;
    inset: 0;
    z-index: 9999;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 20px;
    background: rgba(7, 15, 43, 0.72);
}

.eep-book-modal.show {
    display: flex;
}

.eep-book-modal-dialog {
    width: 100%;
    max-width: 520px;
    background: #ffffff;
    border-radius: 24px;
    box-shadow: 0 24px 80px rgba(15, 23, 42, 0.24);
    overflow: hidden;
}

.eep-book-modal-head {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 16px;
    padding: 24px 24px 12px;
}

.eep-book-modal-head h3 {
    margin: 0 0 6px;
    font-size: 28px;
    line-height: 1.2;
    color: #101828;
}

.eep-book-modal-head p {
    margin: 0;
    color: #475467;
}

.eep-book-close {
    border: 0;
    width: 40px;
    height: 40px;
    border-radius: 999px;
    background: #f3f4f6;
    color: #111827;
    font-size: 28px;
    line-height: 1;
}

.eep-book-form {
    padding: 0 24px 24px;
}

.eep-book-summary {
    padding: 14px 16px;
    margin-bottom: 18px;
    border-radius: 16px;
    background: #f5f9ff;
    border: 1px solid #dbe7ff;
    color: #12315f;
    font-size: 14px;
}

.eep-book-field {
    margin-bottom: 16px;
}

.eep-book-field label {
    display: block;
    margin-bottom: 8px;
    font-size: 14px;
    font-weight: 600;
    color: #111827;
}

.eep-book-field input {
    width: 100%;
    height: 50px;
    border: 1px solid #d0d5dd;
    border-radius: 14px;
    padding: 0 16px;
    font-size: 15px;
    color: #101828;
    outline: none;
}

.eep-book-field input:focus {
    border-color: #16a34a;
    box-shadow: 0 0 0 4px rgba(22, 163, 74, 0.12);
}

.eep-book-submit {
    width: 100%;
    border: 0;
    border-radius: 14px;
    background: linear-gradient(135deg, #16a34a, #15803d);
    color: #ffffff;
    font-size: 16px;
    font-weight: 700;
    padding: 14px 18px;
}

@media (max-width: 576px) {
    .eep-book-modal-dialog {
        border-radius: 18px;
    }

    .eep-book-modal-head {
        padding: 20px 20px 12px;
    }

    .eep-book-modal-head h3 {
        font-size: 22px;
    }

    .eep-book-form {
        padding: 0 20px 20px;
    }
}

.eep-calendar-info {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 14px;
    flex-wrap: nowrap;
}

.eep-calendar-info .eep-selected-date,
.eep-calendar-info .eep-time-picker-wrap {
    width: auto;
    max-width: none;
    flex: 1 1 0;
}

.eep-calendar-actions {
    display: flex !important;
    justify-content: center;
}

.eep-calendar-actions .eep-btn-green {
    justify-content: center;
}

.eep-calendar-title-row {
    display: inline-flex;
    align-items: center;
    gap: 12px;
}

.eep-calendar-title-row .eep-calendar-title {
    margin: 0;
}

.eep-calendar-title-row .eep-calendar-icon {
    width: auto;
    height: auto;
    border-radius: 0;
    background: transparent;
    display: inline-flex;
    place-items: unset;
    font-size: 40px;
    line-height: 1;
    color: #1f2430;
}

@media only screen and (min-width: 1030px) and (max-width: 1366px) {
    .uxb_about_feature_grid {
        gap: 10px 18px;
    }

    .uxb_about_feature_item {
        font-size: 14px;
        line-height: 1.35;
    }

    .uxb_about_exp_brochure_strip {
        gap: 14px;
        padding: 16px 18px;
        align-items: center;
    }

    .uxb_about_exp_left_area {
        min-width: 118px;
    }

    .uxb_about_exp_big_text {
        font-size: 32px;
        line-height: 1;
    }

    .uxb_about_exp_small_text {
        font-size: 13px;
        line-height: 1.3;
    }

    .uxb_about_exp_mid_divider {
        margin: 0 2px;
    }

    .about-company-brochure-btn {
        font-size: 14px;
        padding: 12px 18px;
        white-space: nowrap;
    }
}
</style>
<?php include 'navbar.php'; ?>
<section class="rnHeroSlider">
    <div class="rnHeroSlide rnHeroActive">
        <video autoplay muted loop playsinline>
            <source src="assets/video/technofra_hero.mp4" type="video/mp4" />
        </video>
        <div class="rnHeroOverlay"></div>

        <div class="rnHeroContent">
            <!-- <div class="rnHeroEyebrow">NEW</div> -->
            <h1>Transform Your Business with the Latest
                Technology Solutions</h1>
            <p class="pb-20">Empower your business with cutting-edge technology solutions that boost efficiency,
                innovation, growth,
                and long-term success.
            </p>
            <div class="rnHeroButtons">
                <a href="web-design.php" class="rnHeroBtnLight">Website Development</a>
                <a href="contact.php" class="rnHeroBtnDark">Contact Us</a>
            </div>
        </div>
    </div>

    <div class="rnHeroSlide rnHeroSlidebg">
        <video autoplay muted loop playsinline>
            <source src="assets/video/branding-vnew.mp4" type="video/mp4" />
        </video>
        <div class="rnHeroOverlay"></div>

        <div class="rnHeroContent">
            <!-- <div class="rnHeroEyebrow">NEW</div> -->
            <h1>Turning Ideas Into Mobile Apps</h1>
            <p class="pb-20">We turn your ideas into powerful mobile apps that engage users, solve problems, and drive
                growth.
            </p>
            <div class="rnHeroButtons">
                <a href="ios-app-development.php" class="rnHeroBtnLight">App Development</a>
                <a href="contact.php" class="rnHeroBtnDark">Contact Us</a>
            </div>
        </div>
    </div>

    <div class="rnHeroSlide rnHeroSlidebg">
        <video autoplay muted loop playsinline>
            <source src="assets/video/app-dev-vnew.mp4" type="video/mp4" />
        </video>
        <div class="rnHeroOverlay"></div>

        <div class="rnHeroContent">
            <!-- <div class="rnHeroEyebrow">NEW</div> -->
            <h1>Build a Strong Brand with Innovative Branding Solutions</h1>
            <p class="pb-20">Create a memorable brand identity with innovative branding solutions that inspire trust,
                attract customers, and fuel growth.
            </p>
            <div class="rnHeroButtons">
                <a href="branding.php" class="rnHeroBtnLight">Branding</a>
                <a href="contact.php" class="rnHeroBtnDark">Contact Us</a>
            </div>
        </div>
    </div>

    <div class="rnHeroSlide rnHeroSlidebg">
        <video autoplay muted loop playsinline>
            <source src="assets/video/ui-ux-vnew.mp4" type="video/mp4" />
        </video>
        <div class="rnHeroOverlay"></div>

        <div class="rnHeroContent">
            <!-- <div class="rnHeroEyebrow">NEW</div> -->
            <h1>Design Meaningful Experiences with Smart UI/UX Solutions</h1>
            <p class="pb-20">Craft meaningful digital experiences with smart UI/UX solutions that enhance usability,
                engagement, and customer satisfaction.
            </p>
            <div class="rnHeroButtons">
                <a href="ui-ux.php" class="rnHeroBtnLight">UI/UX Design</a>
                <a href="contact.php" class="rnHeroBtnDark">Contact Us</a>
            </div>
        </div>
    </div>

    <div class="rnHeroSlide rnHeroSlidebg">
        <video autoplay muted loop playsinline>
            <source src="assets/video/payment-vnew.mp4" type="video/mp4" />
        </video>
        <div class="rnHeroOverlay"></div>

        <div class="rnHeroContent">
            <!-- <div class="rnHeroEyebrow">NEW</div> -->
            <h1>Make Online Payments Easy with Trusted Payment Integration</h1>
            <p class="pb-20">Simplify transactions with trusted payment integration that ensures secure, seamless, and
                convenient online payment experiences.
            </p>
            <div class="rnHeroButtons">
                <a href="payment-gateway.php" class="rnHeroBtnLight">Payment Integration</a>
                <a href="contact.php" class="rnHeroBtnDark">Contact Us</a>
            </div>
        </div>
    </div>

    <div class="rnHeroSlide rnHeroSlidebg">
        <video autoplay muted loop playsinline>
            <source src="assets/video/digital-marketing.mp4" type="video/mp4" />
        </video>
        <div class="rnHeroOverlay"></div>

        <div class="rnHeroContent">
            <!-- <div class="rnHeroEyebrow">NEW</div> -->
            <h1>Boost Your Brand with Powerful Digital Marketing Solutions</h1>
            <p class="pb-20">Grow your brand with powerful digital marketing solutions that increase visibility, engage
                audiences, and drive results.
            </p>
            <div class="rnHeroButtons">
                <a href="digital-marketing.php" class="rnHeroBtnLight">Digital Marketing</a>
                <a href="contact.php" class="rnHeroBtnDark">Contact Us</a>
            </div>
        </div>
    </div>

    <!-- Continuous logo slider -->
    <div class="rnCenterSwiperWrap">
        <div class="rnHeroLogoSlider">
            <div class="rnHeroLogoTrack">
                <div class="rnHeroLogoGroup">
                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/blueorbith.png" alt="logo" />
                    </div>
                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/grid-infinity.png" alt="logo" />
                    </div>
                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/digikcon.png" alt="logo" />
                    </div>
                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/markidentitiez.png" alt="logo" />
                    </div>
                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/blueorbith.png" alt="logo" />
                    </div>
                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/grid-infinity.png" alt="logo" />
                    </div>
                </div>

                <div class="rnHeroLogoGroup" aria-hidden="true">
                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/digikcon.png" alt="logo" />
                    </div>
                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/markidentitiez.png" alt="logo" />
                    </div>

                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/blueorbith.png" alt="logo" />
                    </div>
                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/grid-infinity.png" alt="logo" />
                    </div>
                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/digikcon.png" alt="logo" />
                    </div>
                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/markidentitiez.png" alt="logo" />
                    </div>
                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/digikcon.png" alt="logo" />
                    </div>
                    <div class="single-logo" data-link="#">
                        <img src="assets/image/home/markidentitiez.png" alt="logo" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rnHeroNavigation">
        <span class="rnHeroPrev">&#10094;</span>
        <span class="rnHeroNext">&#10095;</span>
    </div>

    <div class="rnHeroTabsWrap">
        <div class="rnHeroTabs">
            <div class="rnHeroTabItem rnHeroActive" data-slide="0">Website Development</div>
            <div class="rnHeroTabItem" data-slide="1">App Development</div>
            <div class="rnHeroTabItem" data-slide="2">Branding</div>
            <div class="rnHeroTabItem" data-slide="3">UI/UX Design</div>
            <div class="rnHeroTabItem" data-slide="4">Payment Integration</div>
            <div class="rnHeroTabItem" data-slide="5">Digital Marketing</div>
        </div>
    </div>


</section>


<section class="uxb_about_section_wrap">
    <div class="uxb_about_container container">
        <div class="uxb_about_grid_main">

            <!-- LEFT -->
            <div class="uxb_about_left_block">
                <span class="crm-subtitle aos-init aos-animate pb-20" data-aos="fade-left" data-aos-duration="600">More
                    About Us <img src="assets/image/arrow-red.png" alt="arrow"></span>
                <!-- <div class="uxb_about_mini_title"></div> -->

                <h2 class="uxb_about_heading_title">
                  Custom Website Design & Development Company for Global Businesses
                </h2>

                <p class="uxb_about_para_text" data-aos="fade-right" data-aos-duration="600">
                    Technofra is a trusted partner in maximizing digital potential. Starting with a bold vision to
                    transform online customer interactions, we now lead in innovation. Offering tailored web design
                    and development solutions, we help businesses thrive and achieve impactful outcomes in the
                    ever-evolving digital landscape.
                </p>

                <div class="uxb_about_feature_grid" data-aos="fade-right" data-aos-duration="600">
                    <div class="uxb_about_feature_item">
                        <span class="uxb_about_feature_check"></span>
                        <span>Innovative IT Solutions</span>
                    </div>

                    <div class="uxb_about_feature_item">
                        <span class="uxb_about_feature_check"></span>
                        <span>Custom Web Design Services</span>
                    </div>

                    <div class="uxb_about_feature_item">
                        <span class="uxb_about_feature_check"></span>
                        <span>Business Growth Strategies</span>
                    </div>

                    <div class="uxb_about_feature_item">
                        <span class="uxb_about_feature_check"></span>
                        <span>Customer-Focused Approach</span>
                    </div>

                    <div class="uxb_about_feature_item">
                        <span class="uxb_about_feature_check"></span>
                        <span>Mission-Driven Development</span>
                    </div>

                    <div class="uxb_about_feature_item">
                        <span class="uxb_about_feature_check"></span>
                        <span>Trusted Digital Partner</span>
                    </div>
                </div>

                <div class="uxb_about_bottom_row_redesign">
                    <div class="uxb_about_exp_brochure_strip">
                        <div class="uxb_about_exp_left_area" data-aos="fade-up" data-aos-duration="600">
                            <div class="uxb_about_exp_big_text">14+</div>
                            <div class="uxb_about_exp_small_text">Years of Experience</div>
                        </div>

                        <div class="uxb_about_exp_mid_divider" data-aos="fade-up" data-aos-duration="600"></div>
                        <button type="button" class="about-company-brochure-btn white" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            Download Company Profile <i class="fa-solid fa-file-pdf"></i>
                        </button>

                        <!-- <div class="uxb_about_exp_right_area" data-aos="fade-up" data-aos-duration="600">
                            <a href="assets/pdf/technofra-brochure.pdf" class="uxb_about_exp_brochure_btn" download>
                                Download Company Profile &nbsp;&nbsp;<i class="fa-solid fa-file-pdf"></i>
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- RIGHT -->
            <div class="uxb_about_right_visual" data-aos="fade-left" data-aos-duration="600">
                <div class="uxb_about_small_card_img">
                    <img src="assets\image\home\about-02.webp" alt="Meeting Image">
                </div>

                <div class="uxb_about_big_image_holder">
                    <img src="assets\image\home\about-01.webp" alt="Business Team">
                </div>

                <div class="uxb_about_trust_badge">
                    <h3>Trusted By 2M+ Customers</h3>
                    <!-- <p>Our Expert Team</p> -->

                    <div class="uxb_about_avatar_group_shell">
                        <div class="uxb_about_avatar_stack_list">
                            <div class="uxb_about_avatar_single">
                                <img src="assets\image\clogos\1.png" alt="User 1">
                            </div>
                            <div class="uxb_about_avatar_single">
                                <img src="assets\image\clogos\2.png" alt="User 2">
                            </div>
                            <div class="uxb_about_avatar_single">
                                <img src="assets\image\clogos\3.png" alt="User 3">
                            </div>
                            <div class="uxb_about_avatar_single">
                                <img src="assets\image\clogos\4.png" alt="User 4">
                            </div>
                            <div class="uxb_about_avatar_single">
                                <img src="assets\image\clogos\5.png" alt="User 4">
                            </div>
                        </div>

                        <!-- <div class="uxb_about_avatar_plusmore"></div> -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>




<section class="stats-section" data-aos="fade-up" data-aos-duration="600">
    <div class="stats-container container">
        <div class="stat-box">
            <h2 class="counter" data-target="2100">0+</h2>
            <p>Successful Projects</p>
        </div>
        <div class="divider">
            <span class="dot light"></span>
            <span class="dot dark"></span>
        </div>
        <div class="stat-box">
            <h2 class="counter" data-target="50">0+</h2>
            <p>Expert Team</p>
        </div>
        <div class="divider">
            <span class="dot light"></span>
            <span class="dot dark"></span>
        </div>
        <div class="stat-box">
            <h2 class="counter" data-target="1550">0+</h2>
            <p>Happy Customers</p>
        </div>
        <div class="divider">
            <span class="dot light"></span>
            <span class="dot dark"></span>
        </div>
        <div class="stat-box">
            <h2 class="counter" data-target="14">0+</h2>
            <p>Years of Experience</p>
        </div>
    </div>
</section>

<section class="servicess">
    <div class="container">

        <div class="dd-section">
            <div class="dd-left">
                <span class="crm-subtitle" data-aos="fade-left" data-aos-duration="600">Our Services <img
                        src="assets/image/arrow-red.png" alt="arrow"></span>
                <h2 class="dd-heading" data-aos="fade-up" data-aos-duration="600">
                    Services We Provide
                </h2>

                <p class="dd-description" data-aos="fade-right" data-aos-duration="600">
                    We provide comprehensive digital services including
                    website and mobile app development, branding,
                    digital marketing, payment and API integration,
                    domain hosting, and IT infrastructure solutions
                    tailored
                    for modern businesses.
                </p>

                <div class="dd-image-row">
                    <div class="dd-image-box image-anime" data-aos="fade-up" data-aos-duration="600">
                        <img src="assets\image\home\1.webp">
                    </div>
                    <div class="dd-image-box image-anime" data-aos="fade-up" data-aos-duration="600">
                        <img src="assets\image\home\2.webp">
                    </div>
                </div>

                <div class="dd-bottom-text" data-aos="fade-right" data-aos-duration="600">
                    Our expert team creates innovative, scalable, and
                    result-driven solutions that strengthen your online
                    presence, enhance customer engagement, and
                    accelerate sustainable business growth in the
                    digital world.
                </div>
                <div class="rnHeroButtons btnn">
                    <a href="https://wa.me/918080803374" class="finbiz-btn aos-init aos-animate" data-aos="fade-right"
                        data-aos-duration="900" target="_blank">Let's Chat With Us
                    </a>
                    <a href="tel:+918080803374" class="btn btn-outline-info" target="_blank">Let's Call Us</a>
                </div>
            </div>

            <!-- RIGHT -->
            <div class="dd-right">

                <div class="dd-left-cards">

                    <!-- 01 -->
                    <a href="web-design.php">
                        <div class="dd-card" data-aos="fade-up" data-aos-duration="600">
                            <div class="dd-card-inner">
                                <div class="dd-card-front">
                                    <div class="dd-icon-box"><i class="fa-solid fa-laptop-code"></i></div>
                                    <small class="dd-card-number">01</small>
                                    <h3 class="dd-card-title">Web / App Development</h3>
                                    <p class="dd-card-text">
                                        Build scalable and high-performance web and mobile applications.
                                    </p>
                                </div>
                                <div class="dd-card-back">
                                    <img src="assets/image/home/ss1.webp">
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- 02 -->
                    <a href="shopify-website-development.php">
                        <div class="dd-card" data-aos="fade-up" data-aos-duration="600">
                            <div class="dd-card-inner">
                                <div class="dd-card-front" style="background-color: #0b2e59;color: #ffffff;">
                                    <div class="dd-icon-box" style="background-color:#ffffff">
                                        <i class="fa-solid fa-cart-shopping" style="color:#0b2e59"></i>
                                    </div>
                                    <small class="dd-card-number">02</small>
                                    <h3 class="dd-card-title" style="color:#ffffff">E-Commerce Development</h3>
                                    <p class="dd-card-text white">
                                        Create secure and scalable online stores to boost sales.
                                    </p>
                                </div>
                                <div class="dd-card-back">
                                    <img src="assets/image/home/ss2.webp">
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- 03 -->
                    <a href="branding.php">
                        <div class="dd-card" data-aos="fade-up" data-aos-duration="600">
                            <div class="dd-card-inner">
                                <div class="dd-card-front">
                                    <div class="dd-icon-box"><i class="fa-solid fa-palette"></i></div>
                                    <small class="dd-card-number">03</small>
                                    <h3 class="dd-card-title">Branding</h3>
                                    <p class="dd-card-text">
                                        Build strong brand identity that connects and stands out.
                                    </p>
                                </div>
                                <div class="dd-card-back">
                                    <img src="assets/image/home/ss3.webp">
                                </div>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="dd-right-cards" data-aos="fade-up" data-aos-duration="600">

                    <!-- 04 -->
                    <a href="digital-marketing.php">
                        <div class="dd-card">
                            <div class="dd-card-inner">
                                <div class="dd-card-front">
                                    <div class="dd-icon-box"><i class="fa-solid fa-chart-line"></i></div>
                                    <small class="dd-card-number">04</small>
                                    <h3 class="dd-card-title">Digital Marketing</h3>
                                    <p class="dd-card-text">
                                        Drive growth with data-driven marketing strategies.
                                    </p>
                                </div>
                                <div class="dd-card-back">
                                    <img src="assets\image\home\digitals.png">
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- 05 -->
                    <a href="social-media-marketing.php" target="_blank">
                        <div class="dd-card" data-aos="fade-up" data-aos-duration="600">
                            <div class="dd-card-inner">
                                <div class="dd-card-front">
                                    <div class="dd-icon-box"><i class="fa-brands fa-instagram"></i></div>
                                    <small class="dd-card-number">05</small>
                                    <h3 class="dd-card-title">Social Media Marketing</h3>
                                    <p class="dd-card-text">
                                        Boost engagement with creative social media campaigns.
                                    </p>
                                </div>
                                <div class="dd-card-back">
                                    <img src="assets\image\home\socails.png">
                                </div>
                            </div>
                        </div>
                    </a>

                </div>

            </div>
        </div>
</section>









<section class="medlaunch-wrapper ptb-60">
    <div class="container">
        <div class="section-heading crm-title text-center" data-aos="fade-up" data-aos-duration="600">
            <span class="crm-subtitle ">Why Technofra<img src="assets/image/arrow-red.png" alt="arrow"></span>
            <h2>Why Choose Us</h2>
        </div>
        <div class="medlaunch-grid " data-aos="fade-up" data-aos-duration="600">
            <div class="medlaunch-card medlaunch-info-card" data-aos="fade-up" data-aos-duration="600">
                <div class="medlaunch-icon"><i class="fa-solid fa-globe"></i></div>
                <h3 class="medlaunch-title">Innovative Solutions</h3>
                <p class="medlaunch-text">
                    We deliver smart and scalable digital solutions that help businesses grow faster, improve
                    efficiency, and build a strong online presence.
                </p>
            </div>

            <div class="medlaunch-card medlaunch-image-card" data-aos="fade-up" data-aos-duration="600">
                <img src="assets\image\home\support-team.webp" class="medlaunch-img"
                    alt="Technofra support team assisting clients in real time">
                <div class="medlaunch-image-content">
                    <div class="medlaunch-label">Real-Time Support Team</div>
                    <h3 class="medlaunch-title">Always-On Client Support</h3>
                    <p class="medlaunch-text">
                        Our responsive support specialists stay available at every stage to resolve issues faster,
                        maintain momentum, and keep your business running smoothly.
                    </p>

                </div>
            </div>

            <div class="medlaunch-card medlaunch-green-card" data-aos="fade-up" data-aos-duration="600">
                <h3 class="medlaunch-title">Collaborative Approach</h3>
                <p class="medlaunch-text">
                    We work closely with our clients to understand their goals, create tailored strategies, and deliver
                    impactful technology solutions with precision.
                </p>

                <div class="medlaunch-users">
                    <img src="https://i.pravatar.cc/100?img=4" class="medlaunch-user">
                    <img src="https://i.pravatar.cc/100?img=3" class="medlaunch-user">
                    <img src="https://i.pravatar.cc/100?img=2" class="medlaunch-user">
                    <img src="https://i.pravatar.cc/100?img=1" class="medlaunch-user">
                    <span class="medlaunch-count">25k</span>
                </div>
            </div>

            <div class="medlaunch-card medlaunch-image-card" data-aos="fade-up" data-aos-duration="600">
                <img src="assets\image\home\ourteam.webp" class="medlaunch-img"
                    alt="Technofra skilled team collaborating on digital solutions">
                <div class="medlaunch-image-content">
                    <div class="medlaunch-label">Our Skilled Team</div>
                    <h3 class="medlaunch-title">Expertise That Delivers</h3>
                    <p class="medlaunch-text">
                        Our designers, developers, and strategists combine practical experience with focused execution
                        to build polished solutions that align with your business goals.
                    </p>
                    <!-- <ul class="medlaunch-points">
                        <li>Cross-functional experts under one roof</li>
                        <li>Quality-driven execution from start to finish</li>
                        <li>Tailored strategies for measurable growth</li>
                    </ul> -->
                </div>
            </div>

        </div>
    </div>
</section>

<?php if ($bookCallStatus): ?>
<div class="eep-status-alert <?php echo htmlspecialchars($bookCallStatus['type']); ?>">
    <?php echo htmlspecialchars($bookCallStatus['message']); ?>
</div>
<?php endif; ?>

<section class="eep-hero" id="book-call-widget">
    <div class="eep-container container">
        <div class="eep-contact-wrap">
            <div class="eep-calendar-card">
                <div class="eep-calendar-head">
                    <div>
                        <div class="eep-calendar-title-row">
                            <div class="eep-calendar-icon">
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <h2 class="eep-calendar-title">Book A Call With Us</h2>
                        </div>
                        <p class="eep-calendar-sub pt-2">
                            Pick a date and time to connect with one of our expert team members
                        </p>
                    </div>
                </div>

                <div class="eep-calendar-box">
                    <div class="eep-calendar-nav">
                        <button id="prevMonth" class="eep-cal-btn" type="button">&#8249;</button>
                        <div id="monthLabel" class="eep-month-label">March 2026</div>
                        <button id="nextMonth" class="eep-cal-btn" type="button">&#8250;</button>
                    </div>

                    <div class="eep-calendar-week">
                        <span>Sun</span>
                        <span>Mon</span>
                        <span>Tue</span>
                        <span>Wed</span>
                        <span>Thu</span>
                        <span>Fri</span>
                        <span>Sat</span>
                    </div>

                    <div id="calendarGrid" class="eep-calendar-grid"></div>
                </div>

                <div class="eep-calendar-info">
                    <div id="selectedDatePill" class="eep-selected-date">
                        <span class="eep-pill-icon">
                            <i class="fa-solid fa-calendar-check"></i>
                        </span>
                        <span id="selectedDateText" class="eep-selected-date-text">Select date</span>
                    </div>

                    <div class="eep-time-picker-wrap">
                        <button id="timeTrigger" class="eep-time-trigger disabled" type="button">
                            <span class="eep-pill-icon">
                                <i class="fa-solid fa-clock"></i>
                            </span>
                            <span id="selectedTimeText" class="eep-time-text">Select Time</span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>

                        <div id="timeDropdown" class="eep-time-dropdown">
                            <div id="timeGrid" class="eep-time-grid"></div>
                        </div>
                    </div>
                </div>


                <div class="eep-calendar-actions text-center">
                    <!-- <a href="tel:+918080803374" class="eep-btn-outline">
                        <i class="fa-solid fa-phone"></i>
                        Connect Us +91 8080 80 3374
                    </a> -->

                    <a href="#book-call" class="eep-btn-green" id="bookCallBtn">
                        <i class="fa-solid fa-calendar-plus"></i>
                        Book A Call With Us
                    </a>
                </div>
            </div>
        </div>

        <div class="eep-right">
            <div class="eep-right-inner">
                <div class="eep-circle-wrap">
                    <div class="eep-circle eep-circle-1"></div>
                    <div class="eep-circle eep-circle-2"></div>
                    <div class="eep-circle eep-circle-3"></div>

                    <div class="eep-dot eep-dot-1"></div>
                    <div class="eep-dot eep-dot-2"></div>
                    <div class="eep-dot eep-dot-3"></div>
                </div>

                <div class="eep-center-circle"></div>
                <div class="eep-person">
                    <img src="assets/image/home/cont2.png" alt="Contact person" />
                </div>
            </div>
        </div>
    </div>
</section>

<div class="eep-book-modal" id="bookCallModal" aria-hidden="true">
    <div class="eep-book-modal-dialog">
        <div class="eep-book-modal-head">
            <div>
                <h3>Schedule Your Call</h3>
                <p>Fill your details and we will confirm your booked slot.</p>
            </div>
            <button type="button" class="eep-book-close" id="bookCallClose" aria-label="Close">&times;</button>
        </div>

        <form class="eep-book-form" action="book-call-handler.php" method="post">
            <div class="eep-book-summary">
                <strong>Date:</strong> <span id="modalSelectedDate">Not selected</span><br>
                <strong>Time:</strong> <span id="modalSelectedTime">Not selected</span>
            </div>

            <input type="hidden" name="booking_date" id="bookingDateInput">
            <input type="hidden" name="booking_time" id="bookingTimeInput">

            <div class="eep-book-field">
                <label for="bookCallName">Name</label>
                <input type="text" id="bookCallName" name="name" placeholder="Enter your name" required>
            </div>

            <div class="eep-book-field">
                <label for="bookCallEmail">Email</label>
                <input type="email" id="bookCallEmail" name="email" placeholder="Enter your email" required>
            </div>

            <div class="eep-book-field">
                <label for="bookCallPhone">Number</label>
                <input type="tel" id="bookCallPhone" name="phone" placeholder="Enter your number" required>
            </div>

            <button type="submit" class="eep-book-submit">Submit Booking</button>
        </form>
    </div>
</div>

<!-- <section class="indusSecWrap_v1">
    <div class="indusInnerBox_v1 container" data-aos="fade-up" data-aos-duration="600">
        <span class="crm-subtitle "> Our Industries <img src="assets/image/arrow-red.png" alt="arrow"> </span>
        <h2 class="indusHeadingTxt_v1">Industries We Serve</h2>

        <div class="indusGridFlex_v1" data-aos="fade-up" data-aos-duration="600">

            <div class="indusCardBox_v1">
                <div class="indusIconWrap_v1 clr_defence_v1"><i class="fa-solid fa-scale-balanced"></i></div>
                <div class="indusTitleTxt_v1">Attorney</div>
            </div>

            <div class="indusCardBox_v1">
                <div class="indusIconWrap_v1 clr_consumer_v1"><i class="fa-solid fa-user-gear"></i></div>
                <div class="indusTitleTxt_v1">Auto Repair</div>
            </div>

            <div class="indusCardBox_v1">
                <div class="indusIconWrap_v1 clr_aviation_v1"><i class="fa-solid fa-hard-hat"></i></div>
                <div class="indusTitleTxt_v1">Construction</div>
            </div>

            <div class="indusCardBox_v1">
                <div class="indusIconWrap_v1 clr_bank_v1"><i class="fa-solid fa-tooth"></i></div>
                <div class="indusTitleTxt_v1">Dental</div>
            </div>

            <div class="indusCardBox_v1">
                <div class="indusIconWrap_v1 clr_ayush_v1"><i class="fa-solid fa-golf-ball-tee"></i></div>
                <div class="indusTitleTxt_v1">Golf Cart</div>
            </div>

            <div class="indusCardBox_v1">
                <div class="indusIconWrap_v1 clr_auto_v1"><i class="fa-solid fa-fan"></i></div>
                <div class="indusTitleTxt_v1">HVAC</div>
            </div>

            <div class="indusCardBox_v1">
                <div class="indusIconWrap_v1 clr_agri_v1"><i class="fa-solid fa-tree"></i></div>
                <div class="indusTitleTxt_v1">Landscaping</div>
            </div>

            <div class="indusCardBox_v1">
                <div class="indusIconWrap_v1 clr_cement_v1"><i class="fa-solid fa-wrench"></i></div>
                <div class="indusTitleTxt_v1">Plumber</div>
            </div>

            <div class="indusCardBox_v1">
                <div class="indusIconWrap_v1 clr_ecom_v1"><i class="fa-solid fa-utensils"></i></div>
                <div class="indusTitleTxt_v1">Restaurant</div>
            </div>

            <div class="indusCardBox_v1">
                <div class="indusIconWrap_v1 clr_bio_v1"><i class="fa-solid fa-house"></i></div>
                <div class="indusTitleTxt_v1">Roofing</div>
            </div>

            <div class="indusCardBox_v1">
                <div class="indusIconWrap_v1 clr_autoComp_v1"><i class="fa-solid fa-truck"></i></div>
                <div class="indusTitleTxt_v1">Trucking</div>
            </div>

            <div class="indusCardBox_v1">
                <div class="indusIconWrap_v1 clr_chem_v1"><i class="fa-solid fa-bug"></i></div>
                <div class="indusTitleTxt_v1">Pest Control</div>
            </div>

        </div>

    </div>
</section> -->


<section class="tfxIndusSection">
    <div class="tfxIndusContainer container">
        <div class="section-heading crm-title text-center" data-aos="fade-up" data-aos-duration="600">
            <span class="crm-subtitle">Our Industries <img src="assets/image/arrow-red.png" alt="arrow"></span>
            <h2 class="white">Industries We Serve</h2>
        </div>
        <!-- <h2 class="tfxIndusHeading">Industries We Serve</h2>
        <p class="tfxIndusSubheading">Serving diverse industries with tailored digital solutions</p> -->

        <div class="tfxIndusSliderWrap">
            <button class="tfxIndusNav tfxIndusPrev" aria-label="Previous">
                <i class="fa-solid fa-chevron-left"></i>
            </button>

            <div class="tfxIndusViewport">
                <div class="tfxIndusTrack" id="tfxIndusTrack">

                    <!-- Clone Last Slide -->
                    <div class="tfxIndusSlide">
                        <div class="tfxIndusGrid">
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrRealEstate"><i class="fa-solid fa-building"></i></div>
                                <div class="tfxIndusTitle">Real Estate</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrHealthcare"><i class="fa-solid fa-stethoscope"></i></div>
                                <div class="tfxIndusTitle">Healthcare</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrEducation"><i class="fa-solid fa-graduation-cap"></i>
                                </div>
                                <div class="tfxIndusTitle">Education</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrFinance"><i class="fa-solid fa-money-bill-trend-up"></i>
                                </div>
                                <div class="tfxIndusTitle">Finance</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrTravel"><i class="fa-solid fa-plane-departure"></i></div>
                                <div class="tfxIndusTitle">Travel</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrLogistics"><i class="fa-solid fa-boxes-stacked"></i>
                                </div>
                                <div class="tfxIndusTitle">Logistics</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrBeauty"><i class="fa-solid fa-scissors"></i></div>
                                <div class="tfxIndusTitle">Beauty & Salon</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrFitness"><i class="fa-solid fa-dumbbell"></i></div>
                                <div class="tfxIndusTitle">Fitness & Gym</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrEvent"><i class="fa-solid fa-calendar-days"></i></div>
                                <div class="tfxIndusTitle">Event Management</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrRetail"><i class="fa-solid fa-store"></i></div>
                                <div class="tfxIndusTitle">Retail</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrManufacturing"><i class="fa-solid fa-industry"></i></div>
                                <div class="tfxIndusTitle">Manufacturing</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrIT"><i class="fa-solid fa-laptop-code"></i></div>
                                <div class="tfxIndusTitle">IT Services</div>
                            </div>
                        </div>
                    </div>

                    <!-- Original Slide 1 -->
                    <div class="tfxIndusSlide">
                        <div class="tfxIndusGrid">
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrAttorney"><i class="fa-solid fa-scale-balanced"></i>
                                </div>
                                <div class="tfxIndusTitle">Attorney</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrAutoRepair"><i class="fa-solid fa-user-gear"></i></div>
                                <div class="tfxIndusTitle">Auto Repair</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrConstruction"><i class="fa-solid fa-helmet-safety"></i>
                                </div>
                                <div class="tfxIndusTitle">Construction</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrDental"><i class="fa-solid fa-tooth"></i></div>
                                <div class="tfxIndusTitle">Dental</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrGolf"><i class="fa-solid fa-golf-ball-tee"></i></div>
                                <div class="tfxIndusTitle">Golf Cart</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrHvac"><i class="fa-solid fa-fan"></i></div>
                                <div class="tfxIndusTitle">HVAC</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrLandscaping"><i class="fa-solid fa-tree"></i></div>
                                <div class="tfxIndusTitle">Landscaping</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrPlumber"><i class="fa-solid fa-wrench"></i></div>
                                <div class="tfxIndusTitle">Plumber</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrRestaurant"><i class="fa-solid fa-utensils"></i></div>
                                <div class="tfxIndusTitle">Restaurant</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrRoofing"><i class="fa-solid fa-house"></i></div>
                                <div class="tfxIndusTitle">Roofing</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrTrucking"><i class="fa-solid fa-truck"></i></div>
                                <div class="tfxIndusTitle">Trucking</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrPest"><i class="fa-solid fa-bug"></i></div>
                                <div class="tfxIndusTitle">Pest Control</div>
                            </div>
                        </div>
                    </div>

                    <!-- Original Slide 2 -->
                    <div class="tfxIndusSlide">
                        <div class="tfxIndusGrid">
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrRealEstate"><i class="fa-solid fa-building"></i></div>
                                <div class="tfxIndusTitle">Real Estate</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrHealthcare"><i class="fa-solid fa-stethoscope"></i></div>
                                <div class="tfxIndusTitle">Healthcare</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrEducation"><i class="fa-solid fa-graduation-cap"></i>
                                </div>
                                <div class="tfxIndusTitle">Education</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrFinance"><i class="fa-solid fa-money-bill-trend-up"></i>
                                </div>
                                <div class="tfxIndusTitle">Finance</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrTravel"><i class="fa-solid fa-plane-departure"></i></div>
                                <div class="tfxIndusTitle">Travel</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrLogistics"><i class="fa-solid fa-boxes-stacked"></i>
                                </div>
                                <div class="tfxIndusTitle">Logistics</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrBeauty"><i class="fa-solid fa-scissors"></i></div>
                                <div class="tfxIndusTitle">Beauty & Salon</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrFitness"><i class="fa-solid fa-dumbbell"></i></div>
                                <div class="tfxIndusTitle">Fitness & Gym</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrEvent"><i class="fa-solid fa-calendar-days"></i></div>
                                <div class="tfxIndusTitle">Event Management</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrRetail"><i class="fa-solid fa-store"></i></div>
                                <div class="tfxIndusTitle">Retail</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrManufacturing"><i class="fa-solid fa-industry"></i></div>
                                <div class="tfxIndusTitle">Manufacturing</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrIT"><i class="fa-solid fa-laptop-code"></i></div>
                                <div class="tfxIndusTitle">IT Services</div>
                            </div>
                        </div>
                    </div>

                    <!-- Clone First Slide -->
                    <div class="tfxIndusSlide">
                        <div class="tfxIndusGrid">
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrAttorney"><i class="fa-solid fa-scale-balanced"></i>
                                </div>
                                <div class="tfxIndusTitle">Attorney</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrAutoRepair"><i class="fa-solid fa-user-gear"></i></div>
                                <div class="tfxIndusTitle">Auto Repair</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrConstruction"><i class="fa-solid fa-helmet-safety"></i>
                                </div>
                                <div class="tfxIndusTitle">Construction</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrDental"><i class="fa-solid fa-tooth"></i></div>
                                <div class="tfxIndusTitle">Dental</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrGolf"><i class="fa-solid fa-golf-ball-tee"></i></div>
                                <div class="tfxIndusTitle">Golf Cart</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrHvac"><i class="fa-solid fa-fan"></i></div>
                                <div class="tfxIndusTitle">HVAC</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrLandscaping"><i class="fa-solid fa-tree"></i></div>
                                <div class="tfxIndusTitle">Landscaping</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrPlumber"><i class="fa-solid fa-wrench"></i></div>
                                <div class="tfxIndusTitle">Plumber</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrRestaurant"><i class="fa-solid fa-utensils"></i></div>
                                <div class="tfxIndusTitle">Restaurant</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrRoofing"><i class="fa-solid fa-house"></i></div>
                                <div class="tfxIndusTitle">Roofing</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrTrucking"><i class="fa-solid fa-truck"></i></div>
                                <div class="tfxIndusTitle">Trucking</div>
                            </div>
                            <div class="tfxIndusCard">
                                <div class="tfxIndusIcon tfxClrPest"><i class="fa-solid fa-bug"></i></div>
                                <div class="tfxIndusTitle">Pest Control</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <button class="tfxIndusNav tfxIndusNext" aria-label="Next">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

        <div class="tfxIndusDots">
            <span class="tfxIndusDot active" data-index="1"></span>
            <span class="tfxIndusDot" data-index="2"></span>
        </div>
    </div>
</section>

<div class="mlp-containers ptb-60 ">
    <div class="container mlp-container">
        <div class="text-center">
            <span class="crm-subtitle ">Client Review<img src="assets/image/arrow-red.png" alt="arrow"></span>
            <h2 class="dd-heading text-center" data-aos="fade-up" data-aos-duration="600">
                Testimonials
            </h2>
        </div>

        <div class="mlp-grid">
            <div class="mlp-card" data-aos="fade-up" data-aos-duration="600">
                <div class="pb-20">
                    <img src="assets\image\home\tclient.webp" alt="">
                </div>
                <h3>Join Us And Transform Your Business With Smart Technology Solutions</h3>
                <p>Drive more growth and achieve success with innovative technology solutions.</p>
            </div>


            <div class="mlp-card mlp-testimonial-card" data-aos="fade-up" data-aos-duration="600">
                <div class="mlp-testimonial-box">
                    <div class="mlp-testimonial-track" id="testimonialTrack">

                        <div class="mlp-testimonial-item">
                            <img src="assets\image\home\t1.webp">
                            <p>Technofra delivered our website on time with excellent design and smooth functionality.
                            </p>
                            <p><img src="assets\image\clogos\4.png" alt="" class="clogo"></p>
                        </div>

                        <div class="mlp-testimonial-item">
                            <img src="assets\image\home\t2.webp">
                            <p>Their team provided great support and helped us grow our business digitally.</p>
                            <p><img src="assets\image\clogos\6.png" alt="" class="clogo"></p>
                        </div>

                        <div class="mlp-testimonial-item">
                            <img src="assets\image\home\t3.webp">
                            <p>We are very happy with the app development service and professional approach.</p>
                            <p> <img src="assets\image\clogos\1.png" alt="" class="clogo"></p>
                        </div>

                    </div>
                </div>
            </div>


            <div class="mlp-card" data-aos="fade-up" data-aos-duration="600">
                <div class="clc-wrapper">
                    <div class="clc-circle-box">
                        <div class="clc-ring clc-ring-outer">
                            <div class="clc-logo clc-o1"><img src="assets/image/clogos/1.png"></div>
                            <div class="clc-logo clc-o2"><img src="assets/image/clogos/2.png"></div>
                            <div class="clc-logo clc-o3"><img src="assets/image/clogos/3.png"></div>
                            <div class="clc-logo clc-o4"><img src="assets/image/clogos/4.png"></div>
                            <div class="clc-logo clc-o5"><img src="assets/image/clogos/5.png"></div>
                            <div class="clc-logo clc-o6"><img src="assets/image/clogos/6.png"></div>
                            <div class="clc-logo clc-o7"><img src="assets/image/clogos/17.png"></div>
                            <div class="clc-logo clc-o8"><img src="assets/image/clogos/18.png"></div>
                        </div>


                        <div class="clc-ring clc-ring-middle">
                            <div class="clc-logo clc-m1"><img src="assets/image/clogos/7.png"></div>
                            <div class="clc-logo clc-m2"><img src="assets/image/clogos/8.png"></div>
                            <div class="clc-logo clc-m3"><img src="assets/image/clogos/9.png"></div>
                            <div class="clc-logo clc-m4"><img src="assets/image/clogos/10.png"></div>
                            <div class="clc-logo clc-m5"><img src="assets/image/clogos/11.png"></div>
                            <div class="clc-logo clc-m6"><img src="assets/image/clogos/12.png"></div>
                        </div>


                        <div class="clc-ring clc-ring-inner">
                            <div class="clc-logo clc-i1"><img src="assets/image/clogos/13.png"></div>
                            <div class="clc-logo clc-i2"><img src="assets/image/clogos/14.png"></div>
                            <div class="clc-logo clc-i3"><img src="assets/image/clogos/15.png"></div>
                            <div class="clc-logo clc-i4"><img src="assets/image/clogos/16.png"></div>
                        </div>

                        <div class="clc-center"></div>

                    </div>
                    <h3 style="text-align:center;margin-top:20px;">
                        Serving Clients With Excellence
                    </h3>
                </div>
            </div>
        </div>


    </div>
</div>


<section class="faq-section ptb-60">
    <div class="container">
        <div class="row justify-content-between">
            <div class="section-heading text-center" data-aos="fade-up" data-aos-duration="600">
                <span class="crm-subtitle">FAQ<img src="assets/image/arrow-red.png" alt="arrow"></span>
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="col-lg-12">
                <div class="accordion-faq-content-wrap">
                    <div id="faq-accordion-1">
                        <div class="accordion faq-accordion " id="accordionExample-2" data-aos="fade-up"
                            data-aos-duration="900">
                            <div class="accordion-item border border-2 active">
                                <h5 class="accordion-header" id="faq-2-1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2-1" aria-expanded="false">
                                        What services does Technofra provide?
                                    </button>
                                </h5>
                                <div id="collapse-2-1" class="accordion-collapse collapse " aria-labelledby="faq-2-1"
                                    data-bs-parent="#accordionExample-2">
                                    <div class="accordion-body">
                                        Technofra provides a wide range of digital solutions including website design
                                        and development, mobile app development, branding, digital marketing, domain and
                                        hosting services, E-Commerce Websites, Social Media Marketing and IT
                                        infrastructure solutions.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border border-2" data-aos="fade-up" data-aos-duration="600">
                                <h5 class="accordion-header" id="faq-2-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2-2" aria-expanded="false">
                                        Do you provide custom website design?
                                    </button>
                                </h5>
                                <div id="collapse-2-2" class="accordion-collapse collapse" aria-labelledby="faq-2-2"
                                    data-bs-parent="#accordionExample-2">
                                    <div class="accordion-body">
                                        Yes, we create fully customized website designs tailored to your brand, business
                                        goals, and target audience to ensure a unique and professional online presence.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border border-2" data-aos="fade-up" data-aos-duration="600">
                                <h5 class="accordion-header" id="faq-2-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2-3" aria-expanded="false">
                                        Do you develop mobile applications?
                                    </button>
                                </h5>
                                <div id="collapse-2-3" class="accordion-collapse collapse" aria-labelledby="faq-2-3"
                                    data-bs-parent="#accordionExample-2">
                                    <div class="accordion-body">
                                        Yes, Technofra develops mobile applications for both Android and iOS platforms,
                                        helping businesses reach customers through mobile devices.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item border border-2" data-aos="fade-up" data-aos-duration="600">
                                <h5 class="accordion-header" id="faq-2-4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2-4" aria-expanded="false">
                                        Do you offer domain registration and hosting services?
                                    </button>
                                </h5>
                                <div id="collapse-2-4" class="accordion-collapse collapse" aria-labelledby="faq-2-4"
                                    data-bs-parent="#accordionExample-2">
                                    <div class="accordion-body">
                                        Yes, we provide domain registration, secure web hosting, SSL certificates, and
                                        professional business email services.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item border border-2" data-aos="fade-up" data-aos-duration="600">
                                <h5 class="accordion-header" id="faq-2-5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2-5" aria-expanded="false">
                                        Can you redesign my existing website?
                                    </button>
                                </h5>
                                <div id="collapse-2-5" class="accordion-collapse collapse" aria-labelledby="faq-2-5"
                                    data-bs-parent="#accordionExample-2">
                                    <div class="accordion-body">
                                        Absolutely. If your current website is outdated or not performing well, we can
                                        redesign it with a modern design, improved performance, and better user
                                        experience.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item border border-2" data-aos="fade-up" data-aos-duration="600">
                                <h5 class="accordion-header" id="faq-2-6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2-6" aria-expanded="false">
                                        Will my website be mobile-friendly and SEO optimized?
                                    </button>
                                </h5>
                                <div id="collapse-2-6" class="accordion-collapse collapse" aria-labelledby="faq-2-6"
                                    data-bs-parent="#accordionExample-2">
                                    <div class="accordion-body">
                                        Yes, all our websites are responsive, fast-loading, and built with SEO best
                                        practices to ensure better performance and rankings.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border border-2" data-aos="fade-up" data-aos-duration="600">
                                <h5 class="accordion-header" id="faq-2-7">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2-7" aria-expanded="false">
                                        What industries do you work with?
                                    </button>
                                </h5>
                                <div id="collapse-2-7" class="accordion-collapse collapse" aria-labelledby="faq-2-7"
                                    data-bs-parent="#accordionExample-2">
                                    <div class="accordion-body">
                                        We work with startups, businesses, and enterprises across various industries
                                        such as e-commerce, education, corporate, and service-based sectors.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border border-2" data-aos="fade-up" data-aos-duration="600">
                                <h5 class="accordion-header" id="faq-2-8">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2-8" aria-expanded="false">
                                        Do you provide payment gateway and API integrations?
                                    </button>
                                </h5>
                                <div id="collapse-2-8" class="accordion-collapse collapse" aria-labelledby="faq-2-8"
                                    data-bs-parent="#accordionExample-2">
                                    <div class="accordion-body">
                                        Yes, we integrate secure payment gateways and APIs such as WhatsApp, email, and
                                        OTP systems to streamline your business operations.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border border-2" data-aos="fade-up" data-aos-duration="600">
                                <h5 class="accordion-header" id="faq-2-9">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2-9" aria-expanded="false">
                                        Is my data and project information secure?
                                    </button>
                                </h5>
                                <div id="collapse-2-9" class="accordion-collapse collapse" aria-labelledby="faq-2-9"
                                    data-bs-parent="#accordionExample-2">
                                    <div class="accordion-body">
                                        Yes, we follow strict confidentiality and security practices to ensure your data
                                        and project details remain protected.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border border-2" data-aos="fade-up" data-aos-duration="600">
                                <h5 class="accordion-header" id="faq-2-10">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2-10" aria-expanded="false">
                                        Why should I choose Technofra?
                                    </button>
                                </h5>
                                <div id="collapse-2-10" class="accordion-collapse collapse" aria-labelledby="faq-2-10"
                                    data-bs-parent="#accordionExample-2">
                                    <div class="accordion-body">
                                        Technofra combines expertise, customized solutions, and a client-first approach
                                        to deliver high-quality digital products that drive real business results.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="blog10 ptb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center" data-aos="fade-up" data-aos-duration="600">
                <div class=" crm-title">
                    <span class="crm-subtitle ">Blog & News <img src="assets/image/arrow-red.png" alt="arrow"></span>
                    <h2>
                        See Our Latest Blog & News
                    </h2>

                </div>
            </div>
        </div>

        <div class="space30"></div>
        <div class="home-blog-slider" data-aos="fade-up" data-aos-duration="600">
            <div class="swiper home-blog-swiper" id="homeBlogSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="cyber-single-article p-3 border">
                            <div class="image image-anime">
                                <img src="assets/image/home/blog01.webp" alt="image">
                            </div>
                            <div class="article-content">
                                <div class="article-info d-flex py-3">
                                    <div class="pe-3">
                                        <a href="https://technofra.in/blog/" class="text-decoration-none">
                                            <i class="fas fa-user pe-2"></i>
                                            <span class="text-muted">Admin</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="https://technofra.in/blog/" class="text-decoration-none">
                                            <i class="fas fa-calendar pe-2"></i>
                                            <span class="text-muted">May 3, 2024</span>
                                        </a>
                                    </div>
                                </div>
                                <a href="https://technofra.in/blog/" class="text-decoration-none">
                                    <h2 class="h5 article-title limit-2-line-text">
                                        "The Complete Guide to App Development: From Idea to Launch"
                                    </h2>
                                </a>
                                <a href="https://technofra.in/blog/" class="link-with-icon text-decoration-none">Read More
                                    <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="cyber-single-article p-3 border">
                            <div class="image image-anime">
                                <img src="assets/image/home/blog02.webp" alt="image">
                            </div>
                            <div class="article-content">
                                <div class="article-info d-flex py-3">
                                    <div class="pe-3">
                                        <a href="https://technofra.in/blog/" class="text-decoration-none">
                                            <i class="fas fa-user pe-2"></i>
                                            <span class="text-muted">Admin</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="https://technofra.in/blog/" class="text-decoration-none">
                                            <i class="fas fa-calendar pe-2"></i>
                                            <span class="text-muted">October 13, 2024</span>
                                        </a>
                                    </div>
                                </div>
                                <a href="https://technofra.in/blog/" class="text-decoration-none">
                                    <h2 class="h5 article-title limit-2-line-text">
                                        "CodeCraft: Crafting the Web - Insights, Tips, and Tutorials for Modern Web
                                        Development"
                                    </h2>
                                </a>
                                <a href="https://technofra.in/blog/" class="link-with-icon text-decoration-none">Read More
                                    <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="cyber-single-article p-3 border">
                            <div class="image image-anime">
                                <img src="assets/image/home/blog03.webp" alt="image">
                            </div>
                            <div class="article-content">
                                <div class="article-info d-flex py-3">
                                    <div class="pe-3">
                                        <a href="https://technofra.in/blog/" class="text-decoration-none">
                                            <i class="fas fa-user pe-2"></i>
                                            <span class="text-muted">Admin</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="https://technofra.in/blog/" class="text-decoration-none">
                                            <i class="fas fa-calendar pe-2"></i>
                                            <span class="text-muted">May 20, 2023</span>
                                        </a>
                                    </div>
                                </div>
                                <a href="https://technofra.in/blog/" class="text-decoration-none">
                                    <h2 class="h5 article-title limit-2-line-text">
                                        "Exploring the Latest Trends in IT: A Guide to the Hottest Technologies"
                                    </h2>
                                </a>
                                <a href="https://technofra.in/blog/" class="link-with-icon text-decoration-none">Read More
                                    <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                      <div class="swiper-slide">
                        <div class="cyber-single-article p-3 border">
                            <div class="image image-anime">
                                <img src="assets/image/home/blog03.webp" alt="image">
                            </div>
                            <div class="article-content">
                                <div class="article-info d-flex py-3">
                                    <div class="pe-3">
                                        <a href="https://technofra.in/blog/" class="text-decoration-none">
                                            <i class="fas fa-user pe-2"></i>
                                            <span class="text-muted">Admin</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="https://technofra.in/blog/" class="text-decoration-none">
                                            <i class="fas fa-calendar pe-2"></i>
                                            <span class="text-muted">May 20, 2023</span>
                                        </a>
                                    </div>
                                </div>
                                <a href="https://technofra.in/blog/" class="text-decoration-none">
                                    <h2 class="h5 article-title limit-2-line-text">
                                        "Exploring the Latest Trends in IT: A Guide to the Hottest Technologies"
                                    </h2>
                                </a>
                                <a href="https://technofra.in/blog/" class="link-with-icon text-decoration-none">Read More
                                    <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                      <div class="swiper-slide">
                        <div class="cyber-single-article p-3 border">
                            <div class="image image-anime">
                                <img src="assets/image/home/blog03.webp" alt="image">
                            </div>
                            <div class="article-content">
                                <div class="article-info d-flex py-3">
                                    <div class="pe-3">
                                        <a href="https://technofra.in/blog/" class="text-decoration-none">
                                            <i class="fas fa-user pe-2"></i>
                                            <span class="text-muted">Admin</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="https://technofra.in/blog/" class="text-decoration-none">
                                            <i class="fas fa-calendar pe-2"></i>
                                            <span class="text-muted">May 20, 2023</span>
                                        </a>
                                    </div>
                                </div>
                                <a href="https://technofra.in/blog/" class="text-decoration-none">
                                    <h2 class="h5 article-title limit-2-line-text">
                                        "Exploring the Latest Trends in IT: A Guide to the Hottest Technologies"
                                    </h2>
                                </a>
                                <a href="https://technofra.in/blog/" class="link-with-icon text-decoration-none">Read More
                                    <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                      <div class="swiper-slide">
                        <div class="cyber-single-article p-3 border">
                            <div class="image image-anime">
                                <img src="assets/image/home/blog03.webp" alt="image">
                            </div>
                            <div class="article-content">
                                <div class="article-info d-flex py-3">
                                    <div class="pe-3">
                                        <a href="https://technofra.in/blog/" class="text-decoration-none">
                                            <i class="fas fa-user pe-2"></i>
                                            <span class="text-muted">Admin</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="https://technofra.in/blog/" class="text-decoration-none">
                                            <i class="fas fa-calendar pe-2"></i>
                                            <span class="text-muted">May 20, 2023</span>
                                        </a>
                                    </div>
                                </div>
                                <a href="https://technofra.in/blog/" class="text-decoration-none">
                                    <h2 class="h5 article-title limit-2-line-text">
                                        "Exploring the Latest Trends in IT: A Guide to the Hottest Technologies"
                                    </h2>
                                </a>
                                <a href="https://technofra.in/blog/" class="link-with-icon text-decoration-none">Read More
                                    <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-blog-controls">
                <!-- <button class="home-blog-nav home-blog-prev" type="button" aria-label="Previous blogs">
                    <i class="fas fa-arrow-left"></i>
                </button> -->
                <div class="home-blog-pagination"></div>
                <!-- <button class="home-blog-nav home-blog-next" type="button" aria-label="Next blogs">
                    <i class="fas fa-arrow-right"></i>
                </button> -->
            </div>
        </div>
    </div>
</div>


<script>
document.addEventListener("DOMContentLoaded", () => {
    const scrollContainers = document.querySelectorAll("#infiniteScroll--left");

    if (!scrollContainers.length) {
        return;
    }

    scrollContainers.forEach((container) => {
        let isScrollingPaused = false;

        // Function to check if the first article is fully out of view
        function isElementOutOfViewport(el) {
            const rect = el.getBoundingClientRect();
            return rect.right <= 0; // Returns true if the element has moved completely out of view
        }

        // Function to move the first article to the end
        function moveFirstArticleToEnd() {
            const firstArticle = container.querySelector("article");
            if (isElementOutOfViewport(firstArticle)) {
                container.appendChild(firstArticle); // Move first article to the end
                container.scrollLeft -= firstArticle.offsetWidth; // Adjust scroll position
            }
        }

        // Function to handle continuous scrolling
        function scrollContainer() {
            if (!isScrollingPaused) {
                container.scrollLeft += 1; // Scroll slowly to the right
                moveFirstArticleToEnd(); // Check if the first article needs to be moved to the end
            }
        }

        // Pause scrolling when hovering over an article
        function pauseScrolling() {
            isScrollingPaused = true;
        }

        // Resume scrolling when the mouse leaves an article
        function resumeScrolling() {
            isScrollingPaused = false;
        }

        // Add hover event listeners to all articles
        const articles = container.querySelectorAll("article");
        articles.forEach((article) => {
            article.addEventListener("mouseenter", pauseScrolling);
            article.addEventListener("mouseleave", resumeScrolling);
        });

        // Start the scrolling interval
        setInterval(scrollContainer, 15);
    });
});
</script>

<script>
const counters = document.querySelectorAll('.counter');

const startCounting = (counter) => {
    const target = +counter.getAttribute('data-target');
    let count = 0;
    const speed = 200;
    const increment = target / speed;

    const updateCount = () => {
        if (count < target) {
            count += increment;
            counter.innerText = Math.ceil(count) + "+";
            requestAnimationFrame(updateCount);
        } else {
            counter.innerText = target + "+";
        }
    };

    updateCount();
};

// Trigger when section is visible
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            startCounting(entry.target);
            observer.unobserve(entry.target);
        }
    });
}, {
    threshold: 0.5
});

counters.forEach(counter => {
    observer.observe(counter);
});
</script>
<script>
const tfFaqItems = document.querySelectorAll(".tf-faq-item");

tfFaqItems.forEach(item => {
    item.querySelector(".tf-faq-question").addEventListener("click", () => {

        tfFaqItems.forEach(el => {
            if (el !== item) {
                el.classList.remove("active");
                el.querySelector(".tf-faq-icon").textContent = "+";
            }
        });

        item.classList.toggle("active");

        const icon = item.querySelector(".tf-faq-icon");
        icon.textContent = item.classList.contains("active") ? "−" : "+";
    });
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {

    const counters = document.querySelectorAll(".mlp-counter");

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {

                const counter = entry.target;
                const target = parseInt(counter.getAttribute("data-target"));
                const suffix = counter.getAttribute("data-suffix") || "";
                let count = 0;
                const increment = target / 80;

                function updateCounter() {
                    count += increment;

                    if (count < target) {
                        counter.innerText = Math.ceil(count) + suffix;
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.innerText = target + suffix;
                    }
                }

                updateCounter();
                observer.unobserve(counter); // ek baar hi chalega
            }
        });
    }, {
        threshold: 0.6
    });

    counters.forEach(counter => {
        observer.observe(counter);
    });

});
</script>



<script>
/* ONE TESTIMONIAL AT A TIME - SMOOTH/SEAMLESS LOOP */
const track = document.getElementById("testimonialTrack");
const testimonialCard = document.querySelector(".mlp-testimonial-card");
const realSlides = track ? Array.from(track.querySelectorAll(".mlp-testimonial-item")) : [];
const intervalMs = 1800;
const transitionMs = 500;
let timer = null;
let index = 0;
let isAnimating = false;
let isHovered = false;

function stopSlider() {
    if (timer) {
        clearInterval(timer);
        timer = null;
    }
}

function applyPosition(withTransition = true) {
    if (!track) return;
    track.style.transition = withTransition ? `transform ${transitionMs}ms ease` : "none";
    track.style.transform = `translateX(-${index * 100}%)`;
}

function nextSlide() {
    if (!track || realSlides.length <= 1 || isAnimating) return;
    isAnimating = true;
    index += 1;
    applyPosition(true);
}

function startSlider() {
    if (!track || realSlides.length <= 1 || isHovered || document.hidden) return;
    stopSlider();
    timer = setInterval(nextSlide, intervalMs);
}

function pauseSlider() {
    if (!track || realSlides.length <= 1) return;
    isHovered = true;
    stopSlider();
}

function resumeSlider() {
    if (!track || realSlides.length <= 1) return;
    isHovered = false;
    startSlider();
}

if (track && realSlides.length) {
    if (realSlides.length > 1) {
        const firstClone = realSlides[0].cloneNode(true);
        firstClone.setAttribute("aria-hidden", "true");
        track.appendChild(firstClone);
    }

    applyPosition(false);
    startSlider();

    track.addEventListener("transitionend", () => {
        if (realSlides.length <= 1) return;

        if (index === realSlides.length) {
            index = 0;
            applyPosition(false);
        }

        requestAnimationFrame(() => {
            isAnimating = false;
        });
    });

    window.addEventListener("resize", () => {
        applyPosition(false);
    });

    if (testimonialCard) {
        testimonialCard.addEventListener("mouseenter", pauseSlider);
        testimonialCard.addEventListener("mouseleave", resumeSlider);
    }

    document.addEventListener("visibilitychange", () => {
        if (document.hidden) {
            stopSlider();
        } else if (!isHovered) {
            startSlider();
        }
    });
}

/* STATS COUNT-UP */
const countEls = Array.from(document.querySelectorAll(".mlp-count"));
const statsWrap = document.querySelector(".mlp-stats");
let hasCounted = false;

function formatCount(value) {
    return value.toLocaleString("en-US");
}

function runCountUp() {
    if (hasCounted || !countEls.length) return;
    hasCounted = true;

    countEls.forEach((el) => {
        const target = Number(el.dataset.target || 0);
        const suffix = el.dataset.suffix || "";
        const duration = 1400;
        const start = performance.now();

        function tick(now) {
            const progress = Math.min((now - start) / duration, 1);
            const current = Math.round(target * progress);
            el.textContent = `${formatCount(current)}${suffix}`;
            if (progress < 1) requestAnimationFrame(tick);
        }

        requestAnimationFrame(tick);
    });
}

if (statsWrap) {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    runCountUp();
                    observer.disconnect();
                }
            });
        }, {
            threshold: 0.35
        }
    );
    observer.observe(statsWrap);
} else {
    runCountUp();
}
</script>




<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
const homeBlogSwiperElement = document.getElementById("homeBlogSwiper");

if (homeBlogSwiperElement && typeof Swiper !== "undefined") {
    const totalBlogSlides = homeBlogSwiperElement.querySelectorAll(".swiper-slide").length;

    new Swiper(homeBlogSwiperElement, {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 24,
        speed: 900,
        rewind: totalBlogSlides > 3,
        watchOverflow: true,
        autoplay: totalBlogSlides > 3 ? {
            delay: 3500,
            disableOnInteraction: false,
            pauseOnMouseEnter: true
        } : false,
        pagination: {
            el: ".home-blog-pagination",
            clickable: true
        },
        navigation: {
            nextEl: ".home-blog-next",
            prevEl: ".home-blog-prev"
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                slidesPerGroup: 2
            },
            992: {
                slidesPerView: 3,
                slidesPerGroup: 3
            }
        }
    });
}
</script>

<script>
const rnHeroSlides = document.querySelectorAll(".rnHeroSlide");
const rnHeroNext = document.querySelector(".rnHeroNext");
const rnHeroPrev = document.querySelector(".rnHeroPrev");
const rnHeroTabs = document.querySelectorAll(".rnHeroTabItem");

let rnHeroIndex = 0;
let rnHeroAutoSlide;

function rnHeroPauseAllVideos() {
    rnHeroSlides.forEach((slide) => {
        const video = slide.querySelector("video");
        if (video) {
            video.pause();
            video.currentTime = 0;
        }
    });
}

function rnHeroPlayActiveVideo() {
    const activeVideo = rnHeroSlides[rnHeroIndex].querySelector("video");
    if (activeVideo) {
        activeVideo.play().catch(() => {});
    }
}

function rnHeroShowSlide(i) {
    rnHeroSlides[rnHeroIndex].classList.remove("rnHeroActive");
    rnHeroTabs[rnHeroIndex].classList.remove("rnHeroActive");

    rnHeroIndex = i;

    rnHeroSlides[rnHeroIndex].classList.add("rnHeroActive");
    rnHeroTabs[rnHeroIndex].classList.add("rnHeroActive");

    rnHeroPauseAllVideos();
    rnHeroPlayActiveVideo();
}

function rnHeroNextSlide() {
    let i = rnHeroIndex + 1;
    if (i >= rnHeroSlides.length) i = 0;
    rnHeroShowSlide(i);
}

function rnHeroPrevSlide() {
    let i = rnHeroIndex - 1;
    if (i < 0) i = rnHeroSlides.length - 1;
    rnHeroShowSlide(i);
}

function rnHeroStartAutoSlide() {
    rnHeroAutoSlide = setInterval(rnHeroNextSlide, 6000);
}

function rnHeroResetAutoSlide() {
    clearInterval(rnHeroAutoSlide);
    rnHeroStartAutoSlide();
}

rnHeroTabs.forEach((tab) => {
    tab.addEventListener("click", () => {
        const slideIndex = Number(tab.getAttribute("data-slide"));
        rnHeroShowSlide(slideIndex);
        rnHeroResetAutoSlide();
    });
});

rnHeroNext.addEventListener("click", () => {
    rnHeroNextSlide();
    rnHeroResetAutoSlide();
});

rnHeroPrev.addEventListener("click", () => {
    rnHeroPrevSlide();
    rnHeroResetAutoSlide();
});

document.querySelectorAll(".rnCenterSwiperWrap .single-logo").forEach((logo) => {
    logo.addEventListener("click", function(e) {
        e.preventDefault();

        const link = this.getAttribute("data-link");
        if (link && link !== "#") {
            window.location.href = link;
        }
    });
});

rnHeroShowSlide(0);
rnHeroStartAutoSlide();
</script>


<script>
(function() {
    const monthLabel = document.getElementById("monthLabel");
    const calendarGrid = document.getElementById("calendarGrid");
    const selectedDateText = document.getElementById("selectedDateText");
    const selectedTimeText = document.getElementById("selectedTimeText");
    const prevMonth = document.getElementById("prevMonth");
    const nextMonth = document.getElementById("nextMonth");
    const timeTrigger = document.getElementById("timeTrigger");
    const timeDropdown = document.getElementById("timeDropdown");
    const timeGrid = document.getElementById("timeGrid");
    const bookCallBtn = document.getElementById("bookCallBtn");
    const bookCallModal = document.getElementById("bookCallModal");
    const bookCallClose = document.getElementById("bookCallClose");
    const modalSelectedDate = document.getElementById("modalSelectedDate");
    const modalSelectedTime = document.getElementById("modalSelectedTime");
    const bookingDateInput = document.getElementById("bookingDateInput");
    const bookingTimeInput = document.getElementById("bookingTimeInput");

    const now = new Date();
    const today = new Date(now.getFullYear(), now.getMonth(), now.getDate());
    let viewYear = now.getFullYear();
    let viewMonth = now.getMonth();
    let selectedDate = null;
    let selectedTime = null;
    let bookedSlots = [];

    function normalizeDate(date) {
        return new Date(date.getFullYear(), date.getMonth(), date.getDate());
    }

    function sameDay(a, b) {
        return (
            a &&
            b &&
            a.getDate() === b.getDate() &&
            a.getMonth() === b.getMonth() &&
            a.getFullYear() === b.getFullYear()
        );
    }

    function formatDate(date) {
        return date.toLocaleDateString("en-US", {
            weekday: "short",
            day: "numeric",
            month: "short",
            year: "numeric",
        });
    }

    function formatTime24(value) {
        return value;
    }

    function getDateKey(date) {
        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, "0");
        const day = String(date.getDate()).padStart(2, "0");
        return `${year}-${month}-${day}`;
    }

    function openModal() {
        bookCallModal.classList.add("show");
        bookCallModal.setAttribute("aria-hidden", "false");
        document.body.style.overflow = "hidden";
    }

    function closeModal() {
        bookCallModal.classList.remove("show");
        bookCallModal.setAttribute("aria-hidden", "true");
        document.body.style.overflow = "";
    }

    function updateBookingSummary() {
        modalSelectedDate.textContent = selectedDate ? formatDate(selectedDate) : "Not selected";
        modalSelectedTime.textContent = selectedTime ? formatTime24(selectedTime) : "Not selected";
        bookingDateInput.value = selectedDate ? getDateKey(selectedDate) : "";
        bookingTimeInput.value = selectedTime || "";
    }

    async function fetchBookedSlots(dateKey) {
        bookedSlots = [];

        try {
            const response = await fetch(`get-booked-slots.php?date=${encodeURIComponent(dateKey)}`, {
                headers: {
                    "X-Requested-With": "XMLHttpRequest"
                }
            });
            const data = await response.json();

            if (data && data.success && Array.isArray(data.slots)) {
                bookedSlots = data.slots;
            }
        } catch (error) {
            bookedSlots = [];
        }
    }

    function renderTimeSlots() {
        timeGrid.innerHTML = "";

        const selectedIsToday = selectedDate && sameDay(selectedDate, today);
        const currentHour = now.getHours();
        const currentMinute = now.getMinutes();

        for (let hour = 0; hour < 24; hour++) {
            const option = document.createElement("button");
            const hourValue = String(hour).padStart(2, "0");
            const timeValue = `${hourValue}:00`;
            const isPastTime = selectedIsToday && (hour < currentHour || (hour === currentHour && currentMinute >
                0));
            const isBooked = bookedSlots.includes(timeValue);

            option.type = "button";
            option.className = "eep-time-option";
            option.textContent = isBooked ? `${timeValue} - Already Booked` : timeValue;
            option.dataset.timeValue = timeValue;

            if (selectedTime === timeValue) {
                option.classList.add("active");
            }

            if (isPastTime || isBooked) {
                option.disabled = true;
            }

            option.addEventListener("click", () => {
                if (option.disabled) {
                    return;
                }

                selectedTime = timeValue;
                selectedTimeText.textContent = formatTime24(selectedTime);
                timeDropdown.classList.remove("show");
                updateBookingSummary();
                renderTimeSlots();
            });

            timeGrid.appendChild(option);
        }
    }

    function renderCalendar() {
        const firstDay = new Date(viewYear, viewMonth, 1);
        const lastDate = new Date(viewYear, viewMonth + 1, 0).getDate();
        const startDay = firstDay.getDay();

        monthLabel.textContent = firstDay.toLocaleDateString("en-US", {
            month: "long",
            year: "numeric",
        });

        calendarGrid.innerHTML = "";

        for (let i = 0; i < startDay; i++) {
            const empty = document.createElement("div");
            empty.className = "eep-calendar-empty";
            calendarGrid.appendChild(empty);
        }

        for (let day = 1; day <= lastDate; day++) {
            const btn = document.createElement("button");
            const thisDate = new Date(viewYear, viewMonth, day);
            const normalizedDate = normalizeDate(thisDate);
            const isToday = sameDay(thisDate, today);
            const isSelected = sameDay(thisDate, selectedDate);
            const isPastDate = normalizedDate < today;
            const isSunday = thisDate.getDay() === 0;

            btn.textContent = day;
            btn.type = "button";
            btn.className = "eep-calendar-day";

            if (isToday) btn.classList.add("eep-is-today");
            if (isSelected) btn.classList.add("eep-is-selected");
            if (isPastDate || isSunday) btn.disabled = true;

            btn.addEventListener("click", async () => {
                if (isPastDate || isSunday) {
                    return;
                }

                selectedDate = thisDate;
                selectedDateText.textContent = formatDate(thisDate);

                timeTrigger.classList.remove("disabled");
                timeDropdown.classList.remove("show");

                selectedTime = null;
                selectedTimeText.textContent = "Select Time";
                await fetchBookedSlots(getDateKey(thisDate));
                updateBookingSummary();
                renderTimeSlots();

                renderCalendar();
            });

            calendarGrid.appendChild(btn);
        }
    }

    prevMonth.addEventListener("click", () => {
        const previousMonth = new Date(viewYear, viewMonth - 1, 1);
        if (previousMonth < new Date(today.getFullYear(), today.getMonth(), 1)) {
            return;
        }

        viewMonth--;
        if (viewMonth < 0) {
            viewMonth = 11;
            viewYear--;
        }
        renderCalendar();
    });

    nextMonth.addEventListener("click", () => {
        viewMonth++;
        if (viewMonth > 11) {
            viewMonth = 0;
            viewYear++;
        }
        renderCalendar();
    });

    timeTrigger.addEventListener("click", () => {
        if (!selectedDate) return;
        renderTimeSlots();
        timeDropdown.classList.toggle("show");
    });

    document.addEventListener("click", (e) => {
        if (
            !timeTrigger.contains(e.target) &&
            !timeDropdown.contains(e.target)
        ) {
            timeDropdown.classList.remove("show");
        }
    });

    bookCallBtn.addEventListener("click", function(e) {
        e.preventDefault();

        if (!selectedDate || !selectedTime) {
            alert("Please select a date and time first.");
            return;
        }

        if (bookedSlots.includes(selectedTime)) {
            alert("This time slot is already booked. Please select another time.");
            selectedTime = null;
            selectedTimeText.textContent = "Select Time";
            updateBookingSummary();
            renderTimeSlots();
            return;
        }

        updateBookingSummary();
        openModal();
    });

    bookCallClose.addEventListener("click", closeModal);
    bookCallModal.addEventListener("click", (e) => {
        if (e.target === bookCallModal) {
            closeModal();
        }
    });

    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape" && bookCallModal.classList.contains("show")) {
            closeModal();
        }
    });

    updateBookingSummary();
    renderTimeSlots();
    renderCalendar();
})();
</script>
<?php include 'footer.php'; ?>
