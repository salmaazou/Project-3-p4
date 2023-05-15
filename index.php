<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/about.css">

	
	
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
<br>

	<main>
		
		<section id="intro">
			<h2>Ontdek de toekomst van design met Virtual Reality Design</h2>
			<p>Virtual Reality Design biedt een unieke en innovatieve manier van ontwerpen en creëren. Met onze cursussen leer je de basisprincipes van VR-design en hoe je deze kunt toepassen op verschillende vakgebieden, zoals architectuur, gaming en productontwerp.</p>
			<a href="courses.php" class="btn">Bekijk onze cursussen</a>
		</section>
		<section id="why">
			
			<h2>Waarom Virtual Reality Design?</h2>
			<ul>
				<li>Leer de nieuwste technologieën en trends in design</li>
				<li>Ontwikkel vaardigheden die je kunt toepassen op verschillende vakgebieden</li>
				<li>Word een pionier in de opkomende wereld van VR-technologie</li>
			</ul>
		</section>
		<section id="testimonials">
			<h2>Wat studenten zeggen</h2>
			<blockquote>
				<p>"Virtual Reality Design heeft me geleerd hoe ik op een andere manier kan ontwerpen en creëren. Ik ben zo blij dat ik deze cursus heb gevolgd en kan niet wachten om mijn vaardigheden te gebruiken in mijn toekomstige carrière."</p>
				<cite>- Sarah, afgestudeerde student</cite>
			</blockquote>
			<blockquote>
				<p>"Ik had nooit gedacht dat ik zo gepassioneerd zou zijn over VR-technologie en design. Dankzij Virtual Reality Design heb ik een nieuwe passie gevonden en ben ik klaar voor de toekomst."</p>
				<cite>- Mark, huidige student</cite>
			</blockquote>
		</section>
	</main>


	<?php
	  // Connectie met de database
	    $conn = mysqli_connect('localhost','root','','news_dp');
  // Query om alle producten op te halen
  $result = mysqli_query($conn, "SELECT * FROM products");

  // Controleren of er producten zijn gevonden
  if(mysqli_num_rows($result) > 0) {
    // Loop door alle producten en toon deze op de pagina
    while($row = mysqli_fetch_assoc($result)) {
      echo "<div class='product'>";
      echo "<img src='uploaded_img/" . $row['image'] . "' height='200' alt='" . $row['name'] . "'>";
      echo "<h3>" . $row['name'] . "</h3>";
      echo "<p>" . $row['price'] . "</p>";
      echo "</div>";
    }
  } else {
    // Geen producten gevonden
    echo "Geen producten gevonden.";
  }
?>






	<footer>
		<p>&copy; Virtual Reality Design 2023</p>
	</footer>
 
</body>
</html>
