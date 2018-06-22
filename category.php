<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Local filters with js and data-attribute - show/hide filter toggles</title>


      <link rel="stylesheet" href="css/style.css">


</head>

<body>


 <div id="bigContainerCategory">

   <?php include 'templates/header.html';?>


   <div id="filterContainer">
     <div id="filters">
      <h3>Colors</h3>
      <div class="filter-group">
        <a href="#" data-filter-toggle="blue">Blue</a><br>
        <a href="#" data-filter-toggle="red">Red</a><br>
        <a href="#" data-filter-toggle="green">Green</a>
      </div>
      <h3>Numbers</h3>
      <div class="filter-group">
        <a href="#" data-filter-toggle="one">One</a><br>
        <a href="#" data-filter-toggle="two">Two</a><br>
        <a href="#" data-filter-toggle="three">Three</a>
      </div>
      <h3>Special</h3>
      <div class="filter-group">
        <a href="#" data-filter-toggle="special">Special</a><br>
      </div>
    </div>

     <div id="items">

      <div class="item is-blue special" data-filter-tags="blue,one,special">
         <a href="projectpage.php"><img src="images/handshakecropped.jpg" alt=""></a>
         <div class="itemText">
           <a href="#"><h2>ShakeAssist™</h2></a>
           <p>What a cool project! What a cool project! What a cool project! What a cool project!</p>

         </div>
       </div>

      <div class="item is-red" data-filter-tags="red,one">
         <a href="monoorifice.php"><img src="images/mono-orifice.jpg" alt=""></a>
         <div class="itemText">
           <a href="monoorifice.php"><h2>MonoOrifice™</h2></a>
           <p>What a cool project! What a cool project! What a cool project! What a cool project! </p>
         </div>
       </div>

      <div class="item is-blue" data-filter-tags="blue,two">
         <a href="#"><img src="images/test.jpg" alt=""></a>
         <div class="itemText">
           <a href="#"><h2>Project Two</h2></a>
           <p>What a cool project! What a cool project! What a cool project! What a cool project! </p>
         </div>
       </div>

      <div class="item is-blue" data-filter-tags="blue,three">
         <a href="#"><img src="images/test.jpg" alt=""></a>
         <div class="itemText">
           <a href="#"><h2>Project Three</h2></a>
           <p>What a cool project! What a cool project! What a cool project! What a cool project! </p>
         </div>
       </div>

      <div class="item is-green" data-filter-tags="green,two">
         <a href="#"><img src="images/test.jpg" alt=""></a>
         <div class="itemText">
           <a href="#"><h2>Project Two</h2></a>
           <p>What a cool project! What a cool project! What a cool project! What a cool project! </p>
         </div>
       </div>

      <div class="item is-green special" data-filter-tags="green,three,special">
         <a href="#"><img src="images/test.jpg" alt=""></a>
         <div class="itemText">
           <a href="#"><h2>Project Three</h2></a>
           <p>What a cool project! What a cool project! What a cool project! What a cool project! </p>
         </div>
       </div>

      <div class="item is-red" data-filter-tags="red,two">
         <a href="#"><img src="images/test.jpg" alt=""></a>
         <div class="itemText">
           <a href="#"><h2>Project Two</h2></a>
           <p>What a cool project! What a cool project! What a cool project! What a cool project! </p>
         </div>
       </div>


     </div>

   </div>


   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
   <script  src="js/index.js"></script>



<?php include 'templates/footer.html';?>

  </div>




</body>

</html>
