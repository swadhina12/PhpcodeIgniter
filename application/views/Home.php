<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Chain App Dev - App Landing Page</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/templatemo-chain-app-dev.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/animated.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.css'); ?>">

</head>

<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="<?= base_url(); ?>" class="logo">
                        <img src="<?= base_url('assets/images/logo.png'); ?>" alt="Chain App Dev">
                    </a>
                    <!-- ***** Logo End ***** -->
                    
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="<?= base_url(); ?>" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="<?= base_url('#services'); ?>">Services</a></li>
                        <li class="scroll-to-section"><a href="<?= base_url('#about'); ?>">About</a></li>
                        <li class="scroll-to-section"><a href="<?= base_url('#pricing'); ?>">Pricing</a></li>
                        <li class="scroll-to-section"><a href="<?= base_url('#newsletter'); ?>">Newsletter</a></li>
                        <li>
                            <div class="gradient-button">
                                <a id="modal_trigger" href="#modal">
                                    <i class="fa fa-sign-in-alt"></i> Sign In Now
                                </a>
                            </div>
                        </li> 
                    </ul>        
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>

  <!-- ***** Header Area End ***** -->
  
  <div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">
        <!-- Social Login -->
        <div class="social_login">
            <div class="">
                <a href="#" class="social_box fb">
                    <span class="icon"><i class="fab fa-facebook"></i></span>
                    <span class="icon_title">Connect with Facebook</span>
                </a>

                <a href="#" class="social_box google">
                    <span class="icon"><i class="fab fa-google-plus"></i></span>
                    <span class="icon_title">Connect with Google</span>
                </a>
            </div>

            <div class="centeredText">
                <span>Or use your Email address</span>
            </div>

            <div class="action_btns">
                <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
            </div>
        </div>

        <!-- Username & Password Login form -->
        <div class="user_login">
            <form action="<?= base_url('auth/login'); ?>" method="POST">
                <label>Email / Username</label>
                <input type="text" name="username" required />
                <br />

                <label>Password</label>
                <input type="password" name="password" required />
                <br />

                <div class="checkbox">
                    <input id="remember" type="checkbox" name="remember" />
                    <label for="remember">Remember me on this computer</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><button type="submit" class="btn btn_red">Login</button></div>
                </div>
            </form>

            <a href="<?= base_url('auth/forgot_password'); ?>" class="forgot_password">Forgot password?</a>
        </div>

        <!-- Register Form -->
        <div class="user_register">
            <form action="<?= base_url('auth/register'); ?>" method="POST">
                <label>Full Name</label>
                <input type="text" name="fullname" required />
                <br />

                <label>Email Address</label>
                <input type="email" name="email" required />
                <br />

                <label>Password</label>
                <input type="password" name="password" required />
                <br />

                <div class="checkbox">
                    <input id="send_updates" type="checkbox" name="send_updates" />
                    <label for="send_updates">Send me occasional email updates</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><button type="submit" class="btn btn_red">Register</button></div>
                </div>
            </form>
        </div>
    </section>
</div>


<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>Get The Latest App From App Stores</h2>
                                    <p>Chain App Dev is an app landing page HTML5 template based on Bootstrap v5.1.3 CSS layout provided by TemplateMo, a great website to download free CSS templates.</p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="white-button first-button scroll-to-section">
                                        <a href="<?= base_url('contact'); ?>">Free Quote <i class="fab fa-apple"></i></a>
                                    </div>
                                    <div class="white-button scroll-to-section">
                                        <a href="<?= base_url('contact'); ?>">Free Quote <i class="fab fa-google-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="<?= base_url('assets/images/slider-dec.png'); ?>" alt="Banner Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="services" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h4>Amazing <em>Services &amp; Features</em> for you</h4>
                    <img src="<?= base_url('assets/images/heading-line-dec.png'); ?>" alt="Heading Line">
                    <p>
                        If you need the greatest collection of HTML templates for your business, please visit 
                        <a rel="nofollow" href="https://www.toocss.com/" target="_blank">TooCSS</a> Blog. 
                        If you need to have a contact form PHP script, go to 
                        <a href="https://templatemo.com/contact" target="_parent">our contact page</a> for more information.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php 
                $services = [
                    ["title" => "App Maintenance", "description" => "You are not allowed to redistribute this template ZIP file on any other website."],
                    ["title" => "Rocket Speed of App", "description" => "You are allowed to use the Chain App Dev HTML template. Feel free to modify or edit this layout."],
                    ["title" => "Multi Workflow Idea", "description" => "If this template is beneficial for your work, please support us <a rel='nofollow' href='https://paypal.me/templatemo' target='_blank'>a little via PayPal</a>. Thank you."],
                    ["title" => "24/7 Help &amp; Support", "description" => "Lorem ipsum dolor consectetur adipiscing elit sedder williamsburg photo booth quinoa and fashion axe."]
                ];

                $service_classes = ['first-service', 'second-service', 'third-service', 'fourth-service'];

                foreach ($services as $index => $service): 
            ?>
                <div class="col-lg-3">
                    <div class="service-item <?= $service_classes[$index]; ?>">
                        <div class="icon"></div>
                        <h4><?= $service['title']; ?></h4>
                        <p><?= $service['description']; ?></p>
                        <div class="text-button">
                            <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<div id="about" class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="section-heading">
                    <h4>About <em>What We Do</em> &amp; Who We Are</h4>
                    <img src="<?= base_url('assets/images/heading-line-dec.png'); ?>" alt="Heading Line">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor incididunt ut labore et dolore magna.</p>
                </div>
                <div class="row">
                    <?php 
                        $about_items = [
                            ["title" => "Maintenance Problems", "description" => "Lorem Ipsum Text"],
                            ["title" => "24/7 Support & Help", "description" => "Lorem Ipsum Text"],
                            ["title" => "Fixing Issues About", "description" => "Lorem Ipsum Text"],
                            ["title" => "Co. Development", "description" => "Lorem Ipsum Text"]
                        ];

                        foreach ($about_items as $item): 
                    ?>
                        <div class="col-lg-6">
                            <div class="box-item">
                                <h4><a href="#"><?= $item['title']; ?></a></h4>
                                <p><?= $item['description']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <div class="col-lg-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor idunte ut labore et dolore adipiscing magna.</p>
                        <div class="gradient-button">
                            <a href="#">Start 14-Day Free Trial</a>
                        </div>
                        <span>*No Credit Card Required</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-image">
                    <img src="<?= base_url('assets/images/about-right-dec.png'); ?>" alt="About Image">
                </div>
            </div>
        </div>
    </div>
</div>


<div id="clients" class="the-clients">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading">
                    <h4>Check What <em>The Clients Say</em> About Our App Dev</h4>
                    <img src="<?= base_url('assets/images/heading-line-dec.png'); ?>" alt="Heading Line">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="naccs">
                    <div class="grid">
                        <div class="row">
                            <div class="col-lg-7 align-self-center">
                                <div class="menu">
                                    <?php 
                                        $clients = [
                                            ["name" => "David Martino Co", "date" => "30 November 2021", "category" => "Financial Apps", "rating" => "4.8"],
                                            ["name" => "Jake Harris Nyo", "date" => "29 November 2021", "category" => "Digital Business", "rating" => "4.5"],
                                            ["name" => "May Catherina", "date" => "27 November 2021", "category" => "Business & Economics", "rating" => "4.7"],
                                            ["name" => "Random User", "date" => "24 November 2021", "category" => "New App Ecosystem", "rating" => "3.9"],
                                            ["name" => "Mark Amber Do", "date" => "21 November 2021", "category" => "Web Development", "rating" => "4.3"],
                                        ];

                                        foreach ($clients as $index => $client): 
                                    ?>
                                        <div class="<?= $index === 0 ? 'first-thumb active' : ''; ?>">
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <h4><?= $client['name']; ?></h4>
                                                        <span class="date"><?= $client['date']; ?></span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                        <span class="category"><?= $client['category']; ?></span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <?php for ($i = 0; $i < 5; $i++): ?>
                                                            <i class="fa fa-star <?= ($i < $client['rating']) ? 'filled' : ''; ?>"></i>
                                                        <?php endfor; ?>
                                                        <span class="rating"><?= $client['rating']; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div> 
                            <div class="col-lg-5">
                                <ul class="nacc">
                                    <?php 
                                        $testimonials = [
                                            ["name" => "David Martino", "role" => "CEO of David Company", "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit..."],
                                            ["name" => "Jake H. Nyo", "role" => "CTO of Digital Company", "content" => "CTO, Lorem ipsum dolor sit amet, consectetur adipiscing elit..."],
                                            ["name" => "May C.", "role" => "Founder of Catherina Co.", "content" => "May, Lorem ipsum dolor sit amet, consectetur adipiscing elit..."],
                                            ["name" => "Random Staff", "role" => "Manager, Digital Company", "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit..."],
                                            ["name" => "Mark Am", "role" => "CTO, Amber Do Company", "content" => "Mark, Lorem ipsum dolor sit amet, consectetur adipiscing elit..."],
                                        ];

                                        foreach ($testimonials as $index => $testimonial): 
                                    ?>
                                        <li class="<?= $index === 0 ? 'active' : ''; ?>">
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="client-content">
                                                                <img src="<?= base_url('assets/images/quote.png'); ?>" alt="Quote">
                                                                <p><?= $testimonial['content']; ?></p>
                                                            </div>
                                                            <div class="down-content">
                                                                <img src="<?= base_url('assets/images/client-image.jpg'); ?>" alt="Client Image">
                                                                <div class="right-content">
                                                                    <h4><?= $testimonial['name']; ?></h4>
                                                                    <span><?= $testimonial['role']; ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


  <div id="pricing" class="pricing-tables">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>We Have The Best Pre-Order <em>Prices</em> You Can Get</h4>
            <img src="<?= base_url('assets/images/heading-line-dec.png'); ?>" alt="Decorative Heading Line">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor incididunt ut labore et dolore magna.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-regular">
            <span class="price">$12</span>
            <h4>Standard Plan App</h4>
            <div class="icon">
              <img src="<?= base_url('assets/images/pricing-table-01.png'); ?>" alt="">
            </div>
            <ul>
              <li>Lorem Ipsum Dolores</li>
              <li>20 TB of Storage</li>
              <li class="non-function">Life-time Support</li>
              <li class="non-function">Premium Add-Ons</li>
              <li class="non-function">Fastest Network</li>
              <li class="non-function">More Options</li>
            </ul>
            <div class="border-button">
              <a href="#">Purchase This Plan Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-pro">
            <span class="price">$25</span>
            <h4>Business Plan App</h4>
            <div class="icon">
              <img src="<?= base_url('assets/images/pricing-table-01.png'); ?>" alt="">
            </div>
            <ul>
              <li>Lorem Ipsum Dolores</li>
              <li>50 TB of Storage</li>
              <li>Life-time Support</li>
              <li>Premium Add-Ons</li>
              <li class="non-function">Fastest Network</li>
              <li class="non-function">More Options</li>
            </ul>
            <div class="border-button">
              <a href="#">Purchase This Plan Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-regular">
            <span class="price">$66</span>
            <h4>Premium Plan App</h4>
            <div class="icon">
              <img src="<?= base_url('assets/images/pricing-table-01.png'); ?>" alt="">
            </div>
            <ul>
              <li>Lorem Ipsum Dolores</li>
              <li>120 TB of Storage</li>
              <li>Life-time Support</li>
              <li>Premium Add-Ons</li>
              <li>Fastest Network</li>
              <li>More Options</li>
            </ul>
            <div class="border-button">
              <a href="#">Purchase This Plan Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 

  <footer id="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading">
                    <h4>Join our mailing list to receive the news &amp; latest trends</h4>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-3">
                <form id="search" action="<?= base_url('subscribe'); ?>" method="POST">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <fieldset>
                                <input type="email" name="email" class="email" placeholder="Email Address..." autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <fieldset>
                                <button type="submit" class="main-button">Subscribe Now <i class="fa fa-angle-right"></i></button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="footer-widget">
                    <h4>Contact Us</h4>
                    <p>Rio de Janeiro - RJ, 22795-008, Brazil</p>
                    <p><a href="#">010-020-0340</a></p>
                    <p><a href="#">info@company.co</a></p>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="footer-widget">
                    <h4>About Us</h4>
                    <ul>
                        <li><a href="<?= base_url(); ?>">Home</a></li>
                        <li><a href="<?= base_url('services'); ?>">Services</a></li>
                        <li><a href="<?= base_url('about'); ?>">About</a></li>
                        <li><a href="<?= base_url('testimonials'); ?>">Testimonials</a></li>
                        <li><a href="<?= base_url('pricing'); ?>">Pricing</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="footer-widget">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Free Apps</a></li>
                        <li><a href="#">App Engine</a></li>
                        <li><a href="#">Programming</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">App News</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="footer-widget">
                    <h4>About Our Company</h4>
                    <div class="logo">
                        <img src="<?= base_url('assets/images/white-logo.png'); ?>" alt="Company Logo">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="copyright-text">
                    <p>Copyright © <?= date('Y'); ?> Chain App Dev Company. All Rights Reserved.
                        <br>Design: <a href="https://templatemo.com/" target="_blank" title="css templates">TemplateMo</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>



  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

</body>
</html>
