<?php
  session_start();
  if (!$_SESSION['sessionUserID']) {
    header("Location: ../login.php");
  }
  else{
    define("URLBASE2", "../");
    define("URLBASEFOTO", "../libs/images/uploadFoto/");
    define("URLBASEJS", "../libs/js/");
    require_once(URLBASE2."config/conection.php");
    require_once(URLBASE2."app/model/user.php");
    $geral = new userModel;
    $geral->MyProfile($_SESSION['sessionUserID']);
    $geral->listPosts();
 ?>
<!DOCTYPE html>
<html>
<title>AjudaAngola</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="<?= URLBASE2?>libs/css/w3.css">
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
  <li><a href="../" class="w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i> Início</a></li>
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
  <li class="w3-hide-small w3-right">
    <a href="#" class="w3-padding-large w3-hover-white w3-left" title=""><img src="<?= URLBASEFOTO."".$geral->register->USERFOTO?>" class="w3-circle" style="height:25px;width:25px" alt="Avatar"></a>
  <a href="../signout/" class="w3-left w3-padding-large">Sair</a></li>
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
         <p class="w3-center"><img src="<?= URLBASEFOTO."".$geral->register->USERFOTO?>" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-user fa-fw w3-margin-right w3-text-theme"></i> <?= $geral->register->USERNAME?></p>
         <p><i class="fa fa-calendar fa-fw w3-margin-right w3-text-theme"></i> <?= TimeRegister($geral->register->REGISTERDATE)?></p>
        </div>
      </div>
      <br>
      <!-- Accordion -->
      <span class="w3-opacity"><b>Meus Feeds</b></span>
      <div class="w3-card-2 w3-round">
          -<a href="?p=interesse&a=meusinteresses" class="w3-btn-block w3-white w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> Meus interesses</a>
          <a href=""  class="w3-btn-block w3-white w3-left-align"><i class="fa fa-comment fa-fw w3-margin-right"></i> Últimos comentários</a>
          <a href="?p=post&a=mypost" class="w3-btn-block w3-white w3-theme-l1 w3-left-align"><i class="fa fa-list fa-fw w3-margin-right"></i> Meus posts</a>
      </div>
      <br>
    <!-- End Left Column -->
    </div>
    <!-- Middle Column -->
    <div class="w3-col m7">
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">Publique agora o seu estado</h6>
              <form class="" name="formStatus" action="" method="post">
                <textarea class="w3-input w3-border w3-margin-bottom w3-medium" name="content" rows="3" cols="73" style="resize: none" placeholder="Pessoal alguém ajuda com uma receita rápida sobre dor de cabeça!"></textarea>
                  <input type="submit" class="w3-btn w3-pale-green w3-border w3-border-green w3-theme" value="Publicar">
              </form>
            </div>
          </div>
        </div>
      </div>
    <div class="">
      <?php
        $page = mysql_real_escape_string($_REQUEST['p']);
        $pages = array("post", "comment", "interesse");
        if (in_array($page,$pages)) {
            require_once('../app/controller/'.$page.'.php');
        }
        else {
          while($geral->postRegister = $geral->resultado->FetchNextObject()): ?>
          <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
            <img src="<?= URLBASEFOTO."".$geral->postRegister->USERFOTO?>" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
            <span class="w3-right w3-opacity"><?= TimeRegister($geral->postRegister->POSTDATA)?></span>
            <h6><?= $geral->postRegister->USERNAME?></h6><br>
            <hr class="w3-clear">
            <p class="w3-xlarge"><?= $geral->postRegister->POSTCONTENT?></p>
            <form class="" method="post" action="" name="formComment" id="formComment">
              <div class="w3-row w3-section">
                <div class="w3-col" style="width:50px"><img src="<?= URLBASEFOTO."".$geral->postRegister->USERFOTO?>" class="w3-circle" width="40px" alt=""></i></div>
                  <div class="w3-rest">
                    <input type="hidden" name="postid" value="<?= $geral->postRegister->POSTID?>">
                    <input type="hidden" name="userpost" value="<?= $geral->postRegister->USUARIOS_USERID?>">
                    <input type="hidden" name="usercomment" value="<?= $_SESSION['sessionUserID']?>">
                    <input type="hidden" name="p" value="comment">
                    <input type="hidden" name="a" value="save">
                    <input class="w3-input w3-border" name="content" type="text" placeholder="comentar publicação">
                  </div>
              </div>
            </form>
            <a href="?p=interesse&a=save&post=<?= $geral->postRegister->POSTID?>" class="w3-btn w3-theme-d1 w3-margin-bottom"><i class="fa fa-circle-o-notch"></i> <span><?= $geral->CountFollowers($geral->postRegister->POSTID)?></span></a>
            <a href="?p=comment&a=show&post=<?= $geral->postRegister->POSTID?>" class="w3-btn w3-green w3-margin-bottom"><i class="fa fa-comment"></i>  <span class=""><?= $geral->listComments($geral->postRegister->POSTID)?></span></a>
          </div>
        <?php
        endwhile;
        }
       ?>
    </div>
    <!-- End Middle Column -->
    </div>
    <!-- Right Column -->
    <div class="w3-col m2">
      <div class="w3-card-2 w3-round w3-white w3-center">
        <div class="w3-container">
          <p><i class="fa fa-calendar"></i> <b>Comentário recente</b></p>
        </div>
      </div>
      <br>
      <div class="w3-card-2 w3-round w3-white w3-padding-16 w3-center w3-hide-small">
        <script type="text/javascript">
  var bannersnack_embed = {"hash":"bx9qo3jjo","width":120,"height":600,"t":1480658500,"userId":26528151,"type":"html5"};
  </script>
  <script type="text/javascript" src="//cdn.bannersnack.com/iframe/embed.js"></script>
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
<footer class="w3-container w3-bottom w3-card-2 w3-white">
  <p>Powered by <a href="" target="_blank" class="">CMGT-TECNOLOGIES LDA, &copy; <?= date("Y")?></a></p>
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
