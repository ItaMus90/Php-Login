<?php

require_once('libs/Smarty.class.php');
include_once("resource/session.php");
include_once("resource/utilities.php");
include_once("resource/Database.php");

$smarty = new Smarty;

//$smarty->force_compile = true;
//$smarty->debugging = true;
// $smarty->caching = true;
// $smarty->cache_lifetime = 120;
$username = $_SESSION['username'];
$valid = isCookieValid($db);


$smarty->assign('username',$username);
$smarty->assign('db',$db);
$smarty->assign('index','index.php');
$smarty->assign('login','login.php');
$smarty->assign('logout','logout.php');
$smarty->assign('signup','signup.php');
$smarty->assign('profile','profile.php');
$smarty->assign('valid',$valid);


$smarty->display('index.tpl');

?>
