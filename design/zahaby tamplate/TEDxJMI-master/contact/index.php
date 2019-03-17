<?php include('../layouts\header.php'); ?>

<body id="page-top">
  <!-- Navigation Start -->
  <nav id="navigation" class="navbar navbar-fixed-top navbar-dark">
    <div class="container">
      <div class="row">
        <div class="navbar-header col-lg-3">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand font-family-alt letter-spacing-1 text-extra-large text-uppercase" href="/">
            <img class="logo-navbar-dark" src="../res/images/logos/dark.png" alt=""/>
            <img class="logo-navbar-white" src="../res/images/logos/light.png" alt=""/>
          </a>
        </div>
        <!-- //.navbar-header -->
        
        <?php include('../layouts\headerNavbar.php'); ?>  
        <!-- //.navbar-collapse -->
      </div>
      <!-- //.row -->
    </div>
    <!-- //.container -->
  </nav>
  <!-- //Navigation End -->



  <!-- Section - Contact Start -->
  <section id="contact" class="bg-white-2">
    <div class="container">
      <div class="row no-padding-rl">
        <div class="col-md-12">
          <h2 class="font-family-alt font-weight-700 sm-title-large title-extra-large-2 text-gray-dark-2">
            Contact Us
          </h2>
          <span class="bg-base-color xs-margin-6 xs-no-margin-rl margin-3 no-margin-rl separator-line-extra-thick-long"></span>
        </div>
        <!-- //.col-md-10 -->
      </div>
      <!-- //.row -->

      <div class="row margin-4 no-margin-rl no-margin-bottom">
        <div class="col-md-5 no-padding-rl">
          <div class="row text-center">
            <i class="fa fa-envelope-o display-block text-base-color title-extra-large-2"></i>
            <br>
            <h4 class="font-weight-300 letter-spacing-1">
              tedxjmi2017@gmail.com
            </h4>
          </div>
          <!-- //.row -->

          <p class="margin-8 no-margin-bottom no-margin-rl font-family-alt text-extra-large">
            Send us your queries by email.<br>
            We endeavour to answer them all within 24 hours.
          </p>

          <br>
          <form name="contact" action="thank-you" method="post" id="form-contact" netlify>
            <div class="row margin-4 no-margin-rl">
              <input type="text" placeholder="Your Name" name="name" class="required" required>
              <input type="email" placeholder="Your Email" name="email" class="required email" required>
              <textarea placeholder="Your Message" name="message" class="required" required></textarea>
            </div>
            <!-- //.row -->

            <div class="row margin-4 no-margin-rl">
              <span class="display-block font-family-alt letter-spacing-1 text-gray-dark-2 text-small text-uppercase">
                * Please enter all fields correctly
              </span>
            </div>
            <!-- //.row -->

            <div class="row margin-4 no-margin-rl">
              <button id="btn-form-contact" type="submit" class="btn btn-base-color btn-medium">
                Send Message
              </button>
            </div>
            <!-- //.row -->
          </form>
        </div>
        <!-- //.col-md-5 -->

        <div class="contact-address col-md-6 col-md-offset-1">
          <div class="row text-center">
            <i class="fa fa-map-marker display-block text-base-color title-extra-large-2"></i>
            <!-- <span class="display-block font-family-alt font-weight-700 letter-spacing-1 margin-5 no-margin-bottom no-margin-rl text-large text-uppercase">
              Our Location
            </span> -->
            <br>
            <h4 class="font-weight-300 letter-spacing-1">
              Jamia Millia Islamia
              <br>Maulana Mohammad Ali Jauhar Marg
              <br>Jamia Nagar
              <br>New Delhi 110025
            </h4>
          </div>
          <!-- //.row -->
          <div class="row text-center">
            <div class="margin-8 no-margin-bottom no-margin-rl map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.2906312479427!2d77.28254455362033!3d28.56103426474026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfb09de6f2e8596e7!2sJamia+Millia+Islamia!5e0!3m2!1sen!2sin!4v1497486772213"
                frameborder="0"
                allowfullscreen>
              </iframe>
            </div>
            <!-- //.map -->
          </div>
          <!-- //.row -->
        </div>
        <!-- //.col-md-6 -->
      </div>
      <!-- //.row -->
    </div>
    <!-- //.container -->
  </section>
  <!-- //Section - Contact End -->



  <?php include('../layouts\footer.php');?>