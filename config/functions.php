<?php
function voltar($myurl){
	print '<script type="text/javascript">window.top.location.href = "'. $myurl .'";</script>';
};
function TimeRegister ($signupdate){
  $time = explode("-", $signupdate);
  $signupYear = $time[0];
  $signupMonth = $time[1];
  $signupDay = $time[2];
  $currentYear = date("Y");
  $currentMonth = date("m");
  $currentDay = date("d");
  $result = $currentYear - $signupYear;
    if ($result>0) {
      echo $result = ($result > 1 ? $result." anos" : $result." ano");
    }
    else {
        $result = $currentMonth - $signupMonth;
        if ($result>0) {
          echo $result = ($result > 1 ? $result." meses" : $result." mês");
        }
        else {
          $result = $currentDay - $signupDay;
          if ($result>0) {
            echo $result = ($result > 1 ? $result." dias" : $result." dia");
          }
          else {
            echo "Menos de 24 horas";
          }
      }
    }

}

 ?>
