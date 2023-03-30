<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>Choosing our online cake and pastries shop for your sweet cravings is the perfect decision for a number of reasons. Firstly, we prioritize quality ingredients to ensure that each item is not only delicious, but also made with care and attention to detail. We offer a wide range of flavors and designs to suit all tastes and occasions, from classic vanilla to indulgent chocolate and even gluten-free options. Additionally, our convenient online ordering system makes it easy for you to browse and select your desired items from the comfort of your own home. We also provide fast and reliable delivery options to ensure that your treats arrive fresh and on time.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>Our online cake and pastries shop provides a wide range of delicious and high-quality baked goods that are perfect for any occasion. We offer a variety of cakes, cupcakes, pastries, and other sweet treats in a range of flavors and designs to suit all tastes and preferences. Our items are made using only the freshest and highest quality ingredients, ensuring that each bite is a delectable and memorable experience. In addition to our delicious baked goods, we also offer convenient online ordering and fast delivery options to make your shopping experience as easy and stress-free as possible. Our team is committed to providing excellent customer service and ensuring that your satisfaction is our top priority. </p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>"I recently ordered a cake from this online shop for my daughter's birthday, and I have to say I was blown away by the quality of the product and the excellent service. The cake was not only beautiful and exactly as I had requested, </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>"I recently ordered a cake from this online shop for my daughter's birthday, and I have to say I was blown away by the quality of the product and the excellent service. The cake was not only beautiful and exactly as I had requested, </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>"I recently ordered a cake from this online shop for my daughter's birthday, and I have to say I was blown away by the quality of the product and the excellent service. The cake was not only beautiful and exactly as I had requested, </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>"I recently ordered a cake from this online shop for my daughter's birthday, and I have to say I was blown away by the quality of the product and the excellent service. The cake was not only beautiful and exactly as I had requested, </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>"I recently ordered a cake from this online shop for my daughter's birthday, and I have to say I was blown away by the quality of the product and the excellent service. The cake was not only beautiful and exactly as I had requested, </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>"I recently ordered a cake from this online shop for my daughter's birthday, and I have to say I was blown away by the quality of the product and the excellent service. The cake was not only beautiful and exactly as I had requested, </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>