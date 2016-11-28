<?php
    define("URLBASE2", "../");
    define("URLBASEFOTO", "../libs/images/uploadFoto/");
    define("URLBASEJS", "../libs/js/");
    require_once(URLBASE2."config/conection.php");
    require_once(URLBASE2."app/model/user.php");
    $geral = new userModel;
    $geral->listPosts();
 ?>
<!DOCTYPE html>
<html>
<title>AjudaAngola</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="<?= URLBASE2?>libs/css/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="<?= URLBASE2?>libs/css/font-awesome.css">
<script type="text/javascript" src="<?= URLBASEJS?>jquery.js"></script>
<script type="text/javascript" src="<?= URLBASEJS?>script.js"></script>
<style>

html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">
<!-- Navbar -->
<div class="w3-top">
 <ul class="w3-navbar w3-green w3-left-align w3-large">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-padding-large w3-hover-white w3-large w3-green" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  </li>
  <li class="w3-hide-small w3-right"><a href="../login.php" class="w3-padding-large w3-hover-none"><i class="fa fa-user w3-margin-right"></i> Perfil</a></li>
  <li class="w3-hide-small w3-right"><a href="../" class="w3-padding-large w3-hover-none"><i class="fa fa-user w3-margin-right"></i> Inicio</a></li>
 </ul>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:51px">
  <ul class="w3-navbar w3-left-align w3-large w3-theme">
    <li><a class="w3-padding-large" href="#">Notificações</a></li>
    <li><a class="w3-padding-large" href="#">Explorar</a></li>
    <li><a class="w3-padding-large" href="#">Meu perfil</a></li>
  </ul>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Middle Column -->
    <div class="w3-col m7" style="margin: 0 auto; float: none">
    <div class="">
      <?php while($geral->postRegister = $geral->resultado->FetchNextObject()):?>
      <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <img src="<?= URLBASEFOTO."".$geral->postRegister->USERFOTO?>" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity"><?= TimeRegister($geral->postRegister->POSTDATA)?></span>
        <h6><?= $geral->postRegister->USERNAME?></h6><br>
        <hr class="w3-clear">
        <p class="w3-xlarge"><?= $geral->postRegister->POSTCONTENT?></p>
        <form action="form.asp" class="">
          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><img src="<?= URLBASEFOTO."".$geral->register->USERFOTO?>" class="w3-circle" width="40px" alt=""></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border" name="first" type="text" placeholder="comentar publicação">
              </div>
          </div>
        </form>
        <button type="button" class="w3-btn w3-theme-d1 w3-margin-bottom"><i class="fa fa-circle-o-notch"></i></button>
        <button type="button" class="w3-btn w3-green w3-margin-bottom"><i class="fa fa-comment"></i>  Comentários</button>
      </div>
      <?php endwhile; ?>
    </div>
    <!-- End Middle Column -->
    </div>
  <!-- End Grid -->
  </div>

<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-d5 w3-bottom">
  <p>Powered by <a href="" target="_blank">Venus Dev. INC, &copy; <?= date("Y")?></a></p>
</footer>

<script>
// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else {
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className =
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
</body>
</html>
