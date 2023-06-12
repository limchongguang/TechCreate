<?php
// Initialize the session
session_start();
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
  <title>Techcreate</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="img/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>

      

<body style="font-family: Arial, Helvetica, sans-serif;">

<header style="font-family: Arial, Helvetica, sans-serif;" class="top-header">
    <?php include "head.php"; ?>
  </header>

  

  <div id="grad" class="container-fluid" style="padding-left:0px; padding-right:0px;">
    <!--Background image -->
    <?php include "Homebanner.php"?>

    <!-- About Us section-->
    <?php include "abtus(index).php" ?>
  </div>

    <div id="grad6">
    <?php include "service(index).php" ?>
    <!--service section-->        
</div>



  <div style="background-color: #ffffff; font-family: Arial, Helvetica, sans-serif;">
    <?php include "partner(index).php" ?>
    <!-- Partners section-->          
  </div> 

  <div id="grad2" style="font-family: Arial, Helvetica, sans-serif;">
  <br><br>
    <?php include "articles(index).php" ?>
    <!--Articles section-->    
</div>

  <div id="grad3">
        <?php include "answers.php"?>
       <!--Enquires button-->
</div>  
<!--Aritcles-->


<footer style="background-color: #0c1130;">
 <?php include "footer.php" ?>
</footer>
</body>
</html>