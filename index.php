<?php 
  $domain = strtolower($_SERVER['HTTP_HOST']);
  switch($domain){
    case 'www.cantelope.org':            $token = 'cantelope'; break;
    case 'code2.cantelope.org':         $token = 'a'; break;
    case 'games2.cantelope.org':        $token = 'b'; break;
    case 'words2.cantelope.org':        $token = 'c'; break;
    case 'demo2.cantelope.org':         $token = 'd'; break;
    case 'audiocloud2.cantelope.org':   $token = 'e'; break;
    case 'cobbmtnflwrs.cantelope.org':  $token = 'f'; break;
    case 'efx.cantelope.org':           $token = 'a'; break;
    case 'renderefx.cantelope.org':     $token = 'h'; break;
    case 'jsbot.cantelope.org':         $token = 'i'; break;
    case 'assets.cantelope.org':        $token = 'j'; break;
    case 'bypass.cantelope.org':        $token = 'k'; break;
    //case '.cantelope.org':           $token = 'l'; break;
    //case '.cantelope.org':           $token = 'm'; break;
  }
  echo "<meta http-equiv=\"Refresh\" content=\"0; url='/$token/'\" />";
?>

