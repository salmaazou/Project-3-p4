<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/contact.css">
   
    <link rel="stylesheet" href="/css/about.css">
    <title>Contact Form</title>
</head>
<body>
<nav>
        <ul>
          <li><a class="smoothscroll" href="index.php">Home</a></li>
          <li><a class="smoothscroll" href="courses.php">Cursussen</a></li>
          <li><a class="smoothscroll" href="about.php">Overons</a></li>
          <li><a class="smoothscroll" href="contact.php">Contact</a></li>
          <li><a class="smoothscroll" href="ad_config.php">Wijzigen</a></li>
        </ul>
      </nav> 
<header id="header">
  <div class="main_nav">
    <div class="container">
      <div class="mobile-toggle"> <span></span> <span></span> <span></span> </div>
     
    </div>
  </div>

  <div class="title">
    <div><span class="typcn typcn-heart-outline icon heading"></span></div>
    <div class="smallsep heading"></div>
    <h1 class="heading"> Virtual Reality Design</h1>
    <h2 class="heading">MBO Utrecht</h2>
    <a class="smoothscroll" href="#about">
    <div class="mouse">
      <div class="wheel"></div>
    </div>
    </a> </div>
  <a class="smoothscroll" href="#about">
  <div class="scroll-down"></div>
  </a> 
  </header>

<section id="contact">
  <div class="container">
    <h1>Contact</h1>
    <div class="block"></div>
    <form action="submit.php" method="POST">
      <div class="row">
      <div class="six columns">
          <label for="name">Name</label>
          <input class="u-full-width" type="text" name="name">
        </div>
        <div class="six columns">
          <label for="onderwerp">onderwerp</label>
          <input class="u-full-width" type="text" name="onderwerp">
        </div>
        <div class="six columns">
          <label for="email">Email</label>
          <input class="u-full-width" type="email" name="email">
        </div>
      </div>
      <div class="row">
        <label for="message">Message</label>
        <textarea class="u-full-width" name="message"></textarea>
        <input class="button-primary" type="submit" value="Submit">
      </div>
    </form>
  </div>
</section>
</body>
</html>
