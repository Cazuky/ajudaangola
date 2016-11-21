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
  .filter {width: 100%; height: 100%; position: fixed; background: rgba(0, 0, 0, 0.47)}
  .backgreen{background: rgba(117, 159, 11, 0.47)}
  .backgwhite{background: rgba(255, 255, 255, 0.47)}
  a{text-decoration: none}
  .cursor-pointer {cursor: pointer}
  .height{min-height: 15em; height: auto}
  </style>
</head>
<body id="page" class="backimg">
    <div class="filter backimg">
      <div class="w3-col l3 s12" style="float: none; margin: 0 auto">
        <h1 class="w3-center w3-padding-128 w3-text-white">
          <img src="../libs/images/logo.png"  alt="" style="width: 60px; display: block; margin: 0 auto" />
          <span class="w3-text-light-green">
          AjudaAngola</span> é o seu primeiro guia de primeiros socorros</h1>
        <a href="" class="w3-btn-block  backgreen w3-border w3-padding">Saiba mais <i class="fa fa-arrow-down"></i></a>
        <a href="?continue=true" class="w3-btn-block w3-margin-top backgwhite w3-border w3-border-green w3-padding">Explorar <i class="fa fa-cogs"></i></a>
      </div>
    </div>
    <div class="w3-clear"></div>
    <div class="w3-container w3-show-block" id="explorer">
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
