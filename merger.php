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

  <div>
    <?php include "mergerbanner.php" ?>
  </div>
  
  <br><br><br><br>
    <div class="container d-flex align-items-center justify-content-center">
       <img src="img/merger.jpeg" alt="Other Partners" width="80%" height="auto">
    </div>
    <br>
    <div class="container sizepadding2">
        <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            <?php include "mergercontent.php" ?>
          </div>
          <div class="col-lg-1"></div>
        </div>
    </div>
    
    <div>
      <?php include "buttons1.php" ?>
    </div>

     
<footer style="background-color: #0c1130;">
  <?php include "footer.php" ?>
</footer>
</body>
</html>

</body>















