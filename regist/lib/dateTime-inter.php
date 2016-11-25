<?php

function dateConvert_1($date){
  $monthArr_1 = array("Jan", "Feb", "Mar", "Apr", "May", "June", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
  $arrdate1 =  explode(" ", $date);
  $arrdate =  explode("-", $arrdate1[0]);
  $monval = intval($arrdate);
  return $arrdate[2]." ".$monthArr_1[$monval].", ".$arrdate[0];
}
?>
