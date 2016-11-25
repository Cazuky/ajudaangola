<?php session_start();
  if (!$_SESSION['sessionUserID']) {
    header("Location: login.php");
  }
  else {
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AjudaAngola</title>
  <link rel="shortcut icon" href="favicon.png">
  <link rel="stylesheet" href="../libs/css/w3.css" media="all">
  <link rel="stylesheet" href="../libs/css/font-awesome.css" media="screen" title="no title">
  <script type="text/javascript" src="../libs/js/jquery.js"></script>
  <script type="text/javascript" src="../libs/js/script.js"></script>
  <!-- <link rel="stylesheet" href="../css/carrousel/style3.css" media="all"> -->
  <style media="screen">
  body{margin: 0; paddin: 0; box-sizing: border-box}
  input{outline: none}
  .backimg {background: url('../libs/images/03.jpg') no-repeat; background-size: cover;}
  .filter {width: 100%; height: 100%; position: fixed; background: rgba(0, 0, 0, 0.47)}
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
  <div class="w3-container w3-padding-0" style="margin-top: 65px">
    <div class="filter w3-padding-0">
      <div class="w3-container w3-padding-128">
        <form class="w3-col l3" action="" id="uploadForm" method="post" style="margin: 0 auto; float: none">
          <p class="w3-text-white w3-medium w3-green w3-padding w3-border"><i class="fa fa-info w3-text-black"></i> Insere uma foto de perfil</p>
          <label style="cursor: pointer">
            <div class="w3-container w3-center" id="uploadView">
              <img src="../libs/images/photoicon.png" width="100" id="photo" alt="<?= $_SESSION['sessionUserID']?>">
              <input type="file" class="w3-hide" name="photo" value="" >
            </div>
          </label>
          <br><br>
          <a href="timeline/" class="w3-btn w3-border w3-right w3-transparent" id="skip">Mais tarde</a>
        </form>
      </div>
    </div>
    <div class="w3-bottom w3-center w3-card-4 w3-white w3-padding">
      <a href="#" class="w3-opacity w3-hover-text-green">Política de Privacidade</a> <b>|</b>
      <a href="#" class="w3-opacity w3-hover-text-green">Termos de uso</a> <b>|</b>
      <a href="#" class="w3-opacity w3-hover-text-green">Trabalhe connosco</a> <b>|</b>
      <a href="#" class="w3-opacity w3-hover-text-green">Reportar erro</a>
    </div>
  </div>
</body>
</html>
<?php } ?>
