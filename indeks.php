<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
      text-align: center;
    }

    section {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
      border: 2px solid #ddd;
      border-radius: 10px;
      margin: 20px;
    }

    section img {
      width: 200px;
      border-radius: 50%;
    }

    h2 {
      text-align: center;
      color: #0077cc;
    }

    section p {
      margin-top: 20px;
      text-align: justify;
      padding: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
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
    <img src="carl.jpg" alt="Carl's Picture">
    <h2>Welcome!</h2>
    <p>
      Greetings fellow coders! I'm <b>Carl, a <i>21-year-old</i> Information Technology student from National University Fairview</b>. Welcome to my personal website, your gateway to exploring my projects, interests, and getting to know me better. Navigate through the bars above to discover more, and if you'd like to connect, feel free to visit "Contact Me" page. <b>I'm delighted to have you here!</b> Thank you for visiting!
    </p>
  </section>

  <footer>
    <p id="clock"></p>
  </footer>
  <script src="script.js"></script>
</body>
</html>