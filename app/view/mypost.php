<?php while($execucao->register = $execucao->resultado->FetchNextObject()): ?>
<div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
  <img src="<?= URLBASEFOTO."". $execucao->register->USERFOTO?>" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
  <span class="w3-right w3-opacity"><?= TimeRegister( $execucao->register->POSTDATA)?></span>
  <h6><?=  $execucao->register->USERNAME?></h6><br>
  <hr class="w3-clear">
  <p class="w3-xlarge"><?=  $execucao->register->POSTCONTENT?></p>
  <form action="form.asp" class="">
    <div class="w3-row w3-section">
      <div class="w3-col" style="width:50px"><img src="<?= URLBASEFOTO."".$geral->register->USERFOTO?>" class="w3-circle" width="40px" alt=""></i></div>
        <div class="w3-rest">
          <input type="hidden" name="" value="">
          <input class="w3-input w3-border" name="first" type="text" placeholder="comentar publicação">
        </div>
    </div>
  </form>

  <button type="button" class="w3-btn w3-theme-d1 w3-margin-bottom"><i class="fa fa-circle-o-notch"></i></button>
  <button type="button" class="w3-btn w3-green w3-margin-bottom"><i class="fa fa-comment"></i>  Comentários</button>
</div>
<?php
endwhile;
?>
