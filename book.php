<!DOCTYPE html>
<html lang="en">
<head>
 
   <title>book</title>

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
      <a href="cat.php">dogs</a>
      <a href="dog.php">cats</a>
      <a href="book.php">consult</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<?php

   $conn = mysqli_connect('localhost','root','1905','proj');
   if(!$conn)
   echo "can't connect to database";
   $name = $email = $pet = $phone = $address = $date= "";
   $nameErr = $emailErr = $petErr = $phoneErr = $addErr = $dateErr= "";
   $a=0;

   if ($_SERVER["REQUEST_METHOD"] == "POST") {


      if (empty($_POST["name"])) {
         $nameErr = "Name is required";
         $a=1;
       } else {
         $name = $_POST["name"];
         if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
           $nameErr = "Only letters and white space allowed";
           $a=1;
         }
       }
        
       if (empty($_POST["email"])) {
         $nameErr = "email is required";
         $a=1;
       } else {
         $email = $_POST["email"];
         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $a=1;
          }
       }

       if (empty($_POST["phone"])) {
         $nameErr = "phone number  is required";
         $a=1;
       } else {
         $phone = $_POST["phone"];
       }
      
       if (empty($_POST["address"])) {
         $addErr = "enter your address";
         $a=1;
       } else {
         $address = $_POST["address"];
       }
      
       if (empty($_POST["date"])) {
         $dateErr = "phone number  is required";
         $a=1;
       } else {
         $date = $_POST["date"];
       }
       
       if (empty($_POST["pet"])) {
         $petErr = "select a pet";
         $a=1;
       } else {
         $pet = $_POST["pet"];
       }
      
      if($a==0){
      $sql = " insert into consult(name, email, phone, address, pet, date) values('$name','$email','$phone','$address','$pet','$date') ";
      mysqli_query($conn, $sql);

      header('location:book.php'); 
      }
   }

?>

<div class="heading" style="background:url(img/footer.jpg) no-repeat">
   <h1>book now</h1>
</div>


<section class="booking">

   <h1 class="heading-title">book your session!</h1>

   <form action="book.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
            <span class="error"> <?php echo $nameErr;?></span>
            
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
            <span class="error"> <?php echo $emailErr;?></span>
         </div>

         <div class="inputBox">
            <span>phone :</span>
            <input type="text" placeholder="enter your number" name="phone">
            <span class="error"> <?php echo $phoneErr;?></span>
         </div>

         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
            <span class="error"> <?php echo $addErr;?></span>
         </div>

         <div class="inputBox">
            <span>Pet :</span>
            <input type="radio" name="pet" value="dog">dog
            <input type="radio" name="pet" value="cat">cat
            <input type="radio" name="pet" value="both">both
            <br>
            <span class="error"> <?php echo $petErr;?></span>
         </div>

         <div class="inputBox">
            <span>Date :</span>
            <input type="date" name="date">
            <span class="error"> <?php echo $dateErr;?></span>
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

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
         <a href="#"> <i class="fas fa-phone"></i>+91 8826372096 </a>
         <a href="#"> <i class="fas fa-phone"></i>+91 8448368331 </a>
         <a href="#"> <i class="fas fa-envelope"></i> HappyPaws@gmail.com </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
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