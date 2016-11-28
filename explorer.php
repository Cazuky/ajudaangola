<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Doar</title>
  <link rel="shortcut icon" href="favicon.png">
  <link rel="stylesheet" href="../libs/css/w3.css" media="all">
  <link rel="stylesheet" href="../libs/css/font-awesome.css" media="screen" title="no title">
  <!-- <link rel="stylesheet" href="../css/carrousel/style3.css" media="all"> -->
  <style media="screen">
  body{margin: 0; paddin: 0; box-sizing: border-box}
  input{outline: none}
  .backimg {background: url('../libs/images/01.jpg') no-repeat; background-size: cover;}
  .filter {width: 100%; height: 720px; position: fixed; background: rgba(0, 0, 0, 0.47)}
  .backgreen{background: rgba(117, 159, 11, 0.47)}
  .backgwhite{background: rgba(255, 255, 255, 0.47)}
  a{text-decoration: none}
  .cursor-pointer {cursor: pointer}
  .height{min-height: 15em; height: auto}
  </style>
</head>
<body id="page" class="backimg">
  <header class="w3-center w3-white w3-top w3-card-2" id="home">
    <h2 class="w3-text-green">Ajuda Angola</h2>
  </header>
  <div class="w3-container" style="margin-top: 100px">
    <div class="w3-third">
      <img src="../libs/images/logo.png" alt="" width="100" />
    </div>
    <div class="w3-third">

    </div>
    <div class="w3-third">

    </div>
  </div>
  <?php
  if (isset($_REQUEST['continue'])) {
    $_SESSION['sessaoIntro'] = "true";
    header("Location:index.php");
  }else {
    unset($_SESSION['sessaoIntro']);
  }
  ?>

</body>
</html>
