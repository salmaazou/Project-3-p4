<?php

@include 'config.php';

if (isset($_POST['add_product'])) {

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/' . $product_image;

   if (empty($product_name) || empty($product_price) || empty($product_image)) {
      $message[] = 'please fill out all';
   } else {
      $insert = "INSERT INTO products(name, price, image) VALUES('$product_name', '$product_price', '$product_image')";
      $upload = mysqli_query($conn, $insert);
      if ($upload) {
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = ' is toegevoegd';
      } else {
         $message[] = 'kon  niet toevoegen';
      }
   }
};

if (isset($_GET['delete'])) {
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM products WHERE id = $id");
   header("location: ./index.php?content=ad_config");
};

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/about.css">

   <title>page</title>



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
         </a>
      </div>
      <a class="smoothscroll" href="#about">
         <div class="scroll-down"></div>
      </a>
   </header>
   <?php

   if (isset($message)) {
      foreach ($message as $message) {
         echo '<span class="message">' . $message . '</span>';
      }
   }

   ?>

   <section class="archief_bg">

      <div class="container">
         <div class="admin-product-form-container">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
               <h3>Hier kan je text aan de home page toevoegen</h3>
               <input type="text" placeholder="Voeg hier" name="product_name" class="box">
               <input type="text" placeholder="Voeg de datum" name="product_price" class="box">
               <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
               <input type="submit" class="btn" name="add_product" value="Plaatsen">
            </form>
         </div>
      </div>
   </section>

   <style>
      section.archief_bg {
  background-color: #f1f1f1;
  padding: 20px;
}

.container {
  max-width: 800px;
  margin: 0 auto;
}

.admin-product-form-container {
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
}

.admin-product-form-container h3 {
  font-size: 18px;
  margin-bottom: 10px;
}

.box {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.btn {
  background-color: #59ecf9;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  display: block;
  margin-bottom: 20px;
}

.btn:hover {
  background-color: #59ecf9;
}

   </style>

   <?php

   $select = mysqli_query($conn, "SELECT * FROM products");

   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
            <tr>
               <th>Afbeelding</th>
               <th>MBO Utrecht</th>
               <th>Datum</th>
               <th>Actie</th>
            </tr>
         </thead>
         <?php while ($row = mysqli_fetch_assoc($select)) { ?>
            <tr>
               <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
               <td><?php echo $row['name']; ?></td>
               <td><?php echo $row['price']; ?></td>
               <td>
                  <a href="update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> Bewerk </a>
                  <a href="ad_config.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> verwijderen </a>
               </td>
            </tr>
         <?php } ?>
         
      </table>
   </div>

   </div>

   </section>

<style>
   

</style>

   <footer>
      <div class="container">
         <div class="nine columns">
            <p>Created with love by Salma z.</p>
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

            $('.smoothscroll').on('click', function(e) {
               e.preventDefault();

               var target = this.hash,
                  $target = $(target);

               $('html, body').stop().animate({
                  'scrollTop': $target.offset().top
               }, 800, 'swing', function() {
                  window.location.hash = target;
               });
            });

         });


         TweenMax.staggerFrom(".heading", 0.8, {
            opacity: 0,
            y: 20,
            delay: 0.2
         }, 0.4);
      </script>
   </footer>
</body>

</html>