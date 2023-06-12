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

  <div class="sizepadding2">
    <?php include "paymentbanner.php" ?>
  </div>
  <div class="container d-flex align-item-center justify-content-center">
  <p class="solution1header">TechCreate actively participated in ISO 20022 Standardization Work</p>
    </div>
  <div class="container">
    <p class="solution1bold sizepadding2">Influence Global Change in ISO 20022 with strong domain in ISO 20022 Implementation</p>
    <div class="row">
      <?php include "paymentcontent.php" ?>
    </div>
  </div>

    




  <footer style="background-color: #0c1130;">
 <?php include "footer.php" ?>
</footer>
</body>
</html>