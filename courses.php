<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cursussen - Virtual Reality Design</title>
    <link rel="stylesheet" href="css/about.css">
	
</head>
<body>
<nav>
        <ul>
        <li><a class="smoothscroll" href="php/index.php">Home</a></li>
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

	<main>
		<section>
			<h2>Cursussen</h2>
			<table>
				<thead>
					<tr>
						<th>Cursusnaam</th>
						<th>Beschrijving</th>
						<th>Docent</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Introductie tot VR-technologie</td>
						<td>Leer de basisprincipes van VR-technologie en hoe je deze kunt toepassen op verschillende vakgebieden.</td>
						<td>John Smith</td>
					</tr>
					<tr>
						<td>VR-design voor architectuur</td>
						<td>Ontdek hoe je VR-technologie kunt gebruiken om realistische en gedetailleerde ontwerpen te maken voor architectuurprojecten.</td>
						<td>Jane Doe</td>
					</tr>
					<tr>
						<td>VR-ontwikkeling voor gaming</td>
						<td>Leer hoe je VR-technologie kunt toepassen op game-ontwikkeling en creëer meeslepende spelervaringen.</td>
						<td>Bob Johnson</td>
					</tr>
				</tbody>
			</table>
		</section>
	</main>

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