<?php include 'partials/header.php' ?>

<section class="p3-ecommerce-bg1 pt-150 pb-70">
    <div class="container">
        <div class="row">
            <div class="offset-md-4">
                <div class="banner-content">
                    <div class="row wow fadeInUp">
                        <div class="position-relative">
                            <div class="p3-fullstack-line">Services</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="fs-40 fw-600 fs-18mi wow fadeInUp text-center pt-3 text-white">
                    <span class="web-color">eCommerce </span>Website Development
                </h2>
            </div>
        </div>
    </div>

    </div>
</section>

<!-- Second Section Start -->
<section class="pt-50">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="fw-600 poppins fs-34 fs-20m wow fadeInUp">
                    eCommerce Website <span class="web-color">Design & Development </span>Services
                </h1>
                <p class="pt-4 fs-14m wow fadeInUp">
                    Dev Pickles creates high-performing eCommerce websites, online stores, and marketplaces designed
                    around your customers and business goals. From seamless shopping experiences to scalable technology,
                    we build secure, engaging platforms that simplify operations, increase conversions, and support
                    sustainable growth for retail and wholesale businesses.

                </p>
                <!-- <p class="fs-14m wow fadeInUp">
                    No matter what your business is or what technology model you have, we have all the solutions for
                    growing your retail as well as wholesale business.
                </p> -->
                <div class="pt-4 wow fadeInUp">
                    <div class="rs-carousel owl-carousel  owl-drag" data-loop="true" data-items="4" data-margin="30"
                        data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                        data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false"
                        data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false"
                        data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false"
                        data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false"
                        data-md-device="4" data-md-device-nav="true" data-md-device-dots="false">
                        <div class="partner-item">
                            <div class="logo-img ">
                                <img src="assets/images/home/wp.png" alt="WordPress Website Design & Development"
                                    title="Dev PicklesSolution WordPress Png">
                            </div>
                        </div>
                        <div class="partner-item">
                            <div class="logo-img">

                                <img src="assets/images/home/sp.png" alt="Shopify Website Design & Development"
                                    title="Dev PicklesSolution Shopify Png">

                            </div>
                        </div>
                        <div class="partner-item">
                            <div class="logo-img">
                                <img src="assets/images/home/nodejs.png" alt="Node.js Website Design & Development"
                                    title="Dev PicklesSolution Node.js Png">

                            </div>
                        </div>
                        <div class="partner-item">
                            <div class="logo-img">

                                <img src="assets/images/home/blockchain.png"
                                    alt="Blockchain Website Design & Development"
                                    title="Dev PicklesSolution Blockchain Png">

                            </div>
                        </div>
                        <div class="partner-item">
                            <div class="logo-img">
                                <img src="assets/images/home/angular.png" alt="Angular Website Design & Development"
                                    title="Dev PicklesSolution Angular Png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-5 offset-md-1 shadow-lg inner-form wow fadeInUp sm-pt-20">
                <div class="">
                    <form action="/backend/action/action.php" method="POST" class="pt-20 sm-pt-0 form form-padding-set">
                        <input type="hidden" name="type" value="contactForm">

                        <div class="input-group mb-4">
                            <input type="text" name="name" class="form-control rounded-pill"
                                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                placeholder="FIrst Name" required>
                        </div>
                        <div class="input-group mb-4">
                            <input type="text" name="last_name" class="form-control rounded-pill"
                                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                placeholder="Last Name">
                        </div>
                        <div class="input-group mb-4">
                            <input type="email" name="email" class="form-control rounded-pill"
                                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                placeholder="Email" required>
                        </div>
                        <div class="input-group mb-4">
                            <input type="number" name="phone" class="form-control rounded-pill"
                                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                placeholder="Phone Number" required>
                        </div>

                        <div class="input-group mb-4">
                            <textarea type="text" name="message" cols="30" rows="6" class="form-control "
                                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                placeholder="Your message" required></textarea>
                        </div>

                        <br>

                        <div class="form-group chkbx">

                            <input type="checkbox" id="agree" name="agree" autocomplete="off"
                                onclick="dynamicForm($(this));">
                            <label for="agree" class="ml-2 chkagree">By checking this box, you give consent to <span
                                    class="acme"> <a href="">Dev Pickles</a></span> A to send
                                you
                                SMS about <span class="acme"> appointment reminders, account
                                    notifications and any
                                    relevant information.</span> I acknowledge that my consent is not a condition of
                                purchase. Msg &
                                data rates may apply. Msg frequency varies. Reply HELP for assistance or STOP to opt out
                                of
                                receiving messages.
                                Sign Up for Email and Phone Calls
                                <br>

                            </label>

                        </div>
                        <div class="form-group ">

                            <label class="ml-2"> <input type="checkbox" id="agree" name="agree" autocomplete="off"
                                    onclick="dynamicForm($(this));"> &nbsp;I agree to receive emails and phone
                                calls</label>
                        </div>
                        <br>

                        <div class="text-md-end sm-pt-0">
                            <button class="btn form-submit-button rounded-pill w-100" name="submit" type="submit">Build
                                my website
                                &nbsp;</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
</section>
<!-- SECOND SECTION END  -->
<section class="bg-dark page-spacing">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <!-- <div class="position-relative">
                    <div class="p3-ecommerce-line2 text-white">Powering Your Solutions With</div>
                </div> -->
                <h2 class="text-white first pt-2 fs-20m">Seamless <span class="web-color">eCommerce Experience</span>
                </h2>
                <p class="fs-14 text-white pt-3">
                    We create eCommerce experiences that make every step effortless, from browsing and product discovery
                    to checkout. Our research-driven development approach combines intuitive design, smooth
                    functionality, and scalable technology to enhance customer satisfaction, strengthen your brand, and
                    maximize long-term business growth

                </p>
                <div class="wow fadeInUp p3-first-button">
                    <button><a class="web-color fw-400 form-1" href="javascript:;" data-bs-toggle="modal"
                            data-bs-target="#contactModal">Let’s Get Started &nbsp;</a></button>
                </div>
            </div>
            <div class="col-md-7 hidden-sm">

                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="p3-box-color">
                            <img src="assets/images/p3-ecommerce/w1.png" alt="WordPress Development"
                                title="Dev PicklesSolution WordPress 1 Png">
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="p3-box-color">
                            <img src="assets/images/p3-ecommerce/w2.png" alt="Magento Development"
                                title="Dev PicklesSolution Magento Png">
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="p3-box-color">
                            <img src="assets/images/p3-ecommerce/w3.png" alt="Woo Ecommerce Development"
                                title="Dev PicklesSolution Ecommerce Png">
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="p3-box-color">
                            <img src="assets/images/p3-ecommerce/w4.png" alt="Open Cart Development"
                                title="Dev PicklesSolution Open Cart Png">
                        </div>
                    </div>
                </div>
                <div class="row pt-30">
                    <div class="col-md-3 offset-md-1">
                        <div class="p3-box-color">
                            <img src="assets/images/p3-ecommerce/w5.png" alt="Joomla Development"
                                title="Dev PicklesSolution Joomla Png">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p3-box-color">
                            <img src="assets/images/p3-ecommerce/w6.png" alt="Prestashop Development"
                                title="Dev PicklesSolution Prestashop Png">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p3-box-color">
                            <img src="assets/images/p3-ecommerce/w7.png" alt="HTML5"
                                title="Dev PicklesSolution HTML5 Png">
                        </div>
                    </div>
                    <!-- <div class="col-md-3">
                        <div class="p3-box-color">
                            <img src="assets/images/p3-ecommerce/php.png" >
                        </div>
                        </div> -->
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Testimonial Section Start -->
<?php include 'partials/video-testifmonials-white.php' ?>
<!-- Testimonial Section End -->

<section class="bg-color page-spacing">
    <div class="container">
        <div class="row">
            <div class="text-center wow fadeinup">
                <h2 class="text-white paragraph">Want to know more <span class="">about why you</span> <br> should
                    trust <span class="text-black">Dev Pickles </span>?</h2>
            </div>
        </div>
        <div class=" text-center pt-20 wow fadeinup">
            <a class="btn consultation mt fs-12m form-3" href="javascript:;" data-bs-toggle="modal"
                data-bs-target="#contactModal">Book a Call
                &nbsp; </a>
        </div>
    </div>
</section>

<!-- Portfolio Section End -->
<section class="lazy portfolio-index-section page-spacing" id="portfolio">
    <div class="container">
        <div class="row wow fadeInDown">
            <div class="offset-md-3 sec-title">
                <div class=" portfolio-line text-black">PORTFOLIO</div>
            </div>
        </div>
        <div class="row wow fadeInDown">
            <div class="col-md-6 offset-md-3 text-center">
                <h2 class="sm-pt-15 fs-20m pb-50 sm-pb-30">We bring our <span class="web-color">clients’ visions</span>
                    to digital
                    reality.
                </h2>
            </div>
        </div>
        <!-- <div class="portfolio-menu mt-2 mb-4">
            <nav class="controls">
                <button type="button" class="control outline mixitup-control-active"
                    data-filter=".web-app">Fashion and Clothing</button>
                <button type="button" class="control outline" data-filter=".jewelery">Jewelery</button>
                <button type="button" class="control outline" data-filter=".beauty-and-cosmetics">Beauty and
                    Cosmetics</button>
                <button type="button" class="control outline" data-filter=".artwork-and-frames">Artwork and
                    Frames</button>
                <button type="button" class="control outline" data-filter=".kids-and-moms">Kids and Moms</button>
                <button type="button" class="control outline" data-filter=".food-and-drinks">Food and
                    Drinks</button>
                <button type="button" class="control outline" data-filter=".hair-and-hair-accessories">Hair and Hair
                    Accessories</button>
                <button type="button" class="control outline" data-filter=".home-and-decor">Home and Decor</button>
                <button type="button" class="control outline" data-filter=".medical-and-supplements">Medical and
                    Supplements</button>
                <button type="button" class="control outline" data-filter=".electronics-and-automobiles">Electronics
                    and Automobiles</button>
                <button type="button" class="control outline" data-filter=".gym-and-fitness">Gym and
                    Fitness</button>
                <button type="button" class="control outline" data-filter=".women-clothing">Women Clothing</button>
                <button type="button" class="control outline" data-filter=".men-clothing">Men Clothing</button>
                <button type="button" class="control outline" data-filter=".subscription-store">Subscription
                    Store</button>
                <button type="button" class="control outline" data-filter=".coffee-stores">Coffee Stores</button>
                <button type="button" class="control outline" data-filter=".shoes-stores">Shoes Stores</button>
                <button type="button" class="control outline" data-filter=".premium-stores">Premium Stores</button>
            </nav>
        </div> -->
        <ul class="row portfolio-index-item" id="MixItUp14DDBD">
            <li class="mix web-app col-xl-4 col-md-4 col-12 col-sm-6">
                <img class="lazy" src="assets/images/mockup/commerce/h1.jpg" itemprop="thumbnail"
                    alt="HOI Solutions Web App Development Mockup 1" title="HOI Solution Web App Mockup 1">
                <div class="portfolio-index-overlay">
                    <div class="overlay-content">
                        <p class="category"></p>
                        <a data-fancybox="item" title="click to zoom-in" href="assets/images/mockup/commerce/e1.webp">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix web-app col-xl-4 col-md-4 col-12 col-sm-6">
                <img class="lazy" src="assets/images/mockup/commerce/h2.jpg" itemprop="thumbnail"
                    alt="HOI Solutions Web App Development Mockup 2" title="HOI Solution Web App Mockup 2">
                <div class="portfolio-index-overlay">
                    <div class="overlay-content">
                        <p class="category"></p>
                        <a data-fancybox="item" title="click to zoom-in" href="assets/images/mockup/commerce/e2.webp">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix web-app col-xl-4 col-md-4 col-12 col-sm-6">
                <img class="lazy" src="assets/images/mockup/commerce/h3.jpg" itemprop="thumbnail"
                    alt="HOI Solutions Web App Development Mockup 3" title="HOI Solution Web App Mockup 3">
                <div class="portfolio-index-overlay">
                    <div class="overlay-content">
                        <p class="category"></p>
                        <a data-fancybox="item" title="click to zoom-in" href="assets/images/mockup/commerce/e3.webp">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>



            <li class="mix web-app col-xl-4 col-md-4 col-12 col-sm-6">
                <img class="lazy" src="assets/images/mockup/commerce/h5.jpg" itemprop="thumbnail"
                    alt="HOI Solutions Web App Development Mockup 5" title="HOI Solution Web App Mockup 5">
                <div class="portfolio-index-overlay">
                    <div class="overlay-content">
                        <p class="category"></p>
                        <a data-fancybox="item" title="click to zoom-in" href="assets/images/mockup/commerce/e5.webp">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>

            <li class="mix web-app col-xl-4 col-md-4 col-12 col-sm-6">
                <img class="lazy" src="assets/images/mockup/commerce/h4.jpg" itemprop="thumbnail"
                    alt="HOI Solutions Web App Development Mockup 4" title="HOI Solution Web App Mockup 4">
                <div class="portfolio-index-overlay">
                    <div class="overlay-content">
                        <p class="category"></p>
                        <a data-fancybox="item" title="click to zoom-in" href="assets/images/mockup/commerce/e4.webp">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>

            <li class="mix web-app col-xl-4 col-md-4 col-12 col-sm-6">
                <img class="lazy" src="assets/images/mockup/commerce/h6.jpg" itemprop="thumbnail"
                    alt="HOI Solutions Web App Development Mockup 6" title="HOI Solution Web App Mockup 6">
                <div class="portfolio-index-overlay">
                    <div class="overlay-content">
                        <p class="category"></p>
                        <a data-fancybox="item" title="click to zoom-in" href="assets/images/mockup/commerce/e6.webp">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>

            <li class="mix web-app col-xl-4 col-md-4 col-12 col-sm-6">
                <img class="lazy" src="assets/images/mockup/commerce/h7.jpg" itemprop="thumbnail"
                    alt="HOI Solutions Web App Development Mockup 7" title="HOI Solution Web App Mockup 7">
                <div class="portfolio-index-overlay">
                    <div class="overlay-content">
                        <p class="category"></p>
                        <a data-fancybox="item" title="click to zoom-in" href="assets/images/mockup/commerce/e7.webp">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>

            <li class="mix web-app col-xl-4 col-md-4 col-12 col-sm-6">
                <img class="lazy" src="assets/images/mockup/commerce/h8.jpg" itemprop="thumbnail"
                    alt="HOI Solutions Web App Development Mockup 8" title="HOI Solution Web App Mockup 8">
                <div class="portfolio-index-overlay">
                    <div class="overlay-content">
                        <p class="category"></p>
                        <a data-fancybox="item" title="click to zoom-in" href="assets/images/mockup/commerce/e8.webp">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>

            <li class="mix web-app col-xl-4 col-md-4 col-12 col-sm-6">
                <img class="lazy" src="assets/images/mockup/commerce/h9.jpg" itemprop="thumbnail"
                    alt="HOI Solutions Web App Development Mockup 9" title="HOI Solution Web App Mockup 9">
                <div class="portfolio-index-overlay">
                    <div class="overlay-content">
                        <p class="category"></p>
                        <a data-fancybox="item" title="click to zoom-in" href="assets/images/mockup/commerce/e9.webp">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="text-center" data-wow-delay="900ms" data-wow-duration="2000ms pt-0">
        <a class=" btn load-more-index" href="portfolio" target="_blank">See More Portfolio&nbsp;</a>
    </div>
</section>
<!-- Portfolio Section End -->

<section class="pricingrevamp pricing-wrapper page-spacing-topnull">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="outer1">
                    <div class="position-relative">
                        <div class="p6-price-first-line text-black">PREMIUM SERVICES AT AFFORDABLE PRICES</div>
                    </div>
                    <h2 class="web-color">Choose <span class="text-black">From Our Economical </span>Packages</h2>
                    <p>We have designed our pricing points, considering the varying requirements of various
                        businesses
                        and niches.</p>
                </div>
            </div>
        </div>
        <div class="row pt-130 sm-pt-0">
            <div class="col-md-4">
                <div class="t-col-first main">
                    <div class="inner1">
                        <img class="primg" src="assets/images/pricing/bronze.png" alt="Bronze Package"
                            title="Bronze Package">
                        <h3>eCommerce Silver</h3>
                    </div>
                    <div class="inner2">
                        <h4>$789 <span>$1578.00</span></h4>
                        <a href="tel:<?php echo $phone_number ?>" class="brand-black-btn btn-props">Call Now</a>
                    </div>
                    <div class="inner3">
                        <ul>
                            <li>Customized Design</li>
                            <li>Up-to 100 Products</li>
                            <li>Content Management System (CMS)</li>
                            <li>Mini Shopping Cart Integration</li>
                            <li>Payment Module Integration</li>
                            <li>Easy Product Search</li>
                            <li>Dedicated designer &amp; developer</li>
                            <li>Unlimited Revisions</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee *</li>
                        </ul>
                    </div>
                    <div class="inner4">
                        <p class="p1"><a href="javascript:$zopim.livechat.window.show()">Live
                                Chat</a>
                        </p>
                        <p class="p2"><a href="mailto:info@devpickles.com">info@devpickles.com</a>
                        </p>
                        <p class="p3"><a href="tel:<?php echo $phone_number ?>"><?php echo $phone_number ?></a></p>
                    </div>
                    <div class="inner5">
                        <button class="btns" data-bs-toggle="modal" data-bs-target="#contactModal">Get a Quote</button>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="t-col-3 main mp">
                    <div class="innertop">
                        <h2>MOST POPULAR</h2>
                    </div>
                    <div class="inner1">
                        <img class="primg" src="assets/images/pricing/silver.png" alt="Silver Package"
                            title="Silver Package">
                        <h3>eCommerce Gold</h3>
                    </div>
                    <div class="inner2">
                        <h4>$1,389 <span>$2778.00</span></h4>
                        <a href="tel:<?php echo $phone_number ?>" class="brand-black-btn btn-props">Call Now</a>
                    </div>
                    <div class="inner3">
                        <ul>
                            <li>Customized Design</li>
                            <li>Up-to 500 Products</li>
                            <li>Content Management System (CMS)</li>
                            <li>Full Shopping Cart Integration</li>
                            <li>Payment Module Integration</li>
                            <li>Easy Product Search</li>
                            <li>Product Reviews</li>
                            <li>5 Promotional Banners</li>
                            <li>Team of Expert Designers &amp; Developers</li>
                            <li>Unlimited Revisions</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee *</li>
                        </ul>
                    </div>
                    <div class="inner4">
                        <p class="p1"><a href="javascript:$zopim.livechat.window.show()">Live
                                Chat</a>
                        </p>
                        <p class="p2"><a href="mailto:info@devpickles.com">info@devpickles.com</a>
                        </p>
                        <p class="p3"><a href="tel:<?php echo $phone_number ?>"><?php echo $phone_number ?></a></p>
                    </div>
                    <div class="inner5">
                        <button class="btns" data-bs-toggle="modal" data-bs-target="#contactModal">Get a Quote</button>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="t-col-first main">
                    <div class="inner1">
                        <img class="primg" src="assets/images/pricing/gold.png" alt="Gold Package" title="Gold Package">
                        <h3>eCommerce Platinum</h3>
                    </div>
                    <div class="inner2">
                        <h4>$2,289 <span>$4,578.00</span></h4>
                        <a href="tel:<?php echo $phone_number ?>" class="brand-black-btn btn-props">Call Now</a>
                    </div>
                    <div class="inner3">
                        <ul>
                            <li>By 3 Award Winning Designers</li>
                            <li>Icon Design</li>
                            <li>UNLIMITED Revisions</li>
                            <li>Stationary Design (Business Card, Letterhead &amp; Envelope)</li>
                            <li>15-20 Pages Website</li>
                            <li>Custom Made, Interactive, Dynamic &amp; High End Design</li>
                            <li>Customized Design</li>
                            <li>Unlimited Products</li>
                            <li>Content Management System (CMS)</li>
                            <li>Full Shopping Cart Integration</li>
                            <li>Payment Module Integration</li>
                            <li>Sales &amp; Inventory Management</li>
                            <li>Customer Log-in Area</li>
                            <li>Mobile Responsive</li>
                            <li>Facebook, Twitter, YouTube, Google+ &amp; Pinterest Page Designs</li>
                            <li>Dedicated Account Manager</li>
                            <li>Unlimited Revisions</li>
                            <li>All Final File Formats</li>
                            <li>100% Ownership Rights</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee*</li>
                        </ul>
                    </div>
                    <div class="inner4">
                        <p class="p1"><a href="javascript:$zopim.livechat.window.show()">Live
                                Chat</a>
                        </p>
                        <p class="p2"><a href="mailto:info@devpickles.com">info@devpickles.com</a>
                        </p>
                        <p class="p3"><a href="tel:<?php echo $phone_number ?>"><?php echo $phone_number ?></a></p>
                    </div>
                    <div class="inner5">
                        <button class="btns" data-bs-toggle="modal" data-bs-target="#contactModal">Get a Quote</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="row pr">
            <div class="col-md-4">
                <div class="t-col-first main">
                    <div class="inner1">
                        <img class="primg" src="assets/images/pricing/platinum.png" alt="Platinum Package"
                            title="Platinum Package">
                        <h3>eCommerce Titanium</h3>
                    </div>
                    <div class="inner2">
                        <h4>$3,689 <span>$7378.00</span></h4>
                        <a href="tel:<?php echo $phone_number ?>" class="brand-black-btn btn-props">Call Now</a>
                    </div>
                    <div class="inner3">
                        <ul>
                            <li>By 6 Award Winning Designers</li>
                            <li>Icon Design</li>
                            <li>UNLIMITED Revisions</li>
                            <li>Print Media</li>
                            <li>Stationary Design (BusinessCard,Letterhead &amp; Envelope)</li>
                            <li>Invoice Design, Email Signature</li>
                            <li>Bi-Fold Brochure (OR) 2 Sided Flyer Design</li>
                            <li>Product Catalog Design</li>
                            <li>Sign age Design (OR) Label Design</li>
                            <li>T-Shirt Design (OR) Car Wrap Design</li>
                            <li>Website</li>
                            <li>eCommerce Store Design</li>
                            <li>Product Detail Page Design</li>
                            <li>Unique Banner Slider</li>
                            <li>Featured Products Showcase</li>
                            <li>Full Shopping Cart Integration</li>
                            <li>Unlimited Products</li>
                            <li>Unlimited Categories</li>
                            <li>Product Rating &amp; Reviews</li>
                            <li>Easy Product Search</li>
                            <li>Payment Gateway Integration</li>
                            <li>Multi-currency Support</li>
                            <li>Content Management System</li>
                            <li>Customer Log-in Area</li>
                            <li>Mobile Responsive</li>
                            <li>Social Media Plugins Integration</li>
                            <li>Tell a Friend Feature</li>
                            <li>Social Media Pages</li>
                            <li>Facebook , Twitter, YouTube, Google+ &amp; Pinterest Page Designs</li>
                            <li>Value Added Services</li>
                            <li>Dedicated Account Manager</li>
                            <li>Unlimited Revisions</li>
                            <li>All Final File Formats</li>
                            <li>100% Ownership Rights</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>100% Money Back Guarantee *</li>
                        </ul>
                    </div>
                    <div class="inner4">
                        <p class="p1"><a href="javascript:$zopim.livechat.window.show()">Live
                                Chat</a>
                        </p>
                        <p class="p2"><a href="mailto:info@devpickles.com">info@devpickles.com</a>
                        </p>
                        <p class="p3"><a href="tel:<?php echo $phone_number ?>"><?php echo $phone_number ?></a></p>
                    </div>
                    <div class="inner5">
                        <button class="btns" data-bs-toggle="modal" data-bs-target="#contactModal">Get a Quote</button>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="t-col-first main">
                    <div class="inner1">
                        <img class="primg" src="assets/images/pricing/titanium.png" alt="Titanium Package"
                            title="Titanium Package">
                        <h3 class="hsm">Custom eCommerce Marketplace Package</h3>
                    </div>
                    <div class="inner2">
                        <h4>$6,999 <span>$14,000.00</span></h4>
                        <a href="tel:<?php echo $phone_number ?>" class="brand-black-btn btn-props">Call Now</a>
                    </div>
                    <div class="inner3">
                        <ul>
                            <li>Unlimited Page Website</li>
                            <li>Unique Pages and UI Design</li>
                            <li>Complete Custom Development</li>
                            <li>Newsfeed Integration</li>
                            <li>Social Media Plugins Integration</li>
                            <li>Advanced Ecommerce Marketplace Features</li>
                            <li>Inventory Management</li>
                            <li>CRM (Customer Relation Management System)</li>
                            <li>Advanced Admin Features 2.0</li>
                            <li>Advanced User Features</li>
                            <li>Dashboard and Analytics</li>
                            <li>Seller/Shipping Distribution</li>
                            <li>Seller Profile Management</li>
                            <li>User Profile Management</li>
                            <li>General Configuration Features</li>
                            <li>Revenue Models</li>
                            <li>Featured products</li>
                            <li>Google advertisements</li>
                            <li>Flash sales Module</li>
                            <li>Loyalty Rewards Module</li>
                            <li>Upto 40 Stock images</li>
                            <li>10 Unique Banner Designs</li>
                            <li>JQuery Slider</li>
                            <li>Search Engine Submission</li>
                            <li>Free Google Friendly Sitemap</li>
                            <li>Social Media Page Designs (Facebook, Twitter, Instagram)</li>
                            <li>Complete W3C Certified HTML</li>
                            <li>Complete Deployment</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>Money Back Guarantee</li>
                        </ul>
                    </div>
                    <div class="inner4">
                        <p class="p1"><a href="javascript:$zopim.livechat.window.show()">Live
                                Chat</a>
                        </p>
                        <p class="p2"><a href="mailto:info@devpickles.com">info@devpickles.com</a>
                        </p>
                        <p class="p3"><a href="tel:<?php echo $phone_number ?>"><?php echo $phone_number ?></a></p>
                    </div>
                    <div class="inner5">
                        <button class="btns" data-bs-toggle="modal" data-bs-target="#contactModal">Get a Quote</button>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="t-col-first main">
                    <div class="inner1">
                        <img class="primg" src="assets/images/pricing/bronze.png" alt="Bronze Package"
                            title="Bronze Package">
                        <h3 class="hsm">Automated/Interactive eCommerce Package</h3>
                    </div>
                    <div class="inner2">
                        <h4>$9,999 <span>$20000.00</span></h4>
                        <a href="tel:<?php echo $phone_number ?>" class="brand-black-btn btn-props">Call Now</a>
                    </div>
                    <div class="inner3">
                        <ul>
                            <li>Unlimited Page Website</li>
                            <li>Custom Content Management System (CMS)</li>
                            <li>Unique Pages and UI Design</li>
                            <li>Complete Custom Development</li>
                            <li>Process Automation Tools</li>
                            <li>Newsfeed Integration</li>
                            <li>Social Media Plugins Integration</li>
                            <li>Upto 40 Stock images</li>
                            <li>10 Unique Banner Designs</li>
                            <li>JQuery Slider</li>
                            <li>Search Engine Submission</li>
                            <li>Free Google Friendly Sitemap</li>
                            <li>FREE 5 Years Hosting</li>
                            <li>Custom Email Addresses</li>
                            <li>Social Media Page Designs (Facebook, Twitter, Instagram)</li>
                            <li>Complete W3C Certified HTML</li>
                            <li>Complete Deployment</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>100% Unique Design Guarantee</li>
                            <li>Money Back Guarantee</li>
                            <li><strong>Automated Inventory/Shipping/Supplier Module:</strong></li>
                            <li>Manage thousands to millions of inventory with ease and check stock
                                levels in real-time. Receive low inventory notifications and generate
                                purchase orders to replenish your stock.</li>
                            <li>Suppliers Integration (API NEEDED)</li>
                            <li>Shipper Integration (API NEEDED)</li>
                            <li>Order management</li>
                            <li>LOT numbers and expire date tracking</li>
                            <li>Transfer stock between warehouses (If Warehouse - API NEEDED)</li>
                            <li>Receive stock into a specific warehouse (If Warehouse - API NEEDED)</li>
                            <li>Fulfill orders from a particular warehouse (If Warehouse - API NEEDED)
                            </li>
                            <li>Stock Management</li>
                            <li>Actionable Insights</li>
                            <li>Real- Time Visibility</li>
                            <li>Inventory Opportunities</li>
                            <li><strong>Advanced Features: (API Needed For Suppliers/Warehouse)</strong>
                            </li>
                            <li>Speak to suppliers during trivial conversations.</li>
                            <li>Set and send actions to suppliers regarding governance and compliance
                                materials. Place purchasing requests.</li>
                            <li>Research and answer internal questions regarding procurement
                                functionalities or a supplier/supplier set.</li>
                            <li>Receiving/filing/documentation of invoices and payments/order requests
                            </li>
                            <li>Machine Learning (ML) for Supply Chain Planning (SCP)</li>
                            <li>Machine Learning for Warehouse Management</li>
                            <li>Natural Language Processing (NLP) for Data Cleansing and Building Data
                                Robustness</li>
                            <li><strong>Automated Invoices &amp; Estimates</strong></li>
                            <li>Create beautiful, professional invoices &amp; estimates in just a few
                                seconds and then instantly email them as PDF's directly to your
                                customers or prospects.</li>
                            <li>Automated Split invoicing</li>
                            <li>Automated Combine invoices</li>
                            <li>Invoice templates</li>
                            <li><strong>Automated Barcode Scanning</strong></li>
                            <li>Scan inventory into your orders, generate barcodes for your documents,
                                and search for inventory or documents by scanning barcodes.</li>
                            <li><strong>Locations and Zones</strong></li>
                            <li>Have multiple warehouses, offices, or retail stores? No problem. Easily
                                track where all your inventory is by organizing everything into
                                locations and zones. Organize inventory
                                items using custom attributes such as size, color, and location. View
                                how many you have globally or at each location.
                            </li>
                            <li><strong>Customer Accounts</strong></li>
                            <li>Performance and analytics</li>
                            <li>Customization of Personal Details</li>
                            <li>Process management</li>
                            <li>Sales Automation</li>
                            <li>Team Collaboration</li>
                            <li>Marketing Automation</li>
                            <li> Security</li>
                            <li>Integrations</li>
                            <li>Mobile Notifications</li>
                            <li>Sales Reports</li>
                            <li>Trend Analytics</li>
                            <li>Forecasting</li>
                            <li>Territory Management</li>
                            <li>Account Management</li>
                            <li>Event Integration</li>
                            <li>Advanced Data Security</li>
                            <li><strong>Purchase Orders</strong></li>
                            <li>With integrated purchase orders, you can easily replenish your inventory
                                levels by ordering more stock and even track when those new items will
                                arrive.</li>
                            <li>Partial orders fulfill</li>
                            <li>Backordering</li>
                            <li><strong>Financial Reports</strong></li>
                            <li>Generate extremely detailed reports for your inventory, sales and
                                services. Filter your reports by date-range and category to see what's
                                making you the most money.</li>
                        </ul>
                    </div>
                    <div class="inner4">
                        <p class="p1"><a href="javascript:$zopim.livechat.window.show()">Live
                                Chat</a>
                        </p>
                        <p class="p2"><a href="mailto:info@devpickles.com">info@devpickles.com</a>
                        </p>
                        <p class="p3"><a href="tel:<?php echo $phone_number ?>"><?php echo $phone_number ?></a></p>
                    </div>
                    <div class="inner5">
                        <button class="btns" data-bs-toggle="modal" data-bs-target="#contactModal">Get a Quote</button>
                    </div>

                </div>
            </div>
            <div class="row pt-40 sm-pt-0">
                <div class="col-md-4 offset-md-4">
                    <div class="t-col-first main">
                        <div class="inner1">
                            <img class="primg" src="assets/images/pricing/titanium.png" alt="Titanium Package"
                                title="Titanium Package">
                            <h3 class="hsm">Custom eCommerce Marketplace Package</h3>
                        </div>
                        <div class="inner2">
                            <h4>$6,999 <span>$14,000.00</span></h4>
                            <a href="tel:<?php echo $phone_number ?>" class="brand-black-btn btn-props">Call Now</a>
                        </div>
                        <div class="inner3">
                            <ul>
                                <li>Unlimited Page Website</li>
                                <li>Unique Pages and UI Design</li>
                                <li>Complete Custom Development</li>
                                <li>Newsfeed Integration</li>
                                <li>Social Media Plugins Integration</li>
                                <li>Advanced eCommerce Marketplace Features</li>
                                <li>Inventory Management</li>
                                <li>CRM (Customer Relation Management System)</li>
                                <li>Advanced Admin Features 2.0</li>
                                <li>Advanced User Features</li>
                                <li>Dashboard and Analytics</li>
                                <li>Seller/Shipping Distribution</li>
                                <li>Seller Profile Management</li>
                                <li>User Profile Management</li>
                                <li>General Configuration Features</li>
                                <li>Revenue Models</li>
                                <li>Featured products</li>
                                <li>Google advertisements</li>
                                <li>Flash sales Module</li>
                                <li>Loyalty Rewards Module</li>
                                <li>Upto 40 Stock images</li>
                                <li>10 Unique Banner Designs</li>
                                <li>JQuery Slider</li>
                                <li>Search Engine Submission</li>
                                <li>Free Google Friendly Sitemap</li>
                                <li>Social Media Page Designs (Facebook, Twitter, Instagram)</li>
                                <li>Complete W3C Certified HTML</li>
                                <li>Complete Deployment</li>
                                <li>100% Satisfaction Guarantee</li>
                                <li>100% Unique Design Guarantee</li>
                                <li>Money Back Guarantee</li>
                            </ul>
                        </div>
                        <div class="inner4">
                            <p class="p1"><a href="javascript:$zopim.livechat.window.show()">Live
                                    Chat</a>
                            </p>
                            <p class="p2"><a href="mailto:info@devpickles.com">info@devpickles.com</a>
                            </p>
                            <p class="p3"><a href="tel:<?php echo $phone_number ?>"><?php echo $phone_number ?></a></p>
                        </div>
                        <div class="inner5">
                            <button class="btns" data-bs-toggle="modal" data-bs-target="#contactModal">Get a
                                Quote</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FIVE SECTION START  -->

<section class="p3-ecommerce-bg2">
    <div class="container">
        <div class="row pt-40 sm-pt-30 banner-third">
            <div class="col-md-5">
                <!-- <div class="p3-fourth-line position-relative wow fadeInUp">
                    Lorem ipsum
                </div> -->
                <h2 class="wow fadeInUp fs-20m"><span class="text-white">Innovative eCommerce Website Development
                        Services For
                    </span>Diverse Businesses</h2>

                <p class="para-long wow fadeInUp">
                    Dev Pickles combines years of design and development expertise to create innovative eCommerce
                    solutions for retailers, manufacturers, distributors, and wholesalers. We build engaging,
                    user-friendly online stores focused on seamless experiences and measurable growth. From intuitive
                    design to powerful functionality, every platform is tailored to your business goals, helping attract
                    customers, increase conversions, streamline operations, and strengthen your digital presence.

                </p>
                <!-- <p class="para-long wow fadeInUp">
                    At our eCommerce web design company, we strive to boost sales and drive customers to these
                    businesses. When you partner with Dev Pickles for your eCommerce website, we ensure that you’ll
                    get nothing less than the best results for your business!
                </p> -->
            </div>
        </div>
    </div>
</section>



<section class="page-spacing hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-6  wow slideInLeft">
                <p class="second">
                    Our eCommerce experts work with modern technologies to create scalable solutions for businesses of
                    every size and industry. We deliver tailored, reliable, and conversion-focused online stores
                    designed to support growth, enhance customer experiences, and achieve lasting results.

                </p>
            </div>
            <div class="col-md-6">
                <div class="position-relative wow slideInRight">
                    <div class="p3-third-line pl-120 sm-pl-70 ">Partner With Us</div>
                </div>
                <div class=" web-paragraph-2">
                    <div class=" pt-2 wow slideInRight">
                        <h2 class="text-black fs-30 lh-38 fw-600">Why Partner With Our <span class="web-color">eCommerce
                                Website
                            </span>Development Agency?</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rs-services app-boxes style3 pt-40 sm-pt-0 web-boxes hidden-sm wow fadeinup">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="services-item mb-20 sr-box-shadow">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="services-icon">
                                    <div class="image-part">
                                        <img class="main-img" src="assets/images/website-design/icon-1.png"
                                            alt="Custom Web Concepts"
                                            title="Dev PicklesSolution Custom web concepts Section Png Black">
                                        <img class="hover-img" src="assets/images/website-design/icon-1-hover.png"
                                            alt="Custom Web Concept"
                                            title="Dev PicklesSolution Custom web concepts Section Png White">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="services-content">
                                    <div class="services-text">
                                        <h3 class="title">
                                            <a class="">
                                                eCommerce Consulting
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="services-item mb-20 sr-box-shadow">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="services-icon">
                                    <div class="image-part">
                                        <img class="main-img" src="assets/images/website-design/icon-2.png"
                                            alt="Custom Website Design"
                                            title="Dev PicklesSolution Custom website design Section Png Black">
                                        <img class="hover-img" src="assets/images/website-design/icon-2-hover.png"
                                            alt="Custom Website Designs"
                                            title="Dev PicklesSolution Custom website design Section Png White">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="services-content">
                                    <div class="services-text">
                                        <h3 class="title">
                                            <a class="">
                                                eCommerce<br>Audit
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="services-item mb-20 sr-box-shadow">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="services-icon">
                                    <div class="image-part">
                                        <img class="main-img" src="assets/images/website-design/icon-3.png"
                                            alt="Custom Coding for UI and UX"
                                            title="Dev PicklesSolution Custom Coding for UI and UX Section Png Black">
                                        <img class="hover-img" src="assets/images/website-design/icon-3-hover.png"
                                            alt="Custom Coding for UI & UX"
                                            title="Dev PicklesSolution Custom Coding for UI and UX Section Png White">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="services-content">
                                    <div class="services-text">
                                        <h3 class="title">
                                            <a class="">
                                                eCommerce<br>Optimization
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services-item mb-20 sr-box-shadow">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="services-icon">
                                    <div class="image-part">
                                        <img class="main-img" src="assets/images/website-design/icon-4.png"
                                            alt="Ecommerce Site Development"
                                            title="Dev PicklesSolution Ecommerce Site Development Section Png Black">
                                        <img class="hover-img" src="assets/images/website-design/icon-4-hover.png"
                                            alt="Ecommerce Website Development"
                                            title="Dev PicklesSolution Ecommerce Site Development Section Png White">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="services-content">
                                    <div class="services-text">
                                        <h3 class="title">
                                            <a class="">
                                                eCommerce Website Design
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pt-30">
                    <div class="col-md-3 offset-md-3">
                        <div class="services-item mb-20 sr-box-shadow">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="services-icon">
                                        <div class="image-part">
                                            <img class="main-img" src="assets/images/website-design/icon-5.png"
                                                alt="Niche-Based Websites"
                                                title="Dev PicklesSolution Niche-Based Websites Section Png Black">
                                            <img class="hover-img" src="assets/images/website-design/icon-5-hover.png"
                                                alt="Niche Based Website"
                                                title="Dev PicklesSolution Niche-Based Websites Section Png White">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="services-content">
                                        <div class="services-text">
                                            <h3 class="title">
                                                <a class="">
                                                    eCommerce Migration
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="services-item mb-20 sr-box-shadow">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="services-icon">
                                        <div class="image-part">
                                            <img class="main-img" src="assets/images/website-design/icon-6.png"
                                                alt="Website Maintenance"
                                                title="Dev PicklesSolution Website Maintenance Section Png Black">
                                            <img class="hover-img" src="assets/images/website-design/icon-6-hover.png"
                                                alt="Web Maintenance"
                                                title="Dev PicklesSolution Website Maintenance Section Png White">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="services-content">
                                        <div class="services-text">
                                            <h3 class="title ">
                                                <a class="">
                                                    Marketplace Development
                                                </a>
                                            </h3>
                                        </div>
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
<section class="p3-ecommerce-bg3">
    <div class="container">
        <div class="row pt-100 sm-pt-30 banner-third">
            <div class="col-md-6 offset-md-6">
                <!-- <div class="position-relative">
                    <h3 class="line-partner pl-130 sm-pl-80 text-white">Lorem ipsum</h3>
                </div> -->
                <div class="row pt-20">
                    <div class="col-md-1">
                        <!-- <img src="assets/images/p3-custom-website-design-development/sec2-vector-1.png" alt="Vector 1"
                            title="Dev PicklesSolution Vector 1 Section Png"> -->
                    </div>
                    <div class="col-md-11">
                        <p class="fs-16 fs-14mm text-white">
                            A comprehensive audit of your eCommerce ecosystem from the ground up
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <!-- <img src="assets/images/p3-custom-website-design-development/sec2-vector-2.png" alt="Vector 2"
                            title="Dev PicklesSolution Vector 2 Section Png"> -->
                    </div>
                    <div class="col-md-11">
                        <p class="fs-16 fs-14mm text-white">
                            Long-term eCommerce roadmap with support of the latest eCommerce technologies
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <!-- <img src="assets/images/p3-custom-website-design-development/sec2-vector-3.png" alt="Vector 3"
                            title="Dev PicklesSolution Vector 3 Section Png"> -->
                    </div>
                    <div class="col-md-11">
                        <p class="fs-16 fs-14mm text-white">
                            Practical recommendations and assistance by leading eCommerce industry experts
                        </p>
                    </div>
                </div>
                <div class="pt-10 sm-pt-40 wow fadeInUp">
                    <a class="btn web-btn consultation hover get-in-app-development form-2" href="javascript:;"
                        data-bs-toggle="modal" data-bs-target="#contactModal">Book a Consultation
                        &nbsp; </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-spacing">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow slideInLeft">
                <p class="lh-24 fs-14m">
                    We use modern technologies like AI, AR, and blockchain to create engaging eCommerce websites. Our
                    solutions improve shopping experiences, simplify customer journeys, and help businesses stay
                    competitive in an evolving digital marketplace.

                </p>
            </div>
            <div class="col-md-5 offset-md-1 wow slideInRight">
                <!-- <div class="position-relative">
                    <h3 class="line-partner pl-130 sm-pl-90">WHY PARTNER WITH US?</h3>
                </div> -->
                <h2 class="fs-26 pt-10 sm-pt-0 fs-18m">Our Comprehensive <span class="web-color">eCommerce Website
                    </span>Design Services
                    at Dev Pickles</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row pt-40 sm-pt-0 counters">
            <div class="col-md-4 counter-1-p3-ecommerce wow fadeinup">
                <img src="assets/images/hoi-mobile-app-development/01.png" alt="Dev PicklesSoluions Number 01"
                    title="Dev PicklesSolution Number 1 Png">
                <h3 class=" web-color d-inline-block">eCommerce<br>Consulting</h3>

                <p class="pl-75 pt-30 lh-20 sm-pl-72 sm-pt-15 fs-14">
                    Get expert guidance on your eCommerce strategy, technology, performance, and growth opportunities.
                    We help you make smarter decisions with confidence.


                </p>
            </div>

            <div class="col-md-4 counter-2-p3-ecommerce wow fadeinup">
                <img src="assets/images/hoi-mobile-app-development/02.png" alt="Dev PicklesSoluions Number 02"
                    title="Dev PicklesSolution Number 2 Png">
                <h3 class=" web-color d-inline-block">Shopify & WooCommerce<br>Development</h3>
                <p class="pl-80 pt-30 lh-20 sm-pl-72 sm-pt-15 fs-14">
                    Launch a professional online store with our Shopify and WooCommerce development expertise. We create
                    fast, user-friendly, and scalable stores tailored to your business.

                </p>
            </div>

            <div class="col-md-4 counter-3-p3-ecommerce wow fadeinup">
                <img src="assets/images/hoi-mobile-app-development/03.png" alt="Dev PicklesSoluions Number 03"
                    title="Dev PicklesSolution Number 3 Png">
                <h3 class=" web-color d-inline-block">eCommerce<br>Migration</h3>
                <p class="pl-80 pt-30 lh-20 sm-pl-72 sm-pt-15 fs-14">
                    Moving to a new platform? We make the transition smooth and secure, helping migrate your store,


                    <span id="dots-3">...</span><span id="more-3">
                        products, data, and essential functionality with minimal disruption.
                    </span>
                </p>
                <a class="see-more-btn-2" onclick="myFunction3()" id="myBtn-3">Read more</a>
            </div>
        </div>
        <div class="row counters pt-50 sm-pt-0 wow fadeinup">
            <div class=" offset-md-2 col-md-4 counter-4-p3-ecommerce">
                <img src="assets/images/hoi-mobile-app-development/04.png" alt="Dev PicklesSoluions Number 04"
                    title="Dev PicklesSolution Number 4 Png">
                <h3 class=" web-color d-inline-block">eCommerce<br>Audit</h3>

                <p class="pl-96 pt-30 lh-20 sm-pl-72 sm-pt-15 fs-14">
                    Identify technical issues and growth opportunities with a comprehensive eCommerce audit.

                    <span id="dots-4">...</span><span id="more-4">
                        We review
                        your website’s performance, usability, security, and functionality to help improve overall
                        results.
                    </span>
                </p>
                <a class="see-more-btn-3" onclick="myFunction4()" id="myBtn-4">Read more</a>
            </div>

            <div class="col-md-4 counter-5-p3-ecommerce wow fadeinup">
                <img src="assets/images/hoi-mobile-app-development/05.png" alt="Dev PicklesSoluions Number 05"
                    title="Dev PicklesSolution Number 5 Png">
                <h3 class=" web-color d-inline-block">eCommerce Website<br>Design</h3>
                <p class="pl-90 pt-30 lh-20 sm-pl-72 sm-pt-15 fs-14">
                    We design engaging eCommerce websites focused on intuitive navigation, seamless user experiences,
                    and conversion.

                    <span id="dots-5">...</span><span id="more-5">
                        Every design is created to reflect your brand while making shopping simple for your
                        customers.
                    </span>
                </p>
                <a class="see-more-btn-4" onclick="myFunction5()" id="myBtn-5">Read more</a>
            </div>
        </div>
    </div>

</section>

<section class="design-counters bg-dark page-spacing">
    <div class="container">
        <!-- <div class="row wow fadeInUp">
            <div class="col-md-6 position-relative ">
                <h3 class="line-counter pl-140 sm-pl-80 text-white">Lorem ipsum dolor sit</h3>
            </div>
        </div> -->
        <div class="row pt-2">
            <div class="col-md-6 wow fadeinup">
                <h2 class="line-before fs-18m lh-40 web-color fs-30">eCommerce Website <span
                        class="text-white">Development Process At Dev Pickles</h2>
            </div>
        </div>
        <div class="row pt-2 ">
            <div class="col-md-10 wow fadeInUp text-white">
                <p class="fs-normal color-grey fs-14m">
                    After years of working with businesses worldwide, we’ve refined a streamlined process focused on
                    creating high-performing eCommerce experiences. Every stage is carefully planned to deliver quality,
                    efficiency, and measurable business value.

                </p>
            </div>
        </div>
        <div class="row counters-md pt-40">
            <div class="col-md-3 counter-1-ecommerce wow fadeInUp">
                <img src="assets/images/p3-custom-website-design-development/01.png"
                    alt="Web Design And Development Process 01"
                    title="Dev PicklesSolution Web Design And Development Process 01 Png">
                <img class="icon" src="assets/images/p3-custom-website-design-development/icon-1.png" alt="Icon 1"
                    title="Dev PicklesSolution Icon 01 Png">
                <div></div>
                <h3 class=" text-white text-center fs-22 fs-20m">Strategy</h3>
                <p class="text-white fs-14 sm-pt-10 text-center">
                    We begin with market research, competitor analysis, and buyer personas to understand your audience.
                    These insights shape a clear roadmap for your eCommerce project.

                </p>
            </div>
            <div class="col-md-3 counter-2-ecommerce wow fadeInUp sm-pt-20">
                <img src="assets/images/p3-custom-website-design-development/02.png"
                    alt="Web Design And Development Process 02"
                    title="Dev PicklesSolution Web Design And Development Process 02 Png">
                <img class="icon" src="assets/images/p3-custom-website-design-development/icon-2.png" alt="Icon 2"
                    title="Dev PicklesSolution Icon 02 Png">
                <div></div>
                <h3 class=" text-white text-center fs-22 fs-20m">Design</h3>
                <p class="text-white fs-14 sm-pt-10 text-center">
                    Our strategy comes to life through thoughtful UI/UX design. We create intuitive layouts and engaging
                    experiences that make browsing and purchasing effortless.

                </p>
            </div>
            <div class="col-md-3 counter-3-ecommerce wow fadeInUp sm-pt-20">
                <img src="assets/images/p3-custom-website-design-development/03.png"
                    alt="Web Design And Development Process 03"
                    title="Dev PicklesSolution Web Design And Development Process 03 Png">
                <img class="icon" src="assets/images/p3-custom-website-design-development/icon-3.png" alt="Icon 3"
                    title="Dev PicklesSolution Icon 03 Png">
                <div></div>
                <h3 class="text-white text-center fs-22 fs-20m">Development</h3>
                <p class="text-white fs-14 sm-pt-10 text-center">
                    Our developers transform approved designs into a fully functional eCommerce platform. We build the
                    front end, back end, APIs, integrations, and secure payment systems.

                </p>
            </div>
            <div class="col-md-3 counter-4-ecommerce wow fadeInUp sm-pt-20">
                <img src="assets/images/p3-custom-website-design-development/04.png"
                    alt="Web Design And Development Process 04"
                    title="Dev PicklesSolution Web Design And Development Process 04 Png">
                <img class="icon" src="assets/images/p3-custom-website-design-development/icon-4.png" alt="Icon 4"
                    title="Dev PicklesSolution Icon 04 Png">
                <div></div>
                <h3 class=" text-white text-center fs-22 fs-20m">Test</h3>
                <p class=" text-white fs-14 sm-pt-10 text-center">
                    Before launch, our QA team thoroughly tests performance, functionality, responsiveness, security,
                    and user experience. We resolve issues, optimize the store, and ensure everything is ready for a
                    smooth launch.

                </p>
            </div>
        </div>

    </div>
</section>


<section class="sliders bg-light-orange services pt-30">
    <div class="container wow fadeInUp">
        <div class="brand-carousel owl-carousel  row" data-loop="true" data-items="4" data-margin="30"
            data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
            data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="2"
            data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3"
            data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
            data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="true"
            data-md-device-dots="false">
            <div class="client-logo" style="cursor: pointer;"
                onclick="window.open('https://clutch.co/profile/hoi-solutions','new_window');">
                <img src="assets/images/home/clutch.png" alt="Dev Pickles Clutch Profile"
                    title="Dev PicklesSolution Clutch Png ">
            </div>
            <div class="client-logo" style="cursor: pointer;"
                onclick="window.open('https://www.crunchbase.com/organization/hoi-solutions-68a7','new_window');">
                <img src="assets/images/home/crunch.png" alt="Dev Pickles Crunchbase Profile"
                    title="Dev PicklesSolution Crunchbase Png">
            </div>
            <div class="client-logo" style="cursor: pointer;"
                onclick="window.open('https://www.trustpilot.com/review/hoisolutions.com','new_window');">
                <img src="assets/images/home/trustpilot.png" alt="Dev Pickles Trustpilot Profile"
                    title="Dev PicklesSolution Trustpilot Png">
            </div>
            <div class="client-logo" style="cursor: pointer;"
                onclick="window.open('https://www.thumbtack.com/ca/newport-beach/web-design/hoi-solutions-award-winning-agency/service/445210545835835397','new_window');">
                <img src="assets/images/home/thumb.png" alt="Dev Pickles Thumbtack Profile"
                    title="Dev PicklesSolution Thumbtack Png">
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Section Start -->
<?php include 'partials/testimonials-web-app-new.php' ?>
<!-- Testimonial Section End -->

<section>
    <div class="rs-partner style2 sm-pt-10 pb-10 services sm-pb-24">
        <div class="container wow fadeInDown">
            <div class="rs-carousel owl-carousel  owl-drag" data-loop="true" data-items="5" data-margin="30"
                data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false"
                data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false"
                data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
                data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5"
                data-md-device-nav="true" data-md-device-dots="false">
                <div class="partner-item">
                    <div class="logo-img ">
                        <img src="assets/images/home/wp.png" alt="WordPress Website Design & Development"
                            title="Dev PicklesSolution WordPress Png">
                    </div>
                </div>
                <div class="partner-item">
                    <div class="logo-img">

                        <img src="assets/images/home/sp.png" alt="Shopify Website Design & Development"
                            title="Dev PicklesSolution Shopify Png">

                    </div>
                </div>
                <div class="partner-item">
                    <div class="logo-img">
                        <img src="assets/images/home/nodejs.png" alt="Node.js Website Design & Development"
                            title="Dev PicklesSolution Node.js Png">

                    </div>
                </div>
                <div class="partner-item">
                    <div class="logo-img">

                        <img src="assets/images/home/blockchain.png" alt="Blockchain Website Design & Development"
                            title="Dev PicklesSolution Blockchain Png">

                    </div>
                </div>
                <div class="partner-item">
                    <div class="logo-img">
                        <img src="assets/images/home/angular.png" alt="Angular Website Design & Development"
                            title="Dev PicklesSolution Angular Png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-color page-spacing loaded">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <h2 class="poppins fw-600 wow fadeInUp fs-30 fs-20m"
                    style="visibility: visible; animation-name: fadeInUp;">Let’s <span class="text-white">Pioneer
                        Business
                    </span>Evolution!</h2>
                <p class="text-center para wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    We're not just building eCommerce websites; we're creating powerful digital storefronts that
                    transform ideas into scalable businesses. Your journey toward smarter, seamless, and future-ready
                    commerce begins here.

                </p>
            </div>
        </div>
    </div>
</section>

<section class="faqs page-spacing">
    <div class="container ">
        <div class="row wow fadeInUp">
            <h2 class="fs-20m">Frequently Asked <span class="web-color">Questions</span></h2>
            <div class="col-md-6">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What eCommerce development services does Dev Pickles offer?
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We provide complete eCommerce solutions, including strategy, UI/UX design, custom
                                development, Shopify and WooCommerce development, migration, audits, integrations,
                                testing, and ongoing support.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Can you build a custom eCommerce website?
                            </button>
                        </h3>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes. We create custom eCommerce websites tailored to your brand, products, customers,
                                business model, and specific growth objectives.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Do you develop Shopify and WooCommerce stores?
                            </button>
                        </h3>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes. Our team develops and customizes both Shopify and WooCommerce stores, creating
                                responsive, user-friendly, and scalable online shopping experiences.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Can you migrate my existing eCommerce website?
                            </button>
                        </h3>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Absolutely. We can help migrate your store, products, customer data, and essential
                                functionality to a new platform while keeping disruption to your business minimal.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                How long does it take to develop an eCommerce website?
                            </button>
                        </h3>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                The timeline depends on your website's features, integrations, design requirements, and
                                overall complexity. We provide a clear development timeline after reviewing your
                                project.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                Can you integrate payment gateways and third-party tools?
                            </button>
                        </h3>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes. We integrate secure payment gateways, APIs, shipping solutions, analytics, CRM
                                systems, inventory tools, and other third-party services required by your business.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                Will my eCommerce website be mobile-friendly?
                            </button>
                        </h3>
                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes. We design responsive eCommerce websites that provide a smooth and consistent
                                shopping experience across smartphones, tablets, laptops, and desktop devices.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingTen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                Do you provide eCommerce maintenance and support?
                            </button>
                        </h3>
                        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes. We provide ongoing maintenance, technical support, updates, performance
                                improvements, and optimization to keep your eCommerce platform running smoothly.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    #form {
        display: none !important;
    }

    #more {
        display: none;
    }

    #more-2 {
        display: none;
    }

    #more-3 {
        display: none;
    }

    #more-4 {
        display: none;
    }

    #more-5 {
        display: none;
    }
</style>

<script>
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }

    function myFunction2() {
        var dots = document.getElementById("dots-2");
        var moreText = document.getElementById("more-2");
        var btnText = document.getElementById("myBtn-2");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }

    function myFunction3() {
        var dots = document.getElementById("dots-3");
        var moreText = document.getElementById("more-3");
        var btnText = document.getElementById("myBtn-3");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }

    function myFunction4() {
        var dots = document.getElementById("dots-4");
        var moreText = document.getElementById("more-4");
        var btnText = document.getElementById("myBtn-4");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }

    function myFunction5() {
        var dots = document.getElementById("dots-5");
        var moreText = document.getElementById("more-5");
        var btnText = document.getElementById("myBtn-5");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }
</script>

<?php include 'partials/footer.php' ?>