<?php 
include("db.php");
include('contact_process.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Only Digital</title>
    <link  rel="icon"  href="logoicon.png">
    <meta name="description" content="Only Digital - Affiliate Marketing, AI-Powered Design, and Digital Solutions" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <!-- Feather icons via CDN -->
    <script src="https://unpkg.com/feather-icons"></script>
  </head>

  <body>

  <div class="container">

    <div id="root">
      <!-- Navigation -->
      <nav id="navbar" class="navbar">
        <div class="navbar-container">
          <div class="navbar-logo">
            <a href="#home"><img src="iconlog_bg.png" class=""  alt="">
            Only Digital</a>
          </div>
          <div class="navbar-links" id="navbarLinks">
      <a href="#home" class="navbar-link">Home</a>
      <a href="#services" class="navbar-link">Services</a>
      <a href="#ai-tools" class="navbar-link">AI Tools</a> <!-- New link added here -->
      <a href="#about" class="navbar-link">About</a>
      <a href="#team" class="navbar-link">Team</a>
      <a href="#contact" class="navbar-link">Contact</a>
    </div>


          <button class="navbar-toggle" id="navbarToggle">
            <i data-feather="menu"></i>
            <i data-feather="x" class="hidden"></i>
          </button>
        </div>

        <!-- Mobile menu -->
        <div class="mobile-menu" id="mobileMenu">
  <a href="#home" class="mobile-link">Home</a>
  <a href="#services" class="mobile-link">Services</a>
  <a href="#ai-tools" class="mobile-link">AI Tools</a> <!-- New link added here -->
  <a href="#about" class="mobile-link">About</a>
  <a href="#team" class="mobile-link">Team</a>
  <a href="#contact" class="mobile-link">Contact</a>
</div>

</nav>
      
      <!-- Hero Section -->
      <section id="home" class="hero">
        <div class="hero-content">
          <h1 class="hero-title animate-fade-up">
            We are <span class="text-gradient">Only Digital</span>
          </h1>
          

          <p class="hero-description animate-fade-up">
          Explore innovative digital products, expert services, and AI-driven marketing solutions designed to accelerate growth and simplify your business operations
        </p>
        <p class="hero-description animate-fade-up">
          Empowering Your Digital Success with AI Tools          </p>
          <div class="hero-cta animate-fade-up">
            <a href="#contact" class="cta-button">
              Get Started
              <i data-feather="arrow-right" class="icon-right"></i>
            </a>
          </div>
        </div>
      </section>

      <!-- Services Section -->
      <section id="services" class="services">

        <div class="container">
          <h2 class="section-title">Our Services</h2>
          <div class="services-grid">
            <div class="service-card animate-fade-up">
              <div class="service-icon">
                <i data-feather="trending-up"></i>
              </div>
              <h3 class="service-title">Affiliate Marketing</h3>
              <p class="service-description">Boost your revenue with tailored affiliate programs and strategic insights.</div>
              
            
            <div class="service-card animate-fade-up">
              <div class="service-icon">
                <i data-feather="cpu"></i>
              </div>
              <h3 class="service-title">AI Marketing Tools</h3>
              <p class="service-description">Custom websites and applications that meet your unique business needs.    
              </p>
              </div>

              
              <div class="service-card animate-fade-up">
              <div class="service-icon">
                <i class="fa fa-book"></i>
              </div>
              <h3 class="service-title">Digital Products</h3>
              <p class="service-description">Leverage AI-driven tools to automate marketing, optimize campaigns, and grow your business effortlessly.    
              </p>
              </div>
          </div>
          <br><br>
            <div class="service-card animate-fade-up">
              <div class="service-icon">
                <i data-feather="code"></i>
              </div>
              <h3 class="service-title">Web Development</h3>
              <p class="service-description">Custom websites and applications that meet your unique business needs.</div>
            </div>
            


            
      </section>
      
      
      
      
      
      

      <!-- AI Tools Section -->
      <section id="ai-tools" class="ai-tools">
  <div class="container">
    <h2 class="section-title">AI-Powered Marketing Solutions</h2>
    <p class="hero-description animate-fade-up" style="width: 70wv;">
    Our AI tools simplify tasks, automate processes, and unlock growth opportunities for businesses of all sizes. </p>
<br><br><br><br>
<div class="container">

  
  <div class="services-grid">
    <div class="service-card animate-fade-up">
      <div class="service-icon">
                  <i class="fa fa-robot"></i>
              </div>
              <h3 class="service-title">AI-Powered Marketing Solutions</h3>
              <p class="service-description"> Our AI marketing tools are designed to simplify complex tasks, automate processes, and unlock new growth opportunities for businesses of all sizes.
              </div>
              
              
              
              
              
              <div class="service-card animate-fade-up">
                  <div class="service-icon">
                    <i class="fa fa-chart-line"></i>
                  </div>
                  <h3 class="service-title">Data-Driven Insights</h3>
                  <p class="service-description">
                    Harness the power of AI to gain valuable insights and make smarter business decisions.
                  </p>
                </div>
                
 
      <div class="service-card animate-fade-up">
        <div class="service-icon">
          <i class="fa fa-arrow-up"></i>
        </div>
        <h3 class="service-title">Growth Acceleration</h3>
        <p class="service-description">
          Scale your business rapidly by using AI tools that help you target the right audience with precision.
        </p>
      </div>
    </div>
    <br><br>
    <div class="ai-tools-cards">
      <div class="service-card animate-fade-up">
        <div class="service-icon">
          <i class="fa fa-robot"></i>
        </div>
        <h3 class="service-title">Automated Campaigns</h3>
        <p class="service-description">
          Create, manage, and optimize your campaigns with AI-powered automation.
        </p>
      </div>
    </div>
</section>



<!-- About Section -->
<section id="about" class="about">
  <div class="container">
    <h2 class="section-title">Who We Are</h2>
          <div class="about-content">
            <p class="about-description">
            We are a team of passionate students dedicated to offering high-quality digital products, creating powerful web applications, and transforming businesses with AI-powered marketing tools. Our mission is to simplify the digital journey for entrepreneurs, businesses, and creators, driving fast growth with cutting-edge solutions.
            </p>
          </div>
        </div>
      </section>

      <!-- Team Section -->
      <section id="team" class="team">
        <div class="container">
          <h2 class="section-title">Our Team</h2>
          <div class="team-grid">
            <div class="team-card">
              <div class="team-image-placeholder">
                <i data-feather="user"></i>
              </div>
              <h3 class="team-name">Alex Morgan</h3>
              <p class="team-role">Affiliate Marketing Specialist</p>
              <p class="team-bio">10+ years of experience in creating successful affiliate strategies.</p>
            </div>
            <div class="team-card">
              <div class="team-image-placeholder">
                <i data-feather="user"></i>
              </div>
              <h3 class="team-name">Jamie Chen</h3>
              <p class="team-role">AI Solutions Architect</p>
              <p class="team-bio">Expert in developing practical AI applications for business growth.</p>
            </div>
            <div class="team-card">
              <div class="team-image-placeholder">
                <i data-feather="user"></i>
              </div>
              <h3 class="team-name">Sam Wilson</h3>
              <p class="team-role">Web Development Lead</p>
              <p class="team-bio">Passionate about creating seamless user experiences and innovative interfaces.</p>
            </div>
          </div>
        </div>
      </section>

    <!-- Contact Section -->
<section id="contact" class="contact">
  <div class="container">
    <h2 class="section-title">Let's Work Together</h2>
    <p class="contact-description">
      Ready to transform your digital presence? Get in touch with us to discuss how we can help you achieve your goals.
    </p>
    <div class="contact-form-container">
      <form id="contactForm" class="contact-form">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="4"></textarea>
        </div>
        <button type="submit" class="cta-button">
          Send Message
          <i data-feather="send" class="icon-right"></i>
        </button>
      </form>
    </div>
  </div>
</section>

<!-- Footer -->
      <footer class="footer">
        <div class="container">
          <div class="footer-content">
            <div class="footer-logo">Only Digital</div>
            
            <div class="social-links">
              <a href="https://web.facebook.com/profile.php?id=61573163911156" target="_blank" rel="noopener noreferrer" class="social-link">
                <i data-feather="facebook"></i>
              </a>
              <a href="https://www.instagram.com/onlydigitale/" target="_blank" rel="noopener noreferrer" class="social-link">
                <i data-feather="instagram"></i>
              </a>
              <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="social-link">
                <i data-feather="linkedin"></i>
              </a>
              <a href="https://www.youtube.com/@OnlyDigital-y9f" target="_blank" rel="noopener noreferrer" class="social-link">
                <i data-feather="youtube"></i>
              </a>
            </div>
            
            <div class="copyright">
              © <span id="currentYear"></span> Only Digital. All rights reserved.
            </div>
          </div>
        </div>
      </footer>
    </div>

  </div>
    <!-- JavaScript -->
    <script src="script.js"></script>
  </body>
</html>
