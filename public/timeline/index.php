<?php
  session_start();
  if (!$_SESSION['sessionUserID']) {
    header("Location: ../login.php");
  }
  else{
    define("URLBASE2", "../../");
    define("URLBASEFOTO", "../../libs/images/uploadFoto/");
    define("URLBASEJS", "../../libs/js/");
    require_once(URLBASE2."config/conection.php");
    $geral = new conexao;
    $sqlGeral = "SELECT * FROM usuarios WHERE usuarios.userid = ".$_SESSION['sessionUserID'];
    $resultados = $geral->banco->Execute($sqlGeral);
    $registos = $resultados->FetchNextObject();
 ?>
<!DOCTYPE html>
<html>
<title>AjudaAngola</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="<?= URLBASE2?>libs/css/w3.css">
<!-- <link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'> -->
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
  <li><a href="#" class="w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i> Início</a></li>
  <li class="w3-hide-small"><a href="#" class="w3-padding-large w3-hover-white" title="Notificações"><i class="fa fa-bell"></i> Notificações</a></li>
  <li class="w3-hide-small"><a href="#" class="w3-padding-large w3-hover-white" title="Explorar"><i class="fa fa-globe"></i> Explorar</a></li>
  <!-- <li class="w3-hide-small w3-dropdown-hover">
    <a href="#" class="w3-padding-large w3-hover-white" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></a>
    <div class="w3-dropdown-content w3-white w3-card-4">
      <a href="#">One new friend request</a>
      <a href="#">John Doe posted on your wall</a>
      <a href="#">Jane likes your post</a>
    </div>
  </li> -->
  <li class="w3-hide-small w3-right"><a href="#" class="w3-padding-large w3-hover-white" title="My Account"><img src="<?= URLBASEFOTO."".$registos->USERFOTO?>" class="w3-circle" style="height:25px;width:25px" alt="Avatar"></a></li>
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
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center"></h4>
         <p class="w3-center"><img src="<?= URLBASEFOTO."".$registos->USERFOTO?>" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-user fa-fw w3-margin-right w3-text-theme"></i> <?= $registos->USERNAME?></p>
         <p><i class="fa fa-calendar fa-fw w3-margin-right w3-text-theme"></i> <?= TimeRegister($registos->REGISTERDATE)?></p>
        </div>
      </div>
      <br>
      <!-- Accordion -->
      <span class="w3-opacity"><b>Meus Feeds</b></span>
      <div class="w3-card-2 w3-round">
          -<a href="" class="w3-btn-block w3-white w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> Meus interesses</a>
          <a href=""  class="w3-btn-block w3-white w3-left-align"><i class="fa fa-comment fa-fw w3-margin-right"></i> Últimos comentários</a>
          <a href="" class="w3-btn-block w3-white w3-theme-l1 w3-left-align"><i class="fa fa-list fa-fw w3-margin-right"></i> Ultimos posts</a>
      </div>
      <br>

      <!-- Interests -->
      <!-- <div class="w3-card-2 w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Interests</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">News</span>
            <span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
            <span class="w3-tag w3-small w3-theme-d3">Labels</span>
            <span class="w3-tag w3-small w3-green">Games</span>
            <span class="w3-tag w3-small w3-theme-d1">Friends</span>
            <span class="w3-tag w3-small w3-theme">Games</span>
            <span class="w3-tag w3-small w3-theme-l1">Friends</span>
            <span class="w3-tag w3-small w3-theme-l2">Food</span>
            <span class="w3-tag w3-small w3-theme-l3">Design</span>
            <span class="w3-tag w3-small w3-theme-l4">Art</span>
            <span class="w3-tag w3-small w3-theme-l5">Photos</span>
          </p>
        </div>
      </div>
      <br> -->

      <!-- Alert Box -->
      <div class="w3-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-hover-text-grey w3-closebtn">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Hey!</strong></p>
        <p>People are looking at your profile. Find out who.</p>
      </div>

    <!-- End Left Column -->
    </div>

    <!-- Middle Column -->
    <div class="w3-col m7">

      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">Publique agora o seu estado</h6>
              <form class=" w3-form" name="formStatus" action="" method="post">
                <textarea class="w3-input w3-border w3-margin-bottom w3-medium" name="content" rows="3" cols="73" style="resize: none" placeholder="Pessoal alguém ajuda com uma receita rápida sobre dor de cabeça!"></textarea>
                  <input type="submit" class="w3-btn w3-pale-green w3-border w3-border-green w3-theme" value="Publicar">
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <img src="/w3images/avatar2.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">1 min</span>
        <h4>John Doe</h4><br>
        <hr class="w3-clear">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <button type="button" class="w3-btn w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button>
        <button type="button" class="w3-btn w3-green w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
      </div>

    <!-- End Middle Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-col m2">
      <div class="w3-card-2 w3-round w3-white w3-center">
        <div class="w3-container">
          <p><i class="fa fa-calendar"></i> <b>Comentário recente</b></p>
          <hr>
          <p class="w3-center"><i class="fa fa-comment fa-2x w3-opacity"></i></p>
          <p><strong>Holiday</strong></p>
          <p>Friday 15:00</p>
          <p><button class="w3-btn w3-btn-block w3-theme-l4">Info</button></p>
        </div>
      </div>
      <br>



      <div class="w3-card-2 w3-round w3-white w3-padding-16 w3-center">
        <p>ADS</p>
      </div>
      <br>

    <!-- End Right Column -->
    </div>

  <!-- End Grid -->
  </div>

<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-d5">
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
<?php } ?>