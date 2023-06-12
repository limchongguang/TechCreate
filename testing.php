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

<style>
  .container {
    position: relative;
    width: 100%;
    max-width: 100%;
  }

  .container img {
    width: 100%;
    height: auto;
    display: block;
  }

  .overlay-img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

  .overlay-content {
    position: absolute;
    top: 45%;
    left: 49%;
    transform: translate(-50%, -50%);
    max-width: 100%;
    width: 70%;
  }
</style>

<div class="container">
  <img src="img/partnerbackground.png" alt="Background Image">
  <div class="overlay-img">
    <div class="overlay-content">
      <img src="img/Partner.png" alt="Overlay Image">
    </div>
  </div>
</div>

</html>