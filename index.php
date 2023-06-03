<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/about.css">
	<link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/home2.css">


	
	
    <title>Document</title>
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
 
<section class="c-section">
  <h2 class="c-section__title"><span>Ontdek Virtual Reality Design </span></h2>
  <ul class="c-services">
    <li class="c-services__item">
      <h3>Ontdek de toekomst van design met Virtual Reality Design</h3>
      <p>Virtual Reality Design biedt een unieke en innovatieve manier van ontwerpen en creëren. Met onze cursussen leer je de basisprincipes van VR-design en hoe je deze kunt toepassen op verschillende vakgebieden, zoals architectuur, gaming en productontwerp.</p>
    </li>
    <li class="c-services__item">
      <h3>Waarom Virtual Reality Design?</h3>
      <p>Leer de nieuwste technologieën en trends in design <br>
				Ontwikkel vaardigheden die je kunt toepassen op verschillende vakgebieden <br>
				Word een pionier in de opkomende wereld van VR-technologie</p>
    </li>
    <li class="c-services__item">
      <h3>Front End Development</h3>
      <p>Wij bieden het Front End vak met een diepe focus op HTML, CSS, Sass. Je leert hoe je de website responsieve, toegankelijke en performante kunt maken.</p>
    </li>
    
<br>
    <li class="c-services__item">
      <h3>Over de opleiding</h3>
      <p>Een opleiding in Virtual Reality Design richt zich op het aanleren van de vaardigheden en kennis die nodig zijn om virtuele omgevingen te ontwerpen en ontwikkelen. Tijdens de opleiding leer je hoe je 3D-modellen kunt maken, interactieve elementen kunt implementeren en de gebruikerservaring kunt optimaliseren binnen een virtuele realiteit.</p>
    </li>
    <li class="c-services__item">
      <h3>Wat studenten zeggen</h3>
      <p>"Virtual Reality Design heeft me geleerd hoe ik op een andere manier kan ontwerpen en creëren. Ik ben zo blij dat ik deze cursus heb gevolgd en kan niet wachten om mijn vaardigheden te gebruiken in mijn toekomstige carrière."</p>
				<cite>- Sarah, afgestudeerde student</cite>
        <br>
        <p>"Ik had nooit gedacht dat ik zo gepassioneerd zou zijn over VR-technologie en design. Dankzij Virtual Reality Design heb ik een nieuwe passie gevonden en ben ik klaar voor de toekomst."</p>
				<cite>- Mark, huidige student</cite>
    </li>
    <li class="c-services__item">
      <h3>Over de opleiding</h3>
      <p>Betreed de grenzeloze wereld van Virtual Reality Design en leer hoe je meeslepende virtuele ervaringen kunt creëren.  </p>
    </li>
    </ul>
  <main class="page-content">
  <div class="card">
    <div class="content">
      <h2 class="title">Virtual Reality Design</h2>
      <p class="copy">Leer de nieuwste technologieën en trends in design</p>
      <button class="btn">Kijk bij cursusen</button>
    </div>
  </div>
  <div class="card">
    <div class="content">
      <h2 class="title">Intro tot VR-technologie</h2>
      <p class="copy">Leer de basisprincipes van VR-technologie en hoe je deze kunt toepassen op verschillende vakgebieden.</p>
      <button class="btn">John Smith</button>
    </div>
  </div>
  <div class="card">
    <div class="content">
      <h2 class="title">VR-design voor architectuur</h2>
      <p class="copy">Ontdek hoe je VR-technologie kunt gebruiken om realistische en gedetailleerde ontwerpen te maken voor architectuurprojecten.</p>
      <button class="btn">Jane Doe</button>
    </div>
  </div>
  <div class="card">
    <div class="content">
      <h2 class="title">VR-ontwikkeling voor gaming</h2>
      <p class="copy">Leer hoe je VR-technologie kunt toepassen op game-ontwikkeling en creëer meeslepende spelervaringen.</p>
      <button class="btn">Bob Johnson	</button>
    </div>
  </div>
</main>

</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
	  // Connectie met de database
	    $conn = mysqli_connect('localhost','root','','news_dp');
  // Query om alle producten op te halen
  $result = mysqli_query($conn, "SELECT * FROM products");

  // Controleren of er producten zijn gevonden
  if(mysqli_num_rows($result) > 0) {
    // Loop door alle producten en toon deze op de pagina
    while($row = mysqli_fetch_assoc($result)) {
      echo "<div class='c-services__item'>";
      echo "<img src='uploaded_img/" . $row['image'] . "' height='200' alt='" . $row['name'] . "'>";
      echo "<h3>" . $row['name'] . "</h3>";
      echo "<p>" . $row['price'] . "</p>";
      echo "</div>" . "<br>";
    }
  } else {
    // Geen producten gevonden
    echo "Geen producten gevonden.";
  }
?>
<br>

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
