

document.addEventListener('DOMContentLoaded', function() {
  // Initialize Feather icons
  feather.replace();
  
  // Update copyright year
  document.getElementById('currentYear').textContent = new Date().getFullYear();
  
  // Navbar scroll effect with rounded corners
  const navbar = document.getElementById('navbar');
  window.addEventListener('scroll', function() {
    if (window.scrollY > 20) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });
  
  // Mobile menu toggle
  const navbarToggle = document.getElementById('navbarToggle');
  const mobileMenu = document.getElementById('mobileMenu');
  const menuIcon = document.querySelector('[data-feather="menu"]');
  const closeIcon = document.querySelector('[data-feather="x"]');
  
  navbarToggle.addEventListener('click', function() {
    mobileMenu.classList.toggle('active');
    
    // Toggle icons
    menuIcon.classList.toggle('hidden');
    closeIcon.classList.toggle('hidden');
    
    // Re-initialize Feather icons after toggling visibility
    feather.replace();
  });
  
  // Close mobile menu when clicking on links
  const mobileLinks = document.querySelectorAll('.mobile-link');
  mobileLinks.forEach(link => {
    link.addEventListener('click', function() {
      mobileMenu.classList.remove('active');
      menuIcon.classList.remove('hidden');
      closeIcon.classList.add('hidden');
      feather.replace();
    });
  });
  
  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      
      const targetId = this.getAttribute('href');
      const targetElement = document.querySelector(targetId);
      
      if (targetElement) {
        window.scrollTo({
          top: targetElement.offsetTop - 70, // Account for fixed navbar
          behavior: 'smooth'
        });
      }
    });
  });
  
  // Animate elements when they enter the viewport
  const animateElements = document.querySelectorAll('.animate-fade-up');
  
  // Initial check for elements already in viewport on page load
  animateElements.forEach(element => {
    if (isElementInViewport(element)) {
      element.style.opacity = "1";
    }
  });
  
  // Check if element is in viewport during scroll
  window.addEventListener('scroll', function() {
    animateElements.forEach(element => {
      if (isElementInViewport(element)) {
        element.style.opacity = "1";
      }
    });
  });
  
  function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
      rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.bottom >= 0
    );
  }

  // Contact form handling
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Gather form data
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const message = document.getElementById('message').value;
      
      // In a real application, you would send this data to a server
      console.log('Form submitted:', { name, email, message });
      
      // Show success message (in a real app, this would happen after successful submission)
      alert('Thank you for your message! We will get back to you soon.');
      
      // Reset form
      contactForm.reset();
    });
  }

  // Add floating animation to service cards
  const serviceCards = document.querySelectorAll('.service-card');
  serviceCards.forEach((card, index) => {
    card.style.animationDelay = `${index * 0.2}s`;
    card.classList.add('animate-float');
  });
});



document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();

    let formData = new FormData(this);

    fetch("contact_process.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if (data === "success") {
            alert("Message sent successfully!");
            document.getElementById("contactForm").reset();
        } 
    })
    .catch(error => console.error("Error:", error));
});



