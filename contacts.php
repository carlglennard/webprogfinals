<!DOCTYPE html>
<html>
<head>
  <title>Contact Me</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    
    section {
      text-align: center;
      margin: 20px;
    }

    .contact-info {
      margin-top: 20px;
    }

    .contact-info a {
      text-decoration: none;
      color: #0077cc; 
    }

    .contact-info a:hover {
      text-decoration: underline;
    }

    .contact-info p {
      margin: 10px 0;
      font-size: 18px;
    }

    h2 {
      text-align: center;
      color: #0077cc; 
    }
  </style>
</head>
<body>
  <header>
    <h1>Carl's Personal Website</h1>
  </header>
  
  <nav>
    <ul>
      <li><a href="indeks.php">Home</a></li>
      <li><a href="interests.php">Interests</a></li>
      <li><a href="projects.php">Projects</a></li>
      <li><a href="contacts.php">Contact Me</a></li>
      <li><a href="index.php">Logout</a></li>
    </ul>
  </nav>
  
  <section>
    <h2>Feel free to reach out through the following channels!</h2>

    <div class="contact-info">
      <p><b>GitHub</b>: <a href="https://github.com/carlglennard" target="_blank">github.com/carlglennard</a></p>
      <p><b>LinkedIn</b>: <a href="https://www.linkedin.com/in/carl-glennard-onate-b9b5a4291/" target="_blank">linkedin.com/carlglennard</a></p>
      <p><b>Email</b>: carlglennardonate@gmail.com</p>
      <p><b>Phone</b>: +63 9150611361</p>
    </div>
  </section>
  
  <footer>
    <p id="clock"></p>
  </footer>
  <script src="script.js"></script>
</body>
</html>