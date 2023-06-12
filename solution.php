<?php
// Initialize the session
session_start();
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
  <title>Techcreate</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" type="image/x-icon" href="img/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>



<body style="background-color: #0c1130; font-family: Arial, Helvetica, sans-serif;">
<header>
    <?php include "head.php" ?>
    <!--Navbar-->
  </header><br><br>
  <section id="grad4">

      <p class="Headertext sizepadding8">Our Solutions</p>
      
  </section>
      
  <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <!--1st half of table-->
          <?php include "solutionTp1.php" ?>
        </div>
        <div class="col-lg-6 col-md-12">
          <!--2nd Half of table-->
          <?php include "solutionTp2.php" ?>
        </div>
    </div>
  </div>
<br><br><br>

<div class="container d-flex align-items-center justify-content-center">
  <div class="image-container">
    <a href="case.php">
    <img src="img/card1.png" alt="Your Image" class="image">
      <div class="overlay"></div>
    </a>
`  </div>
</div>

<br><br><br><br>
<section id="grad3">
  <?php include "answers.php" ?>
<!--Seeking ans section-->
 </section>
<footer style="background-color: #0c1130;">
<!--Footer-->
<?php include "footer.php" ?>
</footer>
</body>
</html>



