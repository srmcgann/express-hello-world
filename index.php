<?php 
  $domain = strtolower($_SERVER['HTTP_HOST']);
  switch($domain){
    case 'code1.whitehot.ninja':         $token = 'a'; break;
    case 'games1.whitehot.ninja':        $token = 'b'; break;
    case 'words1.whitehot.ninja':        $token = 'c'; break;
    case 'demo1.whitehot.ninja':         $token = 'd'; break;
    case 'audiocloud1.whitehot.ninja':   $token = 'e'; break;
    case 'cobbmtnflwrs.whitehot.ninja': $token = 'f'; break;
    case 'efx.whitehot.ninja':          $token = 'g'; break;
    case 'renderefx.whitehot.ninja':    $token = 'h'; break;
    case 'jsbot.whitehot.ninja':        $token = 'i'; break;
    case 'assets.whitehot.ninja':       $token = 'j'; break;
    //case '.whitehot.ninja':           $token = 'k'; break;
    //case '.whitehot.ninja':           $token = 'l'; break;
    //case '.whitehot.ninja':           $token = 'm'; break;
  }
  echo "<meta http-equiv=\"Refresh\" content=\"0; url='/$token/'\" />";
?>

