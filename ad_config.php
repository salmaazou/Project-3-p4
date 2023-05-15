<?php

@include 'config.php';

if(isset($_POST['add_product'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

   if(empty($product_name) || empty($product_price) || empty($product_image)){
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO products(name, price, image) VALUES('$product_name', '$product_price', '$product_image')";
      $upload = mysqli_query($conn,$insert);
      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = ' is toegevoegd';
      }else{
         $message[] = 'kon  niet toevoegen';
      }
   }

};

if(isset($_GET['delete'])){
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
   <link rel="stylesheet" href="css/ad_config.css">
   <title>admin page</title>



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
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>
<section class="archief_bg">

   
<div class="container">

   <div class="admin-product-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>voeg altijd jou Meinig</h3>
         <input type="text" placeholder="Voeg heir" name="product_name" class="box">
         <input type="text" placeholder="Voeg de datum" name="product_price" class="box">
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
         <input type="submit" class="btn" name="add_product" value="Platsen">
      </form>

   </div>

   <?php

   $select = mysqli_query($conn, "SELECT * FROM products");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>Afbeelding</th>
            <th>MBO Utrecht</th>
            <th>De datum</th>
            <th>Actie</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
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
</body>
</html>