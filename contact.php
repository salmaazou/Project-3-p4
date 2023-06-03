<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
   
    <link rel="stylesheet" href="css/about.css">
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
    <form>
      <div class="row">
        <div class="six columns">
          <label for="exampleRecipientInput">Name</label>
          <input class="u-full-width" type="text">
        </div>
        <div class="six columns">
          <label for="exampleEmailInput">Email</label>
          <input class="u-full-width" type="email">
        </div>
      </div>
      <div class="row">
        <label for="exampleMessage">Message</label>
        <textarea class="u-full-width"></textarea>
        <input class="button-primary" type="submit" value="Submit">
      </div>
    </form>
  </div>
</section>


<section id="contact">
  <div class="container">
    <h1>Nieuws bericht</h1>
    <div class="block"></div>
    <form method="POST" action="">
      <div class="row">
        <div class="six columns">
          <label for="name">Naam</label>
          <input class="u-full-width" type="text" name="name" required>
        </div>
        <div class="six columns">
          <label for="email">E-mail</label>
          <input class="u-full-width" type="email" name="email" required>
        </div>
        <input class="button-primary" type="submit" value="Verzenden">
      </div>
    </form>
  </div>
</section>

<footer>
  <div class="container">
    <div class="nine columns">
      <p>© 2023 Mbo Utrecht-opleidingen.</p>
    </div>
    <div class="three columns"> <span class="typcn typcn-social-facebook-circular socialIcons"></span> <span class="typcn typcn-social-instagram-circular socialIcons"></span> <span class="typcn typcn-social-google-plus-circular socialIcons"></span> <span class="typcn typcn-social-linkedin-circular socialIcons"></span> </div>
  </div>

  <script>
    /*----------------------------------------------------*/
/* Quote Loop
------------------------------------------------------ */

function fade($ele) {
    $ele.fadeIn(1000).delay(3000).fadeOut(1000, function() {
        var $next = $(this).next('.quote');
        fade($next.length > 0 ? $next : $(this).parent().children().first());
   });
}
fade($('.quoteLoop > .quote').first());


/*----------------------------------------------------*/
/* Navigation
------------------------------------------------------ */

$(window).scroll(function() {

    if ($(window).scrollTop() > 300) {
        $('.main_nav').addClass('sticky');
    } else {
        $('.main_nav').removeClass('sticky');
    }
});

// Mobile Navigation
$('.mobile-toggle').click(function() {
    if ($('.main_nav').hasClass('open-nav')) {
        $('.main_nav').removeClass('open-nav');
    } else {
        $('.main_nav').addClass('open-nav');
    }
});

$('.main_nav li a').click(function() {
    if ($('.main_nav').hasClass('open-nav')) {
        $('.navigation').removeClass('open-nav');
        $('.main_nav').removeClass('open-nav');
    }
});


/*----------------------------------------------------*/
/* Smooth Scrolling
------------------------------------------------------ */

jQuery(document).ready(function($) {

   $('.smoothscroll').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash,
	    $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 800, 'swing', function () {
	        window.location.hash = target;
	    });
	});
  
});


TweenMax.staggerFrom(".heading", 0.8, {opacity: 0, y: 20, delay: 0.2}, 0.4);
  </script>
</footer>
</body>
</html>
