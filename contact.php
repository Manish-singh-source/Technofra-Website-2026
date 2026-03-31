<?php include 'header.php'; ?>
<title>Contact Technofra – Let’s Build Something Amazing</title>
<meta property="og:title" content="Contact Technofra – Let’s Build Something Amazing  ">
<meta property="og:description"
    content="Have a project in mind? Get in touch with Technofra for expert web design, development, and digital marketing solutions.">
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

<style>
/* General Calendar Container */
.calendar-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    border-radius: 12px;

}

.calendar-content {}

.calendar-wrapper {
    width: 300px;
    height: 280px;
    overflow: hidden;
    position: relative;
    border-radius: 10px;
}

.calendar-content {
    background: #fff;
    padding: 20px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    width: 300px;
    text-align: center;
    position: absolute;
    bottom: -20%;
    transition: all 0.4s ease-in-out;
    border-radius: 10px;
}

/* 🎯 Hover Effect - Move Upwards */
.calendar-wrapper:hover .calendar-content {
    bottom: 0;
    box-shadow: 0px 15px 40px rgba(0, 0, 0, 0.2);
}

/* Calendar Title */
.calendar-title {
    font-size: 18px;
    font-weight: 600;
    color: #333;
    margin-bottom: 10px;
}

/* Calendar Header */
.calendar-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 16px;
    font-weight: bold;
    color: #444;
}

/* Navigation Arrows */
.prev,
.next {
    cursor: pointer;
    font-size: 16px;

    transition: 0.3s;
}

.prev:hover,
.next:hover {

    transform: scale(1.2);
}

/* Calendar Grid */
.calendar-grid {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 5px;
    margin-top: 10px;
}

/* Day Names (SUN, MON, etc.) */
.day-name {
    font-size: 12px;
    font-weight: bold;
    color: #555 !important;
    text-align: center;
    padding: 8px 0;
}

/* Calendar Days */
.calendar-day {
    padding: 12px;
    text-align: center;
    font-size: 12px;
    border-radius: 6px;
    font-weight: bold;
    color: #ababab !important;
}


/* Schedule Button */
.schedule-btn {
    margin: 20px 60px;
    display: flex;
    justify-content: center;
    z-index: 1;


}

.fa-3x {
    font-size: 40px !important;
}

.schedule-btn:hover {

    transform: scale(1.05);
}

/* Responsive Design */
@media (max-width: 480px) {
    .calendar-wrapper {
        width: 90%;
        height: 240px;
    }

    .calendar-content {
        width: 100%;
    }
}

.dp-f-a {
    display: flex;
    align-items: center !important;
}

.dp-flex {
    display: flex;
    justify-content: space-between;

}

.dpposition-absolute {
    position: absolute !important;

}
</style>
<?php include 'navbar.php'; ?>

<div class="hero9" style="background-image: url(assets/image/home/contactusban.webp);">
    <div class="container">
        <div class="row align-items-center justify-content-center">

            <div class="col-lg-9 text-center">
                <div class="main-heading">
                    <span class="span" data-aos="zoom-in-left" data-aos-duration="700"> Contact Us</span>
                    <h1 class="tg-element-title">Technofra loves to hear from you reach out with any questions,
                        feedback, or inquiries.</h1>
                    <div class="space30"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="contact-promo bg-light-subtle ptb-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 crm-title col-md-10 pb-20">
                <div class="section-heading text-center section-heading">
                    <span class="crm-subtitle ">Contact Info <img src="assets/image/arrow-red.png" alt="arrow"></span>
                    <h2 class="mt-2">
                        Contact & Join Together
                    </h2>
                    <p class="mt-2">
                        Stay connected with us! Reach out for inquiries, collaborations, or support—we're here to help.
                        Let’s join forces and create something amazing together!
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 mob-mt-40">
                <div class="contact-us-promo p-4 bg-white rounded-custom custom-shadow  d-flex flex-column h-100">
                    <div class="sc-pricing-title dp-f-a">
                        <span class="fas fa-map-marker-alt fa-3x text-primary"></span>
                        <div class="sc-pricing-title-right ms-3">
                            <p class="mb-0 text-dg-color">Location</p>
                            <h5 class="mb-0 mt-1">Visit Us At</h5>
                        </div>
                    </div>
                    <div class="contact-promo-info mb-4 mt-4">
                        <p>Office No. 501, 5th Floor, Ghanshyam Enclave, New Link Road, Kandivali (West), Mumbai -
                            400067. Maharashtra - INDIA.
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 mob-mt-40">
                <div class="contact-us-promo p-4 bg-white rounded-custom custom-shadow  d-flex flex-column h-100">
                    <div class="sc-pricing-title dp-f-a">
                        <span class="fas fa-map-marker-alt fa-3x text-primary"></span>
                        <div class="sc-pricing-title-right ms-3">
                            <p class="mb-0 text-dg-color">Location</p>
                            <h5 class="mb-0 mt-1">Visit Us At</h5>
                        </div>
                    </div>
                    <div class="contact-promo-info mb-4 mt-4">
                        <p>Office No. 501, 5th Floor, Ghanshyam Enclave, New Link Road, Kandivali (West), Mumbai -
                            400067. Maharashtra - USA
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 mob-mt-40">
                <div class="contact-us-promo p-4 bg-white rounded-custom custom-shadow  d-flex flex-column h-100">
                    <div class="sc-pricing-title dp-f-a">
                        <span class="fas fa-map-marker-alt fa-3x text-primary"></span>
                        <div class="sc-pricing-title-right ms-3">
                            <p class="mb-0 text-dg-color">Location</p>
                            <h5 class="mb-0 mt-1">Visit Us At</h5>
                        </div>
                    </div>
                    <div class="contact-promo-info mb-4 mt-4">
                        <p>Office No. 501, 5th Floor, Ghanshyam Enclave, New Link Road, Kandivali (West), Mumbai -
                            400067. Maharashtra - UK
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="row justify-content-center pt-40">
            <div class="col-lg-4 mob-mt-40">
                <div class="contact-us-promo p-4 bg-white rounded-custom custom-shadow  d-flex flex-column h-100">
                    <div class="sc-pricing-title dp-f-a">
                        <span class="fas fa-phone fa-3x text-primary"></span>
                        <div class="sc-pricing-title-right ms-3">
                            <p class="mb-0 text-dg-color">24/7 Services</p>
                            <h5 class="mb-0 mt-1">Call Us At</h5>
                        </div>
                    </div>

                    <div class="contact-promo-info mb-4 mt-4 ">
                        <div class="dp-flex">
                            <p><span class=" h6">Sales : </span></p>
                            <p> <a href="tel:+918080803374" class="gray"> +91 8080 80 3374</a><br> <a
                                    href="tel:+918080803375" class="gray">+91 8080 80 3375</a></p>
                        </div>
                        <div class="dp-flex">
                            <p><span class=" h6">Support : </span></p>
                            <p> <a href="tel:+918080621003" class="gray"> +91 8080 62 1003</a><br> <a
                                    href="tel:+918080721003" class="gray">+91 8080 72 1003</a></p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 mob-mt-40">
                <div class="contact-us-promo p-4 bg-white rounded-custom custom-shadow  d-flex flex-column h-100">
                    <div class="sc-pricing-title dp-f-a">
                        <span class="fas fa-envelope fa-3x text-primary"></span>
                        <div class="sc-pricing-title-right ms-3">
                            <p class="mb-0 text-dg-color">Drop a Line</p>
                            <h5 class="mb-0 mt-1">Email Address</h5>
                        </div>
                    </div>
                    <div class="contact-promo-info mb-4 mt-4">
                        <div class="dp-flex">

                        </div>
                        <p> <a href="mailto:info@technofra.com" class="gray"> info@technofra.com</a> <br> <a
                                href="mailto: support@technofra.com" class="gray"> support@technofra.com</a></p>
                        <!-- <p></span> <a href="mailto: support@technofra.com" class="gray"> support@technofra.com</a></p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mob-mt-40">
                <div class="contact-us-promo p-4 bg-white rounded-custom custom-shadow d-flex flex-column h-100">
                    <div class="sc-pricing-title dp-f-a">
                        <span class="fas fa-clock fa-3x text-primary"></span>

                        <div class="sc-pricing-title-right ms-3">
                            <p class="mb-0 text-dg-color">Office Hours </p>
                            <h5 class="mb-0 mt-1">Opening Time</h5>
                        </div>
                    </div>
                    <div class="contact-promo-info mb-4 mt-4">
                        <div class="contact-promo-info mb-4">
                            <p>Mon - Sat : 10am - 7pm</p>
                            <p>Sunday (Closed)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="integration-section pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h2>
                    Let's Start Your
                </h2>

                <h2 style="font-weight: 200;">
                    Growth Journey </h2>
                <p>Have questions or ideas to discuss?
                    Reach out to us now</p>
                <a href="https://calendly.com/technofra-support">
                    <div class="calendar-container">
                        <div class="calendar-wrapper">
                            <div class="calendar-content">
                                <h1 class="calendar-title">Schedule Free Consultation!</h1>
                                <div class="calendar-header flex mb-2 items-center justify-between">
                                    <div class="prev">&lt;</div>
                                    <p>February 2026</p>
                                    <div class="next ">&gt;</div>
                                </div>
                                <div class="calendar-grid">
                                    <div class="day-name">SUN</div>
                                    <div class="day-name">MON</div>
                                    <div class="day-name">TUE</div>
                                    <div class="day-name">WED</div>
                                    <div class="day-name">THU</div>
                                    <div class="day-name">FRI</div>
                                    <div class="day-name">SAT</div>
                                    <div class="calendar-day"></div>
                                    <div class="calendar-day">1</div>
                                    <div class="calendar-day">2</div>
                                    <div class="calendar-day">3</div>
                                    <div class="calendar-day">4</div>
                                    <div class="calendar-day">5</div>
                                    <div class="calendar-day">6</div>
                                    <div class="calendar-day">7</div>
                                    <div class="calendar-day">8</div>
                                    <div class="calendar-day">9</div>
                                    <div class="calendar-day">10</div>
                                    <div class="calendar-day">11</div>
                                    <div class="calendar-day">12</div>
                                    <div class="calendar-day">13</div>


                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="https://calendly.com/technofra-support" class="btn schedule-btn btn-outline-info">Schedule A
                    Call</a>



            </div>
            <div class="col-lg-3">
                <img src="assets/image/contact-gril.png" alt="image"
                    class="img-fluid ma-contact-img dpposition-absolute pe-none z-n1 d-none d-lg-block">
            </div>
            <div class="col-lg-6">
                <div class="register-wrap p-5 bg-white shadow rounded-custom position-relative aos-init aos-animate mb-30"
                    data-aos="fade-up" data-aos-delay="150">
                    <form action="send" method="POST">
                        <h3 class="mb-3 fw-medium">Contact Us</h3>

                        <div class="row">
                            <div class="col-sm-6">
                                <label for="firstName" class="mb-1">First Name <span
                                        class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input type="text" name="fname" class="form-control" required=""
                                        placeholder="First name" aria-label="First Name">
                                </div>
                            </div>
                            <div class="col-sm-6 ">
                                <label for="lastName" class="mb-1">Last Name <span class="text-danger"> *</span></label>
                                <div class="input-group mb-3">
                                    <input type="text" name="lname" class="form-control" placeholder="Last name"
                                        aria-label="Last Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="phone" class="mb-1">Phone <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input type="text" name="contact" class="form-control" required=""
                                        placeholder="Phone" aria-label="Phone">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="email" class="mb-1">Email<span class="text-danger"> *</span></label>
                                <div class="input-group mb-3">
                                    <input type="email" name="email" class="form-control" required=""
                                        placeholder="Email" aria-label="Email">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label for="yourMessage" class="mb-1">Message <span class="text-danger"></span></label>
                                <div class="input-group mb-3">
                                    <textarea class="form-control" name="massage" placeholder="Massage"
                                        style="height: 80px"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-outline-info mt-4">Submit</button>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <input type="text" name="hidden_field" style="display:none;" tabindex="-1">
                                    <div class="col-12">
                                        <div class="g-recaptcha"
                                            data-sitekey="6LekpbEqAAAAANkc3FduPE52-p4Wqu5ghQFXjPhF"></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- <div class="contact-map-page">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3767.817656548082!2d72.834758!3d19.203165!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b6ca84bfbc29%3A0xc30408ca949bffb8!2sTechnofra%20%7C%20Web%20Development%20%7C%20Digital%20Marketing%20Agency%20in%20Mumbai!5e0!3m2!1sen!2sus!4v1732790645015!5m2!1sen!2sus"
        width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div> -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const prevButton = document.querySelector(".prev");
    const nextButton = document.querySelector(".next");
    const header = document.querySelector(".calendar-header h1");

    let currentDate = new Date();

    // Function to update the month and year heading
    function updateHeader(date) {
        const monthNames = [
            "January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];
        header.textContent = `${monthNames[date.getMonth()]} ${date.getFullYear()}`;
    }

    // Event Listeners for navigation
    prevButton.addEventListener("click", () => {
        currentDate.setMonth(currentDate.getMonth() - 1);
        updateHeader(currentDate);
    });

    nextButton.addEventListener("click", () => {
        currentDate.setMonth(currentDate.getMonth() + 1);
        updateHeader(currentDate);
    });

    // Initial render
    updateHeader(currentDate);
});
</script>

<?php include 'footer.php'; ?>