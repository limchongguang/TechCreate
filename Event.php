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
<body style="background-color: #E3EEF4; font-family: Arial, Helvetica, sans-serif;">
  <header>
    <?php include 'head.php';?>
  </header>
  <div class="col-12">
  <!-- banner for event -->
  <?php include "eventbanner.php" ?>
  </div>
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-6 gx-5 mb-4 text-left">
           <!--Left side of table -->
           <?php include "eventTp1.php" ?>
        </div>
        <div class="col-md-6 gx-5 mb-4 text-left">
            <!--Right side of table -->
            <?php include "eventTp2.php" ?>
        </div>
    </div>
</div>
</div><br><br><br><br><br><br><br><br><br><br><br>
<section id="grad3">
    <!--Button section to enquiries-->
    <?php include "answers.php" ?>
 </section>
<footer style="background-color: #0c1130;">
<!--Footer section-->
<?php include "footer.php" ?>
</footer>

</body>
</html>






