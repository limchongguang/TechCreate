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

      

<body style="font-family: Arial, Helvetica, sans-serif; background-color: #0c1130;">  
<header>
<!--header-->
<?php include "head.php" ?>
</header>
        <section id="grad4">
        <div class="container sizepadding">
            <!--Abt us intro-->
            <?php include "abtusIntro.php" ?>
        </div>
         

        </section>
    <main style="background-color: #0c1132;">
        <div class="container sizepadding1">
            <div class="row">
                <div class="col-lg-6 col-md-12 float-start">
                        <?php include "vision.php"?>
                        <!--Vision and Mission-->
                </div>
                <div class="col-lg-6 col-md-12 d-flex align-items-end">
                    
                        <?php include "mission.php"?>
                        <!--Vision and Mission-->
                    
                    </div>
                </div>
            </div>
        </div>
    </main>
    <section>
        <p class="Headertext sizepadding2"><b style="color: #2D96D0;">Our</b> <b>Milestones</b></p>
        <div class="container">
        <img src="img/timeline.svg" alt="Timeline" width="100%">
        </div>
        <br><br><br>
        <div class="text-center">
        <!--Influence map-->
        <?php include "map.php" ?>
        </div>
        <br><br><br><br>
</section>
<footer style="background-color: #0c1130;">    
    <!--footer-->
    <?php include "footer.php" ?>
</footer>
</body>