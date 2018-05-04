<?php

function check_empty_fields($required_fields_array){
    //initialize an array to store error messages
    $form_errors = array();

    //loop through the required fields array snd popular the form error array
    foreach($required_fields_array as $name_of_field){
        if(!isset($_POST[$name_of_field]) || $_POST[$name_of_field] == NULL){
            $form_errors[] = $name_of_field . " is a required field";
        }
    }

    return $form_errors;
}

function check_min_length($fields_to_check_length){
    //initialize an array to store error messages
    $form_errors = array();

    foreach($fields_to_check_length as $name_of_field => $minimum_length_required){
        if(strlen(trim($_POST[$name_of_field])) < $minimum_length_required){
            $form_errors[] = $name_of_field . " is too short, must be {$minimum_length_required} characters long";
        }
    }
    return $form_errors;
}

function check_email($data){
    //initialize an array to store error messages
    $form_errors = array();
    $key = 'email';
    //check if the key email exist in data array
    if(array_key_exists($key, $data)){

        //check if the email field has a value
        if($_POST[$key] != null){

            // Remove all illegal characters from email
            $key = filter_var($key, FILTER_SANITIZE_EMAIL);

            //check if input is a valid email address
            if(filter_var($_POST[$key], FILTER_VALIDATE_EMAIL) === false){
                $form_errors[] = $key . " is not a valid email address";
            }
        }
    }
    return $form_errors;
}

function show_errors($form_errors_array){
    $errors = "<p><ul style='color: red;'>";

    //loop through error array and display all items in a list
    foreach($form_errors_array as $the_error){
        $errors.= "<li> {$the_error} </li>";
    }
    $errors.= "</ul></p>";
    return $errors;
}

function show_message($message, $passOrFaild = "Fail"){
    if($passOrFaild === "Pass"){
        $data = "<div class='alert alert-success'>{$message}</div>";
    }else{
        $data =  "<div class='alert alert-danger'>{$message}</div>";
    }

    return $data;
}

function redirectTo($page){
    header("Location: {$page}.php");
}

function check_duplicate_entries($table,$column_name,$value,$db){
    
    try{
        $sqlQuery =  "SELECT * FROM $table WHERE $column_name =:$column_name";
        $statement = $db->prepare($sqlQuery);
        $statement->execute(array(":$column_name" => $value));
      
        if($row = $statement->fetch()){
            return true;
        }

        return false;
    }catch(PDOException $ex){
        
    }
}
function rememberMe($user_id){
    $encryptCookieDate = base64_encode("VGhpcyBpcyBhbiBlbmNvZGVkIHN0cmluZw{$user_id}");
    setcookie("rememberUserCookie",$encryptCookieDate,time()+ 60*60*24*30,"/");
}

function isCookieValid($db){
    $isValid = false;

    if(isset($_COOKIE['rememberUserCookie'])){
       
        $decryptCookieDate = base64_decode($_COOKIE['rememberUserCookie']);
        $user_id = explode("VGhpcyBpcyBhbiBlbmNvZGVkIHN0cmluZw",$decryptCookieDate);
        $userID = $user_id[1];

        $sqlQuery = "SELECT * FROM users WHERE id =:id";
        $statement = $db->prepare($sqlQuery);
        $statement->execute(array(':id' => $userID));

        if($row = $statement->fetch()){
            $id = $row['id'];
            $username = $row['username'];

            $_SESSION['id'] = $id;
            $_SESSION['username'] = $username;
            $isValid = true;
        }else{
            $isValid = false;
            singout();
        }
    }

    return $isValid;
}

function singout(){
    unset($_SESSION['username']);
    unset($_SESSION['id']);

    if(isset($_COOKIE['rememberUserCookie'])){
        unset($_COOKIE['rememberUserCookie']);
        setcookie('rememberUserCookie',null,-1,'/');
    }

    session_destroy();
    session_regenerate_id(true);
    redirectTo('index');
}

function guard(){
    $isValid = true;
    $inactive = 60 * 2; //2 min
    $fingerprint = md5($_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);

    if((isset($_SESSION['last-active']) && $_SESSION['fingerprint'] != $fingerprint)){
        $isValid = false;
        singout();
    }else if((isset($_SESSION['last-active']) && 
            (time() - $_SESSION['last-active']) > $inactive) &&
            $_SESSION['username']){
                $isValid = false;
                singout();
    }else{
        $_SESSION['last-active'] = time();
    }

    return  $isValid;
}

?>