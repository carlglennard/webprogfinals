<!DOCTYPE html>
<html>
<head>
  <title>Projects</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    section {
      text-align: center;
    }

    h2 {
      text-align: center;
      color: #0077cc; 
    }

    .intro-message {
      font-size: 18px;
      margin-bottom: 30px;
    }

    .project-container {
      margin-bottom: 50px;
    }

    .project-title {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .project-description {
      max-width: 600px;
      margin: 0 auto;
      font-size: 16px;
      margin-bottom: 20px;
      padding: 10px;
      border: 2px solid #0077cc; /* Border color */
      border-radius: 5px; /* Rounded corners */
      color: #333; /* Text color */
    }

    .project-image {
      max-width: 300px; /* Set a consistent width */
      height: auto;
      border-radius: 5px;
      margin-bottom: 20px;
    }

    .github-link {
      display: inline-block; /* Make the button only as wide as its content */
      padding: 10px 20px;
      font-size: 16px;
      background-color: #0077cc;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .github-link:hover {
      background-color: #005fa3;
    }
  </style>
</head>
<body>
  <header>
    <h1>Carl's Personal Website</h1>
  </header>
  
  <nav>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="interests.php">Interests</a></li>
      <li><a href="projects.php">Projects</a></li>
      <li><a href="contacts.php">Contact Me</a></li>
      <li><a href="index.php">Logout</a></li>
    </ul>
  </nav>
  
  <section>
    <h2>Projects</h2>
    <p class="intro-message">
      Welcome to my projects! Here are some of my simple projects that I have created.
      It showcases some basic concepts and ideas wherein I learned from some tutorials and lessons.
      I hope you'll visit my Github page for more. Thank you!
    </p>

    <!-- Project 1 -->
    <div class="project-container">
      <h3 class="project-title">Project 1: Python Clicker Game</h3>
      <img class="project-image" src="project1.png" alt="Python Clicker">
      <p class="project-description">
      This is my first ever project that features GUI with Python with a package called <b>tkinter</b>. This is a very simple game where the user will click the button for as many as they can within the specified time. The game will then take record of the highest score that is created. It will be retained in the system as long as a new highscore is set. This game is very simple and easy to replicate.
      </p>
      <a class="github-link" href="https://github.com/carlglennard/first-project/blob/master/clicker.py" target="_blank">Link to Github</a>
    </div>

    <!-- Project 2 -->
    <div class="project-container">
      <h3 class="project-title">Project 2: CPP Project</h3>
      <img class="project-image" src="project2.png" alt="CPP Project">
      <p class="project-description"> 
      This <b>C++</b> console program offers three main functionalities: drawing an outline shape figure based on user input, generating and analyzing random numbers (odd and even), and providing an option to exit the program. The program utilizes functions for modularity, employs loops and conditions for user input validation, and incorporates a simple menu system. The code emphasizes simplicity, readability, and user interaction.
      </p>
      <a class="github-link" href="https://github.com/carlglennard/cs126-cpp/blob/main/CONATE-PRACTICAL2.cpp" target="_blank">Link to Github</a>
    </div>

    <!-- Project 3 -->
    <div class="project-container">
      <h3 class="project-title">Project 3: HTML Project</h3>
      <img class="project-image" src="project3.png" alt="HTML Project">
      <p class="project-description">    
      This <b>HTML</b> code creates a simple and visually appealing personal webpage. It includes sections for personal information, skills, and contact details, with embedded CSS providing styling for a clean layout. The header displays a centered title, while the navigation bar offers links to different sections. The design emphasizes simplicity, making it suitable for showcasing personal and professional details effectively.
      </p>
      <a class="github-link" href="https://github.com/carlglennard/webprog/tree/main/Assignment2-Onate" target="_blank">Link to Github</a>
    </div>

  </section>
  
  <footer>
    <p id="clock"></p>
  </footer>
  <script src="script.js"></script>
</body>
</html>
