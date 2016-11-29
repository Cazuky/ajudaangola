<?php
session_start();
if (isset($_SESSION['sessionUserID']) && !empty($_SESSION['sessionUserID'])) {
    header("Location: profile/");
}else {
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AjudaAngola</title>
  <link rel="shortcut icon" href="favicon.png">
  <link rel="stylesheet" href="libs/css/w3.css" media="all">
  <link rel="stylesheet" href="libs/css/font-awesome.css" media="screen" title="no title">
  <script type="text/javascript" src="libs/js/jquery.js"></script>
  <script type="text/javascript" src="libs/js/script.js"></script>
  <style media="screen">
  body{margin: 0; paddin: 0; box-sizing: border-box}
  input{outline: none}
  .backimg {background: url('libs/images/03.jpg') no-repeat; background-size: cover;}
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
    <a href="index.php" class="w3-left"><i class="fa fa-home fa-2x w3-margin"></i></a><h2 class="w3-text-green">Ajuda Angola</h2>
  </header>
  <div class="w3-container w3-padding-0" style="margin-top: 65px">
    <div class="filter w3-padding-0">
      <div class="w3-container w3-padding-128">
        <form class="w3-col l3 w3-padding-128" name="loginForm" autocomplete="off" action=""  method="post" style="float: none; margin: 0 auto">
          <p class="w3-text-red w3-pale-red w3-padding w3-small w3-border w3-border-red" id="resposta" style="display: none"></p>
            <input type="text" name="login" placeholder="Email ou telemovel" class="w3-input w3-transparent w3-text-white" required="require">
            <input type="password" name="password" placeholder="Senha" class="w3-input w3-transparent w3-text-white w3-margin-top" required="require">
            <input type="submit" name="btn-login" value="Iniciar sessão" class="w3-btn w3-margin-top w3-transparent w3-border"><br>
            <a href="#" class="w3-text-white"><i class="fa fa-refresh"></i> Esqueci a senha</a><b> | </b>
            <a href="register.php" class="w3-text-white"><i class="fa fa-info"></i> Faça parte agora</a>
        </form>
      </div>
    </div>
    <div class="w3-bottom w3-center w3-card-4 w3-white w3-padding">
      <a href="#" class="w3-text-grey w3-hover-text-green">Política de Privacidade</a> <b>|</b>
      <a href="#" class="w3-text-grey w3-hover-text-green">Termos de uso</a> <b>|</b>
      <a href="#" class="w3-text-grey w3-hover-text-green">Trabalhe connosco</a> <b>|</b>
      <a href="#" class="w3-text-grey w3-hover-text-green">Reportar erro</a>
    </div>
  </div>
</body>
</html>
<?php } ?>
