<?php
if ($execucao->resultado->numRows() == 0) {
  echo '<p class="w3-center w3-xlarge w3-opacity w3-padding-64">Nenhum post associado ao seu perfil</p>';
}else {
?>
<div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
  <img src="<?= URLBASEFOTO."". $execucao->register->USERFOTO?>" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
  <span class="w3-right w3-opacity"></span>
  <h6><?=  $execucao->register->USERNAME?></h6><br>
  <hr class="w3-clear">
  <p class="w3-xlarge"><?=  $execucao->register->POSTCONTENT?></p>
  <form action="" class="">
    <div class="w3-row w3-section">
      <div class="w3-col" style="width:50px"><img src="<?= URLBASEFOTO."".$geral->register->USERFOTO?>" class="w3-circle" width="40px" alt=""></i></div>
        <div class="w3-rest">
          <input type="hidden" name="" value="">
          <input class="w3-input w3-border" name="first" type="text" placeholder="comentar publicação">
        </div>
      <?php while($execucao->register = $execucao->resultado->FetchNextObject()):  ?>
        <p><?= $execucao->register->COMCONTENT ?></p>
      <?php endwhile ?>
    </div>
  </form>
</div>
<?php
}
?>
