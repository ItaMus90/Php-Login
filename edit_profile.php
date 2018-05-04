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
                $idrs = $rs['id'];
                $usernameDB = $rs['username'];
                $email = $rs['email'];
                
            }
    
        }else if(isset($_POST['updateProfileBtn'])){
            $isUpdate = false;
            $form_errors = array();
   
            $required_fields = array('email', 'usernameDB');
            
            $form_errors = array_merge($form_errors, check_empty_fields($required_fields));
            $fields_to_check_length =  array('usernameDB' =>4);
            
            $form_errors = array_merge($form_errors, check_min_length($fields_to_check_length));
            
            $form_errors = array_merge($form_errors, check_email($_POST));
            
            $email = $_POST['email'];
            $usernameDB = $_POST['usernameDB'];
            $hidden_id = $_POST['hidden_id'];
            
            if(empty($form_errors)){
            try{
                $sqlUpdate = "UPDATE users SET username =:username, email =:email WHERE id =:id";
                
                $statement = $db->prepare($sqlUpdate);
                $statement->execute(array(':username' => $usernameDB,':email' => $email,':id' => $hidden_id));
                if($statement->rowCount() == 1){
                    $isUpdate = true;
                $result = show_message("You have not made any changes");
                $smarty->assign('result',$result);
                
                }else{
                $result = show_message("You have not made any changes");
                $smarty->assign('result',$result);
                }
            }catch (PDOException $ex){
                   $result =  show_message("An error occurred: ".$ex->getMessage());
                    }
            }else{
                if(count($form_errors) == 1){
                    $result = show_message("There was 1 error in the form");
                }else{
                    $result = show_message("There were " .count($form_errors). " errors in the form ");
                }
        }
    }
        
        $username2 = $_SESSION['username'];
        $valid = isCookieValid($db);
    
    
        $smarty->assign('username',$username2);
        $smarty->assign('db',$db);
        $smarty->assign('index','index.php');
        $smarty->assign('login','login.php');
        $smarty->assign('logout','logout.php');
        $smarty->assign('signup','signup.php');
        $smarty->assign('valid',$valid);
        $smarty->assign('usernameDB',$usernameDB);
        $smarty->assign('email',$email);
        $smarty->assign('hidden_id',$hidden_id);
        $smarty->assign('id',$id);
        $smarty->assign('date_join',$date_join);

        if($isUpdate === true){
            redirectTo('profile');
            //header('Location: profile.php');
        }else{
            $smarty->display('edit_profile.tpl');
        }
        
?>