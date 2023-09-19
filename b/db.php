<?php 
  error_reporting(0);
  $maxResultsPerPage = 10;
  
  
  $local = true;
  if($local){
    $baseURL='local.games1.whitehot.ninja';
    $baseAssetsURL = 'http://local.assets.whitehot.ninja';
  }else{
    $baseURL='games1.whitehot.ninja';
    $baseAssetsURL = 'http://assets.whitehot.ninja';
  }
  
  $req = ltrim($_SERVER['REQUEST_URI'],'/');
  $_GET['i'] = '';
  if(strlen($req) && !file_exists($req)){
    $_GET['i'] = $req;
  }
  if(strpos('?i=',$_GET['i'])!=false){
    $_GET['i'] = explode('?i=',$_GET['i'])[1];
  }

  $baseFullURL= ($local ? 'http://' : 'http://') . $baseURL;

  $db_user  = 'id21269596_user';
  $db_pass  = 'Chrome57253!*';
  $db_host  = 'localhost';
  $db       = "id21269596_videodemos";
  $port     = '3306';
  $baseURL  = "http://games1.whitehot.ninja/";
  $link     = mysqli_connect($db_host,$db_user,$db_pass,$db,$port);

?>
