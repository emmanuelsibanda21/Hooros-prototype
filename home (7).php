<?php $this->session->sess_destroy(); ?>
<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home">Hooros</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Clients</a>
                    </li>   
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                    <li><a class="page-scroll" href="#sign-up">Sign Up</a></li>
                    <li><a href="#loginModal" data-toggle="modal">Login</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="<?php echo base_url('assets/img/logo.png')?>" alt="">
                    <div class="intro-text">
                        <span class="name">Find top talent</span><br/>
                        <p>We connect established and startup businesses to vetted freelance and permanent developers, designers and copywriters</p>
                        <hr class="star-light">
                        <span class="skills">Web Developers - Software Engineers - Mobile App Developers - Database Administrators - Graphic Designers - UX Designers - Copywriters
                            <br/>Choose the skill you are looking for we will find the expert!  
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Our Clients</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">

                
                <table align="center">
                    <tr>
                        <td>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url('assets/img/portfolio/altivex.jpg')?>" class="img-responsive" alt="">
                    </a>
                </div></td>
                <td>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url('assets/img/portfolio/jobmail.jpg')?>" class="img-responsive" alt="">
                    </a>
                </div></td>
                <td>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url('assets/img/portfolio/vibescout.jpg')?>" class="img-responsive" alt="">
                    </a>
                </div></td>
                </tr>
                <tr>
                    <td>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url('assets/img/portfolio/createactivate.png')?>" class="img-responsive" alt="">
                    </a>
                </div>
                    </td>
                    <td>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="<?php echo base_url('assets/img/portfolio/DiscoverAfricaGroup.jpg')?>" class="img-responsive" alt="">
                </a>
            </div></td>
            <td>
        <div class="col-sm-4 portfolio-item">
            <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                <div class="caption">
                    <div class="caption-content">
                        <i class="fa fa-search-plus fa-3x"></i>
                    </div>
                </div>
                <img src="<?php echo base_url('assets/img/portfolio/Eventerpriselogo.jpg')?>" class="img-responsive" alt="">
            </a>
        </div></td></tr>
        </table>
            </div>
            </div>
    
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Hooros is an exclusive network of experts connecting established businesses
                        and startups to experts on a freelance or permanent basis.
                        We vet our talent through a comprehensive three step
                        filtering process and handle all legal agreements to protect all parties and client invoicing.
</p>
                </div>
                <div class="col-lg-4">
                    <p>Whether you're a high performing student looking to gain work experience, a professional looking to attract new clients, or an expert looking for a new challenge to expand your skill base, Hooros is the perfect starting and ending point!</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                   
                </div>
            </div>
        </div>
    </section>
    
   

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Us</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" name="number" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
     <!--Sign up-->
    <section id="sign-up" class="success">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>

                    Sign Up

                </h2>
                <hr class="star-light"></hr>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-2">
                <p>

                    <a  class="btn btn-lg btn-outline" href="#freelancerModal" data-toggle="modal">
                    <i class="fa fa-code"></i>
                     Freelancer                                        
                </a>

                </p>
            </div>
            <div class="col-lg-4 col-lg-offset-2">
                <p>

                    <a class="btn btn-lg btn-outline" href="#clientModal" data-toggle="modal">
                    <i class="fa fa-user"></i>

                     Client
                                        

                </a>

                </p>
            </div>
            
        </div>
    </div>

</section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Woodstock<br/>
Cape Town<br/>
Western Cape<br/>
7441<br/>
South Africa</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/hoorosza/" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/Hoorosza" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="http://www.linkedin.com/company/hooros/" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Hooros in the Media</h3>
                        <p><a href="http://disrupt-africa.com/2015/09/hooros-set-to-launch-in-bid-to-disrupt-sa-freelancing-market/">As featured on Disrupt-Africa</a></p>
                        <p><a href="http://www.htxt.co.za/2016/03/23/hooros-the-online-network-linking-businesses-with-the-right-tech-freelancers/"> As featured on HTXT.Africa</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Hooros <?php echo date('Y')?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
    
    <!--Login Modal-->
    <div class="portfolio-modal modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Login</h2>
                            <hr class="star-primary">
                            <img src="<?php echo base_url('assets/img/logo.png')?>" class="img-responsive img-centered" alt="">
                            <form method="post" action="home/submitLogin">
                                <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="hooros@hooros.co.za" name="email" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                                <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password" required data-validation-required-message="Please enter your password.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div><br/>
                                <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Go!</button>
                            </div>
                        </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Login Modal End-->

    <!--Portfolio Modals-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Client Details</h2>
                            <hr class="star-primary">
                            <img src="<?php echo base_url('assets/img/portfolio/altivex.jpg')?>" class="img-responsive img-centered" alt="">
                               <p>AltiveX Creative Foundry is a multi-disciplinary design and development agency based in the Maboneng precinct in Johannesburg and in the Chelsea area in New York</p>
                            <ul class="list-inline item-details">
                                <li>Website:
                                    <strong><a href="http://altivexfoundry.com">AltiveX Creative Foundry</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Client Details</h2>
                            <hr class="star-primary">
                            <img src="<?php echo base_url('assets/img/portfolio/jobmail.jpg')?>" class="img-responsive img-centered" alt="">
                               <p>Jobmail is one of the largest job classifieds site in South Africa. Jobmail is a subsidiary of Junk Mail Digital</p>
                            <ul class="list-inline item-details">
                                <li>Website:
                                    <strong><a href="http://www.jobmail.co.za/">Job Mail</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Client Details</h2>
                            <hr class="star-primary">
                            <img src="<?php echo base_url('assets/img/portfolio/vibescout.jpg')?>" class="img-responsive img-centered" alt="">
                               <p>Vibescout is a location based app for finding all the hottest events around your region</p>
                            <ul class="list-inline item-details">
                                <li>Website:
                                    <strong><a href="http://www.vibescout.com/">Vibe Scout</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Client Details</h2>
                            <hr class="star-primary">
                            <img src="<?php echo base_url('assets/img/portfolio/createactivate.png')?>" class="img-responsive img-centered" alt="">
                               <p>Create Activate is a Western Australian based marketing agency, specializing in Social Media Marketing</p>
                            <ul class="list-inline item-details">
                                <li>Website:
                                    <strong><a href="http://www.create-activate.com/">Create-Activate</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Client Details</h2>
                            <hr class="star-primary">
                            <img src="<?php echo base_url('assets/img/portfolio/DiscoverAfricaGroup.jpg')?>" class="img-responsive img-centered" alt="">
                               <p>Discover Africa Group is a travel agency that owns and operates some of Africa’s leading travel websites</p>
                            <ul class="list-inline item-details">
                                <li>Website:
                                    <strong><a href="http://www.discoverafricagroup.com/">Discover Africa Group</a>
                                    </strong>
                                </li>
                            </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Client Details</h2>
                                <hr class="star-primary">
                                <img src="<?php echo base_url('assets/img/portfolio/Eventerpriselogo.jpg')?>" class="img-responsive img-centered" alt="">
                                <p>Eventerprise is a dedicated online network for the global events industry connecting buyers hosting or arranging events to sellers providing the very best in associated products, venues and services.</p>
                                <ul class="list-inline item-details">
                                    <li>Website:
                                        <strong><a href="http://www.eventerprise.com/">Eventerprise</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Registration Modals-->
    
    <!--Client-->
    
    
    <div class="portfolio-modal modal fade" id="clientModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Client Registration</h2>
                            <hr class="star-primary">
                            <img src="<?php echo base_url('assets/img/logo.png')?>" class="img-responsive img-centered" alt="">
                            <p><strong>Company Details</strong></p>
                            <form method="post" action="home/submit_registration">
                                <input type="hidden" name="type" value="client"/>
                             
                                <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <input type="text" name="company" class="form-control1" placeholder="Company Name" autofocus="" required="">
      
                                <p class="help-block text-danger"></p>
                            </div>
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <textarea style="width: 704px; height: 226px;" placeholder="What does your company do?" name="company_brief" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea>
                                    </div>
                        </div>
                                
                                <p><strong>Admin Details</strong></p>
                                <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="first_name" required data-validation-required-message="Please enter your Name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                                
                                <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Surname</label>
                                <input type="text" class="form-control" placeholder="Surname" name="surname" required data-validation-required-message="Please enter your Surname.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                                 <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="email" name="email" required data-validation-required-message="Please enter your password.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                                <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password" required data-validation-required-message="Please enter your password.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                                <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Retype Password</label>
                                <input type="password" class="form-control" placeholder="Retype Password" name="password_check" required data-validation-required-message="Please enter your password.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                                <br/>
                                <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Go!</button>
                            </div>
                        </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Client Modal End-->
    
        <!--Freelancer-->
    
    
    <div class="portfolio-modal modal fade" id="freelancerModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Registration</h2>
                            <hr class="star-primary">
                            <img src="<?php echo base_url('assets/img/logo.png')?>" class="img-responsive img-centered" alt="">
                            <p><strong>Freelancer Details</strong></p>
                            <form method="post" action="home/submit_registration">
                                
                             <input type="hidden" name="type" value="freelancer"/>
                                
                                
                               
                                <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="first_name" name="first_name" required data-validation-required-message="It would be great if we knew your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                                
                                <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Surname</label>
                                <input type="text" class="form-control" placeholder="Surname" name="surname" required data-validation-required-message="Do you have a surname?">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                                 <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="email" name="email" required data-validation-required-message="We need your email to ensure you have access to the latest projects on our site.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                                 <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Skype ID</label>
                                <input type="text" class= "form-control" placeholder="Please input your Skype ID" name="skype" required data-validation-required-message="We need your Skype ID to get in touch with you.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                                 <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>What are you an expert in?</label>
                                <textarea style="width: 704px; height: 226px;" placeholder="What are you an expert in?" name="brief" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                                <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password" id="password" name="password" required data-validation-required-message="Please enter your password.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                                <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Retype Password</label>
                                <input type="password" class="form-control" placeholder="Retype Password" name="password_check" required data-validation-required-message="Please enter your password.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                                <br/>
                                <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Go!</button>
                            </div>
                        </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Freelancer Modal End-->