<?php
    require_once('libs/Smarty.class.php');
    include_once("resource/session.php");
    include_once("resource/utilities.php");
    include_once("resource/Database.php");
    
    $smarty = new Smarty;


    if((isset($_SESSION['id']) || isset($_GET['user_identity'])) && !isset($_POST['updateProfileBtn'])){
        if(isset($_GET['user_identity'])){
            $url_encode_id = $_GET['user_identity'];
            $decode_id = base64_decode($url_encode_id);
            $user_id_array = explode("encodeuserid",$decode_id);
            $id =  $user_id_array[1];
        }else{
            $id = $_SESSION['id'];
        }
        

        $sqlQuery = "SELECT * FROM users WHERE id=:id";
        $statement = $db->prepare($sqlQuery);
        $statement->execute(array(':id' =>$id));

        while($rs = $statement->fetch()){
            $usernameDB = $rs['username'];
            $email = $rs['email'];
            $date_join = strftime("%b %d, %Y",strtotime($rs["join_date"]));
        }

        $encode_id = base64_encode("encodeuserid{$id}");
    }
    
    if(isset($encode_id)){
        $edit_profile = "edit_profile.php?user_identity=".$encode_id;
    } 

    $username = $_SESSION['username'];
    $valid = isCookieValid($db);


    $smarty->assign('username',$username);
    $smarty->assign('db',$db);
    $smarty->assign('index','index.php');
    $smarty->assign('login','login.php');
    $smarty->assign('logout','logout.php');
    $smarty->assign('signup','signup.php');
    $smarty->assign('valid',$valid);
    $smarty->assign('usernameDB',$usernameDB);
    $smarty->assign('email',$email);
    $smarty->assign('date_join',$date_join);
    $smarty->assign('edit_profile',$edit_profile);


    $smarty->display('profile.tpl');
?>