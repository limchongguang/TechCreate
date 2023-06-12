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


<body id="grad5" style="font-family: Arial, Helvetica, sans-serif;">
<header>
    <?php include 'head.php';?>
</header>
<br><br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <!--Text to be a partner-->
            <?php include "partnertext.php" ?>
        </div>
        <div class="col-lg-6 col-md-12">
            <!--Form half-->
            <?php include "partnerform.php" ?>
        </div>
    </div>
</div>
<br><br><br><br><br><br>
<section id="grad3">
        <?php include "answers.php"?>
       <!--Enquires button-->
  </section>

<footer style="background-color: #0c1130;">
 <?php include "footer.php" ?>
</footer>
</body>
</html>