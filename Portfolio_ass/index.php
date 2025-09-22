  <?php

  class skills {
  public $price;
  public $name;
};
$skill1 = new skills();
$skill1 -> rate = "$200k";
$skill1->name = "WEB-DEVELOPMENT |";

$skill2 = new skills();
$skill2->rate = "$400k";
$skill2->name = "HACKING |";

$skill3 = new skills();
$skill3->rate = "$1m";
$skill3->name = "CYBER-SECURITY |";

$skill4 = new skills();
$skill4->rate = "$5m";
$skill4->name = "APPLICATION-DEVELOPMENT |";

$myskills = [$skill1,$skill2,$skill3,$skill4]
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>My Portfolio</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      line-height: 1.6;
      background-color: #f5f5f5;
      color: #333;
    }

    header {
      background: #1a1a1a;
      color: #fff;
      padding: 1rem 2rem;
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 1000;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    nav a {
      color: #fff;
      margin-left: 1rem;
      text-decoration: none;
      font-weight: bold;
    }

    nav a:hover {
      color: #00bcd4;
    }

    section {
      padding: 100px 20px 60px;
      max-width: 1000px;
      margin: auto;
    }

    .hero {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      background: linear-gradient(to right, #2193b0, #6dd5ed);
      color: #fff;
    }

    .hero h1 {
      font-size: 3rem;
    }

    .hero p {
      font-size: 1.2rem;
      margin: 20px 0;
    }

    .hero button {
      padding: 10px 20px;
      font-size: 1rem;
      background-color: #fff;
      color: #333;
      border: none;
      cursor: pointer;
      transition: 0.3s ease;
    }
    .skills{
      display:flex;
      justify-content:space-between;
    }

    .hero button:hover {
      background-color: #e0e0e0;
    }

    .about, .projects, .contact {
      background: #fff;
      margin: 20px 0;
      border-radius: 10px;
      padding: 40px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .projects .project {
      margin: 20px 0;
    }

    footer {
      text-align: center;
      padding: 20px;
      background: #1a1a1a;
      color: #fff;
    }

    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2.5rem;
      }

      nav {
        font-size: 0.9rem;
      }
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">My Portfolio</div>
    <nav>
      <a href="#hero">Home</a>
      <a href="#about">About</a>
      <a href="#projects">Projects</a>
      <a href="#contact">Contact</a>
    </nav>
  </header>

  <section id="hero" class="hero">
    <h1>Hello, I'm Ebuka God'swill</h1>
    <p class="skills"><?php foreach ($myskills as $skill) {
      echo $skill->name .$skill->rate."<br/>";
    } ?></p>
    <button onclick="scrollToSection('projects')">View My Work</button>
  </section>

  <section id="about" class="about">
    <h2>About Me</h2>
    <p>I’m a passionate web developer with a focus on creating responsive, user-friendly websites. I love working with HTML, CSS, and JavaScript to bring ideas to life.</p>
  </section>

  <section id="projects" class="projects">
    <h2>Projects</h2>
    <div class="project">
      <h3>Project One</h3>
      <p>A brief description of the project and the technologies used.</p>
    </div>
    <div class="project">
      <h3>Project Two</h3>
      <p>Another cool project with some more description.</p>
    </div>
  </section>

  <section id="contact" class="contact">
    <h2>Contact Me</h2>
    <p>Email: ezeanichukwuebuka473@gmail.com</p>
    <p>LinkedIn: <a href="#" target="_blank">linkedin.com/in/janedoe</a></p>
  </section>

  <footer>
    &copy; 2025 Jane Doe. All rights reserved.
  </footer>

  <script>
    function scrollToSection(id) {
      document.getElementById(id).scrollIntoView({ behavior: 'smooth' });
    }
  </script>


</body>
</html>
