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
<header><?php include 'head.php';?></header>
       
<div class="col-12">
<div class="mapouter">
    <div class="gmap_canvas">
        <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1920&amp;height=400&amp;hl=en&amp;q= Singapore 050336&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
    </div>
</div>
</div>

      <br><br><br><br><br>
      <!--End of map-->
    
    <div class="container">
        <section>
            <div class="row">
                <div class="col-md-6 gx-5 mb-4">
                    <?php include "CUtext.php" ?>
                    <!--Thank you text for form -->
                </div>
                <div class="col-md-6 gx-5 mb-4">
                <?php include "CUform.php" ?>
                <!--Contact Us form -->                   
                </div>
            </div>
        </section>
    </div>
    <br><br><br>
    <footer style="background-color: #0c1130;">
        <?php include "footer.php" ?>
    </footer>
</body>
  </html>
