<?php

require_once('libs/Smarty.class.php');
include_once("resource/Database.php");
include_once("resource/utilities.php");

$smarty = new Smarty;

//$smarty->force_compile = true;
$smarty->debugging = true;
// $smarty->caching = true;
// $smarty->cache_lifetime = 120;

if(isset($_POST['signupBtn'])){
    $form_errors = array();
    $required_fields = array('email', 'username', 'password');

    $form_errors = array_merge($form_errors, check_empty_fields($required_fields));
    $fields_to_check_length = array('username' => 4, 'password' => 6);

    $form_errors = array_merge($form_errors, check_min_length($fields_to_check_length));
    $form_errors = array_merge($form_errors, check_email($_POST));
}

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];


$errors = show_errors($form_errors);
$form_errors[0];

if(check_duplicate_entries("users","username",$username, $db)){
    $result = show_message("Username is already taken, please try another one.");
    $smarty->assign('result',$result);
}else if(check_duplicate_entries("users","email",$email, $db)){
    $result = show_message("Email is already taken, please try another one.");
    $smarty->assign('result',$result);
}else if(empty($form_errors)){
    echo $errors;
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    try{
        
        $sqlInsert = "INSERT INTO users (username,email,password,join_date)
        VALUES (:username, :email, :password, now())";

        $statement = $db->prepare($sqlInsert);
        $statement->execute(array(':username' => $username,':email' => $email,':password' => $hashed_password));
        
        if($statement->rowCount() == 1){
            $result = "<p style='padding: 20px; border: 1px solid gray; color: green;'>Registarion Successful</p>";
            $smarty->assign('result',$result);
            $result =  show_message("Registration Successful", "Pass");
            //header("Location: index.php"); // redirect back to your contact form
            
        }
    }catch(PDOException $ex){
        $result =  show_message("An error occurred: ".$ex->getMessage());
        // $smarty->assign('result',$result);
    }  
}else{
    if(count($form_errors) == 1){
        $result =  show_message("There was 1 error in the form<br>");      
    }else{
        $result =  show_message("There were ".count($form_errors)." errors in the form <br>");
    }

    $smarty->assign('result',$result);
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
$smarty->assign('profile','profile.php');
$smarty->assign('valid',$valid);


$smarty->display('signup.tpl');


?>