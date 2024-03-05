

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chriswell's Portfolio</title>
  <link rel="stylesheet" href="styles.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar">
    <div class="container">
      <h1 class="logo">Chriswell Peyara</h1>
      <ul class="nav-links">
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="hero">
    <div class="container">
      <div class="hero-content">
        <h1 class="hero-title">Welcome to My Portfolio</h1>
        <p class="hero-description">I am a software engineer specializing in web development.</p>
        <a href="#contact" class="btn">Get in Touch</a>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about">
    <div class="container">
      <div class="about-content">
        <div class="left-column">
          <h2 class="section-title">About Me</h2>
          <p class="about-description">I am a passionate software engineer with expertise in building scalable web applications. I have a strong foundation in front-end development using HTML, CSS, and JavaScript, as well as experience with back-end technologies such as Node.js and relational databases.</p>
          <a href="#contact" class="btn">Contact Me</a>
        </div>
        <div class="right-column">
          <img src="background/chris.jpg" alt="Profile Image" class="profile-image">
        </div>
      </div>
    </div>
  </section>

  <!-- Skills Section -->
  <section id="skills">
    <div class="container">
      <h2 class="section-title">Skills</h2>
      <div class="skills-grid">
        <div class="skill">
          <i class="fab fa-html5"></i>
          <h3>HTML5</h3>
        </div>
        <div class="skill">
          <i class="fab fa-css3-alt"></i>
          <h3>CSS</h3>
        </div>
        <div class="skill">
          <i class="fab fa-js"></i>
          <h3>JavaScript</h3>
        </div>
        <div class="skill">
          <i class="fab fa-java"></i>
          <h3>Java</h3>
        </div>
        <div class="skill">
          <i class="fab fa-android"></i>
          <h3>Android</h3>
        </div>
        <div class="skill">
          <i class="fas fa-database"></i>
          <h3>Databases</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio">
    <div class="container">
      <h2 class="section-title">Portfolio</h2>
      <div class="project-grid">
        <div class="project">
          <img src="background/code2.jpg" alt="Project 1">
          <div class="project-details">
            <h3>Project 1</h3>
            <p>FABE Employee and Payroll management system.</p>
            <a href="#">View Project</a>
          </div>
        </div>
        <div class="project">
          <img src="background/code3.jpg" alt="Project 2">
          <div class="project-details">
            <h3>Project 2</h3>
            <p>Buse Dinning system.</p>
            <a href="#">View Project</a>
          </div>
        </div>



        <div class="project">
          <img src="background/stocktake.png" alt="Project 2">
          <div class="project-details">
            <h3>Project 3</h3>
            <p>Stock taking Sytem.</p>
            <a href="https://github.com/Chriswellp/Stocktake.git">View Project</a>
          </div>
        </div>







        <!-- Add more projects as needed -->
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact">
    <div class="container">
      <h2 class="section-title">Contact Me</h2>
      <form class="contact-form" action="sendemail.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit" class="btn">Send Message</button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <p>&copy; 2024 Chriswell Peyara. All rights reserved.</p>
      <div class="social-icons">
        <a href="https://wa.me/263776092761"><i class="fab fa-whatsapp"></i></a>
        <a href="https://www.linkedin.com/in/chris-peyara-49600b257"><i class="fab fa-linkedin"></i></a>
        <a href="https://github.com/Chriswellp/chrispot.git"><i class="fab fa-github"></i></a>
      </div>
    </div>
  </footer>

  <!-- Font Awesome Icons -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"></script>

</body>
</html>