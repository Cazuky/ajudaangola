<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AjudaAngola</title>
  <link rel="shortcut icon" href="favicon.png">
  <link rel="stylesheet" href="../libs/css/w3.css" media="all">
  <link rel="stylesheet" href="../libs/css/font-awesome.css" media="screen" title="no title">
  <!-- <link rel="stylesheet" href="../css/carrousel/style3.css" media="all"> -->
  <style media="screen">
  body{margin: 0; paddin: 0; box-sizing: border-box}
  input{outline: none}
  .backimg {margin-top: -10px; background: url('../libs/images/01.jpg') no-repeat; background-size: 100% auto; background-clip: border-box; background-position: top;}
  .backimg2 {margin-top: 0; background: url('../libs/images/contact.jpg') no-repeat; background-size: 100% 100%; background-clip: border-box; background-position: top;}

  .filter {width: 100%; height: auto ; position: static; background: rgba(0, 0, 0, 0.47)}

  .backgreen{background: rgba(46, 147, 25, 0.47)}
  .w3-green-strong{background: rgb(46, 147, 25)!important}
  .backgwhite{background: rgba(255, 255, 255, 0.47)}
  a{text-decoration: none}
  .cursor-pointer {cursor: pointer}
  .height{min-height: 15em; height: auto}
  textarea{outline: none}
  ::-webkit-scrollbar {
    width: 0.5em;
}

::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    border-radius: 10px;
}

::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 108, 11, 1);
}
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
        <a href="explorer.php" class="w3-btn-block w3-margin-top w3-white w3-border w3-border-green w3-padding">Explorar <i class="fa fa-cogs"></i></a>
        <div class="w3-container w3-center">
            <a href="login.php" class="w3-text-white w3-opacity">Iniciar Sessão</a> <b class="w3-text-green">|</b>
            <a href="register.php" class="w3-text-white w3-opacity">Não possuo conta</a>
        </div>
      </div>
    </div>
    <div class="w3-container w3-green-strong w3-padding-64" style=" ">
      <div class="w3-third w3-center w3-padding-32"style="padding: 0 1em">
        <img src="../libs/images/logo.png" alt="" width="100" />
        <h3 class="w3-text-black w3-opacity">Exactamente o esperado</h3>
        <p class="w3-text-sand">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>
      <div class="w3-third w3-center w3-padding-32"style="padding: 0 1em">
        <img src="../libs/images/logo.png" class="" alt="" width="100" />
        <h3 class="w3-text-black w3-opacity">Fácil de usar</h3>
        <p class="w3-text-sand">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>
      <div class="w3-third w3-center w3-padding-32"style="padding: 0 1em">
        <img src="../libs/images/logo.png" alt="" width="100" />
        <h3 class="w3-text-black w3-opacity">Socialmente irresistível</h3>
        <p class="w3-text-sand">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>
    </div>
    <div class="w3-container" style="margin-top: 10px">
        <h1 class="w3-text-green w3-center">Nossos Parceiros</h1>
        <div class="w3-container w3-center">
          <img src="<?= URLIMAGE?>unia.png" alt="" width="110" class="" style="padding: 1em" />
          <img src="<?= URLIMAGE?>kanjaya.png" alt="" width="110" class="" style="padding: 1em" />
          <img src="<?= URLIMAGE?>firme.png" alt="" width="110" class="" style="padding: 1em" />
          <img src="<?= URLIMAGE?>vandjalogo.png" alt="" width="110" class="" style="padding: 1em" />
          <img src="<?= URLIMAGE?>vivasapatos.png" alt="" width="140" class="" style="padding: 1em" />
          <img src="<?= URLIMAGE?>logo.png" alt="" width="90" class="" style="padding: 1em" />
        </div>
      </div>
    </div>
    <div class="w3-container backimg2 w3-padding-0">
      <div class="filter">
        <h1 class="w3-text-green w3-center">Contacte-nos</h1>
        <div class="w3-container">
          <div class="w3-half w3-padding-128">
            <h3 class="w3-text-white"><i class="fa fa-map-marker w3-text-white"></i> Std. Catete, Viana - Luanda</h3>
            <h3 class="w3-text-white"><i class="fa fa-phone w3-text-white"></i> (+244) 222 321 619</h3>
            <a href="#"><i class="fa fa-facebook w3-xlarge w3-text-blue "></i></a>
            <a href="#"><i class="fa fa-github w3-xlarge w3-text-green w3-padding"></i></a>
            <a href="#"><i class="fa fa-youtube w3-xlarge w3-text-red"></i></a>
          </div>
        <div class="w3-half">
          <form class="w3-form w3-transparent" action="index.html" method="post">
            <input type="text" class="w3-input w3-transparent w3-text-white" name="name" value="" placeholder="Digite o nome"><br>
            <input type="email" class="w3-input w3-transparent w3-text-white" name="email" value="" placeholder="Digite o email"><br>
            <textarea name="content" class="w3-input w3-transparent w3-text-white" rows="8" cols="40" placeholder="Deixe a sua mensagem" style="resize: none"></textarea>
            <input type="submit" name="btn-contact" value="Enviar agora" class="w3-btn w3-margin-top w3-transparent w3-border ">
          </form>
        </div>
        </div>
      </div>
    </div><br><br><br>
    <div class="w3-bottom w3-center w3-card-4 w3-white w3-padding">
      <a href="#" class="w3-opacity w3-hover-text-green">Política de Privacidade</a> <b>|</b>
      <a href="#" class="w3-opacity w3-hover-text-green">Termos de uso</a> <b>|</b>
      <a href="#" class="w3-opacity w3-hover-text-green">Trabalhe connosco</a> <b>|</b>
      <a href="#" class="w3-opacity w3-hover-text-green">Reportar erro</a>
    </div>
</body>
</html>
