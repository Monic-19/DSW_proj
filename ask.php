
<!DOCTYPE html>
<html lang="en">
<head>
 
   <title>BOOK</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
    
   <style>
   .error {
      color:#ff0404;
   }
   </style> 

</head>
<body>


<section class="header">

   <a href="home.php" class="logo">Happy Paws.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="dog.php">dogs</a>
      <a href="cat.php">cats</a>
      <a href="book.php">consult</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<div class="heading" style="background:url(img/footer.jpg) no-repeat">
   <h1>Here to Help</h1>
</div>

<?php

   $conn = mysqli_connect('localhost','root','1905','proj');
   if(!$conn)
   echo "can't connect to database";
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["Namehere"];
    $email = $_POST["Emailhere"];
    $text = $_POST["Texthere"];
      
      $sql = " insert into questions(name, email, question) values('$name','$email','$text') ";
      mysqli_query($conn, $sql);
      header('location:ask.php'); 
      
   }

?>



<section class="booking">

   <h1 class="heading-title">ASK  QUESTIONS HERE</h1>

   <form action="ask.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Name :</span>
            <input type="text" placeholder="enter your name" name="Namehere">
           <br><br>            
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="Emailhere">
            <br><br>
         </div>

         <div class="inputBox">
            <span> Question:</span>
            <input type="text" placeholder="Please Ask Your Question Here " name="Texthere">
            <br><br>
         </div>
         <br>
      <input type="submit" value="submit" class="btn" name="done">

   </form>

</section>















<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="cat.php"> <i class="fas fa-angle-right"></i> cats</a>
         <a href="dog.php"> <i class="fas fa-angle-right"></i> dogs</a>
        <a href="book.php"> <i class="fas fa-angle-right"></i> consult</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="ask.php"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i>+91 8860605970 </a>
         <a href="#"> <i class="fas fa-phone"></i>+91 9982525733 </a>
         <a href="#"> <i class="fas fa-phone"></i>+91 8826372096 </a>
         <a href="#"> <i class="fas fa-phone"></i>+91 8448368331 </a>
         <a href="#"> <i class="fas fa-envelope"></i> HappyPaws@gmail.com </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-github"></i> Github </a>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
      </div>

   </div>

  
</section>










<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>