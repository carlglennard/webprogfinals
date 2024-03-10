<!DOCTYPE html>
<html>
<head>
  <title>Interests</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
      font-family: 'Arial', sans-serif; 
    }

    .hidden-content {
      display: none;
      margin-top: 10px;
      padding: 20px; 
      border: 2px solid #0077cc; 
      border-radius: 8px;
      text-align: center;
      background-color: #f5f5f5; 
    }

    h2 {
      text-align: center;
      color: #0077cc; 
    }

    button {
      display: block;
      margin: 0 auto 15px;
      padding: 15px;
      font-size: 18px; 
      background-color: #0077cc;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s; 
    }

    button:hover {
      background-color: #005fa3;
    }

    .interest-photo {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
      margin-top: 20px;
      display: block;
      margin: 0 auto;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); 
    }

    p {
      font-size: 16px; 
      line-height: 1.6; 
      color: #333; 
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
    <h2>Interests, Hobbies and Passion</h2>

    <button onclick="toggleContent('techProg')">Technology and Programming</button>
    <div id="techProg" class="hidden-content">
      <p>
        One of the activities that piqued my interest is technology, more specifically, programming. Programming let's me communicate with the machine and do what I say. It is a powerful tool in which I can craft my own work using my computer. In this picture, this is an sample code of assembly language in which I'm trying to display my name. This is one of the challenging programming language I tried because of it being a low level programming language.
      </p>
      <img class="interest-photo" src="int1.jpg" alt="Tech">
    </div>

    <hr style="margin: 20px 0;">

    <button onclick="toggleContent('rockMetal')">Rock and Metal</button>
    <div id="rockMetal" class="hidden-content">
      <p>
        Ever since I'm 6 years old, I have been exposed to metal and rock genre. I was mainly influenced by my Dad because of his music taste. Since then, I was always listening to a lot of metal and rock bands. I go to a lot of rock shows as much as I can. Recently, I attended a concert with my Dad to watch Silverstein last October 2023. It was definitely exhilerating and fun. I can't wait to see another one of my favorite bands soon.
      </p>
      <img class="interest-photo" src="int2.JPG" alt="Rock and Metal Photo">
    </div>

    <hr style="margin: 20px 0;">

    <button onclick="toggleContent('chess')">Chess</button>
    <div id="chess" class="hidden-content">
      <p>
        If most of the kids at my age were into sports such as Basketball or Volleyball, I was the kid who is getting beaten by his Dad in Chess a lot. I remember my first time beating my Dad in Chess at the age of 7 years old. It was surreal, 7 year old beating a 30 year old? Since then, I took the initiative to train myself and get better playing chess. I played in a lot of tournaments at school and outside. This photo was taken at the Little Milo Olympics when I was in 8th grade. It was a fun experience, but unfortunately our team didn't get the championship title. We only managed to placed 4th because our team is lacking points to get into Top 3.
      </p>
      <img class="interest-photo" src="int3.jpg" alt="Chess Photo">
    </div>

    <hr style="margin: 20px 0;">

    <button onclick="toggleContent('reading')">Reading</button>
    <div id="reading" class="hidden-content">
      <p>
        Reading is one of the recent hobbies I developed during my late teen years. I mostly read majority of the recently best-selling non-fiction books. This is the current lineup of books I have in my shelf this 2024. These set of different books of different genres will definitely keep me posted whenever I have free time to spare. Learning is never boring.
      </p>
      <img class="interest-photo" src="int4.jpg" alt="Reading Photo">
    </div>

    <hr style="margin: 20px 0;">

    <button onclick="toggleContent('gaming')">Gaming</button>
    <div id="gaming" class="hidden-content">
      <p>
        Playing online games is a hobby I gained through playing with my classmates and friends. I used to play a lot of League of Legends back in days especially during the pandemic. My friends and I never get to play that much now due to our busy lives in college. So I took time to learn Teamfight Tactics, an autochess battler in the League of Legends universe. After playing a single set, I managed to hit Masters elo. Eversince hitting one of the apex ranks in the game, I got bored and am now playing casually. I try to make my time more worth by either learning new technology related stuff or read the books that I have.
      </p>
      <img class="interest-photo" src="int5.png" alt="Gaming Photo">
    </div>

  </section>
  
  <footer>
    <p id="clock"></p>
  </footer>
  <script src="script.js"></script>

  <script>
    // JavaScript function to toggle the visibility of hidden content
    function toggleContent(id) {
      var content = document.getElementById(id);
      content.style.display = (content.style.display === 'none' || content.style.display === '') ? 'block' : 'none';
    }
  </script>
</body>
</html>
