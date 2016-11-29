<?php
  session_start();
  require_once("conection.php");
  $conexao = new conexao;
  $foto = $_FILES['photo'];
  $userid = mysql_real_escape_string($_POST['userid']);


  $ext = ($foto['type']== "image/png" ? ".png" : ($foto['type']== "image/gif" ? ".gif" : "jpg"));
  $permissao = array("image/png", "image/jpg", "image/pjpg", "image/jpeg", "image/gif");
  $directorio = "../libs/images/uploadFoto/";
  if (in_array($foto['type'], $permissao)) {
    $nomeDaFoto = md5(time()."".date("d-m-yyyy")."".$foto['name']).$ext;
    if (move_uploaded_file($foto['tmp_name'], $directorio.$nomeDaFoto )) {
      $sqlFoto= "UPDATE usuarios SET userfoto = '".$nomeDaFoto."' WHERE usuarios.userid=".$_SESSION['sessionUserID'];
      if ($conexao->banco->Execute($sqlFoto)) {
        echo '<img src="libs/images/uploadFoto/'.$nomeDaFoto.'" class="w3-padding-32 w3-show-block" style="float:none; margin: 0 auto" width="100"></img>
              <input type="file" class="w3-hide" name="photo" value="" >';
      }
      else {
        echo "Erro ao salvar a imagem, contacte ao ADMINISTRADOR";
      }
    }
    else {
      echo "Erro durante o upload";
    }
  }

 ?>
