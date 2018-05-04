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

if(isset($_POST['loginBtn'])){
    $isLogin = false;
    $form_errors = array();
    $required_fields = array('username', 'password');

    $form_errors = array_merge($form_errors, check_empty_fields($required_fields));

    $errors = show_errors($form_errors);

    if(empty($form_errors)){
        echo $errors;
        $username = $_POST['username'];
        $password = $_POST['password'];
        isset($_POST['remember']) ?  $remember = $_POST['remember'] : $remember = "";

        $sqlQuery = "SELECT * FROM users WHERE username =:username";
        $statement = $db->prepare($sqlQuery);
        $statement->execute(array(':username' => $username));

        while($row = $statement->fetch()){
            $id = $row['id'];
            $hashed_password = $row['password'];
            $username = $row['username'];

            if(password_verify($password,$hashed_password)){
                $_SESSION['id'] = $id;
                $_SESSION['username'] = $username;
                
                $fingerprint = md5($_SERVER['REMOTE_ADDER'] . $_SERVER['HTTP_USER_AGENT']);
                $_SESSION['last_active'] = time();
                $_SESSION['fingerprint'] = $fingerprint;

                if($remember === "yes"){
                    rememberMe($id);
                }
                //header("Location: index.php");
                //redirectTo("index");
                //$smarty->display('index.tpl');
                //exit();
                $isLogin = true;
            }else{
                $result = show_message("Invalid username or password");
                $smarty->assign('result',$result);
            }
        }

    }else{
        if(count($form_errors) == 1){
            $result =  show_message("There was one error in the form <br>");
        }else{
            $result =  show_message("There were ".count($form_errors)." errors in the form <br>");

        }

        $smarty->assign('result',$result);
    }
}


$valid = isCookieValid($db);


$smarty->assign('form_errors',$form_errors);
$smarty->assign('errors',$errors);
$smarty->assign('username',$username);
$smarty->assign('db',$db);
$smarty->assign('index','index.php');
$smarty->assign('login','login.php');
$smarty->assign('logout','logout.php');
$smarty->assign('signup','signup.php');
$smarty->assign('forgot_password','forgot_password.php');
$smarty->assign('profile','profile.php');

$smarty->assign('valid',$valid);

if($isLogin === true){
    $smarty->display('index.tpl');
}else{
    $smarty->display('login.tpl');
}



?>